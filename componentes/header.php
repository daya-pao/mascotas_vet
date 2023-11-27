<?php 
session_start();
if (isset($_SESSION['nombreUsuario']) && isset($_SESSION['rolUsuario'])) {
    $nombreUsuario = $_SESSION['nombreUsuario'];
    $rolUsuario = $_SESSION['rolUsuario']; 
    $rolnombre = ($rolUsuario == 1) ? 'User' : 'Admin';
} else {
    echo "error";
}
?>
<header class="encabezado">
    <div class="perfil">
        <div class="border"><img src="../img/user_vector.png" class="user_ejemplo"></div>
        <div>
          <p ><?php echo $_SESSION['nombreUsuario']?></p>
          <p ><?php echo $_SESSION['rolUsuario'] == 1 ? 'admin' : 'user'?></p>
        </div>
    </div>
    <div class="nav_contenido">
           <div class="logo"><img src="../img/logo.png"class="logotipo" ></div>
           <h1 class="titulo">vetAnimal</h1>
       </div>
    <form action="../cerrarS.php" method="post">
        <button class="cerrar_sesion" type="submit" name="cerraSecion">Cerrar Sesión</button>
    </form>
</header>
