<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/mascota.php");

class MascotasController extends dataconexion{
    
    public function CreateMascota(){
        $conn = $this ->conexion();
        $mascota = new mascota();

        $user_id = $this->obtenerUserId($_POST['dueño']);
        $mascota->nombre = $_POST['nombre'];
        $mascota->FechaNacimiento = $_POST['fecha_nacimiento'];
        $mascota->tipoMascotaId=$_POST['tipo_mascota'];
         
        if ($user_id !== null) {
            // Asignar use
            $mascota->userId = $user_id;


            $consulta = "INSERT INTO Mascota (nombre ,FechaNacimiento ,User_id,TipoMascota_id)) 
            VALUES('$mascota->nombre'  ,'$mascota->FechaNacimiento' ,'$mascota->userId,' $mascota->tipoMascotaId')";
            
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
}