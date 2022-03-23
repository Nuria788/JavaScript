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
  $altura   = $_POST["altura"];
  $peso = $_POST["peso"];
  $edad    = $_POST["edad"];

  $servidor = "localhost";
  $usuarioBD= "nuria";
  $contrasenyaBD ="nuria";
  $db = "NM";
  $tabla = "tablaNM";  
      


$conexion=mysqli_connect("localhost","nuria","nuria","NM") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"SELECT *
                        FROM tablaNM") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
  echo "Usuario:".$reg['usuario']."<br>";
  echo "altura:".$reg['altura']."<br>";
  echo "Peso:".$reg['peso']."<br>";
  echo "Edad:".$reg['edad']."<br>";
  echo "Genero:".$reg['genero']."<br>";
  echo "Listado:";

  }
  echo "<br>";
  echo "<hr>";
}

mysqli_close($conexion);
?>

</body>
</html>