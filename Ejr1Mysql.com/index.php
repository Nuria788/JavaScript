<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creación de un Usuario</h1>
    <form action="crearUsuario.php" method="post">
    <p>Introduce el nombre de usuario   <input type="text" name="usuario" placeholder="Pon tu nombre de Usuario" id="usuario"> </p>
    <p>Introduce tu contraseña   <input type="password" name="contrasena" placeholder="Pon tu password" id="contrasena">   </p>
    <input type="submit" value="Enviar">
    <input type="reset" value = "Borrar">
    </form>

    <h1>Login de usuario</h1>
<form action="loginBD.php" method="post">
<p>Intoduce el nombre de usuario   <input type="text" name="usuario" id="usuario">  </p>
<p>Introduce tu contraseña <input type="password" name="contrasena" id="contrasena">  </p>
<input type="submit" value="Enviar">
<input type="reset" value="Borrar">
</form>


</body>
</html>