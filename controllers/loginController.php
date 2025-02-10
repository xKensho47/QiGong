<?php session_start();
require_once __DIR__ . '/../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Verificar que los campos no estén vacíos
    if (empty($username) || empty($password)) {
        $_SESSION['login_status'] = 'empty_fields';
        // Redirigir a la misma página
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit(); // Salir del script para evitar ejecutar código innecesario
    }

    // Consulta SQL
    $q = "SELECT 
            acc.id_acc,
            acc.id_user,
            acc.username, 
            acc.password,
            ty.type
        FROM 
            user_acc acc
        JOIN  
            users us ON acc.id_user = us.id_user
        JOIN
            user_type ty ON us.id_type = ty.id_type
        WHERE 
            acc.username = ?";

    $stmt = $conexion->prepare($q);
    if (!$stmt) {
        die("❌ Error de preparación de consulta: " . $conexion->error);
    }

    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    // Verificar si el usuario existe
    if ($stmt->num_rows > 0) {
        // Obtener los resultados
        $stmt->bind_result($id_acc, $id_user, $username_db, $password_hash, $type);
        $stmt->fetch();

        // Verificar si la contraseña ingresada coincide con el hash de la base de datos
        if (password_verify($password, $password_hash)) {
            // Autenticación exitosa
            $_SESSION['id_acc'] = $id_acc;
            $_SESSION['id_user'] = $id_user;
            $_SESSION['username'] = $username_db;
            $_SESSION['type'] = $type;

            $_SESSION['login_status'] = 'correcto';
            // Redirigir al dashboard u otra página
            header('Location: ../public/index.php');
            exit(); // Salir del script para evitar ejecutar código innecesario
        } else {
            // Contraseña incorrecta
            $_SESSION['login_status'] = 'incorrecto';

            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit(); // Salir del script para evitar ejecutar código innecesario
        }
    } else {
        // El usuario no existe
        $_SESSION['login_status'] = 'no_existe';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit(); // Salir del script para evitar ejecutar código innecesario
    }
}
?>
