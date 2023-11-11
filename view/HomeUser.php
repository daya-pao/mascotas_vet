<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeuser.css">
    <title>VetAnimal</title>
</head>
<body>
    <?php
    require_once(__DIR__ ."/../componentes/header.php")
    ?>
    <div class="informacion">
        <div>
            <a href="">
              <div class="border_caja">
                 <img src="../img/mascota.png" class="img">
                 <h5>Registar mascota</h5>
              </div>  
            </a>
            
            <a href="">
               <div class="border_caja">
                  <img src="../img/mascota.png" class="img">
                  <h5>Informacion</h5>
               </div> 
            </a>
        </div>
        <div class="contenido">
            <div class="contenido_bienvenida  animate_bienvenida">
                <h2 class="text">Bienvenido a nuestro sistema de registro de vacunas para mascotas</h2>
                <p class= "text">Aquí puedes gestionar la información de tus mascotas y sus vacunas de manera eficiente.</p>
            </div>
       </div>
    </div>
</body>
</html>