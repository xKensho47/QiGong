<?php session_start();
    require_once __DIR__ . '/../includes/clases.php';
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
                        <h2 class="card-header subtitle">'; echo htmlspecialchars($clase["title"]); echo'</h2>
                        
                        <iframe class="video" src="'; echo $clase["link"]; echo'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                        
                        echo'
                        <p class="description card-text">'; echo htmlspecialchars($clase["description"]); echo'</p>
                    </div>';
                endforeach; 
            echo'
            </section>
        </main>';
        require_once __DIR__ . '/../templates/scripts.php';