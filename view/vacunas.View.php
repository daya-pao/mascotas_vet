<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Epilogue:wght@400;500;700&family=Kumbh+Sans:wght@100;400&family=Poppins:ital,wght@0,100;0,300;0,600;1,300&family=Rubik:wght@300&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
    <script src="../JS/homeScript.js" defer></script>
    <link rel="stylesheet" href="../css/vacunasView.css">
    <title>VetAnimal</title>
</head>
<body>
    <?php
    require_once(__DIR__ ."/../componentes/header.php");
    require_once(__DIR__ ."/../componentes/navegacion.php");
    ?>
    <div class="titulo_contenido">
     <h2>Gestion de Vacunas</h2>
     <div class="Vacunas_btn">
        <button class="btn_crear"><a href="../view/Cvacunas.View.php">CREAR</a></button>
        <button class="btn_crear"><a href="../view/ControlVacuna.View.php">CREAR CONTROL</a></button>
     </div>
    </div>
    <div class="table_contenido">
        <table class="table">
            <tr class="table__tr">
                <!-- <th class="table_th">Id</th> -->
                <th class="table_th"> nombre Vacuna</th>
                <th class="table_th">procesos</th>
            </tr>
            <?php require_once(__DIR__ ."/../conexion.php");
            require_once(__DIR__ ."/../controller/VacunasController.php");
            $VacunasController = new VacunasController();
            $VacunasController-> ReadVacuna();
            ?>
        </table>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>