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
     <?php   include(__DIR__ ."/../procesos/Cmascotas.php") ?>
       <h2>Registro de Mascota</h2>
        <label class="form_label">Nombre de la Mascota:</label>
        <input type="text" name="nombre"  class="form_input"><br><br>

        <label class="form_label">Fecha de Nacimiento:</label>
        <input type="date" name="FechaNacimiento"  class="form_input"><br><br>
        <label class="form_label">Dueño</label>
        <input type="text" name="User_id"  class="form_input"><br><br>

       <label class="form_label">Tipo de Mascota:</label>
        <select name="TipoMascota_id" required>
            <option value="perro">Perro</option>
            <option value="gato">Gato</option>
            <option value="ave">Ave</option>
            <option value="conejo">conejo</option>
            <option value="">Otro</option>
        </select><br><br>
        <label class="form_label">Raza</label>
        <input type="text" name="Raza_id" class="form_input"><br><br>

        <input type="submit" value="Registrar Mascota">
        <button class="btn_atras"><a href="../view/Home.php">ATRAS</a></button>
    </form>
</body>
</html>
