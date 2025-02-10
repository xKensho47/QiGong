<?php
    session_start();
    require_once __DIR__ . '/../includes/login.php';
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
                        <form class="formulario-login log" action="' . $base_url . '../controllers/loginController.php" method="post">
                            <h1>Iniciar sesión</h1>';                        
                                mostrarMensaje();
                            echo ' 
                            <input class="input-login" type="text" name="username" maxlength="12" placeholder="Ingrese su nombre de usuario" required>
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
