<?php
require_once(__DIR__ ."/../procesos/eliminarMascota.php");
require_once(__DIR__ ."/../controller/ControlVacunaController.php");
require_once(__DIR__ . "/../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Mascotadelete'])) {
    // Recuperar parámetros
    $mascota_id = $_POST['mascota_id'];

    $ControlVacunController = new ControlVacunaController();
    $result = $ControlVacunController->DeleteControl($mascota_id);

    if ($result) {
        echo "Eliminación exitosa";
    } else {
        echo "Error al eliminar";
    }
}
?>
