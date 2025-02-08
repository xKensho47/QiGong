<!DOCTYPE html>
<html lang="es">
<?php $pageTitle = "Registrarse"; ?>
<?php require_once __DIR__ . '/../templates/head.php'; ?>
    <div class="contenedor">
        <?php
        include("./../templates/header.php");

        echo '
        <main class="main main-aboutme">';
            echo'
            <article class="article-form">
                <div class="div-form formulario-reg">
                    <form class="formulario-login reg" action="registerController.php" method="post">
                        <h1>Registrate</h1>';
                            if (isset($_GET['status'])) {
                                // Verificar si el parámetro 'status' tiene el valor 'success'
                                if ($_GET['status'] === 'ocupado') {
                                    echo '<div class="mensaje-exito"> EL NOMBRE DE USUARIO O CORREO YA ESTA REGISTRADO.</div>';
                                }
                            }
                        echo'
                        <input class="input-login" type="text" name="nombre" required placeholder="Ingrese su nombre" />
                        <input class="input-login" type="text" name="apellido" required placeholder="Ingrese su apellido" />
                        <input class="input-login" type="email" name="mail" required placeholder="Ingrese su email" />
                        <input class="input-login" type="text" name="nombre_usuario" maxlength="12" placeholder="Ingrese su nombre de usuario" />
                        <input class="input-login" type="password" name="contraseña" maxlength="12" placeholder="Ingrese su contraseña" />
                        <br>
                        <input class="boton-login btn-reg" type="submit" value="Registrarse" name="registro" />
                        <a class="link-login" href="login.php">¿Ya tenes usuario? Inicia sesion.</a>
                    </form>
                </div>';
        echo'
            </article>
        </main>';
        require_once __DIR__ . '/../templates/scripts.php';
        

