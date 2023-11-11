<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/mascota.php");

class MascotasController extends dataconexion{
    
    public function CREATEMASCOTA(){
        $conn = $this->conexion();
        $mascotas = new mascota();

        
    }
}