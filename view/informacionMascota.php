<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/informacion.css">
    <title>Información de Mascota</title>
</head>
<body>

<?php
require_once(__DIR__ . "/../controller/mascotasController.php");
session_start();
if (isset($_SESSION["userId"])) {
    $user_id = $_SESSION["userId"];
    $mascotaController = new MascotasController();
    $informacionMascota = $mascotaController->obtenerInformacionMascotaPorUsuario($user_id);
    if ($informacionMascota) {
        echo '<div class="imagen_fondo">';
        echo '<div class="contenido_informacion">';
        echo '<h1>Información de la Mascota</h1>';
        echo '<h3>Nombre: ' . $informacionMascota['nombre_mascota'] . '</h3>';
        echo '<h3>Fecha de Nacimiento: ' . $informacionMascota['fechaNacimiento'] . '</h3>';
        echo '<h3>Tipo de Mascota: ' . $informacionMascota['tipo_mascota'] . '</h3>';
        echo '<h3>Raza: ' . $informacionMascota['raza'] . '</h3>';
        echo '<h3>Dueño: ' . $informacionMascota['nombre_dueno'] . '</h3>';
        echo '<button><a href="../view/HomeUser.php">ATRAS</a></button>';
        echo '</div>';
        echo '<div>';
    } else {
        echo 'No se encontró información para esta mascota.';
    }
} else {
    echo 'El ID de usuario no está establecido en la sesión.';
}
?>

</body>
</html>
