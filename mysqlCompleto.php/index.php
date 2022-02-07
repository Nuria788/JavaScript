<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class ="superior">
        <form action="crearUsuario.php" method="post">
            <h1> Formulario para crear usuario</h1>
            <p> Usuario     <input type="text" name="usuario" placeholder="Nombre de usuario"></p>
            <p> Contraseña  <input type="password" name="contrasena" placeholder="Contraseña" ></p>
            <p> DNI         <input type="text" name="dni" placeholder="Pon tu DNI"></p>
            <p> Nombre      <input type="text" name="nombre" placeholder="Pon tu nombre"></p>
            <p> Apellidos   <input type="text" name="apellidos" placeholder="Pon tu apellido"></p>
            <input type="submit" value="Crear">
<!--Borrar un formulario -->
<input type="reset" value="Borrar"><br>
        </form>
    </div>

    <div class ="inferior">
        <form action="login.php" method="post">
            <h1> Formulario para hacer login</h1>
            <p> Usuario     <input type="text" name="usuario" placeholder="Nombre de usuario"></p>
            <p> Contraseña  <input type="password" name="contrasena" placeholder="Contraseña"></p>
            <input type="submit" value="Login">
            <!--Borrar un formulario -->
<input type="reset" value="Borrar"><br>
        </form>

    </div>

    
</body>
</html>