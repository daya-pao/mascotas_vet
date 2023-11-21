<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <title>regristo usuario</title>
</head>
<body>
    <div class="banner_mascota">
        
       <form action="" class="form__registros " method="post" id="formRegistro">
            <div class="form__logo">
               <div class="logo"><img src="img/logo.png"class="logotipo" ></div>
               <h2 class="titulo">Registrarse</h2>
               <?php 
               include(__DIR__ ."/procesos/validarRegistro.php");
               ?>
            </div>
            <div class="form__input">
                <div class="form__label">
                 <ion-icon name="person"></ion-icon>
                 <label>Nombre</label>
                </div>
                <input type="text" name="nombre" placeholder="nombre" >
           </div>
           <div class="form__input">
                <div class="form__label">
                 <ion-icon name="person"></ion-icon>
                 <label>Username</label>
                </div>
                <input type="text" name="nombreusuario" placeholder="nombre usuario">
           </div>
           <div class="form__input">
                <div class="form__label">
                 <ion-icon name="mail"></ion-icon>
                 <label>Email</label>
                </div>
                <input type="email" name="email" placeholder="Email" >
           </div>
           <div class="form__input">
                <div class="form__label">
                 <ion-icon name="lock-closed"></ion-icon>
                 <label>Password</label>
                </div>
                <input type="password" name="contraseña" placeholder="contraseña" >
           </div>

           <button type="submit" class="btn_registro" name="registro" value="registro">Registrar</button>
        </form>
   </div>
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </div>
</body>
</html>