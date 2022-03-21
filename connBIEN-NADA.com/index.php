<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class ="registro">
        <form action="registro.php" method="post"> <!--Para recibir lods datos conexion-->
            <h2> Registrarse. Crear Usuario</h2>
            <p> Nombre     <input type="text" name="nombre" placeholder="Pon tu nombre"></p>
            <p> Apellidos  <input type="text" name="apellido" placeholder="Pon tu apellido"></p>
            <p> Correo   <input type="text" name="correo" placeholder="Pon tu email"></p>
            <p> Usuario     <input type="text" name="usuario" placeholder="Nombre de usuario"></p>
            <p> Contraseña  <input type="password" name="contrasena" placeholder="Ingrese su contraseña" ></p>
           
            <input type="submit" value="Ingresar">
        <!--Borrar un formulario -->
            <input type="reset" value="Borrar"><br>
        </form>

<div class ="login">
        <form action="conexion.php" method="post"> <!--Para recibir los datos a registro-->
            <h2>Iniciar Sesión</h2>
           
            <p> Usuario <input type="text" name="usuario" placeholder="Nombre de usuario"></p>
            <p> Contraseña  <input type="password" name="contrasena" placeholder="Ingrese su contraseña" ></p>
           
            <input type="submit" value="Ingresar">
<!--Borrar un formulario -->
            <input type="reset" value="Borrar"><br>
        </form>

<!--   Repetir-->
                    <!--Registro-->
        <div class ="registro">
        <form action="registro.php" method="post"> <!--Para recibir lods datos conexion-->
            <h2> Registrarse. Crear Usuario</h2>
            <p> Nombre     <input type="text" name="nombre" placeholder="Pon tu nombre"></p>
            <p> Apellidos  <input type="text" name="apellido" placeholder="Pon tu apellido"></p>
            <p> Correo   <input type="text" name="correo" placeholder="Pon tu email"></p>
            <p> Usuario     <input type="text" name="usuario" placeholder="Nombre de usuario"></p>
            <p> Contraseña  <input type="password" name="contrasena" placeholder="Ingrese su contraseña" ></p>
           
            
            <input type="submit" value="Ingresar">
        <!--Borrar un formulario -->
            <input type="reset" value="Borrar"><br>
        </form>

            <!--Login   con correo electronico-->
<div class ="login">
        <form action="loginUsuario.php" method="post"> <!--Para recibir los datos a registro-->
            <h2>Iniciar Sesión</h2>
           
            <p> Usuario <input type="text" name="correo" placeholder="Nombre tu email"></p>
            <p> Contraseña  <input type="password" name="contrasena" placeholder="Ingrese su contraseña" ></p>
        
            <input type="submit" value="Ingresar">
<!--Borrar un formulario -->
            <input type="reset" value="Borrar"><br>
        </form>



</body>
</html>