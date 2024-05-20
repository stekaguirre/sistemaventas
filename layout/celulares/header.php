<!DOCTYPE html>
<html lang="es">
  <!-- HEAD -->  
    <head>
      <title> Celulares | Paginas | Servicios disponibles</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <link href="<?php echo $URL;?>/layout/inicio/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
  <!-- ///HEAD -->
<body id="top">
<!-- IMAGEN DE FONDO  MENU DE NAVEGACION Y BIENVENIDA -->
  <div class="bgded overlay" style="background-image:url('<?php echo $URL;?>/public/images/celulares/celulares.png');"> 
    <!-- TITULO Y LOGO -->
      <div class="wrapper row0">
        <header id="header" class="hoc clear center"> 
          <h1 id="logo"><img src="<?php echo $URL;?>/public/images/logotienda.png" alt="logotienda"> <br> 
            <b>Celulares</b></h1>
        </header>
      </div>
    <!-- ///TITULO Y LOGO -->
    <!-- MENU DE NAVEGACION -->
      <div class="wrapper row1">
        <nav id="mainav" class="hoc clear"> 
          <ul class="clear">
            <li><a href="<?php echo $URL;?>/index.php">Volver al inicio</href=></li>
            <li class="active"><a href="<?php echo $URL;?>/index.php">todos los celulares</a></li>
            <li><a href="<?php echo $URL;?>/paginas/celulares/nuevos/index.php">Celulares Nuevos</a></li>
            <li><a href="<?php echo $URL;?>/paginas/celulares/viejos/index.php">Celulares usados</a></li>
            <!--<li><a href="<?php echo $URL;?>/font-icons.html">iconos</a></li>-->
            <li><a class="drop" href="#">Proximamente</a>
              <ul>
                <li><a href="<?php echo $URL;?>/paginas/hogar/index.php">Servicio Hogar</a></li>
                <li><a href="<?php echo $URL;?>/paginas/tienda/index.php">Servicio tienda</a></li>
                <li><a href="<?php echo $URL;?>/paginas/personal/index.php">Servicio aseo personal</a></li>
              </ul>
            </li>
            <!-- BOTON INGRESAR 
                <li class="nav-item d-none d-sm-inline-block">
                  <a href="<?php echo $URL;?>/login" 
                  class="nav-link">Login</a>
                </li>-->
            <!-- ///BOTON INGRESAR --> 
          </ul>
        </nav>
      </div>
    <!-- ///MENU DE NAVEGACION -->
  </div>
<!-- //IMAGEN DE FONDO MENU DE NAVEGACION Y BIENVENIDA -->