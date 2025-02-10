<?php session_start();
    require_once __DIR__ . '/../includes/register.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php $pageTitle = "Registrarse"; ?>
<?php require_once __DIR__ . '/../templates/head.php'; ?>
<body>
    <div class="contenedor">
        <?php include("./../templates/header.php"); ?>

        <main class="main main-aboutme">
            <article class="article-form">
                <div class="div-form formulario-reg">
                    <form class="formulario-login reg" action="<?php echo $base_url; ?>../controllers/registerController.php" method="post">
                        <h1>Registrate</h1>

                        <?php mostrarMensajeRegistro(); ?>

                        <input class="input-login" type="text" name="name" placeholder="Ingrese su nombre" required />
                        <input class="input-login" type="text" name="lastname" placeholder="Ingrese su apellido" required />
                        <input class="input-login" type="email" name="mail" placeholder="Ingrese su email" required />
                        <input class="input-login" type="text" name="username" maxlength="12" placeholder="Ingrese su nombre de usuario" required />
                        <input class="input-login" type="password" name="password" maxlength="12" placeholder="Ingrese su contraseña" required />
                        <br>
                        <input class="boton-login btn-reg" type="submit" value="Registrarse" name="registro" />
                        <a class="link-login" href="login.php">¿Ya tienes usuario? Inicia sesión.</a>
                    </form>
                </div>
            </article>
        </main>

        <?php require_once __DIR__ . '/../templates/scripts.php'; ?>
    </div>
</body>
</html>
