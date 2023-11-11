
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../JS/homeScript.js" defer></script>
    <link rel="stylesheet" href="../css/userViw.css">
    <title>VetAnimal</title>
</head>
<body>
    <?php
    include(__DIR__ ."/../componentes/header.php");
    include(__DIR__ ."/../componentes/navegacion.php")
    ?>
    <h2>Gestion de usuarios</h2>
    <table class="table">
        <tr class="table__tr">
            <th class="table__column">Id</th>
            <th class="table__column">Nombre</th>
            <th class="table__column">Username</th>
            <th class="table__column">Email</th>
            <!-- <th class="table__column">Password</th> -->
            <th class="table__column">Procesos</th>
        </tr>
        <?php require_once(__DIR__ ."/../conexion.php");
        require_once(__DIR__ ."/../controller/UserController.php");
        $userControl = new UserControl();
        $userControl->READ();
        ?>
    </table>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>