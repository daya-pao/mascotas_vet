<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vacunas.css">
    <title>Registro de Vacunas</title>
</head>
<body>
    <form action="" method="POST" class="form_vacunas">
       <h2>Registro de Vacuna</h2>
       <?php  
       include(__DIR__ ."/../procesos/createVacuna.php");
       ?>
        <label class="form_label">Nombre de la Vacuna:</label>
        <input class="form_input" type="text" name="nombre" required><br><br>
        <div class="btn">
          <input type="submit" value="Registrar Vacuna">
          <button class="btn_atras"><a href="../view/vacunas.View.php">ATRAS</a></button>
        </div>
    </form>
</body>
</html>
