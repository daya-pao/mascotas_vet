<?php
require_once(__DIR__ . "/../controller/mascotasController.php");
require_once(__DIR__ . "/../conexion.php");
if (isset($_POST['Mascotadelete'])) {
    $mascota_id = $_POST['mascota_id'];
    
    $mascotacController = new MascotasController();
    $sql= $mascotacController->DeleteMascota($mascota_id);
    
    if ($sql) {
        echo "eiminación exitosa";
        header('Location: ../view/mascotas.View.php');
    } else {
        echo "Error al eliminar";
    }
}