

<!-- INCLUDE -->
  <?php
  include ("app/config.php");
  ?>
<!-- ///INCLUDE -->

<!-- HEAD --> 
  <!DOCTYPE html>
  <html lang="es"> 
    <head>
      <title>Inicio | <?php echo APP_NAME; ?></title>
      <meta charset="utf-8">
      <meta name="viewport" 
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?php echo $URL;?>/layout/inicio/styles/layout.css" 
          rel="stylesheet" type="text/css" media="all">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" 
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" 
    href="<?php echo $URL;?>/layout/inicio/styles/fontawesome-free/css/all.min.css">
   
      
    </head>
<!-- ///HEAD -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7Z319NRQMT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7Z319NRQMT');
</script>

<!-- IMAGEN DE FONDO  MENU DE NAVEGACION Y BIENVENIDA -->
  <body id="top">
  <div class="bgded overlay" style="background-image:url('<?php echo $URL;?>/public/images/sd1.jpg'); "> 
    <!-- TITULO Y LOGO -->
      <div class="wrapper row0">
        <header id="header" class="hoc clear center"> 
          <h1 id="logo"><img src="<?php echo $URL;?>/public/images/logotienda.png" alt="logotienda"> <br> 
            <b><?php echo APP_NAME; ?></b></h1>
        </header>
      </div>
    <!-- ///TITULO Y LOGO -->
    <!-- MENU DE NAVEGACION -->
      <div class="wrapper row1">
        <nav id="mainav" class="hoc clear"> 
          <ul class="clear">
            <li class="active"><a href="<?php echo $URL;?>/index.php">Inicio</a></li>
            <li><a href="<?php echo $URL;?>/paginas/streaming/index.php">Servicios streaming</a></li>
            <li><a href="<?php echo $URL;?>/paginas/web/index.php">Servicios  Web</a></li>
            <li><a class="drop" href="#">Proximamente</a>
              <ul>
                <li><a href="<?php echo $URL;?>/paginas/hogar/index.php">Servicio Hogar</a></li>
                <li><a href="<?php echo $URL;?>/paginas/tienda/index.php">Servicio tienda</a></li>
                <li><a href="<?php echo $URL;?>/paginas/personal/index.php">Servicio aseo personal</a></li>
              </ul>
            </li> 
          </ul>
        </nav>
      </div>
    <!-- ///MENU DE NAVEGACION -->
    <!-- BIENVENIDA -->
      <div id="pageintro" class="hoc clear"> 
        <article>
          <h3 class="heading">Bienvenidos</h3>
          <p>
            Diseñamos la web de tus sueños y llevamos el entretenimiento a otro nivel con servicios de 
            streaming al estilo de Netflix, Disney y más. Próximamente, también ofreceremos productos 
            para el hogar, opciones al por mayor y cuidado personal. ¡Descubre lo que podemos hacer por ti!</p>          
        </article>
      </div>
    <!-- ///BIENVENIDA -->
  </div>
<!-- //IMAGEN DE FONDO MENU DE NAVEGACION Y BIENVENIDA -->

<!-- NUESTROS SERVICIOS  -->
  <div class="wrapper row3">
      <main class="hoc container clear" > 
          <!-- TITULO Y SUBTITILO -->
            <center>
              <div class="sectiontitle">
                <h2 class="heading font-x3">Nuestros Servicios</h2>
                <p>Visita tu pagina favorita.</p>
              </div>
            </center>
          <!-- ///TITULO Y SUBTITILO -->
          <!-- SERVICIOS -->
            <div class="posts">
            <!-- SERVICIO DE STREAMING -->
                <figure class="group">
                  <div><a class="imgover" href="<?php echo $URL;?>/paginas/streaming/index.php">
                  <img src="public/images/cuentas.jpg" alt="fotodestreamein"
                    width="100%" height="100%" ></a></div>
                  <figcaption>
                  <center>
                      <h4 class="heading"><b style="color: red;">Servicio de streaming</b></h4>
                      <p>
                        "la diversidad de Netflix, la magia de Disney, la variedad de Amazon, 
                        la exclusividad de HBO, la originalidad de Star, la grandeza de Paramount y 
                        la versatilidad de YouTube Premium, 
                        Descubre un mundo de entretenimiento sin límites con nosotros."</p>
                      
                      <footer style="color: red;"><a class="btn" href="<?php echo $URL;?>/paginas/streaming/index.php">Visitar Streaming</a></footer>
                  </center>
                  </figcaption>
                </figure>
            <!--/// SERVICIO DE STREAMING --> 
            <!--SERVICIO  WEB -->
              <figure class="group">
                <div><a class="imgover" href="<?php echo $URL;?>/paginas/web/index.php">
                <img src="<?php echo $URL;?>/public/images/web/web.jpg" alt="fotodweb"
                  width="100%" height="100%" ></a></div>
                <figcaption>
                  <center>
                    <h4 class="heading"><b style="color: blue;">Servicio de paginas web </b></h4>
                    <p>"creación de páginas web innovadoras. estamos aquí para potenciar tu presencia en 
                        línea y llevar tus ideas a la realidad digital. Descubre cómo podemos impulsar 
                        tu marca en el mundo digital de manera efectiva y única."</p>
                    <footer style="color: blue;"><a class="btn " href="<?php echo $URL;?>/paginas/web/index.php">Visitar Web</a></footer>
                  </center>
                </figcaption>
              </figure>
            <!--/// SERVICIO WEB -->
            </div>
          <!-- ///SERVICIOS -->
            <div class="clear"></div>
      </main>
  </div>
