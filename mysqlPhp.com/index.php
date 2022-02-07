<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Creación de nuevo Usuario</h1>
<form action="conexionUsuario.php" method = "post">
    <p> Introduce nombre de usuario
        <input type="text" name="usuario" maxlength="32">
    </p>
    <p> Introduce tu contraseña 
        <input type="text" name = "contrasena" maxlength="32">
    </p>
    <input type="submit" value ="Enviar">
</form>

<h1>Login del usuario</h1>
<form action="login.php">
    <p>Login de usuario
        <input type="text" name = "usuario" maxlength="32">
    </p>
    <p> Introduce tu contraseña 
        <input type="text" name = "contrasena" maxlength="32">
    </p>
    <input type="submit" value ="Enviar">   
</form>


</body>
</html>