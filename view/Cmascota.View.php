<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Epilogue:wght@400;500;700&family=Kumbh+Sans:wght@100;400&family=Poppins:ital,wght@0,100;0,300;0,600;1,300&family=Rubik:wght@300&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/mascotas.V.css">
    <title>Registro de Mascotas</title>
</head>
<body>
    
    <form action="" method="POST" class="form_mascotas">
       <h2>Registro de Mascota</h2>
       <?php   include(__DIR__ ."/../procesos/Cmascotas.php") ?>
        <label class="form_label">Nombre de la Mascota:</label>
        <input type="text" name="nombre"  class="form_input"><br><br>

        <label class="form_label">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento"  class="form_input"><br><br>
        <label class="form_label">Dueño</label>
        <input type="text" name="dueño"  class="form_input"><br><br>

       <label class="form_label">Tipo de Mascota:</label>
        <select name="tipo_mascota" required>
            <option value="1">Perro</option>
            <option value="2">Gato</option>
            <option value="3">Ave</option>
            <option value="4">Otro</option>
        </select><br><br>
       <!--   <label class="form_label">Raza</label>
        <input type="number" name="raza_id"  class="form_input"><br><br>  -->

        <input type="submit" value="Registrar Mascota">
        <button class="btn_atras"><a href="../view/HomeUser.php">ATRAS</a></button>
    </form>
</body>
</html>
