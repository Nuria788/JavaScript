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

            
            //query para conseguir usuarios y contraseñas
            $sqlQuery2 = "SELECT usuario, password FROM usuarios;";

            $datos = mysqli_query($conexion, $sqlQuery2);
            
            //iteramos sobre todas las filas de la tabla usuarios
            while($fila = mysqli_fetch_assoc($datos)) {
                
                //si coinciden hemos encontrado el usuario
                if ($fila["usuario"] == $usuario){
                    
                    //la contraseña estaría bien introducida
                    if ($fila["password"] == $contrasena){
                        echo "<h1> el usuario se ha logueado correctamente";
                    }else{
                        echo "<h1> el password no es correcto</h1>";
                    }
                }
    
            }
            mysqli_close($conn);




        ?>
    
</body>
</html>