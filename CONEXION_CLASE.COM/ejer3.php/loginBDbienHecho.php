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

            //datos de la base de datos
            $usuarioBD    = "ej1User";
            $contrasenaBD = "pass";
            $nombreBD     = "ejercicio1";
            $nombreTablaBD= "usuarios";

  
            // Crear conexion con la base datos
            $conexion = mysqli_connect("localhost", $usuarioBD, $contrasenaBD, $nombreBD);
            echo "login correcto";
            
            //query para comprobar si existe un usuario y contraseña
            $sqlQuery2 = "SELECT usuario,password FROM usuarios 
                        WHERE usuario = $_POST[\"usuario\"] && password = $_POST[\"contrasena\"];";

            echo "login correcto";
/*
            $usuarioExiste = mysqli_query($conexion, $sqlQuery2);

            if ($usuarioExiste){
                echo "login correcto";
            }else{
                echo "usuario o contraseña incorrectos";

            }*/
            
            


        ?>
    
</body>
</html>