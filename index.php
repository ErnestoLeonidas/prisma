<?php

session_start();


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="asset/css/estilos.css">

        <script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="asset/js/popper.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

        <title>Principal</title>
   </head>
   <body>
        <!-- CABECERA -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-4 pt-4" style="text-align:center;height: 120px;">
                    <img src="asset/img/logo.jpg" style="width: 230px;" alt="Logo" >
                </div>

            </div>
        </div>
        <!-- FIN CABECERA -->

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-sm navbar-dark bg">
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" style="height: 20px" id="collapsibleNavbar">
                <ul class="navbar-nav bg">
                <li class="nav-item">
                    <a class="bgnav"  href="#Inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="bgnav" href="#Empresa">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="bgnav" href="#Servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="bgnav" href="#Clientes">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="bgnav" href="#Contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="bgnav" href="controlador/correos.php">Intranet</a>
                </li>
                </ul>
            </div>
        </nav>
        <!-- FIN NAVBAR -->

        <!-- CARRUSEL -->
        <div id="demo" class="carousel slide mt-1" data-ride="carousel" >

            <ul class="carousel-indicators" >
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>

            <div class="carousel-inner" style="max-height:365px;vertical-align:middle">
                <div class="carousel-item active">
                    <img class="d-block w-100"  src="asset/img/foto1.jpg" alt="Imagen 1" >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"  src="asset/img/foto2.jpg" alt="Imagen 2" >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"  src="asset/img/foto3.jpg" alt="Imagen 3" >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"  src="asset/img/foto4.jpg" alt="Imagen 4" >
                </div>
            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- FIN CARRUSEL -->
   </body>
   <footer>
        <!-- PIE DE PAGINA -->
        <div class="container-fluid mt-1">
            <div class="row ">
                <div class="col-12 bgfooter" >
                    <div class="col-12 col-sm-6 bgfooter footercentrado">
                        <p class="bgfooter1 pt-2">NBL Asesorias En Proyectos LTDA. <br> Rut : 76.017.428-9 </p>
                        <p class="bgfooter2"> <!--DIRECCION Los Militares N°5620 Of. 204 <br> Las Condes, Santiago, Chile <br>--> Fono  : 2 2 47 88 245 <br> Email : contacto@nbl.cl</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN PIE DE PAGINA -->
   </footer>
</html>
