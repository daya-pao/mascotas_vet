<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/mascota.php");
require_once(__DIR__ ."/../model/TipoMascota.php");
require_once(__DIR__ ."/../model/raza.php");

class MascotasController extends dataconexion{
    

public function CreateMascota($nombre, $FechaNacimiento, $user_id, $tipoMascota_id, $raza_id) {
    $conn = $this->conexion();
    $mascota = new mascota();
    $mascota->nombre = $_POST['nombre'];
    $mascota->FechaNacimiento = $_POST['FechaNacimiento'];
    $tipo_mascota_id = $this->obtenerTipoMascotaId($_POST['TipoMascota_id']);
    $raza_id = $this->obtenerRazaId($_POST['Raza_id']);

    if ($user_id !== null || $tipo_mascota_id !== null || $raza_id !== null) {
        $mascota->userId = $user_id;
        $mascota->tipoMascotaId = $tipo_mascota_id;
        $mascota->razaId = $raza_id;

        $consulta = "INSERT INTO Mascota (nombre, FechaNacimiento, User_id, Tipomascota_id, Raza_id) 
        VALUES ('$mascota->nombre', '$mascota->FechaNacimiento', '$mascota->userId',' $mascota->tipoMascotaId',' $mascota->razaId')";

        $consulta = $conn->query($consulta);

        return $consulta;
    }
}

    
    public function ReadMascota(){
        $conn = $this->conexion();
        $sql = "SELECT m.id, m.nombre, m.fechaNacimiento, s.nombre AS dueño_nombre, 
        tm.nombre AS tipo_mascota_nombre, r.nombre AS raza_nombre
        FROM Mascota m
        JOIN User s ON m.User_id = s.id
        JOIN TipoMascota tm ON m.TipoMascota_id = tm.id
        JOIN Raza r ON m.raza_id = r.id";

        $result = $conn->query($sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $nombre = $row['nombre'];
                $dueñoNombre = $row['dueño_nombre']; 
                $fechaNacimiento = $row['fechaNacimiento'];
                $tipoMascotaNombre = $row['tipo_mascota_nombre'];
                $razaNombre = $row['raza_nombre'];

                echo '<tr>';
               /*  echo '<td>' . $id . '</td>';  */
                echo '<td>' .$nombre. '</td>';
                echo '<td>' .$dueñoNombre. '</td>';
                echo '<td>' .$fechaNacimiento. '</td>';
                echo '<td>' .$tipoMascotaNombre. '</td>';
                echo '<td>' .$razaNombre. '</td>';
                echo '<td class="td_btn">
                <button class= "btn btn_blue" ><a href="../view/actualizarMascota.View.php?updateid='. $id .'">editar</a>
                <div></div>
                </button>
                  <form method="post" action="../procesos/eliminarMascota.php">
                    <input type="hidden" name="mascota_id" value="' . $id . '">
                    <button class="btn btn_red" type="submit" name="Mascotadelete">eliminar</button>
                  </form>
                </td>';
                echo '</tr>';
            }
        }
    }
    public function DeleteMascota($id){
        $conn = $this->conexion();
        $id = mysqli_real_escape_string($conn, $id);
        $sql = "DELETE FROM Mascota WHERE id = '$id'";
        $result = $conn->query($sql);
        return $result;
    }
    
    public function UpdateMascota($id, $nombre, $fechaNacimiento, $tipoMascota_id){
        $conn = $this ->conexion();
        $nombre = mysqli_real_escape_string($conn, $nombre);
        $fechaNacimiento = mysqli_real_escape_string($conn, $fechaNacimiento);
        $tipoMascota_id = $this->obtenerTipoMascotaId($tipoMascota_id);
        $consulta = "UPDATE Mascota SET nombre = '$nombre', FechaNacimiento = '$fechaNacimiento', 
        TipoMascota_id = '$tipoMascota_id'  WHERE id = $id";

        $resultado = $conn->query($consulta);
        
        return $resultado;
    }

    public function obtenerTipoMascotaId( $tipoMascotaNombre){
        $conn = $this->conexion();
        $tipoMascotaNombre = $conn->real_escape_string($tipoMascotaNombre);
        $consulta = "SELECT id FROM TipoMascota WHERE nombre = '$tipoMascotaNombre'";
        $resultado = $conn->query($consulta);
        if($resultado && $resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            return $fila["id"];
        }else{
            return null;
        }
    }
    
    public function obtenerRazaId($razanombre){
        $conn = $this->conexion();
        $razanombre=$conn->real_escape_string($razanombre);
        $consulta = "SELECT id FROM Raza WHERE nombre = '$razanombre'";
        $resultado = $conn->query($consulta);
        if($resultado && $resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            return $fila["id"];
        }else{
            return null;
        }
    }
    // En el controlador de mascotas
    public function obtenerInformacionMascotaPorUsuario($user_id) {
    $conn = $this->conexion();

    // Ajusta la consulta según la estructura de tu base de datos
    $sql = "SELECT m.id, m.nombre, m.fechaNacimiento, tm.nombre AS tipo_mascota, r.nombre AS raza, u.nombre AS nombre_dueno
            FROM Mascota m
            JOIN TipoMascota tm ON m.TipoMascota_id = tm.id
            JOIN Raza r ON m.raza_id = r.id
            JOIN User u ON m.User_id = u.id
            WHERE m.User_id = '$user_id'
            LIMIT 1"; // Limita a 1 porque asumo que solo quieres la información de una mascota

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        return [
            'nombre_mascota' => $row['nombre'],
            'fechaNacimiento' => $row['fechaNacimiento'],
            'tipo_mascota' => $row['tipo_mascota'],
            'raza' => $row['raza'],
            'nombre_dueno' => $row['nombre_dueno'],
        ];
    } else {
        return null; // No se encontró información para esta mascota
    }
}


   /*  public function obtenerInformacionMascota($id) {
        $conn = $this->conexion();
    
        // Asegúrate de que $id no sea nulo antes de usarlo
        if ($id !== null) {
            $id = mysqli_real_escape_string($conn, $id);
    
            $sql = "SELECT m.nombre as nombre_mascota, m.fechaNacimiento, tm.nombre as tipo_mascota, r.nombre as raza, s.nombre as nombre_dueno
                    FROM Mascota m
                    JOIN User s ON m.User_id = s.id
                    JOIN TipoMascota tm ON m.TipoMascota_id = tm.id
                    JOIN Raza r ON m.raza_id = r.id
                    WHERE m.id = '$id'";
    
            $result = $conn->query($sql);
    
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
            }
        }
    
        return null;
    } */
}    