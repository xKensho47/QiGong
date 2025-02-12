# QiGong
Proyecto personal realizado para el emprendimiento de un amigo.

# Proyecto QiGong
Junto con mi amigo, hemos creado este proyecto para el emprendimiento de él, el cual consiste en un sitio web que permite a los usuarios conocer más sobre la medicina tradicional china, más específicamente el Chi Kung (Qi Gong).
La idea es que el sitio web sea una plataforma de aprendizaje y comunicación, donde los usuarios puedan encontrar información sobre el Chi Kung, así como poder compartir sus propios conocimientos y experiencias.
Mediante su cuenta de Administrador, mi amigo Iván, puede compartir sus clases, las cuáles estarán disponibles para el grupo selecto de usuarios.

## Características
- **HTML semántico**: La página está organizada utilizando las etiquetas `header`, `nav`, `main`, `section`, `article` y `footer`; entre otras etiquetas HTML5 recomendadas.
- **Estilos CSS**: El diseño está basado en Flexbox y Grid para asegurar la responsividad.
- **Google Fonts**: Se ha implementado la fuente "Poppins" para el diseño.
- **Multimedia**: Incluye imágenes relacionadas al Chi Kung en varias páginas del sitio web. También se incluyen iframes para las clases compartidas por Iván; y un background animado (video) para la página de inicio.
- **Animaciones**: Se han incluido animaciones para los elementos de la página, como los botones, modales, etc.
- **JavaScript**: Se han implementado scripts que controlan la funcionalidad del Hero, los modales y el menú hambruguesa del sitio.
- **Diseño responsivo**: El diseño está diseñado para ser responsivo, lo que significa que se adapta a diferentes tamaños de pantalla y dispositivos (Mobile y Desktop).
- **Estructura de archivos**: El código está organizado en diferentes archivos para facilitar su mantenimiento y manejo.

## Tecnologías utilizadas
- **PHP**: Utiliza PHP para la gestión de la base de datos.
- **HTML5**: Utiliza etiquetas HTML5 recomendadas para estructurar la página.
- **CSS3**: Utiliza Flexbox y Grid para crear diseños responsivos.
- **Bootstrap**: Utiliza Bootstrap para crear modales que controlan las funcionalidades del ABM.
- **JavaScript**: Utiliza JavaScript para generar contenido dinámico.
- **Git**: Utiliza Git para controlar los cambios en el código.
- **GitHub**: Utiliza GitHub para alojar el código y gestionar las contribuciones.

## Estructura del proyecto
-*Carpetas*: El proyecto está dividido en varias carpetas, cada una con su propio propósito. Entre ellas se encuentran:
    - **config**: Contiene archivos de configuración para la conexión a la base de datos y la URL del sitio web.
    -**controllers**: Contiene archivos de código PHP que se utilizan para la gestión de la base de datos.
    - **public**: Contiene a la carpeta /assets y las páginas principales del sitio web.
    **assets**: Contiene a las carpetas /css, /images, /videos y /js, que contienen archivos CSS, imágnes, videos y JavaScript respectivamente.
    -**data**: contiene al archivo qigong.sql, que contiene la estructura de la base de datos.
    -**includes**: Contiene la lógica que interactúa con la base de datos y con la página web correspondiente.
    -**templates**: Contiene archivos de plantillas HTML (en formato .php) que se utilizan para la estructuración de la página web.

-*Archivos*: El proyecto está dividido en varios archivos, cada uno con su propio propósito. Entre ellos se encuentran:
    - **index.php**: Es la página de inicio del sitio web.
    - **aboutme.php**: Es la página de información sobre Iván, donde podremos encontrar más información sobre él.
    - **admin_panel.php**: Es la página de administración del sitio web, donde el administrador puede gestionar las clases de QiGong y a los usuarios del sitio.
    - **clases.php**: Es la página de la página donde podremos ver las clases de QiGong disponibles.
    - **login.php**: Es la página de inicio de sesión del sitio web.
    - **register.php**: Es la página de registro del sitio web.

## Hosting
El proyecto junto con la base de datos, están alojados en el servidor de hosting gratuito de [InfinityFree](https://www.infinityfree.com/).  

## Como ejecutar el proyecto
Para ejecutar el proyecto, sigue los siguientes pasos:
Se puede acceder a la página del proyecto mediante [este enlace](http://www.sasukeivan.42web.io/?i=1).

## Autor
[E. Damián Tripodi](https://edamiantripodi.github.io/)

## Licencia
Este proyecto está licenciado bajo la licencia Apache License.Para obtener más información, visite la [página de licencia](https://github.com/xKensho47/QiGong?tab=Apache-2.0-1-ov-file).
