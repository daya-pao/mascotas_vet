<?php
require_once(__DIR__ . "/../controller/UserController.php");
require_once(__DIR__ . "/../conexion.php");
session_start();
if (!empty($_POST["login"])) {

    $nombreusuario= $_POST['nombreusuario'];
    $contraseña = $_POST['contraseña'];

    if (empty($nombreusuario) || empty($contraseña)){
        echo '<div class="error">Los campos están vacíos</div>';
    }else{
        $userControl = new UserControl();
        $user = new user();
        $conn = $userControl->conexion();

        $nombreusuario = mysqli_real_escape_string($conn, $nombreusuario);
        $sql = "SELECT * FROM User WHERE username = '$nombreusuario'";
        $resultado = $conn->query($sql);

        if ($resultado -> num_rows == 1){
            $row = $resultado -> fetch_assoc();
            if (password_verify($contraseña, $row['password'])) {
                $_SESSION['userId'] = $row['id'];
                $_SESSION['nombreUsuario'] = $row['nombre']; 
                $_SESSION['rolUsuario'] = $row['Role_id'];
                if ($_SESSION['rolUsuario'] == 1) {
                    header('Location: view/Home.php');
                    // $_SESSION["authenticated"] = 'true';
                    // $_SESSION["userId"]= $user->id;
                } elseif ($_SESSION['rolUsuario'] == 2) {
                    header("Location: view/HomeUser.php");
                } 
                exit;
            } else{
                echo '<div class="error id="incorrecto">La contraseña es incorrecta</div>';
            }
        }else {
            echo '<div class="error id="usuario">Usuario no encontrado</div>';
        }
        $conn->close();
    }
}


