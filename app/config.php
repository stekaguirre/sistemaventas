<?php

define ('APP_NAME','Sistema de ventas');
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemaventas');

$URL = "http://localhost/sistemaventas";

date_default_timezone_set("America/Bogota");
$fechahora = date('Y-m-d H:i:s');


$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
   // echo "Conexión exitosa a la base de datos ";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

?>

<!-- MENSAJE SWEETALERT -->
<?php
        if(isset($_SESSION['mensaje'])){
            $respuesta = $_SESSION['mensaje'];?>

            <script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: '<?php echo $respuesta ?>',
                    showConfirmButton: false,
                    timer: 1500
                    })
            </script>
          <?php
              unset($_SESSION['mensaje']);
              }

              ?>
<!--/// MENSAJE SWEETALERT -->
