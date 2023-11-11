<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/mascotas.V.css">
    <title>Registro de Mascotas</title>
</head>
<body>
    <button><a href="../view/mascotas.View.php">ATRAS</a></button>
    
    <form action="procesarregistromascota.php" method="POST" class="form_mascotas">
       <h2>Registro de Mascota</h2>
        <label class="form_label">Nombre de la Mascota:</label>
        <input type="text" name="nombre"  class="form_input"><br><br>

        <label class="form_label">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento"  class="form_input"><br><br>

        <label class="form_label">Tipo de Mascota:</label>
        <select name="tipo_mascota" required>
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
            <option value="Ave">Ave</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label class="form_label">ID de Usuario:</label>
        <input type="number" name="user_id"  class="form_input"><br><br>

        <label class="form_label">ID de Raza:</label>
        <input type="number" name="raza_id"  class="form_input"><br><br>

        <label class="form_label">Foto de la Mascota:</label>
        <input type="file" name="foto" class="form_input"><br><br>

        <input type="submit" value="Registrar Mascota">
    </form>
</body>
</html>
