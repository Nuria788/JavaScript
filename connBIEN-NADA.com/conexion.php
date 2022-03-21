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

// Union con index

//usuario y contraseña que llegan del formulario
$nombre     = $_POST["nombre"];
$apellido   = $_POST["apellido"];
$usuario    = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$correo  =$_POST['correo'];


$direccion_servidor="localhost";
$usuario="BDUsuario";
$password="secret";
$nombre_bd="ExamenBD"; // No la pongo en conexion por si hay un error

$conexion=mysqli_connect($direccion_servidor,$usuario,$password, $nombre_bd);
// Errores
if (!$conexion) {
    echo "Error: No se puede conectar a MySQL. " . PHP_EOL;
    echo "Error de depuracion; " . mysqli_connect_errno() . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Exito: Se realizó una conexion a MySQL!!!" . PHP_EOL;
echo "Informacion del host: " . mysqli_get_host_info($conexion) . PHP_EOL;




mysqli_close($conexion);
    ?>
</body>
</html>