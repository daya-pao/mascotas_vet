<?php
require_once(__DIR__ . "/../conexion.php");
require_once(__DIR__ . "/../model/raza.php");
require_once(__DIR__ . "/../controller/mascotasController.php");

class RazaController extends dataconexion {
    public function CreateRaza($nombre , $tipo_mascota_id){
        $conn = $this->conexion();
        $raza = new raza();

        $nombre = $conn->real_escape_string($nombre);
        $tipo_mascota_id = $this->obtenerTipoMascotaId($_POST['TipoMascota_id']);

        if ($tipo_mascota_id !== null){
            $raza->tipoMascotaId= $tipo_mascota_id;

            $consulta = "INSERT INTO Raza ( nombre ,TipoMascota_id) VALUES ('$nombre','  $raza->tipoMascotaId')";
            $conn->query($consulta);

            return $consulta;
        }   
    }

    public function obtenerTipoMascotaId( $tipoMascotaNombre){
        $conn = $this->conexion();
        $tipoMascotaNombre = $conn->real_escape_string($tipoMascotaNombre);
        $consulta = "SELECT id FROM TipoMascota WHERE nombre = '$tipoMascotaNombre' ";
        $resultado = $conn->query($consulta);
        if($resultado && $resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            return $fila["id"];
        }else{
            return null;
        }
    }
}

?>
