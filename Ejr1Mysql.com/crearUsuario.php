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
    // Usuario y contraseña que llegan del formulario de index.php
$usuario = $_POST['usuario'];
$contrasena =$_POST['contrasena'];

// Datos de mi base de datos.
$servidor = 'localhost';
$usuarioBD = 'BDUsuario';
$contrasenaBD = 'secret';
$nombreBD = 'ExamenBD';
$tablaBD = 'usuarios';

// POPUS por pantalla 
function alert ($mensaje){
    echo "<script> alert ('$mensaje')  </script>"  ;
}
// Crear la conexion con base de datos

$conexion =mysqli_connect("localhost", $usuarioBD, $contrasenaBD, $nombreBD, $tablaBD);
    
// Enviar una query a mi base de datos de insertar datos
$consulta = "INSERT INTO usuarios (usuario, contrasena)
VALUES ('$usuarioBD', '$contrasenaBD')";

//Enviamos la consulta.
if (mysqli_query($conexion, $consulta)){
echo "<h1> Creado correctamente</h1>";
}else{
echo "<h1>Error: " . $consulta . "<br>" . mysqli_error($conexion) ."</h1>";
}

    ?>

</body>
</html>