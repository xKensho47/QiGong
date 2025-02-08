<?php
    // Verifica si HTTP_HOST está definido, si no, usa 'localhost'
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';

    // Define correctamente BASE_URL
    $base_url = "http://" . $host . "/QiGong";

    define('BASE_URL', $base_url);

    // Datos de conexión a la base de datos
    if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
    if (!defined('DB_USER')) define('DB_USER', 'root');
    if (!defined('DB_PASS')) define('DB_PASS', '');
    if (!defined('DB_NAME')) define('DB_NAME', 'qigong');

    // Conexión a la base de datos
    $conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conexion->connect_error) {
        die("❌ Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Debug: Mostrar BASE_URL para asegurarnos de que es correcta
    echo "BASE_URL: " . BASE_URL;
?>
