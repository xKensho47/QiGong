<?php session_start();
require_once __DIR__ . '/../config/connection.php';
require_once __DIR__ . '/../includes/class.php';
$clases = obtenerClases();
?>

<!DOCTYPE html>
<html lang="es">

<?php $pageTitle = "Clases de Qi Gong"; ?>
<?php require_once __DIR__ . '/../templates/head.php'; ?>
    <div class="contenedor obj-container">
        <?php
        include("./../templates/header.php");

        echo '
        <main class="main">
            <section class="videos" id="videos">
                <h1 class="title">Clases de Qi Gong</h1>';
                foreach ($clases as $clase):
                    echo'
                    <div class="clase container card">
                        <br>
                        <h2 class="card-header subtitle">'; echo htmlspecialchars($clase["title"]); echo'</h2>
                        '; echo $clase["iframe_link"]; echo'
                        <p class="description card-text">'; echo htmlspecialchars($clase["description"]); echo'</p>
                        <br>
                    </div>';
                endforeach; echo'
            </section>
        </main>';
        require_once __DIR__ . '/../templates/scripts.php';