<!-- ///NUESTROS SERVICIOS  -->
<!-- ///PROXIMAMENTE  -->
  <div class="wrapper bgded overlay" style="background-image:url('');">
    <section class="hoc container clear"> 
      <div class="sectiontitle">
        <h3 class="heading font-x3">Proximamente</h3>
        <p>Estamos a punto de lanzar  paginas con muchas promoxiones.</p>
      </div>
      <ul class="nospace group center">
        <li class="one_third first">
          <article><i class="btmspace-30 fa-6x fas fa-home"></i>
            <h6 class="heading">Servicio Hogar</h6>
            <p class="btmspace-30"> productos para el hogar que transformarán tu espacio. Desde acolchados 
              y cobijas hasta sábanas de calidad, estamos aquí para hacer de tu hogar un lugar acogedor..
            </p>
            <br>
            <footer><a class="btn inverse" href="<?php echo $URL;?>/paginas/hogar/index.php">Ver Hogar</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><i class="btmspace-30 fa-6x fas fa-shopping-cart"></i>
            <h6 class="heading">Servicio Tienda</h6>
            <p class="btmspace-30">Tienda digital completa! Desde artículos para el hogar como escobas y 
              trapeadoras hasta productos básicos como aceite y azúcar, te ofrecemos la comodidad de comprar 
              al por mayor o al detal</p>
            <footer><a class="btn inverse" href="<?php echo $URL;?>/paginas/tienda/index.php">Ver Tienda</a></footer>
          </article>
        </li>
        <li class="one_third ">
          <article><i class="btmspace-30 fa-6x fas fa-user"></i>
            <h6 class="heading">Sercicio Personal</h6>
            <p class="btmspace-30">ofreceremos productos para el cuidado personal! Desde keratina hasta 
              shampoo y acondicionador de alta calidad, estamos aquí para que te cuides como te mereces</p>
              <br>
            <footer><a class="btn inverse" href="<?php echo $URL;?>/paginas/personal/index.php">Ver productos</a></footer>
          </article>
        </li>
        
        
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
<!-- ///PROXIMAMENTE  -->
<!-- COLABORADORES  -->
  <div class="wrapper row2">
    <section class="hoc container clear"> 
      <div class="sectiontitle">
        <h6 class="heading font-x3">Nuestros Colaboradores</h6>
        <p>Gracias a todos.</p>
      </div>
      <ul class="nospace group team">
        <li class="one_quarter first">
          <figure><a class="imgover" href="#"><img src="<?php echo $URL;?>/public/images/fotomaye.jpeg" alt=""></a>
            <figcaption><strong class="heading">Mayerli Zuleta</strong> 
              <em>Gestion Humana</em></figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="<?php echo $URL;?>/images/demo/300x300.png" alt=""></a>
            <figcaption><strong class="heading">B. Doe</strong> <em>Job Type Here</em></figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="<?php echo $URL;?>/images/demo/300x300.png" alt=""></a>
            <figcaption><strong class="heading">C. Doe</strong> <em>Job Type Here</em></figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="<?php echo $URL;?>/public/images/fotostek.jpg" alt=""></a>
            <figcaption><strong class="heading">Stek Aguirre</strong> 
              <em>Programador</em></figcaption>
          </figure>
        </li>
      </ul>
    </section>
  </div>
