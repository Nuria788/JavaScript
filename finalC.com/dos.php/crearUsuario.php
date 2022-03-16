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
$contrasenya = $_POST["contrasenya"];

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

//query que enviamos a la base de datos
$sqlQuery = "INSERT INTO usuariosExamen (usuario, contrasenya)
VALUES ('$usuario', '$contrasenya')";

//enviamos la query que inserta el usuario y el password
if (mysqli_query($conexion, $sqlQuery)) {
    echo "<h1>Nuevo usuario creado correctamente</h1>";
} else {
    echo "<h1>Error en insercción de usuario: " . $sqlQuery . "<br>" . mysqli_error($conexion). "</h1>";
}


$sqlQuery2 = "SELECT usuario, contrasenya FROM usuariosExamen;";

$datos = mysqli_query($conexion, $sqlQuery2);

//miramos si los datos tienen mas de 0 fila
if (mysqli_num_rows($datos) > 0) {
    // output data of each row
    while($fila = mysqli_fetch_assoc($datos)) {
    echo "id: " . $fila["id"]. " - Su nombre: " . $fila["usuario"]. " - Su apellido: " . $fila["contrasenya"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</body>
</html>