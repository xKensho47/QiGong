<?php
    require_once __DIR__ . '/../config/connection.php';
    if (!$conexion) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }
    function mostrarMensaje() {
        if (!isset($_SESSION['login_status'])) {
            return; // No hay mensaje, así que no se muestra nada
        }
    
        echo '<div class="mensaje-error">';
        switch ($_SESSION['login_status']) {
            case 'incorrecto':
                echo '⚠️ LA CONTRASEÑA O EL NOMBRE DE USUARIO ES INCORRECTO.';
                break;
            case 'no_existe':
                echo '⚠️ CUENTA NO REGISTRADA.';
                break;
            case 'empty_fields':
                echo '⚠️ TODOS LOS CAMPOS SON REQUERIDOS.';
                break;
        }
        echo '</div>';
        //Borra el mensaje para que no se muestre en la próxima carga
        unset($_SESSION['login_status']);
    }
?>