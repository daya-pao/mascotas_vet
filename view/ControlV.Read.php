<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Control.css">
    <title>VetAnimal</title>
</head>
<body>
<body>
    <?php
    require_once(__DIR__ ."/../componentes/header.php");
    require_once(__DIR__ ."/../componentes/navegacion.php");
    ?>
    <div class="titulo_contenido">
     <h2>Control de vacunas</h2>
     <button class="btn_crear"><a href="../view/Cvacunas.View.php">CREAR</a></button>
    </div>
    <div class="table_contenido">
        <table class="table">
            <tr class="table__tr">
                <th class="table_th">Mascota</th>
                <th class="table_th">Vacuna</th>
                <th class="table_th">Fecha</th>
               <!--  <th class="table_th">Dueño</th> -->
                <th class="table_th">procesos</th>
            </tr>
            <?php require_once(__DIR__ ."/../conexion.php");
            require_once(__DIR__ ."/../controller/ControlVacunaController.php");
            $ControlVacunController =new ControlVacunaController();
            $ControlVacunController->ReadControl();
            ?>
        </table>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>