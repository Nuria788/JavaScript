<!DOCTYPE html>
<html lang="es">
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
        
        
        
$conexion = mysqli_connect("localhost", $usuarioBD, $contrasenyaBD, $db);

if (!$conexion) {
    alert("Conexion fallida: " . mysqli_connect_error());
}else{
    alert("Conectado correctamente");
}   //  SIEMPRE ES ASI
      
        ;
        $seleccionar = "SELECT * FROM $tabla WHERE altura = $_POST [$altura]  AND peso= $_POST [$peso]  
            AND edad = $_POST [$edad] ";

        $consulta = mysqli_query($conexion, $seleccionar);



if($datos){

    $fila = mysqli_fetch_assoc($datos);

    $usuario = $fila["usuario"];
    $genero = $fila["genero"];
    
for ($i=1; $i<4; $i++)
    echo "<h3> $i , Nombre: $usuario genero: $genero</h3>";
    ///
}




    ?>



</body>
</html>