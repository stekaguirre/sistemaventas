 
 <!-- MENU DE LATERAL ADMIN -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DEL ADMIN --> 
        <div style="color: white;">
            <center>
                <img src="<?php echo $URL;?>/public/images/logotienda.png" alt="logo tienda"
                class="brand-image img-circle elevation-0" style="opacity: .8"
                width="100px" height="100px">
            </center>
                
            <center>    
                <?php echo APP_NAME;?><br>
                <?php echo $rol_session;?>
            </center>
            
        </div>              
    <!-- ///LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DEL ADMIN -->
        <div class="sidebar"> 
            <!-- INFO Y FOTO DE PERFIL DEL USUARIO -->    
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <center></center>
                    <div class="image">
                    <img src="<?php echo $URL;?>/public/images/fotostek.jpg" 
                    class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block">
                    <b><?php echo $nombres_session;?></b>
                    </a>
                    </div>
                </div>
            <!--//// INFO Y FOTO DE PERFIL DEL USUARIO -->
            <!-- MENU BOTONES -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" 
                    role="menu" data-accordion="false">
                        <!--BOTON INICIO-->
                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/" 
                                class="nav-link active" >
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Inicio
                                </p>
                                </a>
                            </li>
                        <!--///BOTON INICIO-->
                        <!--BOTON ADMIN  -->      
                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/admin" 
                                class="nav-link active" >
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    Admin
                                </p>
                                </a>
                            </li>
                        <!-- ///BOTON ADMIN -->
                        <!--BOTON USUARIOS-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/usuarios" class="nav-link active">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Listado de usuarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/usuarios/create.php" class="nav-link active">
                                        <i class="nav-icon fas fa-user-plus"></i>
                                        <p>Nuevo usuario</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <!--///BOTON USUARIOS-->
                        <!--BOTON ROLES-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>
                                    Roles
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/roles" class="nav-link active">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>Listado de roles</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/roles/create.php" class="nav-link active">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>Nuevo rol</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <!--///BOTON ROLES-->
                        <!--BOTON ALMACEN-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Almacen
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/alamcen" class="nav-link active">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>Listado de Productos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/almacen/create.php" class="nav-link active">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>Nuevo Producto</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <!--///BOTON ALMACEN-->
                        <!--BOTON CATEGORIAS-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>
                                    Categorias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/categorias" class="nav-link active">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>Listado de Categorias</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <!--///BOTON CATEGORIAS-->
                        <!--BOTON PRESTAMOS
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>
                                    Prestamos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/prestamos" class="nav-link active">
                                        <i class="nav-icon fas fa-faucet"></i>
                                        <p>Listado de prestamos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/prestamos/create.php" class="nav-link active">
                                        <i class="nav-icon fas fa-coins"></i>
                                        <p>Nuevo prestamo</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        ////BOTON PRESTAMOS -->
                        <!--BOTONES PERFIL-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    session
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                            <!--BOTON INGRESAR-->
                                <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/app/controllers/login" 
                                        class="nav-link active">
                                        <i class="nav-icon fas fa-handshake"></i> 
                                        <p>
                                        Ingresar
                                        </p>
                                        </a>
                                    </li>
                            <!--///BOTON INGRESAR-->
                            <!--BOTON CERRAR SESSION-->        
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_session.php" 
                                        class="nav-link active" >
                                        <i class="nav-icon fas fa-door-closed"></i>
                                        <p>
                                            Cerrar session
                                        </p>
                                        </a>
                                    </li>
                            <!--///BOTON CERRAR SESSION-->
                                </ul>
                            </li>
                        <!--////BOTON PERFIL-->      
                    </ul>
                </nav>
            <!-- ///MENU BOTONES-->
        </div>
    <!-- LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DEL ADMIN --> 
    <div style="color: white;">
            <center>
                <?php echo $rol_session;?><br>
                <?php echo APP_NAME;?>
            </center>
        </div>              
    <!-- ///LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DEL ADMIN --> 
    </aside>
<!-- ///MENU DE LATERAL ADMIN -->

<!--//// wrapper -->