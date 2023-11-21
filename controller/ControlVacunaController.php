<?php 
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/ControlVacuna.php");

class ControlVacunaController extends dataconexion{

    public function CreateControl($nombreMascota ,$mascota_id,$nombreVacuna,$vacuna_id , $fecha){
        $conn = $this ->conexion();
        $ControlVacuna = new controlvacuna();
        $mascota_id =$this->obtenerMascotaId($_POST['Mascota_id']);
        $vacuna_id = $this->obtenerVacunaId($_POST['Vacuna_id']);
        $ControlVacuna->fecha=$_POST['fecha'];

        if($mascota_id !== null || $vacuna_id !== null){
            $ControlVacuna->mascotaId=$mascota_id;
            $ControlVacuna->vacunaId=$vacuna_id;


            $consulta = "INSERT INTO ControlVacuna (Mascota_id ,Vacuna_id ,fecha) 
            VALUES ('$ControlVacuna->mascotaId','$ControlVacuna->vacunaId','$ControlVacuna->fecha')";
            
            $consulta = $conn->query($consulta);
    
            return $consulta;
        }
    }
    public function ReadControl(){
        $conn = $this->conexion();
        $sql = "SELECT  m.nombre AS mascota_nombre, v.nombre AS vacuna_nombre, cv.fecha
        FROM ControlVacuna cv
        JOIN Mascota m ON cv.Mascota_id = m.id
        JOIN Vacuna v ON cv.Vacuna_id = v.id
        /* JOIN User s ON m.User_id = s.id */";
        $result = $conn->query($sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $mascotaNombre = $row['mascota_nombre'];
                $vacunaNombre = $row['vacuna_nombre'];
                $fecha = $row['fecha'];
                /* $dueñoNombre = $row['dueño_nombre']; */
                echo '<tr>';
                echo '<td>' . $mascotaNombre . '</td>';
                echo '<td>' . $vacunaNombre . '</td>';
                echo '<td>' . $fecha. '</td>';
                /* echo '<td>' . $dueñoNombre . '</td>'; */ 
                echo '<td class="td_btn">
                 <button class= "btn btn_blue" ><a href="../view/actualizarMascota.View.php?updateid="">editar</a>
                 <div></div>
                 </button>
                   <form method="post" action="../procesos/eliminarControl.php">
                     <input type="hidden" name="mascota_id" value="">
                     <button class="btn btn_red" type="submit" name="Mascotadelete">eliminar</button>
                   </form>
                 </td>';
                echo '</tr>';
            }
        }
    
    }
    public function DeleteControl($mascota_id){
        $conn = $this->conexion();
        $mascota_id = mysqli_real_escape_string($conn, $mascota_id);
        $sql = "DELETE FROM ControlVacuna WHERE mascota_id = '$mascota_id'";
        $result = $conn->query($sql);
        return $result;
    }



    public function obtenerMascotaId($nombreMascota) {
        $conn = $this->conexion();
        $nombreMascota = $conn->real_escape_string($nombreMascota);
        $consulta = "SELECT id FROM Mascota WHERE nombre = '$nombreMascota'";
        $resultado = $conn->query($consulta);
        if ($resultado && $resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            return $fila['id'];
        } else {
            return null;
        }
    }
    
    public function obtenerVacunaId($nombreVacuna) {
        $conn = $this->conexion();
        $$nombreVacuna = $conn->real_escape_string($nombreVacuna);
        $consulta = "SELECT id FROM Vacuna WHERE nombre = '$nombreVacuna'";
        $resultado = $conn->query($consulta);
        if ($resultado && $resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            return $fila['id'];
        } else {
            return null;
        }
    }
}