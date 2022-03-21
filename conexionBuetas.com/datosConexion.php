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
$nombre_bd="ejercicio"; // No la pongo en conexion por si hay un error
$usuario="nuria1";
$password="secret";

$conexion=mysqli_connect($direccion_servidor,$usuario,$password,$nombre_bd);

if ($conexion){
    echo "Conectado correctamente con la  BBDD";
}else{
    echo "Algo fallo, revisar!";
}
    exit ();
    
  
  
  ?>
</body>
</html>