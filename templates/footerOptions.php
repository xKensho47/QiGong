<?php
if (!function_exists('mostrarfooter')) {
    function mostrarfooter($type){
        switch($type){
            case 'admin':
                echo'
                <footer class="footer" id="footer">
                    <div class="footer-toggle">
                        <p class="copyright h2-animate"><span class="arrow-up h2-animate">&#9650;</span>&copy; 2024 CineFlow <span class="arrow-up h2-animate">&#9650;</span></p>
                    </div>
                    <nav class="info_footer">
                        <ul class="footer-links">
                            <li class="elementos_footer">
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="elementos_footer">
                                <a href="generos.php">Generos</a>
                            </li>
                            <li class="elementos_footer">
                                <a href="notificaciones.php">Notificaciones</a>
                            </li>
                            <li class="elementos_footer">
                                <a href="crud_peliculas.php">CRUD</a>
                            </li>
                            <li class="elementos_footer">
                                <a href="admin_usuarios.php">Usuarios</a>
                            </li>
                            <li class="elementos_footer">
                                <a href="profile.php">Perfil</a>
                            </li>
                        </ul>
                        <section class="social-media">
                            <h4>Redes Sociales</h4>
                            <div class="redes_sociales">
                                <a href="#"><img class="red_social" src="./images/twitter.png" alt="Twitter"/></a>
                                <a href="#"><img class="red_social" src="./images/facebook.png" alt="Facebook"/></a>
                                <a href="#"><img class="red_social" src="./images/instagram.png" alt="Instagram"/></a>
                            </div>
                        </section>
                    </nav>
                </footer>
                ';
            break;

            case 'autenticado':
                echo'                
                <footer class="footer" id="footer">
                    <div class="footer-toggle">
                        <p class="copyright h2-animate"><span class="arrow-up h2-animate">&#9650;</span>&copy; 2024 CineFlow <span class="arrow-up h2-animate">&#9650;</span></p>
                    </div>
                    <nav class="info_footer">
                        <ul class="footer-links">
                            <li class="elementos_footer">
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="elementos_footer">
                                <a href="generos.php">Generos</a>
                            </li>
                            <li class="elementos_footer">
                                <a href="notificaciones.php">Notificaciones</a>
                            </li>
                            <li class="elementos_footer">
                                <a href="profile.php">Perfil</a>
                            </li>
                        </ul>
                        <section class="social-media">
                            <h4>Redes Sociales</h4>
                            <div class="redes_sociales">
                                <a href="#"><img class="red_social" src="./images/twitter.png" alt="Twitter"/></a>
                                <a href="#"><img class="red_social" src="./images/facebook.png" alt="Facebook"/></a>
                                <a href="#"><img class="red_social" src="./images/instagram.png" alt="Instagram"/></a>
                            </div>
                        </section>
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