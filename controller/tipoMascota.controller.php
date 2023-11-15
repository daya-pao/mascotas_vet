<?php
require_once(__DIR__ . "/../conexion.php");
require_once(__DIR__ . "/../model/TipoMascota.php");

class TipoMascotaController extends dataconexion {
    public function CreateTipoMascota($nombre) {
        $conn = $this->conexion();

        $nombre = $conn->real_escape_string($nombre);

        $consulta = "INSERT INTO TipoMascota ( nombre) VALUES ('$nombre')";
        $conn->query($consulta);

        return $consulta;
    }
}
?>
