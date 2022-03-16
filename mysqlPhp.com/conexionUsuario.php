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

    // Usuario y contraseña que llegan del formulario index
    $usuario = $_POST ["usuario"];
    $contrasena = $_POST ["contrasena"];

    // Datos de la BD.
    $servidor = "localhost";
    $usuarioBD = "UsuarioBD";
    $contrasenaBD = "secret";
    $nombreBD = "MiEmpresa";

    // Funcion para sacar popups por pantalla

    function alert ($mensaje){
        echo "<script> alert (\"$mensaje\") </script>";
    }

    // Crear conexion

    $conexion = mysqli_connect ($servidor, $usuarioBD, $contrasenaBD, $nombreBD);

    if (!$conexion){
        alert ("Conexión fallida: " . mysqli_connect_error());
    }else{
        alert ("Conectado");
    }
//----------------------------------
    // Envío de datos a la BD.
    $sqlQuery = "INSERT INTO Usuarios (usuario, pass)
        VALUES (\"$usuario\", \"$contrasena\")";


    // Envio de la query

    if (mysqli_query($conexion, $sqlQuery)){
        echo "<h1>Creado satisfactoriamente</h1>";
    }else {
        echo "<h1>Error: " . $sqlQuery . "<br>" . mysqli_error($conexion) .  "</h1>";
    }
//----------------------------------------------

// Ver usuarios y contreñas
$sqlQuery2 = "SELECT usuario, pass FROM Usuarios;";
$datos = mysqli_query($conexion, $sqlQuery2);

// Ver si $datos tienen mas de 0 filas

if (mysqli_num_rows($datos) > 0) {
    while ($fila = mysqli_fetch_assoc($datos)){
        echo "id: " . $fila["id"] . " - Name: " . $fila["usuario"] . " Contraseña: " . $fila["pass"] . "<br>";
    }
}else {
    echo "0 resultados";
}

mysqli_close($conexion);


    ?>
</body>
</html>