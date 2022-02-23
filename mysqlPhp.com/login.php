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
      // Usuario y contraseña que llegan del formulario index
      $usuario = $_POST ["usuario"];
      $contrasena = $_POST ["contrasena"];
  
      // Datos de la BD.
      $servidor = "localhost";
      $usuarioBD = "UsuarioBD";
      $contrasenaBD = "secret";
      $nombreBD = "MiEmpresa";
  
      // Funcion para sacar popups por pantalla
  
      function alert ($mensaje){
          echo "<script> alert (\"$mensaje\") </script>";
      }
  
      // Crear conexion
  
      $conexion = mysqli_connect ($servidor, $usuarioBD, $contrasenaBD, $nombreBD);
  
      if (!$conexion){
          alert ("Conexión fallida: " . mysqli_connect_error());
      }else{
          alert ("Conectado");
      }
// Consequir Usuarios y pass

$sqlQuery2 ="SELECT usuario, pass FROM Usuarios";
$datos = mysqli_query($conexion, $sqlQuery2);

// Ver todas las filas de la tabla Usuarios

while ($fila = mysqli_fetch_assoc($datos)){
            //Si coinciden usuario y pass
        if ($fila["usuario"] == $usuario){
            //Pass bien introducida
            if ($fila["pass"] == $contrasena){
                echo "<h1> El usuario se ha logueado correctamente </h1>";
            }else{
                echo "<h1> El password no es el correcto </h1>";
            }
        }
}
mysqli_close($conexion);
    ?>
</body>
</html>