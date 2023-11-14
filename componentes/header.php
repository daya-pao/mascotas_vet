
<header class="encabezado">
    <div class="perfil">
        <div class="border"><img src="../img/user_vector.png" class="user_ejemplo"></div>
        <div>
          <p >nombre:<?php /* echo $nombreUsuario; */?></p>
          <p>Rol: <?php  /* echo $rolnombre; */?></p>
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
