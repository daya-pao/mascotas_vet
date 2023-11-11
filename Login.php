
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>inicio</title>
</head>
<body>
   <div class="banner_mascota">
      <form action="" class="form__login" id="formInicioSesion" method="post">
            <div class="form__logo">
                <div class="logo"><img src="img/logo.png"class="logotipo" ></div>
                <h1 class="titulo">iniciar sesion</h1>
                <?php  include(__DIR__ . "/procesos/validarLogin.php")?>
            </div>
            <div class="form__input">
                <div class="form__label">
                  <ion-icon name="person"></ion-icon>
                  <label>Usuario:</label>
                </div>
                <input type="text" name="nombreusuario" placeholder="nombre usuario">
            </div>
            <div class="form__input">
                <div class="form__label">
                  <ion-icon name="lock-closed"></ion-icon>
                   <label>Contraseña:</label>
                </div>
                <input type="password" name="contraseña" placeholder="contraseña">
            </div>
            <div class="form__btn">
                <button type="submit" name="login" value="login"class="btn_iniciar">iniciar sesion</button>
                <a href="registro.php"id="mostrarregistro" >Crear cuenta</a>
            </div>
        </form>
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>