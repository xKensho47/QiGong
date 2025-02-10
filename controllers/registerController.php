<?php 
session_start();
require_once __DIR__ . '/../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $mail = trim($_POST['mail']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Verificar que todos los campos estén llenos
    if (empty($name) || empty($lastname) || empty($mail) || empty($username) || empty($password)) {
        $_SESSION['registro_mensaje'] = "❌ Todos los campos son requeridos.";
        header('Location: ../public/register.php');
        exit();
    }

    global $conexion;

    // Verificar si el usuario o correo ya existen en la base de datos
    $query = 
        "SELECT 
            u.id_user 
        FROM users u 
        JOIN 
            user_acc acc 
        ON 
            u.id_user = acc.id_user 
        WHERE 
            u.mail = ? 
        OR 
            acc.username = ?";

    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ss", $mail, $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['registro_mensaje'] = "⚠️ El nombre de usuario o correo ya está registrado.";
        $stmt->close();
        header('Location: ../public/register.php');
        exit();
    }
    $stmt->close();

    // Iniciar transacción
    $conexion->begin_transaction();

    try {
        // Insertar en la tabla `users`
        $id_type = 2; // Usuario normal por defecto
        $query_users = "INSERT INTO users (name, lastname, mail, id_type) VALUES (?, ?, ?, ?)";
        $stmt_users = $conexion->prepare($query_users);
        $stmt_users->bind_param("sssi", $name, $lastname, $mail, $id_type);
        $stmt_users->execute();
        
        // Obtener el ID del usuario insertado
        $id_user = $stmt_users->insert_id;
        $stmt_users->close();

        // Encriptar la contraseña
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // Verificar si el hash se generó correctamente
        if ($password_hash === false) {
            $_SESSION['registro_mensaje'] = "❌ Error al generar el hash de la contraseña.";
            header('Location: ../public/register.php');
            exit();
        }

        // Insertar en `user_acc`
        $query_acc = "INSERT INTO user_acc (id_user, username, password) VALUES (?, ?, ?)";
        $stmt_acc = $conexion->prepare($query_acc);
        $stmt_acc->bind_param("iss", $id_user, $username, $password_hash);
        $stmt_acc->execute();
        $stmt_acc->close();

        // Confirmar transacción
        $conexion->commit();

        $_SESSION['registro_mensaje'] = "✅ Registro exitoso. ¡Ya puedes iniciar sesión!";
        header('Location: ../public/register.php');
        exit();
    } catch (Exception $e) {
        // Revertir en caso de error
        $conexion->rollback();
        $_SESSION['registro_mensaje'] = "❌ Error al registrarse. Inténtalo nuevamente.";
        header('Location: ../public/register.php');
        exit();
    }
} else {
    echo "❌ Método de solicitud no válido.";
}
?>
