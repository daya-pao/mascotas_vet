
<?php
require_once(__DIR__ . "/../controller/VacunasController.php");
require_once(__DIR__ . "/../conexion.php");
if (isset($_POST['vacuna_delete'])) {
    $vacuna_id = $_POST['vacuna_id'];
    
    $VacunasController = new VacunasController();
    $result = $VacunasController->DeleteVacuna($vacuna_id);
    
    if ($result) {
        echo "eiminación exitosa";
        header('Location: ../view/vacunas.View.php');
    } else {
        echo "Error al eliminar";
    }
}