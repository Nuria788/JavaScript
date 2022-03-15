<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--CREAR UN FORMULARIO QUE SOLICITE EL EMAIL Y EL dni PARA HACER LOGIN DEL USUARIO.
    sI EL USUARIO HA HECHO LOGIN DEBERÁ MOSTRAR LOS SS DATOS DEL USUARIO LOGUEADO DE FORMA ESTRUCTURADA.
    Nombre del usuario.
    Contraseña del Usuario.
    Hash de la contrasenya. -->
<div class ="superior">
        <form action="crearUsuario.php" method="post">
            <h1> Formulario para crear usuario</h1>
            <p> Usuario     <input type="text" name="usuario" ></p>
            <p> Contraseña  <input type="password" name="contrasenya" ></p>
            <p> Contraseña_Hash  <input type="password" name="hash_contrasenya" ></p>
            <p> DNI         <input type="text" name="dni" ></p>
            <p> Email      <input type="text" name="email" ></p>
            
            <input type="submit" value="Crear">

        </form>
    </div>

    <div class ="inferior">
        <form action="login.php" method="post">
            <h1> Formulario para hacer login</h1>
            <p> Usuario     <input type="text" name="usuario" ></p>
            <p> Contraseña  <input type="password" name="contrasenya" ></p>
            <input type="submit" value="Login">
        </form>

    </div>
</body>
</html>