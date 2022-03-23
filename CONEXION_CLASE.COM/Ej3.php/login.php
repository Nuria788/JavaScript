<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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

    
function alert($mensaje){
    echo "<script> alert(\"$mensaje\") </script>";
}

$conexion = mysqli_connect("localhost", $usuarioBD, $contrasenyaBD, $db);

if (!$conexion) {
    alert("Conexion fallida: " . mysqli_connect_error());
}else{
    alert("Conectado correctamente");
}  
////////////////////////////////////////

$select = "SELECT altura, peso, edad FROM .$tabla";

$datos = mysqli_query($conexion, $select);

//iteramos sobre todas las filas de la tabla usuarios
while($fila = mysqli_fetch_assoc($datos)) {
    
    //si coinciden hemos encontrado el usuario
    if ($fila["usuario"] == $usuario){
        
        //la contraseña estaría bien introducida
        if ($fila["genero"] == $genero){
            echo "<h1> el usuario .$usuario se ha logueado correctamente";
        }else{
            echo "<h1> el password no es correcto</h1>";
        }
    }

}
///////

mysqli_close($conn);


    ?>



</body>
</html>