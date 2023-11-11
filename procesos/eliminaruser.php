
<?php
require_once(__DIR__ . "/../controller/UserController.php");
require_once(__DIR__ . "/../conexion.php");
if (isset($_POST['userdelete'])) {
    $user_id = $_POST['userid'];
    
    $userControl = new UserControl();
    $result = $userControl->DELETE($user_id);
    
    if ($result) {
        echo "eiminación exitosa";
        header('Location: ../view/user.View.php');
    } else {
        echo "Error al eliminar";
    }
}
