

<!--                 CONTROLLERS USUARIOS CREATE                       -->

<!-- INCLUDE -->
 <?php
    include ("../../config.php");
  ?>
<!-- ///INCLUDE -->

 <?php
    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $password_user = $_POST['password_user'];
    $password_repeat = $_POST['password_repeat'];
    $descripcion = $_POST['descripcion'];

    $contador = 0 ;
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario ){
      $contador = $contador + 1 ;
    }
    if($contador>0){
      session_start();
      $_SESSION ['mensaje'] = "este usuario ya esta registrado en la base de datos";
      header('Location: '.$URL.'/usuarios/');
      
    }else{
      echo 'este usuario es nuevo';
    }

    if($password_user == $password_repeat){
        
    echo "si son iguales";

    $password_user = password_hash($password_user,PASSWORD_DEFAULT);

    $sentencia = $pdo->prepare("INSERT INTO usuarios
    ( nombres, email, id_rol, password_user, descripcion, fyh_creacion) 
    VALUES (:nombres,:email,:id_rol,:password_user,:descripcion,:fyh_creacion)");

    $sentencia->bindParam('nombres',$nombres);
    $sentencia->bindParam('email',$email);
    $sentencia->bindParam('id_rol',$nombre);
    $sentencia->bindParam('password_user',$password_user);
    $sentencia->bindParam('descripcion',$descripcion);
    $sentencia->bindParam('fyh_creacion',$fechahora);
    $sentencia->execute();
    session_start();
      $_SESSION ['mensaje'] = "Se registro al usuario de la manera correcta";
      $_SESSION['icono'] = "success";
      header('Location: '.$URL.'/usuarios/');

      }else{
        session_start();
        $_SESSION ['mensaje'] = "Error las contraseñas no son iguales";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/usuarios/create.php');    
      };
 ?>