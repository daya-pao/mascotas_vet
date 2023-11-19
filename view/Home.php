
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Epilogue:wght@400;500;700&family=Kumbh+Sans:wght@100;400&family=Poppins:ital,wght@0,100;0,300;0,600;1,300&family=Rubik:wght@300&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
    <script src="../JS/homeScript.js" defer></script>
    <title>VetAnimal</title>
</head>
<body>
    <?php 
    require_once(__DIR__ ."/../componentes/header.php");
    require_once(__DIR__ ."/../componentes/navegacion.php")
    ?>
   
    <div class="contenido">
        <div class="contenido_bienvenida  animate_bienvenida">
            <h2 class="text">Bienvenido a nuestro sistema de registro de vacunas para mascotas</h2>
            <p class= "text">Aquí puedes gestionar la información de tus mascotas y sus vacunas de manera eficiente.</p>
        </div>

        <div class="contenido_sesiones">
            <div class="contenido_cajas">
                <div class="info_cajas">
                    <h2>0</h2>
                    <hr class="line">
                    <div>
                        <img src="../img/usuario.png" class="img">
                        <h2>Usuarios</h2>
                    </div>
                </div>
            </div>
            <div class="contenido_cajas">
               <div class="info_cajas">
                    <h2>0</h2>
                    <hr class="line">
                    <div>
                      <img src="../img/mascota.png" class="img">
                      <h2>Mascotas</h2>
                    </div>  
                </div>
            </div>
            <div class="contenido_cajas">
                <div class="info_cajas">
                    <h2>0</h2>
                    <hr class="line">
                    <div>
                        <img src="../img/vacuna.png" class="img">
                        <h2>ControlV</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="pie-pagina">
             <div class="contenido-pie">
                 <p>AnimaliSalud Todos los derechos reservados.</p>
                 <p>Agradecemos tu confianza y preferencia hacia nosotros</p>
                 <p>Contacto: <a href="tel:3242529895">324-252-9895</a></p>
                 <p>Ubicación: Calle Principal #123, Ciudad, País</p>
             </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
 
