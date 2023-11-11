<?php
require_once(__DIR__ . "/../controller/VacunasController.php") ;
require_once(__DIR__ ."/../conexion.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; 
    $nombre = $_POST['nombre'];

    $VacunasController = new VacunasController();
    $result = $VacunasController->Updatevacuna($id, $nombre);

    if ($result) {
        echo '<div class="error">Actualización exitosa</div>';
        header('Location: ../view/vacunas.View.php');
    } else {
        echo '<div class="error">Error al actualiza</div>';
    }
}
?>
