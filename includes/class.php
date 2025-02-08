<?php
include_once __DIR__ . '/../config/connection.php';

if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

function obtenerClases() {
    global $conexion;
    $sql = "SELECT id_class, title, description, path_img, iframe_link FROM class ORDER BY id_class ASC";
    $resultado = $conexion->query($sql);
    
    $clases = [];
    if ($resultado && $resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $clases[] = $fila;
        }
    }
    return $clases;
}
?>
