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
function dameDatos (){
    echo "Esta es mi primera funcion";
}
echo dameDatos();

echo "<br>";

echo "<h3> Ejercicio 2  SIN PARAMETROS</h3>";
function multiplica (){
    $resultado = 4 * 2; 
    return ($resultado);
}
echo "La multiplicacion es:  " . multiplica();


echo "<h3> Ejercicio 2.1  SIN PARAMETROS</h3>";
echo "<br>";
function fecha(){
    return date ("d/m/Y"); //El return no imprime nada por pantalla
}
echo "La fecha de hoy es " . fecha();

echo "<h3> Ejercicio 2.2  CON 1 PARAMETROS</h3>";
echo "<br>";
function saludar( $nombre)
{
    echo "Hola,  "  . $nombre;
}
echo saludar("Jaime");  // Debemos ponerle un parametro de entrada.

echo "<h3> Ejercicio 2.3  CON 2 PARAMETROS</h3>";
echo "<br>";
function sumar ($num1, $num2){ //Dos var de entradas
    return ($num1 + $num2);
}
echo sumar (32 , 4);  // Hay q ponerle parametros.


echo "<h3> Ejercicio 2.3  CON 2 PARAMETROS y Valor ASIGNADO</h3>";
echo "<br>";
function sumar1 ($num1, $num2, $num3 = 2){ //
    return ($num1 + $num2 + $num3);
}
echo sumar1 (32 , 4);  // Hay q ponerle parametros.


echo "<h3> Ejercicio 3  CON IF </h3>";
echo "<br>";

$age = 18;
if ($age <= 18 ){
    function llamada (){
        echo "Hola, soy yo";
    }
}
llamada();


    ?>
</body>
</html>