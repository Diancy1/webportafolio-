<?php
session_start();

if (!isset($_SESSION['id']) || $_SESSION['rol'] !== 'usuario') {
    header("Location: /app/vistas/login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="es">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>

    <link rel="Shortcut icon" href="./recursos/img/Logo-portafolio.png">

    <!--============================================= BoxIcons ======================================-->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--============================================= Fin BoxIcons ======================================-->

    <!--============================================= Mi CSS ======================================-->

    <link rel="stylesheet" href="/recursos/css/estilos.css">

    <!--============================================= Fin Mi CSS ======================================-->

</head>

<!--============================================= Contenido Encabezado ======================================-->

<header class="header">
    <a href="#" class="logo"><img src="/recursos/img/Logo-portafolio.png" alt=""></a>

    <i class='bx bx-menu' id="menu-icon"></i>

    <nav class="navbar">
        <a href="#home" class="active">Inicio</a>
        <a href="#about">Acerca de</a>
        <a href="#services">Servicios</a>
        <a href="#portfolio">Proyectos</a>
        <a href="#basededatos">Base de Datos</a>
        <a href="#contact">Contacto</a>
        <a href="/logout.php" class="btn btn-danger float-right">Cerrar Sesión</a>

    </nav>
</header>

<!--============================================= Fin Contenido Encabezado ======================================-->

<!--============================================= Contenido Incio ======================================-->

<section class="home" id="home">
    <div class="home-content">
        <h3>Hola, <?= htmlspecialchars($_SESSION['nombre']) ?></h3>

        <h3>y soy <span class="multiple-text"></span></h3>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore dicta minus quisquam nesciunt iusto ea
            recusandae possimus nisi veniam ratione?
        </p>
        <div class="social-media">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
        </div>
        <a href="#" class="btn">Descargar CV</a>
    </div>
    <div class="home-img">
        <img src="/recursos/img/pixelcut-export (2).jpeg" alt="">
    </div>
</section>

<!--============================================= Fin Contenido Incio ======================================-->

<!--=============================================  Contenido Sobre Mi ======================================-->

<section class="about" id="about">
    <div class="about-img">
        <img src="./recursos/img/pixelcut-export (2).jpeg" alt="">
    </div>
    <div class="about-content">
        <h2 class="heading"> Acerca de<span> Mí</span></h2>
        <h3>Diseñador y Programador Web!</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea facilis fugiat debitis aut consequatur, deleniti
            maiores, dignissimos qui doloremque sint quasi voluptate porro consectetur, eius sed expedita et minima
            dolor tempore non? Maiores alias nobis modi aliquid laudantium ducimus animi.
        </p>
        <a href="Sub-Categorias/AcercaDeMi.html" class="btn">Saber Más</a>
    </div>
</section>

<!--============================================= Fin Contenido Sobre Mi ======================================-->

<!--============================================= Contenido Servicios ======================================-->

<section class="services" id="services">
    <h2 class="heading">Mis <span>Servicios</span></h2>

    <div class="services-container">

        <div class="services-box">
            <i class='bx bx-paint'></i>
            <h3>Diseñador Web</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ratione fugiat magnam nostrum eum dolor hic
                dicta voluptatem, id vitae.
            </p>
            <a href="Sub-Categorias/Mis Servicios HTML/DiseñoWeb.html" class="btn">Saber Más</a>
        </div>

        <div class="services-box">
            <i class='bx bx-code-alt'></i>
            <h3>Programador Web</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ratione fugiat magnam nostrum eum dolor hic
                dicta voluptatem, id vitae.
            </p>
            <a href="Sub-Categorias/Mis Servicios HTML/ProgramadorWeb.html" class="btn">Saber Más</a>
        </div>

        <div class="services-box">
            <i class='bx bxl-blender'></i>
            <h3>Animación Grafica</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ratione fugiat magnam nostrum eum dolor hic
                dicta voluptatem, id vitae.
            </p>
            <a href="Sub-Categorias/Mis Servicios HTML/Animacion.html" class="btn">Saber Más</a>
        </div>

        <div class="services-box">
            <i class='bx bx-candles'></i>
            <h3>Binance</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ratione fugiat magnam nostrum eum dolor hic
                dicta voluptatem, id vitae.
            </p>
            <a href="Sub-Categorias/Mis Servicios HTML/Binance.html" class="btn">Saber Más</a>
        </div>

        <div class="services-box">
            <i class='bx bxs-cube-alt'></i>
            <h3>Dibujo Técnico</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ratione fugiat magnam nostrum eum dolor hic
                dicta voluptatem, id vitae.
            </p>
            <a href="Sub-Categorias/Mis Servicios HTML/Dibujo.html" class="btn">Saber Más</a>
        </div>
    </div>
</section>

<!--============================================= Fin Contenido Servicios ======================================-->

<!--=============================================  Contenido Base de Datos ======================================-->

<section class="basededatos" id="basededatos">
    <h2 class="heading">Base de <span>Datos</span></h2>



    <div class="services-container">

        <div class="services-box">
            <i class='bx bx-data'></i>
            <h3>ER/ Studio</h3>
            <h2>Segundo Trabajo</h2>
            <a href="/public/uploads/1753896228_1753895220_Manual de Instalación de MySQL-Atao Paucar Exar Williams-III-V (1).pdf" class="btn" target="_blank" style="margin-top: 1.2rem;">Ver PDF</a>
            <a href="/public/uploads/1753896228_1753895220_Manual de Instalación de MySQL-Atao Paucar Exar Williams-III-V (1).pdf" class="btn" target="_blank" download="" style="margin-top: 1.2rem;">Descargar pdf</a>
        </div>

        <div class="services-box">
            <i class='bx bx-data'></i>
            <h3>Manual de instalación My SQL</h3>
            <h2>Tercer Trabajo</h2>
            <a href="Tareas/Manual de Instalación de MySQL-Atao Paucar Exar Williams-III-V.pdf" class="btn" target="_blank" style="margin-top: 1.2rem;">Ver PDF</a>
            <a href="Tareas/Manual de Instalación de MySQL-Atao Paucar Exar Williams-III-V.pdf" class="btn" target="_blank" download="" style="margin-top: 1.2rem;">Descargar pdf</a>
        </div>

        <div class="services-box">
            <i class='bx bx-data'></i>
            <h3>MySQL Ejercicios</h3>
            <h2>Cuarto Trabajo</h2>
            <a href="Tareas/MySQL.pdf" class="btn" target="_blank" style="margin-top: 1.2rem;">Ver PDF</a>
            <a href="Tareas/MySQL.pdf" class="btn" target="_blank" download="" style="margin-top: 1.2rem;">Descargar pdf</a>
        </div>

        <div class="services-box">
            <i class='bx bx-data'></i>
            <h3>Dibujo Técnico</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ratione fugiat magnam nostrum eum dolor hic
                dicta voluptatem, id vitae.
            </p>
            <a href="Sub-Categorias/Mis Servicios HTML/Dibujo.html" class="btn">Saber Más</a>
        </div>
        <a href="./app/vistas/evidencias/subir.php">Administrar Trabajos</a>
    </div>
</section>

<!--============================================= Fin Contenido Base de Datos ======================================-->

<!--============================================= Contenido Proyectos == ====================================-->

<section class="portfolio" id="portfolio">
    <h2 class="heading">Ultimos <span>Proyectos</span></h2>
    <div class="portfolio-container">
        <div class="portfolio-box">
            <img src="Port-IMG/pixelcut-export (2).jpeg" alt="">
            <div class="portfolio-layer">
                <h4>Diseño Grafico 1</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit.
                </p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="Port-IMG/pixelcut-export (2).jpeg" alt="">
            <div class="portfolio-layer">
                <h4>Diseño Grafico 2</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit.
                </p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="Port-IMG/pixelcut-export (2).jpeg" alt="">
            <div class="portfolio-layer">
                <h4>Diseño Grafico 3</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit.
                </p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="Port-IMG/pixelcut-export (2).jpeg" alt="">
            <div class="portfolio-layer">
                <h4>Diseño Grafico 4</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit.
                </p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="Port-IMG/pixelcut-export (2).jpeg" alt="">
            <div class="portfolio-layer">
                <h4>Diseño Grafico 5</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit.
                </p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
        <div class="portfolio-box">
            <img src="Port-IMG/pixelcut-export (2).jpeg" alt="">
            <div class="portfolio-layer">
                <h4>Diseño Grafico 6</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit.
                </p>
                <a href="#"><i class='bx bx-link-external'></i></a>
            </div>
        </div>
    </div>
</section>

<!--============================================= Fin Contenido Proyectos ======================================-->

<!--============================================= Fin Contenido Contacto ======================================-->

<section class="contact" id="contact">
    <h2 class="heading">¿Quieres Trabajar Conmigo? <span> Contactame!</span></h2>
    <form action="#">
        <div class="input-box">
            <input type="text" placeholder="Nombre Completo...">
            <input type="email" placeholder="Correo Electronico...">
        </div>
        <div class="input-box">
            <input type="number" placeholder="Numero Teléfono...">
            <input type="email" placeholder="Asunto del Correo Electronico...">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Tu Mensaje..."></textarea>
        <input type="submit" value="Enviar Mensaje" class="btn">
    </form>
</section>

<!--============================================= Contenido Contacto ======================================-->

<!--============================================= Footer ======================================-->

<footer class="footer">
    <div class="footer-text">
        <p>
            Copyright &copy; 2024 by Williams Atao Paucar | Todos los Derechos Reservados!.
        </p>
    </div>
    <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
</footer>

<!--============================================= Fin Footer ======================================-->

<!--============================================= Revelación de desplazamiento (SCROLLREVEAL) ======================================-->

<script src="https://unpkg.com/scrollreveal"></script>

<!--=========================================== Fin Revelación de desplazamiento (SCROLLREVEAL)  ===================================-->

<!--============================================= Type.JS ======================================-->

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<!--============================================= Fin Type.js ======================================-->

<!--============================================= Mi JavaScript ======================================-->

<script src="/recursos/js/scripts.js"></script>

<!--============================================= Fin Mi JavaScript ======================================-->

</body>

</html>