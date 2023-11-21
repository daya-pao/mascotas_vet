<?php
require_once(__DIR__ . "/../conexion.php");
require_once(__DIR__ ."/../controller/ControlVacunaController.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $ControlVacunController =new ControlVacunaController();
    $ControlVacuna = new controlvacuna();
    
    if(empty($_POST['Mascota_id']) || empty($_POST['Vacuna_id']) || empty($_POST['fecha'])){
        echo '<div class="error">Todos los campos son obligatorios</div>';
    }else{
        $nombreMascota = $_POST['Mascota_id'];
        $nombreVacuna =  $_POST['Vacuna_id'];
        $fecha = $_POST['fecha'];
        $mascota_id =$ControlVacunController->obtenerMascotaId($nombreMascota);
        $vacuna_id = $ControlVacunController->obtenerVacunaId($nombreVacuna);

        $result = $ControlVacunController->CreateControl($nombreMascota,$mascota_id,$nombreVacuna, $vacuna_id, $fecha);

        if ($result) {
           echo '<div class="error_correcto">control registrado  exitosamente</div>';
           header('Location: ../view/ControlV.Read.php');
        } else {
           echo '<div class="error">Error al registrar el control</div>';
        }
    }
}

