<?php session_start(); 
    include __DIR__ . '/../includes/historia.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php require_once __DIR__ . '/../templates/head.php'; ?>
    <div class="contenedor p-container">
        <?php
            include("./../templates/header.php");

            echo '
            <main class="main main-principal">';
                require_once __DIR__ . '/../templates/hero.php';
                echo'
                <section id="secundario" class="secundario">
                    <h1 class="title">Historia del Qi Gong</h1>                
                    <div class="principal-content">                    
                        <div class="historia-container">';
                            obtenerHistoria();
                        echo'
                        </div>

                        <!--
                        <button class="btn btn-secondary btn-lg p-3 goToTop" type="button" id="volverArriba">
                            Volver al principio
                        </button>
                        -->
                    </div>';
            echo '
                </section>
            </main>';
            require_once __DIR__ . '/../templates/scripts.php';
        