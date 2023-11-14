<?php
require_once(__DIR__ . "/../controller/mascotasController.php");
require_once(__DIR__ ."/../controller/tipoMascota.controller.php");
require_once(__DIR__ . "/../conexion.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mascotacController = new MascotasController();
    $tipomascotacontroller = new TipoMascotaController();
    $mascota = new mascota();
    
    if (empty($_POST['nombre']) || empty($_POST['fecha_nacimiento']) ||empty($_POST['dueño']) || empty($_POST['tipo_mascota'])){
        echo '<div class="error">El campo son obligatorio</div>';
    }else{
        $nombreDueño = $_POST['dueño'];
        $user_id =$mascotacController-> obtenerUserId($nombreDueño);
        $mascota->userId = $user_id;
        $tipoMascotaNombre = $_POST['tipo_mascota'];
    

        $result = $mascotacController->CreateMascot();
        $tipoMascotaID = $tipoMascotacontroller->CreateTipoMascota($tipoMascotaNombre);
        

        if ($result) {
            echo '<div class="error_correcto">mascota  registrada exitosamente</div>';
        } else {
            echo '<div class="error">Error al registrar la mascota</div>';
        }
    }
}
?>