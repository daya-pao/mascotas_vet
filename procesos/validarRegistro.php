<?php  
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../controller/UserController.php");
session_start();
if(!empty($_POST["registro"])){
    if(empty($_POST["nombre"]) || empty($_POST["nombreusuario"]) || empty($_POST["email"]) || empty($_POST["contraseña"]) || empty($_POST["rol"])){
        echo '<div class="error">unos de los campos está vacío</div>';
    }else{
        
        $userControl = new UserControl();
        $user = new user();
        $conn = $userControl->conexion();

        $nombreusuario= mysqli_real_escape_string($conn , $_POST["nombreusuario"]);
        $email = mysqli_real_escape_string ($conn , $_POST["email"]);
        $rol = mysqli_real_escape_string($conn, $_POST["rol"]);
        $sql= "SELECT  username , email  FROM User WHERE username = '$nombreusuario' OR email = '$email'";
       
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo '<div class="error">el usuario ya exixte</div>';
        }else{
            $guardar = $userControl ->CREATE($user, $rol);
            if($guardar){
                echo '<div class="error_correcto">cuenta creada exitosamente</div>';
                header('Location: login.php');
            }else{
                echo '<div class="error">error al crear el usuario</div>';
            }
        }
        $conn -> close();
    }
}
