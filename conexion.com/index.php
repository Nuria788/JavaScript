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

    <form action="conexion.php" method="post">
        <p>Introducir nombre de usuario    <input type="text" name="usuario"    maxlength="32"></p>
        <p>Introducir nombre de contraseña <input type="text" name="contrasena" maxlength="32"></p>
        <input type="submit" value="Enviar">
    </form>


<body>
<h1>Inicia Sesión</h1>
    <form action="compruebaLogin.php" method="POST">
<table>

<tr>

<td class="izq"> Nombre de usuario: </td>
<td class ="der">  <input type="text" name="usuario"></td>
</tr>
<tr>

<td class="izq"> Password: </td>
<td class ="der">  <input type="password" name="contrasena"></td>
</tr>
<tr>
    <td colspan="2">  <input type="submit" name="Enviar" value="LOGIN"> </td>
</tr>
</table>

</body>
</html>
