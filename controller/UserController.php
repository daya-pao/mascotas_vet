<?php
require_once(__DIR__ ."/../conexion.php");
require_once(__DIR__ ."/../model/user.php");


class UserControl extends dataconexion{
  public function CREATE(User $user){ 
   $conn = $this ->conexion();
   $user->nombre = $_POST['nombre'];
   $user->username = $_POST['nombreusuario'];
   $user->email = $_POST['email'];
   $user->password = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
   $user->Role_Id = 1;
   
   $consult = "INSERT INTO User (nombre, username ,email ,password , Role_id)
     VALUES('$user->nombre','$user->username','$user->email','$user->password','$user->Role_Id')";
   $consulta = $conn->query($consult);
   return $consulta;
  }

  public function READ(){
    $conn = $this->conexion();

    $sql = "SELECT * FROM User";
    $result = $conn->query($sql);
    if($result){
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $nombre = $row['nombre'];
        $username = $row['username'];
        $email = $row['email'];
        /* $contraseña = $row['password']; */

        echo '<tr>';
     /*    echo '<td>' . $id . '</td>'; */
        echo '<td>' . $nombre . '</td>';
        echo '<td>' . $username . '</td>';
        echo '<td>' . $email . '</td>';
       /*  echo '<td>' . $contraseña . '</td>'; */
        echo '<td class="td_btn">
        <button class= "btn btn_blue" ><a href="../view/actualizar.View.php?updateid='.$id.'">editar</a>
        <div></div>
        </button>
          <form method="post" action="../procesos/eliminaruser.php">
            <input type="hidden" name="userid" value="' . $id . '">
            <button class="btn btn_red" type="submit" name="userdelete">eliminar</button>
          </form>
        </td>';
        echo '</tr>';
      }
    }
  }

  public function UPDATE($id , $nombre , $username , $email , $contraseña){
    $conn = $this->conexion();

    $nombre = mysqli_real_escape_string($conn ,$nombre);
    $username = mysqli_real_escape_string( $conn ,$username);
    $email = mysqli_real_escape_string( $conn , $email);
    $contraseña = mysqli_real_escape_string($conn , $contraseña);

    $consulta = "UPDATE User SET nombre = '$nombre', username = '$username', email = '$email', password = '$contraseña' WHERE id = $id";

    $resultado= $conn->query($consulta);

    return $resultado;
  }
  
  public function DELETE($id){

    $conn = $this->conexion();

    $id = mysqli_real_escape_string($conn, $id);

    $sql = "DELETE FROM User WHERE id = '$id'";

    $result = $conn->query($sql);

    return $result;
  }
    
}
?>
