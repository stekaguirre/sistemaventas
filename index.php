

<!-- INCLUDE -->
<?php
  include ("app/config.php");
  include ("layout/home/header.php");?>
<!-- ///INCLUDE -->


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
                  <div><a class="imgover" href="<?php echo $URL;?>/paginas/streaming/index.php"><img src="public/images/streaming.jpg" alt="fotodestreamein"
                    width="100%" height="100%" ></a></div>
                  <figcaption>
                  <center>
                      <h4 class="heading"><b style="color: red;">Servicio de streaming</b></h4>
                      <p>Visita nuestra pagina de <b>streaming</b> y elige entre muchas plataformas</p>
                      <p>Netflix - Disney plus - Amazon prime - Youtubepremiun</p>
                      <p>Hbo max - Star plus - Paramount</p>
                      <p>Entre otras</p>
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
                    <p>Vel diam maecenas mattis massa nec rutrum mattis leo felis posuere eros eget elementum tortor leo non enim praesent id metus in auctor enim a tortor nunc laoreet.</p>
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
        <p>Estamos a punto de lanzar nuevas paginas con muchas promoxiones.</p>
      </div>
      <ul class="nospace group center">
        <li class="one_third first">
          <article><i class="btmspace-30 fa-6x fas fa-home"></i>
            <h6 class="heading">Servicio Hogar</h6>
            <p class="btmspace-30">Mas de 4 años ofreciendo los mejores serfrutar donde quieras.</p>
            <footer><a class="btn inverse" href="<?php echo $URL;?>/paginas/hogar">Ver Avances</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><i class="btmspace-30 fa-6x fas fa-shopping-cart"></i>
            <h6 class="heading">Servicio Tienda</h6>
            <p class="btmspace-30">Compra por mayor y a detal. <br>
            con los mejores precios</p>
            <footer><a class="btn inverse" href="<?php echo $URL;?>/paginas/tienda">Ver Avances</a></footer>
          </article>
        </li>
        <li class="one_third ">
          <article><i class="btmspace-30 fa-6x fas fa-user"></i>
            <h6 class="heading">Sercicio Personal</h6>
            <p class="btmspace-30">servicios de cuidado personal</p>
            <footer><a class="btn inverse" href="<?php echo $URL;?>/paginas/personal">Ver Avances</a></footer>
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
          <figure><a class="imgover" href="#"><img src="<?php echo $URL;?>/public/images/fotostek.jpg" alt=""></a>
            <figcaption><strong class="heading">Stek Aguirre</strong> 
              <em>Programador full stark</em></figcaption>
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
              <em>Programador full stark</em></figcaption>
          </figure>
        </li>
      </ul>
    </section>
  </div>
<!-- ///COLABORADORES  -->



<!-- INCLUDE -->
<?php
  include ("layout/home/footer.php");?>
<!-- ///INCLUDE -->