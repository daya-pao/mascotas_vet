<?php 
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/vacuna.php");

class VacunasController extends dataconexion{
    public function CreateVacuna(vacuna $vacuna){
        $conn = $this ->conexion();
        $vacuna = new vacuna();

        $vacuna->nombre = $_POST['nombre'];

        $consulta = "INSERT INTO Vacuna (nombre) VALUES('$vacuna->nombre')";
        
        $consulta = $conn->query($consulta);

        return $consulta;
    }

    public function ReadVacuna(){
        $conn = $this -> conexion();

        $sql = "SELECT * FROM Vacuna";
        $result = $conn->query($sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $nombre = $row['nombre'];
                echo '<tr>';
                /* echo '<td>' . $id . '</td>'; */
                echo '<td>' . $nombre . '</td>';
                echo '<td class="td_btn">
                <button class= "btn btn_blue" ><a href="../view/actualizarVacuna.php?updateid='.$id.'">editar</a></button>
                  <form method="post" action="../procesos/eliminarvacuna.php">
                    <input type="hidden" name="vacuna_id" value="' . $id . '">
                    <button class="btn btn_red" type="submit" name="vacuna_delete">eliminar</button>
                  </form>
                </td>';
                echo '</tr>';
            }
        }
    }

    public function DeleteVacuna($id){
        $conn = $this -> conexion();

      $id = mysqli_real_escape_string($conn, $id);

      $sql = "DELETE FROM vacuna WHERE id = '$id'";

      $result = $conn->query($sql);

      return $result;
    }

   public function Updatevacuna($id, $nombre) {
    $conn = $this->conexion();

    $nombre = mysqli_real_escape_string($conn, $nombre);

    $consulta = "UPDATE Vacuna SET nombre = '$nombre' WHERE id = $id";

    $resultado = $conn->query($consulta);

    return $resultado;
  } 

}
?>