

<!--                               INDEX PAGINAS WEB                                           -->


<!-- INCLUDE -->
  <?php
    include ("../../app/config.php");
    include ("../../layout/web/header.php");
    include ("../../layout/web/menus/principal.php");
    include ("../../layout/web/menus/lateral.php");
  ?>
<!-- ///INCLUDE -->

     
<!-- ///CONTENIDO DERECHO HEADER -->
            <div class="content-wrapper">
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-12">
                      <center>
                        <h1 class="m-0">Creacion de paginas web</h1>
                      </center>
                    </div>
                  </div>
                </div>
              </div>
<!-- ///CONTENIDO DERECHO HEADER -->


<!-- CONTENIDO DERECHO MAIN O BODY -->
  <div class="content">
    <div class="content-fluid">  
      <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/css/responsive.css">
        
    <!-- font icons -->
    <link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/assets/vendors/themify-icons/css/themify-icons.css">

<link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/assets/vendors/animate/animate.css">

<!-- Bootstrap + FoodHut main styles -->
<link rel="stylesheet" href="<?php echo $URL;?>/paginas/web/assets/css/foodhut.css">
        <!-- Modernizer Script for old Browsers -->
            <script src="<?php echo $URL;?>/paginas/web/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
      </head>

      <body>

<!--Home Slider
==================================== -->
  <section id="home">     
    <div id="home-carousel" class="carousel slide" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-carousel" data-slide-to="1"></li>
        </ol>
        <!--/.carousel-indicators-->

        <div class="carousel-inner">

            <div class="item active" style="background-image: url(&quot;<?php echo $URL;?>/public/images/web/proyectos.PNG&quot;); height: 581px;">
                <div class="carousel-caption">
                    <div class="animated bounceInRight">
                        <h2>HOLA<br>Bienvenido.</h2>
                        <p>En esta pagina puedes ver entre muchas muestras como quieres tu pagina <br>
                          tambien la podemos crear desde cero.</p>
                    </div>
                </div>
            </div>              

            <div class="item" style="background-image: url(&quot;<?php echo $URL;?>/public/images/web/admin.PNG&quot;); height: 581px;">                
                <div class="carousel-caption">
                    <div class="animated bounceInDown">
                        <h2>Sistema<br>Administrativo.</h2>
                        <p>Puedes gestionar tu negocio de una marena eficaz.</p>
                    </div>
                </div>
            </div>

        </div>
        <!--/.carousel-inner-->
        <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
            <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                <i class="fa fa-angle-left fa-3x"></i>
            </a>
            <a class="sl-next" href="#home-carousel" data-slide="next">
                <i class="fa fa-angle-right fa-3x"></i>
            </a>
        </nav>

    </div>
</section>
<!--
End #home Slider
========================== -->


<!--
#service
========================== -->
  <section id="service">
    <div class="container">
      <br>
      <br>
      <br>
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <h2>Services</h2>    
                    <p>Conoce nuestros servicios.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-sm-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/monitor.png" class="media-object" alt="Monitor">
                    </a>
                    <div class="media-body">
                        <h3>Tu pagina web</h3>
                        <p>Tu negocio en linea donde todo mundo te pueda visitar.</p>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12 wow fadeInRight animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/cog.png" alt="Cog">
                    </a>
                    <div class="media-body">
                        <h3>Sistema administrativo</h3>
                        <p>Mira quien visita tu pagina , cual es el producto mas vendido , lista de usuarios , lista de proveedores</p>
                    </div>
                </div>
                
            </div>

            <div class="col-md-6 col-sm-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="img/icons/ruler.png" alt="Ruler">
                    </a>
                    <div class="media-body">
                        <h3>Tambien woorpress</h3>
                        <p>tambien trabajamos con paginas worpress.</p>
                    </div>
                </div>
            </div>

          

        </div> <!-- end .row -->
    </div> <!-- end .container -->
</section>
<!--
End #service
========================== -->



<!--#Portfolio========================== -->

