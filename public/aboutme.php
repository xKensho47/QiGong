<?php session_start();?>

<!DOCTYPE html>
<html lang="es">
<?php $pageTitle = "Sasuke Iván"; ?>
<?php require_once __DIR__ . '/../templates/head.php'; ?>
    <div class="contenedor">
        <?php
        include("./../templates/header.php");

        echo '
        <main class="main main-aboutme">';
            echo'
            <section id="aboutme" class="aboutme-container">
                <h1 class="title">Sasuke Iván</h1>
                <div class="aboutme-content">
                    <aside class="aside aboutme-aside aside-foto">
                        <img class="aboutme-photo" src="./assets/images/sasukeivan.jpg" alt="Sasuke Iván Foto">  
                    </aside>
                    <aside class="aside aboutme-aside aside-descripcion">

                    </aside>

                </div>';
        echo '
            </section>
        </main>';
        require_once __DIR__ . '/../templates/scripts.php';
        