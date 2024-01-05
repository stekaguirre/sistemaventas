

<!--                               INDEX ADMINISTRACION                                            -->


<!-- INCLUDE -->
  <?php
  include ("../app/config.php");
  include ("../layout/admin/session.php");
  include ("../layout/admin/header.php");
  include ("../layout/admin/menu/principal.php");
  include ("../layout/admin/menu/lateral.php");?>
<!-- ///INCLUDE -->
 
       
<!-- ///CONTENIDO DERECHO HEADER -->
              <div class="content-wrapper">
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-12">
                        <h1 class="m-0">Admin - <?php echo APP_NAME; ?></h1>
                      </div>
                    </div>
                  </div>
                </div>
<!-- ///CONTENIDO DERECHO HEADER -->


<!-- CONTENIDO DERECHO MAIN O BODY -->
    <div class="content">
      <div class="content-fluid">  
        <h1>contenido</h1>
      </div>
    </div> 
<!-- ///CONTENIDO DERECHO MAIN O BODY-->
            

<!-- CONTENIDO FOOTER Y MENSAJES -->
  <?php 
    include ("../layout/admin/footer.php");
    include ("../layout/admin/mensajes.php");
  ?>
<!-- ///CONTENIDO FOOTER Y MENSAJES -->
  



          
          
          