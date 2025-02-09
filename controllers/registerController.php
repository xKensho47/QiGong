<?php session_start();
require_once __DIR__ . '/../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $mail = trim($_POST['mail']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

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
        // Insertar en la tabla users
        $query = "INSERT INTO users (name, lastname, mail) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("sss", $name, $lastname, $mail);
        $stmt->execute();
        $id_user = $stmt->insert_id;
        $stmt->close();

        // Insertar en la tabla user_acc
        $query = "INSERT INTO user_acc (id_user, username, password) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("iss", $id_user, $username, $password_hash);
        $stmt->execute();
        $stmt->close();

        // Confirmar transacción
        $conexion->commit();

        $_SESSION['registro_mensaje'] = "✅ Registro exitoso.";
        header('Location: ../public/login.php');
        exit();
    } catch (Exception $e) {
        // Revertir transacción en caso de error
        $conexion->rollback();
        $_SESSION['registro_mensaje'] = "❌ Error en el registro: " . $e->getMessage();
        header('Location: ../public/register.php');
        exit();
    }
} else {
    echo "❌ Método de solicitud no válido.";
}
?>
