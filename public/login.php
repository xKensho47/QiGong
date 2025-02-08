<?php
session_start();
require_once __DIR__ . '/../config/connection.php';
?>

<!DOCTYPE html>
<html lang="es">
<?php $pageTitle = "Iniciar Sesión"; ?>
<?php require_once __DIR__ . '/../templates/head.php'; ?>
<body>
    <div class="contenedor">
        <?php
        include("./../templates/header.php");

        echo '
        <main class="main main-aboutme">
            <article class="article-form-login">
                <div class="div-form formulario">
                    <form class="formulario-login log" action="' . $base_url . '/../controllers/loginController.php" method="post">
                        <h1>Iniciar sesión</h1>';
                        if (isset($_GET['status'])) {
                            if ($_GET['status'] === 'incorrecto') {
                                echo '<div class="mensaje-exito">LA CONTRASEÑA O EL NOMBRE DE USUARIO ES INCORRECTO.</div>';
                            } elseif ($_GET['status'] === 'no_existe') {
                                echo '<div class="mensaje-exito">CUENTA NO REGISTRADA.</div>';
                            }
                        }
                        echo ' 
                        <input class="input-login" name="username" type="text" maxlength="12" placeholder="Ingrese su nombre de usuario" required>
                        <input class="input-login" type="password" name="password" maxlength="12" placeholder="Ingrese su contraseña" required>
                        <input class="boton-login" type="submit" value="Login" name="login">
                        <a class="link-registro" href="register.php">¿Todavía no sos usuario? Registrate.</a>
                    </form>
                </div>
            </article>
        </main>';
        require_once __DIR__ . '/../templates/scripts.php';
        ?>
    </div>
</body>
</html>