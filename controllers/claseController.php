<?php
require_once __DIR__ . '/../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'agregar') {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $path_img = $_POST['path_img'];
        $link = $_POST['link'];

        $stmt = $conexion->prepare("INSERT INTO class (title, description, path_img, link) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $titulo, $descripcion, $path_img, $link);
        if ($stmt->execute()) {
            echo "Clase agregada exitosamente";
        } else {
            echo "Error al agregar la clase";
        }
        $stmt->close();
    } elseif ($action === 'editar') {
        $id_class = $_POST['id_class'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $path_img = $_POST['path_img'];
        $link = $_POST['link'];

        $stmt = $conexion->prepare("UPDATE class SET title = ?, description = ?, path_img = ?, link = ? WHERE id_class = ?");
        $stmt->bind_param("ssssi", $titulo, $descripcion, $path_img, $link, $id_class);
        if ($stmt->execute()) {
            echo "Clase editada exitosamente";
        } else {
            echo "Error al editar la clase";
        }
        $stmt->close();
    } elseif ($action === 'eliminar') {
        $id_class = $_POST['id_class'];

        $stmt = $conexion->prepare("DELETE FROM class WHERE id_class = ?");
        $stmt->bind_param("i", $id_class);
        if ($stmt->execute()) {
            echo "Clase eliminada exitosamente";
        } else {
            echo "Error al eliminar la clase";
        }
        $stmt->close();
    }
}
?>