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

$usuario    = $_POST["usuario"];
$contrasenya = $_POST["contrasenya"];
$hash_contrasenya = $_POST["hash_contrasenya"];
$dni = $_POST["dni"];
$email = $_POST["email"];

//datos de la base de datos
$usuarioBD= "nombre";
$contrasenyaBD ="apellido";
$host = "localhost";
$db = "examenBD";
$tabla = "usuariosExamen";

//funcion para sacar popups por pantalla
function alert($mensaje){
    echo "<script> alert(\"$mensaje\") </script>";
}

// Crear conexion con la base datos
$conexion = mysqli_connect("localhost", $usuarioBD, $contrasenyaBD, $db);
// Check connection
if (!$conexion) {
    alert("Conexion fallida: " . mysqli_connect_error());
}else{
    alert("Conectado correctamente");
}

$hash = hash("md5",$contrasena);

//echo "<h1>$contrasena $hash </h1>";


//query que enviamos a la base de datos
$sqlQuery = "SELECT * FROM ".$tabla."
WHERE usuario =\"$usuario\" AND contrasenya = \"$hash\" ";

//enviamos la query que inserta el usuario y el password
//mysqli_query($conexion, $sqlQuery);

$datos = mysqli_query($conexion, $sqlQuery);

if ($datos) {
    //echo "Se ha logueado correctamente";
    $fila = mysqli_fetch_assoc($datos);

    $usuario = $fila["usuario"];
    $contrasenya = $fila["contrasenya"];
    $hash_contrasenya = $_fila["hash_contrasenya"];
    $dni = $_fila["dni"];
    $email = $_fila["email"];
    
    echo "<h1>$usuario  $contrasenya</h1>";
    echo "<hr>";

    echo "<table> ";

    
    echo "  <tr>  
                <td>Usuario</td>
                <td>Contraseña</td>
                <td>Hash_contrasenya</td>
                <td>DNI</td>
                <td>Email</td>
            

            </tr>";

    //query que enviamos a la base de datos
    $sqlQueryTodosLosDatos = "SELECT * FROM usuariosExamen ";
    $todosDatos = mysqli_query($conexion, $sqlQueryTodosLosDatos);

    
    //iteramos sobre todas las filas de la tabla usuarios
    while( $filaUsuario = mysqli_fetch_assoc($todosDatos)) {
        
        $u1 = $filaUsuario["usuario" ];
        $u2 = $filaUsuario["contraseya" ];
        $u3 = $filaUsuario["hash_contraseya" ];
        $u4 = $filaUsuario["dni" ];
        $u5 = $filaUsuario["email" ];

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

?>
</body>
</html>