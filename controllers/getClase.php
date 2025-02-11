<?php
require_once(dirname(__FILE__) . '/../config/connection.php');

if (isset($_GET['id'])) {
    $id_class = $_GET['id'];

    $stmt = $conexion->prepare("SELECT id_class, title, description, path_img, link FROM class WHERE id_class = ?");
    $stmt->bind_param("i", $id_class);
    $stmt->execute();
    $stmt->bind_result($id_class, $title, $description, $path_img, $link);
    $stmt->fetch();
    $stmt->close();

    $clase = array(
        "id_class" => $id_class,
        "title" => $title,
        "description" => $description,
        "path_img" => $path_img,
        "link" => $link
    );

    echo json_encode($clase);
}
?>