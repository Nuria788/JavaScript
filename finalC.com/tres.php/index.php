<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Creación de nuevo usuario</h1>

<form action="crearUsuario.php" method="post">
    <p>Introducir nombre de usuario    <input type="text" name="usuario"    maxlength="32"></p>
    <p>Introducir contraseña <input type="password" name="contrasenya" maxlength="32"></p>
    <input type="submit" value="Enviar">
</form>

<h1>Login correcto e insertar usuarios</h1>

<form action="login.php" method="post">
    <p>Introducir nombre de usuario    <input type="text" name="usuario"    maxlength="32"></p>
    <p>Introducir contraseña <input type="password" name="contrasenya" maxlength="32"></p>
    <input type="submit" value="Enviar">
</form>



</body>
</html>
