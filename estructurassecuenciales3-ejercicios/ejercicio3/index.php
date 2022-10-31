<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Ingrese su Nombre:</label>
        <input type="text" name="persona">
        <button>Mostrar</button>

        
    </form> <br><br>
</body>
</html>

<?php
    /* Ingrese por teclado su nombre, y luego imprima como salida el siguiente mensaje "Bienvenidos al curso de PHP, Hola! Juan" */

    $nombre = $_REQUEST['persona'];
    echo "<strong>Bienvenidos al curso de PHP, Hola!</strong> " . $nombre;
?>