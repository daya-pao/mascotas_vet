<?php
require_once(__DIR__ . "/../controller/UserController.php") ;
require_once(__DIR__ ."/../conexion.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; 
    $nombre = $_POST['nombre'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $userControl = new UserControl();
    $result = $userControl->UPDATE($id, $nombre, $username, $email, $contraseña);

    if ($result) {
        echo '<div class="error">Actualización exitosa</div>';
        header('Location: ../view/user.View.php');
    } else {

        echo '<div class="error">Error al actualiza</div>';
    }
}
?>

