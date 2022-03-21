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

//Datos de la BBDD

$direccion_servidor="localhost";
$nombre_bd="ejercicioRandom";
$usuario="USUARIOX";
$password="contrasena";

//conexion

$conexion=mysqli_connect($direccion_servidor, $usuario, $password,$nombre_bd);

//consulta y la guardamos en resultado
$consulta="select * from random";

$resultado=mysqli_query($conexion , $consulta);

$fila=mysqli_fetch_row($resultado);

echo $fila[0];



?>


</body>
</html>