<!-- ///COLABORADORES  -->


<!-- FOOTER  -->
  <div class="wrapper row4" >
    <footer id="footer" class="hoc clear">
      <!-- FOOTER COLUMNAS -->  
        <div class="group"> 
          <!-- FOOTER COLUMNA 1 - UBICACION -->
            <div class="one_quarter first">
              <h6 class="heading">Ubicacion</h6>
              <ul class="nospace btmspace-30 linklist contact">
                <li><i class="fas fa-map-marker-alt"></i>
                  <address>
                  Colombia
                  </address>
                </li>
                <li><i class="fas fa-phone"></i> +57 323 530 3818</li>
                <li><i class="far fa-envelope"></i>disponiblesservicios@gmail.com</li>
              </ul>
            </div>
          <!--// FOOTER COLUMNA 1 - UBICACION -->
          <!-- FOOTER COLUMNA 2 - NUESTRAS PAGINAS-->
            <div class="one_quarter">
              <h6 class="heading">Paginas</h6>
              <ul class="nospace linklist">
                <li><a href="<?php echo $URL;?>/index.php">Servicios Disponibles</a></li>
                <li><a href="<?php echo $URL;?>/paginas/streaming/index.php">Servicio Streaming</a></li>
                <li><a href="<?php echo $URL;?>/paginas/web/index.php">Servicio Web</a></li>
              </ul>
            </div>
          <!-- ///FOOTER COLUMNA 2 - NUESTRAS PAGINAS -->
          <!-- ///FOOTER COLUMNA 3 - PROXIMAMENTE -->
            <div class="one_quarter">
              <h6 class="heading">Proximamente</h6>
              <ul class="nospace linklist">
                <li><a href="<?php echo $URL;?>/paginas/hogar/index.php">Servicio Hogar</a></li>
                <li><a href="<?php echo $URL;?>/paginas/tienda/index.php">Servicios Tienda</a></li>
                <li><a href="<?php echo $URL;?>/paginas/personal/index.php">Servicios Personal</a></li>
              </ul>
            </div>
          <!-- ///FOOTER COLUMNA 3 - PROXIMAMENTE -->
          <!-- ///FOOTER COLUMNA 4 - HORARIO DE ATENCION -->
            <div class="one_quarter">
              <h6 class="heading">Horario</h6>
              <ul class="nospace btmspace-30 linklist contact">
                <li><i class="fas fa-clock"></i> Lunes - Viernes<br>
                  06.00am - 10.00pm</li>
                <li><i class="fas fa-clock"></i> Sabados <br>
                  06.00am - 06.00pm</li>
                <li><i class="fas fa-clock"></i> Domingos y Festivos<br>
                  10.00am - 06.00pm</li>
              </ul>
            </div>
          <!-- ///FOOTER COLUMNA 4 - HORARIO DE ATENCION -->
        </div>
      <!--/// FOOTER COLUMNAS -->
      <hr class="btmspace-30">
      <!-- REDES -->
        <div class="center btmspace-10"> 
          <h6 class="heading">Nuestras Redes</h6>
          <ul class="faico clear">
            <li><a class="faicon-google-plus" href="#"><i class="fab fa-whatsapp"></i></a></li>
            <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a class="faicon-dribble" href="#"><i class="fab fa-instagram"></i></a></li>
          </ul> 
        </div>
      <!-- ///REDES  -->
    </footer>
  </div>
<!-- ///FOOTER  -->

<!-- COPYRIGHT Y DESPEDIDA  -->
    <div class="wrapper row5">
      <div id="copyright" class="hoc clear"> 
        <p class="fl_left">Copyright&copy;ServiciosDisponibles todos los derechos reservados</p>
        <p class="fl_right">Gracias <a target="_blank" href="" title="Free Website Templates">Por Tu Visita</a></p>
      </div>
    </div>
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- ///COPYRIGHT Y DESPEDIDA  -->

<!-- JAVASCRIPTS -->
  <script src="<?php echo $URL;?>/layout/inicio/scripts/jquery.min.js"></script>
  <script src="<?php echo $URL;?>/layout/inicio/scripts/jquery.backtotop.js"></script>
  <script src="<?php echo $URL;?>/layout/inicio/scripts/jquery.mobilemenu.js"></script>
  </body>
  </html>