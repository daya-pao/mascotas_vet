<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/controlV.css">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Epilogue:wght@400;500;700&family=Kumbh+Sans:wght@100;400&family=Poppins:ital,wght@0,100;0,300;0,600;1,300&family=Rubik:wght@300&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
    <title>Control Vacunas</title>
</head>
<body>
<div class="formulario_control_vacuna">
        <?php include(__DIR__ ."/../procesos/ControlVacuna.php")?>
        <form method="POST" action="">
          <h2>Registro de Control de Vacuna</h2>
            <label>Nombre Mascota:</label>
            <input type="text" name="nombreMascota" required>

            <label>Nombre Vacuna:</label>
            <input type="text"  name="NombreVacuna" required>

            <label>Fecha:</label>
            <input type="date" name="Fecha" required>

            <button type="submit">Registrar Control de Vacuna</button>
        </form>
    </div>
</body>
</html>