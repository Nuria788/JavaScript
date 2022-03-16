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

if (!$conexion) {
    alert("Conexion fallida: " . mysqli_connect_error());
} else {
    alert("Conectado");
}
echo "Login correcto";
// Query para que salgan usuarios y contraseñas.

$consulta1 = "SELECT usuario, contrasena FROM usuarios";
$datos = mysqli_query($conexion, $consulta1);
    //Saber si las filas tienen más de 0 filas
while ($fila = mysqli_fetch_assoc($datos)){
    if ($fila["usuario"] == $usuario){

        if ($fila["contrasena"] == $contrasena) {
            echo "<h1>El usuario se ha logueado correctamente</h1>";
        }else {
            echo "<h1>El usuario se ha logueado incorrectamente</h1>";
        }
    }
}
///----------------------
/*
$sqlQuery2 = "SELECT usuario,password FROM usuarios 
WHERE usuario = $_POST[usuario] && contrasena = $_POST[contrasena]";

echo "login correcto";

$usuarioExiste = mysqli_query($conexion, $sqlQuery2);

if ($usuarioExiste){
echo "login correcto";
}else{
echo "usuario o contraseña incorrectos";

}

*/


    mysqli_close($conexion);
    ?>

</body>
</html>