<section id="portfolio">
    <br>
    <br>
    <div class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <h2>Proyectos</h2>    
        <p>Conoce la pagina de tu negocio.</p>
    </div>
    
    <div id="projects" class="clearfix">
    <div class="gallary row">
    <!--          RESTAURANTE CAFE             -->
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="<?php echo $URL;?>/public/images/web/proyectos/restaurantes/cafe1.PNG" 
                alt="proyectos/restaurantes/cafe1" class="gallary-img">
            <img src="<?php echo $URL;?>/public/images/web/proyectos/restaurantes/cafe2.PNG" 
                alt="proyectos/restaurantes/cafe2" class="gallary-img">
            <img src="<?php echo $URL;?>/public/images/web/proyectos/restaurantes/cafe3.PNG" 
                alt="proyectos/restaurantes/cafe3" class="gallary-img">
            <a href="<?php echo $URL;?>/paginas/web/proyectos/restaurantes/cafe" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    <!--           //// RESTAURANTE CAFE       -->
    <!--          RESTAURANTE CHINO             -->
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="<?php echo $URL;?>/public/images/web/proyectos/restaurantes/chino1.PNG" 
                alt="proyectos/restaurantes/chino1" class="gallary-img">
            <img src="<?php echo $URL;?>/public/images/web/proyectos/restaurantes/chino2.PNG" 
                alt="proyectos/restaurantes/chino2" class="gallary-img">
            <a href="<?php echo $URL;?>/paginas/web/proyectos/restaurantes/chino" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    <!--           //// RESTAURANTE CHINO       -->
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-3.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-5.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-6.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-7.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-8.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-9.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-10.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-11.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-12.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
    </div>
    </div> <!-- end #projects -->

</section>
<!--
End #Portfolio
========================== -->

<!--  gallary Section  -->
 <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">Proyectos</h2>
    </div>
    
<!-- /// gallary Section  -->






<!--#footer
========================== -->
<footer id="footer" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-logo wow fadeInDown" style="visibility: hidden; animation-name: none;">
                    <img src="../../public/images/logotienda.png" alt="logo">
                </div>
                <div class="footer-social wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <h3>Nuestras redes</h3>
                    <ul class="text-center list-inline">
                        <li><a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/r4xzR4"><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/k9zAy5"><i class="fa fa-dribbble fa-lg"></i></a></li>
                    </ul>
                </div>
                <div class="copyright">    
                  <p>Gracias por tu visita</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--
End #footer
========================== -->


<!--
JavaScripts
========================== -->

<!-- main jQuery -->
<script src="<?php echo $URL;?>/paginas/web/js/vendor/jquery-1.11.1.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $URL;?>/paginas/web/js/bootstrap.min.js"></script>
<!-- jquery.nav -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.nav.js"></script>
<!-- Portfolio Filtering -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.mixitup.min.js"></script>
<!-- Fancybox -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.fancybox.pack.js"></script>
<!-- Parallax sections -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.parallax-1.1.3.js"></script>
<!-- jQuery Appear -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery.appear.js"></script>
<!-- countTo -->
<script src="<?php echo $URL;?>/paginas/web/js/jquery-countTo.js"></script>
<!-- owl carousel -->
<script src="<?php echo $URL;?>/paginas/web/js/owl.carousel.min.js"></script>
<!-- WOW script -->
<script src="<?php echo $URL;?>/paginas/web/js/wow.min.js"></script>
<!-- theme custom scripts -->
<script src="<?php echo $URL;?>/paginas/web/js/main.js"></script>
<!-- core  -->
<script src="<?php echo $URL;?>/paginas/web/assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="<?php echo $URL;?>/paginas/web/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="<?php echo $URL;?>/paginas/web/assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- wow.js -->
<script src="<?php echo $URL;?>/paginas/web/assets/vendors/wow/wow.js"></script>
    
<!-- google maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

<!-- FoodHut js -->
<script src="<?php echo $URL;?>/paginas/web/assets/js/foodhut.js"></script>


</body>

    </div>
  </div> 
<!-- ///CONTENIDO DERECHO MAIN O BODY-->
          

<!-- CONTENIDO FOOTER Y MENSAJES -->
<?php 
  include ("../../layout/web/footer.php");
?>
<!-- ///CONTENIDO FOOTER Y MENSAJES -->




        
        
        