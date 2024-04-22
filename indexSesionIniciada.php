<?php
// Inicia la sesión si no está iniciada
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre']) || !isset($_SESSION['email']) || !isset($_SESSION['rol'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: SitioWeb/php/IniciarSesion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<!-- Comienzo del head -->

<head>
    <meta charset="UTF-8" /> <!-- Configura la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Configura la vista para dispositivos móviles -->
    <link rel="shortcut icon" type="image/x-icon" href="SitioWeb/imagenes/icono.png" /> <!--Logo de la web -->
    <link rel="stylesheet" type="text/css" href="SitioWeb/css/piedepagina.css">
    <!-- Vincula la hoja de estilo para el pie de página -->
    <link rel="stylesheet" type="text/css" href="SitioWeb/css/navbar.css">
    <!-- Vincula la hoja de estilo para la barra de navegación -->
    <link rel="stylesheet" href="SitioWeb/css/formulario.css"> <!-- Vincula la hoja de estilo para el formulario -->
    <link rel="stylesheet" type="text/css" href="SitioWeb/css/estilo.css"> <!-- Vincula una hoja de estilo genérica -->
    <link rel="stylesheet" type="text/css" href="SitioWeb/css/tabla.css"> <!-- Vincula la hoja de estilo para tablas -->
    <link rel="stylesheet" type="text/css" href="SitioWeb/css/inicio.css">
    <!-- Vincula la hoja de estilo para tablas -->
    <link rel="stylesheet" type="text/css" href="SitioWeb/css/noticia.css">
    <!-- Vincula la hoja de estilo para tablas -->
    <title>Inicio</title> <!-- Establece el título de la página -->
    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="SitioWeb/js/enlaceinterno.js"></script>
    <script src="SitioWeb/js/cargar.js"></script>
    <script src="SitioWeb/js/CambiarPagsele.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 


</head>
<!-- Comienzo del body -->

