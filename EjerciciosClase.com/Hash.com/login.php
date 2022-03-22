<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
        }
        td{
            border: 1px solid black;
        }
    </style>


</head>
<body>

        <?php

            //usuario y contraseña que llegan del formulario
            $usuario    = $_POST["usuario"];
            $contrasena = $_POST["contrasena"];

            //datos de la base de datos
            $usuarioBD    = "UsuarioBD";
            $contrasenaBD = "secret";
            $nombreBD     = "MiEmpresa";
            $nombreTablaBD= "Usuariosdb";

            // Crear conexion con la base datos
            $conexion = mysqli_connect("localhost", $usuarioBD, $contrasenaBD, $nombreBD);

            $hash = hash("md5",$contrasena);

            //echo "<h1>$contrasena $hash </h1>";


            //query que enviamos a la base de datos
            $sqlQuery = "SELECT * FROM Usuariosdb
            WHERE usuario=\"$usuario\" AND pass = \"$hash\" ";

            //enviamos la query que inserta el usuario y el password
            //mysqli_query($conexion, $sqlQuery);

            $datos = mysqli_query($conexion, $sqlQuery);
            
            if ($datos) {
                //echo "Se ha logueado correctamente";
                $fila = mysqli_fetch_assoc($datos);

                $nombre = $fila["nombre"];
                $apellidos = $fila["apellidos"];

                echo "<h1>$nombre  $apellidos</h1>";
                echo "<hr>";

                echo "<table> ";

                
                echo "  <tr>  
                            <td>Usuario</td>
                            <td>Contraseña</td>
                            <td>Nombre</td>
                            <td>Apellidos</td>
                            <td>DNI</td>
                        </tr>";
                        
                //query que enviamos a la base de datos  TODOS
                $sqlQueryTodosLosDatos = "SELECT * FROM Usuariosdb ";
                $todosDatos = mysqli_query($conexion, $sqlQueryTodosLosDatos);

              
                //iteramos sobre todas las filas de la tabla usuarios
                while( $filaUsuario = mysqli_fetch_assoc($todosDatos)) {
                    
                    $u1 = $filaUsuario["usuario" ];
                    $u2 = $filaUsuario["contrasena" ];
                    $u3 = $filaUsuario["nombre" ];
                    $u4 = $filaUsuario["apellidos" ];
                    $u5 = $filaUsuario["DNI" ];

                    //ponemos los datos de la fila en las celdas del la tabla
                    echo "<tr>";
                    echo "<td> $u1 </td>";
                    echo "<td> $u2 </td>";
                    echo "<td> $u3 </td>";
                    echo "<td> $u4 </td>";
                    echo "<td> $u5 </td>";
                    echo "</tr>";
                
                }

                echo "</table> ";


              } else {
                echo "Error: " . $sqlQuery . "<br>" . mysqli_error($conexion);
                      }



 //query para comprobar si existe un usuario y contraseña
//contraseña o usuario correctos o incorrectos


 $sqlQuery2 = 'SELECT usuario,pass FROM Usuariosdb 
 WHERE usuario = $_POST["usuario"] && pass = $_POST["contrasena"]';

echo "login correcto";

$usuarioExiste = mysqli_query($conexion, $sqlQuery2);

if ($usuarioExiste){
echo "login correcto";
}else{
echo "usuario o contraseña incorrectos"; }
        ?>
    
</body>
</html>