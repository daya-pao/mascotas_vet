
<?php
session_start();
require_once(__DIR__ . "/../controller/mascotasController.php");
require_once(__DIR__ . "/../controller/tipoMascota.controller.php");
require_once(__DIR__ . "/../controller/RazaController.php");
require_once(__DIR__ . "/../conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $mascotacController = new MascotasController();
   $tipomascotaController = new TipoMascotaController();
   $razaController = new RazaController();

   $mascota = new mascota();

   if (empty($_POST['nombre']) || empty($_POST['FechaNacimiento']) || empty($_POST['TipoMascota_id'])|| empty($_POST['Raza_id'])){
      echo '<div class="error">Todos los campos son obligatorios</div>';
   } else {
      $nombre = $_POST['nombre'];
      $FechaNacimiento = $_POST['FechaNacimiento'];
      $tipoMascotaNombre = $_POST['TipoMascota_id'];
      $razanombre=$_POST['Raza_id'];
      $tipo_mascota_id = $mascotacController->obtenerTipoMascotaId($tipoMascotaNombre);
      $raza_id = $mascotacController->obtenerRazaId( $razanombre);

      $user_id = $_SESSION["userId"];

      $tipoMascotatipos =  $tipomascotaController->CreateTipoMascota($tipoMascotaNombre);
      $razamascota = $razaController->CreateRaza($razanombre,$tipo_mascota_id);
      $result = $mascotacController->CreateMascota($nombre, $FechaNacimiento,$user_id,$tipo_mascota_id,$raza_id);

      if(!isset($_SESSION["userid"])){
       /*   header("location: ../login.php"); */
         exit;
      }else{
         if ($result) {
            echo '<div class="error_correcto">Mascota registrada exitosamente</div>';
            header('Location: ../view/HomeUser.php');
         } else {
            echo '<div class="error">Error al registrar la mascota</div>';
         }
      }
   }
}
