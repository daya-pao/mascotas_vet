<?php
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
} else {
   echo "error";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Epilogue:wght@400;500;700&family=Kumbh+Sans:wght@100;400&family=Poppins:ital,wght@0,100;0,300;0,600;1,300&family=Rubik:wght@300&family=Space+Mono:wght@700&display=swap" rel="stylesheet">
    <title>actualizar Vacuna</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #bdb9b9;
    }
    a{
        text-decoration: none;
        color:  #f4f4f4;
    }
    h2 {
        color: #333;
        text-align: center;
    }
    form {
        max-width: 400px;
        margin: 11vw auto;
        padding: 40px;
        background-color: #f4f4f4;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    label {
        display: block;
        margin-top: 10px;
    }
    input[type="text"],
    input[type="date"]{
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    button {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        margin-top: 2vw;
        border-radius: 3px;
        cursor: pointer;
       
    }
    button:hover {
        background-color: #555;
    }
    input[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        margin-top: 2vw;
        border-radius: 3px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #555;
    }
    .form_input {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
.botones{
    display: flex;
    justify-content: space-around;
}
</style>
<body>
    <form method="POST" action="../procesos/actualizarvacuna.php">
        <input type="hidden" name="id" value="<?= $id ?>">
        <h2>Actualizar Datos</h2>
        <label>Nombre de la vacuna:</label>
        <input type="text" name="nombre" value="" required class="form_input"><br>
       <!--  <label>fecha vencimiento:</label>
        <input type="date" name="fecha_nacimiento" value="" required class="form_input"><br> -->
        <div class="botones">
            <input type="submit" value="update">
            <button><a href="../view/user.View.php">ATRAS</a></button>
        </div>
        
    </form>
</body>
</html>