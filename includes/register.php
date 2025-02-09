<?php
    function mostrarMensajeRegistro() {
        if (isset($_SESSION['registro_mensaje'])) {
            echo '<div class="mensaje-error">' . $_SESSION['registro_mensaje'] . '</div>';
            unset($_SESSION['registro_mensaje']);
        }
    }
?>
