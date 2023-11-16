<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/mascota.php");
require_once(__DIR__ ."/../model/TipoMascota.php");
require_once(__DIR__ ."/../model/raza.php");

class MascotasController extends dataconexion{
    
    public function CreateMascota($nombre, $fechaNacimiento, $nombreDueño,$user_id,$tipo_mascota_id){
        $conn = $this ->conexion();
        $mascota = new mascota();
        $mascota->nombre = $_POST['nombre'];
        $mascota->FechaNacimiento = $_POST['fecha_nacimiento'];
        $user_id = $this->obtenerUserId($_POST['dueño']);
        $tipo_mascota_id = $this->obtenerTipoMascotaId($_POST['tipo_mascota']);
         
        if ($user_id !== null  && $tipo_mascota_id !== null) {
            $mascota->userId = $user_id;
            $mascota->tipoMascotaId = $tipo_mascota_id;

            $consulta = "INSERT INTO Mascota (nombre, FechaNacimiento, User_id,Tipomascota_id) 
            VALUES ('$mascota->nombre', '$mascota->FechaNacimiento', '$mascota->userId',' $mascota->tipoMascotaId')";
            
            $consulta = $conn->query($consulta);
    
            return $consulta;

        }
    }
    public function obtenerUserId($nombreDueño) {
        $conn = $this->conexion();
        $nombreDueño = $conn->real_escape_string($nombreDueño);
        $consulta = "SELECT id FROM User WHERE nombre = '$nombreDueño'";
        $resultado = $conn->query($consulta);
        if ($resultado && $resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            return $fila['id'];
        } else {
            return null;
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