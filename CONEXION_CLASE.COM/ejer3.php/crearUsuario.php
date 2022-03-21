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

            //usuario y contraseña que llegan del formulario
            $usuario    = $_POST["usuario"];
            $contrasena = $_POST["contrasena"];

            //datos de la base de datos
            $usuarioBD    = "ej1User";
            $contrasenaBD = "pass";
            $nombreBD     = "ejercicio1";
            $nombreTablaBD= "usuarios";

            // Crear conexion con la base datos
            $conexion = mysqli_connect("localhost", $usuarioBD, $contrasenaBD, $nombreBD);
        
            //query que enviamos a la base de datos
            $sqlQuery = "INSERT INTO usuarios (usuario, password)
            VALUES ('$usuario', '$contrasena')";

            //enviamos la query que inserta el usuario y el password
            mysqli_query($conexion, $sqlQuery);
            
            

        ?>
    
</body>
</html>