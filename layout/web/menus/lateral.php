
<!-- MENU DE LATERAL USUARIOS -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DE LOS USUARIOS --> 
        <a href="<?php echo $URL;?>/paginas/web" class="brand-link">
            <img src="<?php echo $URL;?>/public/images/logotienda.png" alt="logo tienda" 
            class="brand-image img-circle elevation-0" style="opacity: .8">
            <span class="brand-text font-weight-light">Servicios <b>Web</b></span>
        </a>             
    <!-- /////LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DE LOS USUARIOS --> 
    <!-- MENU  -->
        <div class="sidebar"> 
            <nav class="mt-4">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" 
                role="menu" data-accordion="false">
                    <!--BOTON HOME-->
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/" 
                            class="nav-link active" >
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Home
                            </p>
                            </a>
                        </li>
                    <!--///BOTON HOME-->
                    <!--BOTON ADMIN-->        
                        <li class="nav-item">
                            <a href="<?php echo $URL; ?>/paginas/streaming" 
                            class="nav-link active" >
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>
                                Streaming
                            </p>
                            </a>
                        </li>
                    <!--///BOTON ADMIN-->
                    <!--BOTON RESTAURANTES-->
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-coffee"></i>
                            <p>
                                Restaurantes
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $URL;?>/paginas/web/proyectos/restaurantes/cafe" 
                                        class="nav-link active"><p>Cafe</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo $URL;?>/paginas/web/proyectos/restaurantes/chino" 
                                        class="nav-link active"><p>food hut </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <!--///BOTON RESTAURANTES-->
                           
                          
                </ul>
            </nav>
        </div>
    <!-- ///MENU  -->

</aside>
<!-- ///MENU DE LATERAL USUARIOS -->

<!--//// wrapper -->