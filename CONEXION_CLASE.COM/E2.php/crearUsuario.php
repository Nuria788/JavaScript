<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
/*control K  control T */
#color { color: blue; }
  </style>
    <?php
    $usuario = $_POST['usuario'];
    $altura   = $_POST["altura"];
    $peso = $_POST["peso"];
    $edad    = $_POST["edad"];
    $genero = $_POST["genero"];

    $servidor = "localhost";
    $usuarioBD= "nuria";
    $contrasenyaBD ="nuria";
    $db = "NM";
    $tabla = "tablaNM";

//funcion para sacar popups por pantalla
function alert($mensaje){
    echo "<script> alert(\"$mensaje\") </script>";
}

// Crear conexion con la base datos
$conexion = mysqli_connect("localhost", $usuarioBD, $contrasenyaBD, $db);
// Check connection
if (!$conexion) {
    alert("Conexion fallida: " . mysqli_connect_error());
}else{
    alert("Conectado correctamente");
}   //  SIEMPRE ES ASI


$insertar = "INSERT INTO ".$tabla." (usuario, altura, peso, edad,genero )
VALUES (\"$usuario\", \"$altura\", \"$peso\", \"$edad\",\"$genero\")";

//enviamos la query que inserta el usuario y el password
if (mysqli_query($conexion, $insertar)) {
    echo "<h1 id = \"color\"> La usuaria ha sido perfectamente creada</h1>";
        //echo "<h1 style=\"color:blue\">  La usuaria ha sido perfectamente creada </h1>";


} else {
    echo "<h1>Error en insercción de usuario: " . $insertar . "<br>" . mysqli_error($conexion). "</h1>";
}
//  HASTA AQUI SÓLO INTRODUCIR DATOS EN LA BASE TABLA 
/* EjJERCICIO 2
Si el género es “masculino”, deberá decir en una etiqueta de párrafo: 
“el sujeto tiene una altura X” donde X será la altura introducida.
Si el género es “femenino”, deberá decir en una etiqueta de párrafo 
“la inquilina pesa X” donde X será el peso introducido.
*/
$seleccionar = "SELECT usuario, altura, peso,genero  FROM .$tabla
Where $genero = 'mujer';";

$datos = mysqli_query($conexion, $seleccionar);

//miramos si los datos tienen mas de 0 fila
/* if (mysqli_num_rows($datos) > 0) {
    // output data of each row
    while($fila = mysqli_fetch_assoc($datos)) {
    echo "id: " . $fila["id"]. " - La inquilina : " . $fila["usuario"]. " - pesa: " . $fila["peso"]. "<br>";
    }
} else {
    echo "id: " . $fila["id"]. " - El sujeto tiene una : " . $fila["usuario"]. " - altura: " . $fila["altura"]. "<br>";
    ;
}*/
//////
if($datos){
    if($genero == "masculino"){

        echo "<h1>el sujeto tiene una altura: \"$altura\"</h1>";
    }
    else{
        echo "<h1>la inquilina pesa: \"$peso\"</h1>";
    }
   
}

mysqli_close($conn);
?>

</body>
</html>