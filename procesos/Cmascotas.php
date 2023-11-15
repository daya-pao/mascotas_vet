<?php
require_once(__DIR__ . "/../controller/mascotasController.php");
require_once(__DIR__ . "/../controller/tipoMascota.controller.php");

require_once(__DIR__ . "/../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $mascotacController = new MascotasController();
   $tipomascotaController = new TipoMascotaController();

   $mascota = new mascota();

   if (empty($_POST['nombre']) || empty($_POST['fecha_nacimiento']) || empty($_POST['dueño']) || empty($_POST['tipo_mascota'])){
      echo '<div class="error">Todos los campos son obligatorios</div>';
   } else {
      $nombre = $_POST['nombre'];
      $fechaNacimiento = $_POST['fecha_nacimiento'];
      $nombreDueño = $_POST['dueño'];
      $tipoMascotaNombre = $_POST['tipo_mascota'];
      $user_id = $mascotacController->obtenerUserId($nombreDueño);

      $tipoMascotaId =  $tipomascotaController->CreateTipoMascota($tipoMascotaNombre);
      $result = $mascotacController->CreateMascota($nombre, $fechaNacimiento, $nombreDueño, $tipoMascotaId);

      if ($result) {
         echo '<div class="error_correcto">Mascota registrada exitosamente</div>';
      } else {
         echo '<div class="error">Error al registrar la mascota</div>';
      }
   }
}
?>













<!-- require_once(__DIR__ . "/../controller/mascotasController.php");
require_once(__DIR__ ."/../controller/tipoMascota.controller.php");
require_once(__DIR__ . "/../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mascotacController = new MascotasController();
    $tipomascotacontroller = new TipoMascotaController();
    $mascota = new mascota();
    
    if (empty($_POST['nombre']) || empty($_POST['fecha_nacimiento']) || empty($_POST['dueño']) || empty($_POST['tipo_mascota'])){
        echo '<div class="error">Todos los campos son obligatorios</div>';
    } else {
        $nombre = $_POST['nombre'];
        $fechaNacimiento = $_POST['fecha_nacimiento'];
        $dueño = $_POST['dueño'];
        $nombreDueño = $_POST['dueño'];
        $user_id = $mascotacController->obtenerUserId($nombreDueño);
        $mascota->userId = $user_id;
        $tipoMascotaNombre = $_POST['tipo_mascota'];

        // Crear el tipo de mascota y obtener su ID
        $tipoMascotaID = $tipomascotacontroller->CreateTipoMascota($tipoMascotaNombre);

        // Crear la mascota con los datos obtenidos
        $result = $mascotacController->CreateMascota($nombre, $fechaNacimiento, $dueño, $tipoMascotaID);

        if ($result) {
            echo '<div class="error_correcto">Mascota registrada exitosamente</div>';
        } else {
            echo '<div class="error">Error al registrar la mascota</div>';
        }
    }
}
?>
 -->