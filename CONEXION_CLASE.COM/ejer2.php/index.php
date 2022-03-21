<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            background-color:lightblue;
        }
    </style>
</head>
<body>
    
    <h1>Creación de nuevo usuario</h1>

    <form action="respuestaBD.php" method="post">
        <p>Introducir nombre de usuario    <input type="text" name="usuario"    maxlength="32"></p>
        <p>Introducir contraseña <input type="text" name="contrasena" maxlength="32"></p>
        <input type="submit" value="Enviar">
    </form>

    <h1>Login de usuario</h1>

    <form action="loginBD.php" method="post">
        <p>Introducir nombre de usuario    <input type="text" name="usuario"    maxlength="32"></p>
        <p>Introducir contraseña <input type="text" name="contrasena" maxlength="32"></p>
        <input type="submit" value="Enviar">
    </form>

    

</body>
</html>