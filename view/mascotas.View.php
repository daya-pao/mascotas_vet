<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Epilogue:wght@400;500;700&family=Kumbh+Sans:wght@100;400&family=Poppins:ital,wght@0,100;0,300;0,600;1,300&family=Rubik:wght@300&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
    <script src="../JS/homeScript.js" defer></script>
    <link rel="stylesheet" href="../css/mascotas.css">
    <title>VetAnimal</title>
</head>
</style>
<body>
    <?php
    require_once(__DIR__ ."/../componentes/header.php");
    require_once(__DIR__ ."/../componentes/navegacion.php");
    ?>
    <div class="titulo_contenido">
        <h2>Gestion de Mascotas</h2>
        <button class="btn_crear"><a href="../view/Cmascota.View.php">CREAR</a></button>
    </div>
    <div class="table_contenido">
        <table class="table">
            <tr class="table__tr">
                <!-- <th class="table_th">Id</th> -->
                <th class="table_th">Nombre mascota</th>
                <th class="table_th">Fecha Nacimiento</th>
                <th class="table_th">Dueño</th>
                <th class="table_th">Tipo Mascota</th>
                <th class="table_th">Raza</th>
                <!-- <th class="table_th">Foto</th> -->
                <th class="table_th">Procesos</th>
            </tr>
            <?php require_once(__DIR__ ."/../conexion.php");
             require_once(__DIR__ ."/../controller/mascotasController.php");
             $mascotacController = new MascotasController();
             $mascotacController->ReadMascota();
        ?>
        </table>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>