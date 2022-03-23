<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $edad = $_POST["edad"];



    $conexion = mysqli_connect("localhost", "raul2", "raul", "RG");



    $sqlQuery = "SELECT * FROM tabla_RG WHERE altura= \"$altura\" AND peso=\"$peso\" AND edad=\"$edad\"  ";




    $datos = mysqli_query($conexion, $sqlQuery);



    if ($datos) {

        $fila = mysqli_fetch_assoc($datos);

        $usuario = $fila["nombre_usuario"];
        $genero = $fila["genero"];


        echo "<h3>Nombre: $usuario genero: $genero</h3>";
        echo "<h3>Nombre: $usuario genero: $genero</h3>";
        echo "<h3>Nombre: $usuario genero: $genero</h3>";
    }







    ?>

</body>

</html>