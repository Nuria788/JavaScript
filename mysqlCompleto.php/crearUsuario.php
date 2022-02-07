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
            $nombre     = $_POST["nombre"];
            $apellidos  = $_POST["apellidos"];
            $dni        = $_POST["dni"];

            //datos de la base de datos. VALORES DE LA CONEXION
            $servidor     = "localhost";
            $usuarioBD    = "UsuarioBD";
            $contrasenaBD = "secret";
            $nombreBD     = "MiEmpresa";
            $nombreTablaBD= "Usuariosdb";

            // Crear conexion con la base datos
            $conexion = mysqli_connect("localhost", $usuarioBD, $contrasenaBD, $nombreBD);

            $hash = hash("md5",$contrasena);

            //echo "<h1>$contrasena $hash </h1>";


            //query que enviamos a la base de datos
            $sqlQuery = "INSERT INTO Usuariosdb (usuario, pass, nombre, apellidos, dni)
            VALUES (\"$usuario\", \"$hash\", \"$nombre\", \"$apellidos\",\"$dni\")";

            //enviamos la query que inserta el usuario y el password
            //mysqli_query($conexion, $sqlQuery);
            
            if (mysqli_query($conexion, $sqlQuery)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sqlQuery . "<br>" . mysqli_error($conexion);
              }

        ?>
    
</body>
</html>