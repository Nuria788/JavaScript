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

$hash = hash("md5",$contrasenya);

//echo "<h1>$contrasenya $hash </h1>";


//query que enviamos a la base de datos
$sqlQuery = "INSERT INTO usuariosExamen (usuario, contrasenya, hash_contrasenya, dni, email)
VALUES (\"$usuario\", \"$contrasenya\", \"$hash\", \"$dni\", \"$email\")";

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