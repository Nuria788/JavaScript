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

include 'conexion.php';

//usuario y contraseña que llegan del formulario
$nombre     = $_POST["nombre"];
$apellido   = $_POST["apellido"];
$contrasena = $_POST["contrasena"];
$usuario    = $_POST["usuario"];
$correo  = $_POST["correo"];
$hash = hash('sha512', $contrasena);


// Query que creemos para guardarla en una variable
//  En contrasena he puesto el hash
$insertar = "INSERT INTO Cliente (nombre, apellido, contrasena, usuario) 
              VALUES ('$nombre', '$apellido', '$hash', '$usuario')";
    
    

    $ejecutar = mysqli_query($conexion ,$insertar);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
             windows.location = "index.php";
        </script>
       ' ;
    }
    else{
        echo '
        <script>
            alert("INtentalo de nuevo");
             windows.location = "index.php";
        </script>
       ' ;
    }    
// Verificar que no se repita un correo 
/*
$verificar_correo = mysqli_query($conexion, "SELECT * FROM Cientes Where' correo ='$correo'");
if(mysqli_num_rows($verificar_correo)> 0) {
    echo '
    <script>
    alert ("Este correo ya está registrado, intenta con otro");
    window.location = "index.php";
    </script>
';
exit();
}*/



mysqli_close($conexion);
?>

</body>
</html>