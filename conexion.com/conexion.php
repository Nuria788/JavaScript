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


// Union con index

//usuario y contraseña que llegan del formulario
$usuario    = $_POST["usuario"];
$contrasena = $_POST["contrasena"];


//Datos de la BBDD
    //require("datosConexion.php");   ----> Si guardo los datos de 
    //conexion en oro archivo por si tengo más BBDD

$direccion_servidor="localhost";
$nombre_bd="ejercicio"; // No la pongo en conexion por si hay un error
$usuario="nuria1";
$password="secret";



// CONECTAR LA BASE DE DATOS.
// Almacenada en la variable conexion

// Podemos poner en la variable conexion la variable nombre_bd 
// Pero la quieto para ponerla mas abajo por si hay un error 
// de conexion por la BD 
$conexion=mysqli_connect($direccion_servidor,$usuario,$password);

// debajo de la conexion siempre , en caso de errores
if (mysqli_connect_errno()){
echo "Fallo al conectar con BBDD";
exit ();
}

// Aqui añado el nombre de la BD por si hay error en la conexion.
mysqli_select_db($conexion, $nombre_bd) or die ("No se encuentra la BBDD");


// Arreglar caracteres latinos  que no lea bien

mysqli_set_charset($conexion, "utf8");




// Hacer una consulta a una tabla para ver que hemos conectado --- Eso es la query
// Esta consulta se llama query
$consulta="SELECT * FROM datosPersonales";

// Ejercutar la consulta anterior.
$resultado=mysqli_query($conexion, $consulta);

//Mirar fila a fila la informacion que contiene la variable resultado
//Lo almacena en un arrray.
// Accede al primer registro, pero si la llamas 
//otra vez accede al ss registro hasta que no hacha registros


//Bucle While
// Creando un ARRAY   QUE SE EJECUTTE MIETRAS HAYA INFORMACION

while ($fila=mysqli_fetch_row($resultado)){  //Funciona por indices


echo $fila[0] . " ";
echo $fila[1] . " ";
echo $fila[2] . " ";
echo $fila[3] . " ";
echo $fila[5] . " ";
echo $fila[4] . " ";

echo "<br>";
}
echo "<br>";
echo "<br>";



// Esto es lo mismo que el bucle WHILE hecho arriba.

$consulta1 = "SELECT * FROM datosAlumnos WHERE apellido = 'Buetas'";
$resultado1=mysqli_query($conexion, $consulta1);
// Guardar la consulta1
while($fila1 = mysqli_fetch_array($resultado1,  MYSQLI_ASSOC)) { // Funciona por nombres asociativos
echo "<table><tr><td>";
echo "Solo los que se apellidan Buetas";
    echo $fila1['NIF'] . "<td></td> ";
    echo $fila1['nombre'] . "<td></td> ";
    echo $fila1['apellido'] . "<td></td> ";
    echo $fila1['edad'] . " <td></td></tr>";

    echo "<br>";
    echo "<br>";

}



// Cerrar la conexion
mysqli_close($conexion);
?>
</body>
</html>