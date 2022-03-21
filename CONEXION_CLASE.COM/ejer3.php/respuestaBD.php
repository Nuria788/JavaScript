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

            //funcion para sacar popups por pantalla
            function alert($mensaje){
                echo "<script> alert(\"$mensaje\") </script>";
            }




            // Crear conexion con la base datos
            $conexion = mysqli_connect("localhost", $usuarioBD, $contrasenaBD, $nombreBD);
            // Check connection
            if (!$conexion) {
                alert("Connection failed: " . mysqli_connect_error());
            }else{
                alert("Connected");
            }

            //query que enviamos a la base de datos
            $sqlQuery = "INSERT INTO usuarios (usuario, password)
            VALUES ('$usuario', '$contrasena')";

            //enviamos la query que inserta el usuario y el password
            if (mysqli_query($conexion, $sqlQuery)) {
                echo "<h1>New record created successfully</h1>";
            } else {
                echo "<h1>Error: " . $sqlQuery . "<br>" . mysqli_error($conexion). "</h1>";
            }

            
            $sqlQuery2 = "SELECT usuario, password FROM usuarios;";

            $datos = mysqli_query($conexion, $sqlQuery2);

            //miramos si los datos tienen mas de 0 fila
            if (mysqli_num_rows($datos) > 0) {
                // output data of each row
                while($fila = mysqli_fetch_assoc($datos)) {
                echo "id: " . $fila["id"]. " - Name: " . $fila["usuario"]. " " . $fila["password"]. "<br>";
                }
            } else {
                echo "0 results";
            }
  






            mysqli_close($conn);












        ?>
    
</body>
</html>