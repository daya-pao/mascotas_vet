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
    public function ReadTipoMascota() {
        $conn = $this->conexion();
        $sql = "SELECT * FROM TipoMascota";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            echo '<table>';
            echo '<tr><th>ID</th><th>Nombre</th></tr>';
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $nombre = $row['nombre'];

                echo '<tr>';
                echo '<td>' . $id . '</td>';
                echo '<td>' . $nombre . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'No hay tipos de mascota registrados.';
        }
    }
}
?>
