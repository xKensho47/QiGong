<?php
if (!function_exists('mostrarHeader')) {
    function mostrarHeader($type){
        switch($type){
            case 'admin':
                echo'
                <header class="header container-fluid" id="header">
                    <a class="d-flex logo" href="./index.php"><img class="logo1" src="./assets/images/logo.png" alt="logo"></a>
                    <button class="abrir-menu" id="abrir"><i class="fa-solid fa-bars"></i></button>
                    <nav class="navbar menu" id="menu">
                        <ul class="menu__lista">
                            <button class="cerrar-menu" id="cerrar"><i class="fa-solid fa-xmark"></i></button>
                            <form class="d-flex barra-busqueda" id="busqueda" role="search" action="buscar.php" method="get" autocomplete="off">
                                <input class="input-busqueda" type="search" id="busca" name="buscar" placeholder="Buscar..." />
                                <input id="genero_seleccionado" name="genero_buscar" type="hidden" value=""/>
                            </form>
                            <li class="menu__item"><a href="index.php">Inicio</a></li>
                            <li class="menu__item"><a href="aboutme.php">Sobre Mí</a></li>
                            <li class="menu__item"><a href="clases.php">Clases</a></li>
                            <li class="menu__item"><a href="admin_panel.php">Panel de Admin</a></li>
                            <li class="menu__item"><a href="../controllers/logoutController.php">Cerrar Sesión</a></li>
                        </ul>
                    </nav>
                </header>
                ';
            break;

            case 'autenticado':
                echo'
                <header class="header container-fluid" id="header">
                    <a class="d-flex logo" href="./index.php"><img class="logo1" src="./assets/images/logo.png" alt="logo"></a>
                    <button class="abrir-menu" id="abrir"><i class="fa-solid fa-bars"></i></button>
                    <nav class="navbar menu" id="menu">
                        <ul class="menu__lista">
                            <button class="cerrar-menu" id="cerrar"><i class="fa-solid fa-xmark"></i></button>
                            <form class="d-flex barra-busqueda" id="busqueda" role="search" action="buscar.php" method="get" autocomplete="off">
                                <input class="input-busqueda" type="search" id="busca" name="buscar" placeholder="Buscar..." />
                                <input id="genero_seleccionado" name="genero_buscar" type="hidden" value=""/>
                            </form>
                            <li class="menu__item"><a href="index.php">Inicio</a></li>
                            <li class="menu__item"><a href="aboutme.php">Sobre Mí</a></li>
                            <li class="menu__item"><a href="clases.php">Clases</a></li>
                            <li class="menu__item"><a href="../controllers/logoutController.php">Cerrar Sesión</a></li>
                        </ul>
                    </nav>
                </header>
                ';

                break;
            
            case 'invitado':
                echo'
                <header class="header container-fluid" id="header">
                    <a class="d-flex logo" href="./index.php"><img class="logo1" src="./assets/images/logo.png" alt="logo"></a>
                    <button class="abrir-menu" id="abrir"><i class="fa-solid fa-bars"></i></button>
                    <nav class="navbar menu" id="menu">
                        <ul class="menu__lista">
                            <button class="cerrar-menu" id="cerrar"><i class="fa-solid fa-xmark"></i></button>
                            <li class="menu__item"><a href="index.php">Inicio</a></li>
                            <li class="menu__item"><a href="aboutme.php">Sobre Mí</a></li>
                            <li class="menu__item"><a href="register.php">Registrarse</a></li>
                            <li class="menu__item"><a href="login.php">Iniciar Sesión</a></li>
                        </ul>
                    </nav>
                </header>
                ';
                break;

        }
    }
}