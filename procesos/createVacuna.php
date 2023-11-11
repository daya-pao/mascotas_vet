<?php
require_once(__DIR__ . "/../controller/VacunasController.php");
require_once(__DIR__ . "/../conexion.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vacunasController = new VacunasController();
    $vacuna = new vacuna();
    
    if (empty($_POST['nombre'])) {
        echo '<div class="error">El campo Nombre de la Vacuna es obligatorio</div>';
    }else{
        $result = $vacunasController->CreateVacuna($vacuna);

        if ($result) {
            echo '<div class="error_correcto">Vacuna registrada exitosamente</div>';
        } else {
            echo '<div class="error">Error al registrar la vacuna</div>';
        }
    }
}
?>
