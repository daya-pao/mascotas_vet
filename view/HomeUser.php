<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Epilogue:wght@400;500;700&family=Kumbh+Sans:wght@100;400&family=Poppins:ital,wght@0,100;0,300;0,600;1,300&family=Rubik:wght@300&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/homeuser.css">
    <title>VetAnimal</title>
</head>
<body>
    <?php
   /*  session_start(); */
    require_once(__DIR__ ."/../componentes/header.php");
   /*  if(isset($_SESSION["userId"])){
        echo "user id " .$_SESSION["userId"];
    }else{
        echo "user id no esta establecido";
     }  */
    ?>
    <div class="informacion">
        <div class="informacion_mascota">
            <a href="../view/Cmascota.View.php">
              <div class="border_caja">
                 <img src="../img/mascota.png" class="img">
                 <h5>Registar mascota</h5>
              </div>  
            </a>
            
            <a href="">
               <div class="border_caja">
                  <img src="../img/information.png" class="img">
                  <h5>Informacion</h5>
               </div> 
            </a>
        </div>
        <div class="contenido">
            <div class="contenido_bienvenida  animate_bienvenida">
                <h1 class="text">Bienvenido a nuestro sistema de registro de vacunas para mascotas</h1>
                <p class= "text">Aquí puedes gestionar la información de tus mascotas y sus vacunas de manera eficiente.</p>
            </div>
       </div>
    </div>
</body>
</html>