<body>
    <div id="usuariocontainer">
    <div class="contenidousuario" id="contenidousuario">
        <div class="X" onclick="cancelarUsuario()">
            &times;
        </div>
        <center>
            <p><?php echo $_SESSION['email']; ?></p>
        </center>
        <img src="SitioWeb/imagenes/usuario.png" class="usuarioimg">
        <a class="editarimg" href="SitioWeb/php/EditarUsuario.php">✎</a>
        <h1>¡Hola <?php echo $_SESSION['nombre']; ?>!</h1>
        <hr>
        <h2>Nombre:</h2>
        <p><?php echo $_SESSION['nombre']; ?></p>
        <h2>Rol:</h2>
        <p><?php echo $_SESSION['rol']; ?></p>
        <?php if ($_SESSION['rol'] !== 'usuario') { ?>
                <button type="button" class="crear" name="paneladmin">Panel de administración</button>
            <?php } ?>
        <a href="SitioWeb/php/CerrarSesion.php"><button type="button" value="cancelar" class="cancelar">Cerrar sesión</button></a>
    </div>

    </div>
    <!-- **********NAVBAR*************+ -->
    <header id="cabecera">
        <nav id="menu" class="navprincipal">
            <ul class="opciones">
                <div>
                    <li>
                        <a href="#" class="mostrar" id="botonMostrarOcultar"><img class="imgheader2"
                                src="SitioWeb/imagenes/mostrar.png" alt="mostrar-mas"></a>
                    </li>
                </div>
            </ul>
            <ul class="secciones">
                <div class="logos">
                    <div class="nav-posicion">
                        <li>
                            <a href="#"><img src="SitioWeb/imagenes/logo.png" alt="logo" class="logo" id="logo"
                                    onclick="load('inicio')" /></a>
                            <!--Logo de la pagina -->
                        </li>
                    </div>
                    <div>
                        <li>
                            <a href="#"><img src="SitioWeb/imagenes/logo2.png" alt="logo" class="logo2" id="logo"
                                    onclick="load('inicio')" /></a>
                            <!--Logo de la pagina -->
                        </li>
                    </div>
                </div>
                <div class="seccionesnav">
                    <div class="nav-posicion2">
                        <li><a id="Inicio" href="#" class="nav-aa" onclick="load('inicio')">INICIO</a></li>
                        <!--Seccion Inicio-->
                    </div>
                    <div class="nav-posicion2">
                        <li>
                            <a id="Clubes" href="#" class="nav-aa" onclick="load('clubes')">CLUBES</a>
                            <!--Seccion Clubes-->
                        </li>
                    </div>
                    <div class="nav-posicion2">
                        <li>
                            <a id="Calendario" href="#" class="nav-aa" onclick="load('calendario')">CALENDARIO</a>
                            <!--Seccion Calendario-->
                        </li>
                    </div>
                    <div class="nav-posicion2">
                        <li>
                            <a id="Clasificacion" href="#" class="nav-aa"
                                onclick="load('clasificacion')">CLASIFICACIÓN</a><!--Seccion Clasificacion-->
                        </li>
                    </div>
                    <div class="nav-posicion2">
                        <li>
                            <a id="Noticias" href="#" class="nav-aa" onclick="load('noticias')">NOTICIAS</a>
                            <!--Seccion Noticias-->
                        </li>
                    </div>
                </div>
            </ul>
            <ul>
                <div class="nav-posicion4">
                    <a href="#" class="usuario" id="icoUsuario"><img src="SitioWeb/imagenes/usuario.png" alt=""></a>
                </div>
            </ul>
            </div>

        </nav> <!--Navbar que se muestra al pulsar el boton de mostrar mas-->
        <div id="elementoOculto">
            <nav id="Subnavbar" class="Subnavbar">
                <ul class="subnav-posicion">
                    <div>
                        <li>
                            <a href="#" id="Inicio" class="nav-a" onclick="load('inicio')">INICIO</a>
                        </li>
                        <hr class="menu-hr">
                    </div>

                    <div>
                        <li>
                            <a href="#" id="Clubes" class="nav-a" onclick="load('clubes')">CLUBES</a>
                        </li>
                        <hr class="menu-hr">
                    </div>
                    <div>
                        <li>
                            <a href="#" id="Calendario" class="nav-a" onclick="load('calendario')">CALENDARIO</a>
                        </li>
                        <hr class="menu-hr">
                    </div>
                    <div>
                        <li>
                            <a href="#" id="Clasificacion" class="nav-a"
                                onclick="load('clasificacion')">CLASIFICACIÓN</a>
                        </li>
                        <hr class="menu-hr">
                    </div>
                    <div>
                        <li>
                            <a href="#" id="Noticias" class="nav-a" onclick="load('noticias')">NOTICIAS</a>
                        </li>
                        <hr class="menu-hr">
                    </div>
                    <div>
                        <li>

                            <a href="#" class="usuario2" id="icoUsuario2"><img src="SitioWeb/imagenes/usuario.png"
                                    alt="icousuario"></a>
                        </li>
                    </div>

                </ul>
            </nav>
        </div>
        <script src="SitioWeb/js/MostrarMas.js"></script>
        <script src="SitioWeb/js/resize.js"></script>
        <script src="Sitioweb/js/perfilUsuario.js">

        </script>


    </header>
    <!-- **********CONTENIDO************* -->
    <div id="formContainer"></div><!--Contenedor para el formulario-->
    <div id="contenido"></div>
    <!-- **********FOOTER************* -->
    <footer>
        <h1>BOF</h1>
        <hr />
        <div class="alineacion-pie-de-pagina">
            <ul>
                <li id="quitar-estilo">
                    <h2>R.S.S</h2> <!--Redes Sociales -->
                </li>
                <div id="quitar-estilo" class="rss">
                    <div class="lista-rss">

                    </div>
                    <div class="espaciado-entre-fotos">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61552695052343" target="_blank"><img
                                    src="SitioWeb/imagenes/fblogo.png" alt="Logo Facebook" /></a>
                            <!--Enlace a nuestra pagina de Facebook -->
                        </li>
                    </div>
                    <div class="espaciado-entre-fotos">
                        <li>
                            <a href="https://twitter.com/WeboFFutbol" target="_blank"><img
                                    src="SitioWeb/imagenes/twtlogo.png" alt="Logo Twitter" /></a>
                            <!--Enlace a nuestra pagina de Twitter -->
                        </li>
                    </div>
                    <li>
                        <a href="https://www.instagram.com/weboffutbol/" target="_blank"><img
                                src="SitioWeb/imagenes/iglogo.png" alt="Logo Instagram" /></a>
                        <!--Enlace a nuestra pagina de Instagram -->
                    </li>
                </div>
            </ul>

            <ul>
                <div id="quitar-estilo">
                    <div class="lista-direccion-h2">
                        <li>
                            <h2>Direccion</h2>
                        </li>
                    </div>
                    <li>
                        <p><a href="https://www.google.com/maps/place/Kirol+Etxea/@43.2478352,-2.9300484,17z/data=!3m1!4b1!4m6!3m5!1s0xd4e4e31e0266025:0x4abcfcbb79d1285c!8m2!3d43.2478352!4d-2.9274735!16s%2Fg%2F11c5s8fqfb?entry=ttu"
                                target="_blank">COSME ETXEBARRIETA 5,<br>1°KIROL ETXEA - MARTÍN BARUA <br>PICAZA,
                                27BILBAO (BIZKAIA)</a></p> <!--Direccion de la federacion -->
                    </li>
                    <div class="lista-direccion-h2">
                        <li>
                            <h2>Telefono</h2>
                        </li>
                    </div>
                    <li>
                        <p>982 23 93 93</p>
                    </li>
                    <div class="lista-direccion-h2">
                        <li>
                            <h2>e-mail</h2>
                        </li>
                    </div>
                    <li>
                        <p>weboffutbol@gmail.com</p>
                    </li>
                </div>
            </ul>

            <ul>
                <div id="quitar-estilo">
                    <li>
                        <h2>Secciones</h2>
                    </li>
                    <div class="espaciado-entre-elementos">
                        <li>
                            <a href="#" onclick="load('inicio')"> Inicio </a> <!--Enlace a la seccion inicio -->
                        </li>
                    </div>
                    <div class="espaciado-entre-elementos">
                        <li>
                            <a href="#" onclick="load('clubes')"> Clubes </a> <!--Enlace a la seccion clubes -->
                        </li>
                    </div>
                    <div class="espaciado-entre-elementos">
                        <li>
                            <a href="#" onclick="load('calendario')"> Calendario </a>
                            <!--Enlace a la seccion calendario -->
                        </li>
                    </div>
                    <div class="espaciado-entre-elementos">
                        <li>
                            <a href="#" onclick="load('clasificacion')"> Clasificacion </a>
                            <!--Enlace a la seccion clasificacion -->
                        </li>
                    </div>
                    <li>
                        <a href="#" onclick="load('noticias')"> Noticias </a> <!--Enlace a la seccion noticias -->
                    </li>
                </div>
            </ul>
        </div>
    </footer>
    <button id="botonFijo" onclick="irAlInicio()"><img width="15px" src="SitioWeb/imagenes/arriba.png"
            alt="flecharriba"></button>
    <button id="descargarBtn" class="descargar"><img src="SitioWeb/imagenes/descargar.png" alt="" /></button>

</body>

</html>