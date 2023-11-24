<?php
require_once(__DIR__ . "/../controller/mascotasController.php") ;
require_once(__DIR__ ."/../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; 
    $nombre = $_POST['nombre'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $tipo_mascota_id = $_POST['TipoMascota_id'];

    $mascotacController = new  MascotasController();
    $result = $mascotacController->UpdateMascota($id , $nombre , $FechaNacimiento,$tipo_mascota_id);
    if ($result) {
        echo '<div class="error">Actualización exitosa</div>';
        header('Location: ../view/mascotas.View.php');
    } else {

        echo '<div class="error">Error al actualiza</div>';
    }
}

?>
