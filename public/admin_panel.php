<?php session_start();
    require_once __DIR__ . '/../controllers/adminController.php';
    $tabla = isset($_SESSION['tabla']) ? $_SESSION['tabla'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<?php $pageTitle = "Panel de Control"; ?>
<?php require_once __DIR__ . '/../templates/head.php'; ?>
    <div class="contenedor">
        <?php
        include("./../templates/header.php");

        echo '
        <main class="main main-aboutme">';
            echo'
            <section id="aboutme" class="aboutme-container">
                <h1 class="title">Panel de Control</h1>
                <div id="mensaje" class="mensaje"></div>
                <div class="crud-content">';
                    
                    echo $tabla;

                echo '
                </div>
            </section>
        </main>';
        require_once __DIR__ . '/../templates/scripts.php';
?>

<?php include __DIR__ . '/../includes/modals.php'; ?>