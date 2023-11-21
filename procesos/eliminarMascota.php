<?php
require_once(__DIR__ . "/../controller/mascotasController.php");
require_once(__DIR__ . "/../controller/ControlVacunaController.php");
require_once(__DIR__ . "/../conexion.php");
if (isset($_POST['Mascotadelete'])) {
    $mascota_id = $_POST['mascota_id'];
    $mascotacController = new MascotasController();
    $ControlVacunaController = new ControlVacunaController();
    $mysqli = (new dataconexion) -> conexion();
    $resultado = $mysqli -> query("select * from controlvacuna where mascota_id = '$mascota_id'");
    if($resultado) {
        // $dataMascota = mysqli_fetch_array($resultado);
        $ControlVacunaController -> DeleteControl($mascota_id);
        $sql = $mascotacController->DeleteMascota($mascota_id);
    }else{
        $sql = $mascotacController->DeleteMascota($mascota_id);
    }
    if ($sql) {
        echo "eiminación exitosa";
        header('Location: ../view/mascotas.View.php');
    } else {
        echo "Error al eliminar";
    }
}