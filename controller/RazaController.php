<?php
require_once(__DIR__ . "/../conexion.php");
require_once(__DIR__ . "/../model/raza.php");

class RazaController extends dataconexion {
    public function CreateRaza($nombre) {
        $conn = $this->conexion();

        $nombre = $conn->real_escape_string($nombre);

        $consulta = "INSERT INTO Raza ( nombre) VALUES ('$nombre')";
        $conn->query($consulta);

        return $consulta;
    }
}
?>
