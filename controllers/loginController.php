<?php
session_start();
require_once __DIR__ . '/../config/connection.php';

if (!isset($conexion)) {
    die("❌ Error: No se pudo establecer la conexión a la base de datos.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        header('Location: ' . $base_url . './login.php?status=empty_fields');
        exit();
    }

    $q = 
        "SELECT 
            c.id_acc,
            c.id_user,
            c.username, 
            c.password,
            t.type
        FROM 
            user_acc c
        JOIN  
            users u ON c.id_user = u.id_user
        JOIN
            user_type t ON u.id_type = t.id_type
        WHERE 
            c.username = ?";

    $stmt = $conexion->prepare($q);
    if (!$stmt) {
        die("❌ Error de preparación de consulta: " . $conexion->error);
    }

    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_acc, $id_user, $username_db, $password_hash, $type);
        $stmt->fetch();

        if (!empty($password_hash) && password_verify($password, $password_hash)) {
            // Autenticación exitosa
            $_SESSION['id_acc'] = $id_acc;
            $_SESSION['id_user'] = $id_user;
            $_SESSION['username'] = $username_db;
            $_SESSION['type'] = $type;

            header('Location: ' . $base_url . './index.php');
        } else {
            header('Location: ' . $base_url . './login.php?status=incorrecto');
        }
    } else {
        header('Location: ' . $base_url . './login.php?status=no_existe');
    }

    // Cerrar conexión
    $stmt->close();
    $conexion->close();
    exit();
} else {
    echo "❌ Método de solicitud no válido.";
}