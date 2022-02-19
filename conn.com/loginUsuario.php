<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    include 'conexion.php';
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validarLogin = mysqli_query($conexion, 
        "SELECT * FROM Cliente WHERE correo = '$correo' and contrasena = $contrasena");
 
 if (mysqli_num_rows($validarLogin) > 0){ 
     //Si encuentra un dato que escribamos en el formulario de Inicio de Sesion  
    //se encuentra en la Base de Datos nos redirige a la pag de bienvenida
    $_SESSION['usuario'] =$correo;
    header("location: Bienbenido.php");
    exit;
 }
 else{
     echo '
     <script>
        alert("Usuario no existe, verifica los datos");
        windows.location ="index.php;
     
     </script>';
 }
 ?>
</body>
</html>