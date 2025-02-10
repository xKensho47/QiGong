<?php
if (!function_exists('mostrarfooter')) {
    function mostrarfooter($type){
        switch($type){
            case 'admin':
                echo'
                <footer class="footer" id="footer">
                    <nav class="footer-nav navbar">
                        <section class="footer-general">
                            <a href="./index.php" class="link-logo logo-footer">
                                <img src="./assets/images/logo.png" alt="QiGong Logo" class="logo footer-logo">
                            </a>
                            <ul class="footer-menu">
                                <li class="footer-items"><a href="index.php">Inicio</a></li>
                                <li class="footer-items"><a href="aboutme.php">Sobre Mí</a></li>
                                <li class="footer-items"><a href="clases.php">Clases</a></li>
                                <li class="footer-items"><a href="admin_panel.php">Panel de Admin</a></li>
                                <li class="footer-items"><a href="../controllers/logoutController.php">Cerrar Sesión</a></li>
                            </ul>
                            <div class="social-media-logos">
                                <a href="https://www.linkedin.com/in/edamiantripodi/" target="_BLANK" class="social-media"
                                    rel="noopener noreferrer">
                                    <img src="./assets/images/redes/linkedin.svg" alt="Linkedin" class="social-logo linkedin-logo">
                                </a>
                                <a href="https://github.com/xKensho47" target="_BLANK" class="social-media"
                                    rel="noopener noreferrer">
                                    <img src="./assets/images/redes/github.svg" alt="GitHub" class="social-logo github-logo">
                                </a>
                            </div>
                        </section>
                        <div class="qigong-copyright">
                            &copy; 2025 QiGong Sasuke Iván by Kensho~ | All Rights Reserved
                        </div>
                    </nav>
                </footer>
                ';
            break;

            case 'autenticado':
                echo'                
                <footer class="footer" id="footer">
                    <nav class="footer-nav navbar">
                        <section class="footer-general">
                            <a href="./index.php" class="link-logo logo-footer">
                                <img src="./assets/images/logo.png" alt="QiGong Logo" class="logo footer-logo">
                            </a>
                            <ul class="footer-menu">
                                <li class="footer-menu"><a href="index.php">Inicio</a></li>
                                    <li class="footer-items"><a href="aboutme.php">Sobre Mí</a></li>
                                    <li class="footer-items"><a href="clases.php">Clases</a></li>
                                    <li class="footer-items"><a href="../controllers/logoutController.php">Cerrar Sesión</a></li>
                                </ul>
                            <div class="social-media-logos">
                                <a href="https://www.linkedin.com/in/edamiantripodi/" target="_BLANK" class="social-media"
                                    rel="noopener noreferrer">
                                    <img src="./assets/images/redes/linkedin.svg" alt="Linkedin" class="social-logo linkedin-logo">
                                </a>
                                <a href="https://github.com/xKensho47" target="_BLANK" class="social-media"
                                    rel="noopener noreferrer">
                                    <img src="./assets/images/redes/github.svg" alt="GitHub" class="social-logo github-logo">
                                </a>
                            </div>
                        </section>
                        <div class="qigong-copyright">
                            &copy; 2025 QiGong Sasuke Iván by Kensho~ | All Rights Reserved
                        </div>
                    </nav>
                </footer>
                ';

                break;
            
            case 'invitado':
                echo'
                <footer class="footer" id="footer">
                    <nav class="footer-nav navbar">
                        <section class="footer-general">
                            <a href="./index.php" class="link-logo logo-footer">
                                <img src="./assets/images/logo.png" alt="QiGong Logo" class="logo footer-logo">
                            </a>
                            <ul class="footer-menu">
                                <li class="footer-items"><a href="login.php">Iniciar Sesión</a></li>
                                <li class="footer-items"><a href="register.php">Registrarse</a></li>
                            </ul>
                            <div class="social-media-logos">
                                <a href="https://www.linkedin.com/in/edamiantripodi/" target="_BLANK" class="social-media"
                                    rel="noopener noreferrer">
                                    <img src="./assets/images/redes/linkedin.svg" alt="Linkedin" class="social-logo linkedin-logo">
                                </a>
                                <a href="https://github.com/xKensho47" target="_BLANK" class="social-media"
                                    rel="noopener noreferrer">
                                    <img src="./assets/images/redes/github.svg" alt="GitHub" class="social-logo github-logo">
                                </a>
                            </div>
                        </section>
                        <div class="qigong-copyright">
                            &copy; 2025 QiGong Sasuke Iván by Kensho~ | All Rights Reserved
                        </div>
                    </nav>
                </footer>
                ';
                break;

        }
    }
}