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

/*  SECUENCIAS DE ESCAPE
\n :  nueva linea
\r :  retorno de carro
\t :  tabulacion
\\ :  barra invertida   ejemplo    echo "niños\\as";  imprime  niños\as
\$ :  signo de dolar    ejemplo    echo "El precio es  \$15;   imprime  $15
\" :  comillas          ejemplo    echo "hola \"Maria\";   imprime  hola "Maria"

*/
    /* Ejercicio1
Tenéis que programar un código php donde se declaren 5 variables, 2 que contengan una cadena de caracteres 
(strings) cualquiera y 3 con numeros de 2 al 5.
Muestra por pantalla con un h1 las dos variables de string concatenadas
Haz un salto de linea

Muestra por pantalla la suma de las 3 variables numéricas
Haz un salto de linea

Muestra por pantalla la resta de las 3 variables numéricas
Haz un salto de linea

Muestra por pantalla la multiplicación de las 3 variables numéricas
Haz un salto de linea

Muestra por pantalla la división de 2 de las variables elevada a la tercera
*/
$variable1 = 2;
$variable2 = 3;
$variable3 = 4;
$variable5 = "Maria";
$variable6 = "perros";

$concatenacion = $variable5 . " " .$variable6;
echo "<h1> $concatenacion </h1>";
//echo "<br>";
echo "<h1>$variable5  tiene  $variable6</h1>"; //Comillas
echo "<br>";
echo  $variable5 . ' tiene ' . $variable6; //Comillas
echo "<br>";
echo "$variable5 tiene $variable3 $variable6 !!!";
echo "<br>";
echo "<a href = \"http://google.com\">" . $variable5 . "</a>" . " tiene " . $variable3 ." ". $variable6 ;
echo "<br>";

$variable5 = $variable5 . $variable6;
echo $variable5;
echo "<br>";
//$variable5.= $variable6;
echo $variable5 . " de otra forma asimilando valor de variable";
echo "<br><br>";

$suma = $variable1 + $variable2 + $variable3;
echo  "La suma es: " . ''  .$suma . "<br>";

$resta = $variable3 - $variable2 - $variable1;
echo  "La resta es: " . ''  . $resta . "<br>";

$multiplicacion = ($variable3 * $variable2) * $variable1;
echo "La multiplicacion es \n $multiplicacion  <br>";

$potencia = ($variable3 / $variable1) ** $variable2;
echo   $potencia . " Empleando ** para la potencia <br>";

$division = $variable3 / $variable1;
$elevado = pow($division, $variable2);

echo $elevado . " empleando pow";

echo  "<p>2<sup>4</sup>= " . pow(2, 4) . "</p>\n"; ////  MUY CHULO  POTENCIAS.
echo "<p> $variable1 <sup> $variable2 </sup> =  " . pow ($variable1  , $variable2) ;

echo "<br>";
echo "<br>";

echo "<h3>Ejercicio 2 </h3>";
//echo "<br>";

/*Ejercicio2
Tenéis que programar un código php donde se declaren 3 variables que contengan 
una cadena de caracteres (strings) cualquiera.
Definir una función que tenga una variable de entrada y que escriba en pantalla `Hola (variable) como estas?`
Definir otra función que cree 4 saltos de linea.
Utilizar la primera función con una de las variables que habias creado.
Utilizar la segunda función.
Utilizar la primera función con la palabra pepito.
Utilizar la segunda función.
Utilizar la primera función con otra de las variables que habías creado */

$nombre = "Mari";
$apellido = "Broto";
$turno = "tarde";

function estudiante($nombre2){   // Mirar la var dentro con la de fuera. No es la misma
    echo "<h1>Hola $nombre2 ¿Como estas?</h1>";

}
estudiante("Pepito");
echo "<br>";


function SaltoLinea(){
    echo "<br><br><br><br>";
}
SaltoLinea();



function nombreReferencia($nombre) {
    echo " joven  $nombre <br>";
  }
  nombreReferencia("alto");
  nombreReferencia("bajo");
  nombreReferencia("simpatico");
  nombreReferencia("listo");
  


  function suma ($num1 , $num2){
    $resSuma = $num1 + $num2;
    return $resSuma;
  }
  $var1 = 20;
  $var2 = 50;
$resultado = suma(2,4); //Indicando los valores fuera
$resultado2 =suma ($var1, $var2);
echo "<h3>El resultado de la suma es   $resultado</h3>";
echo "<h3>El reultado con declaracion de varibles abajo $resultado2</h3>";



  echo "<br>";
  echo "<h1>EJERCICIO 3 </h1>";
  /*Ejercicio 3 IF y ELSE IF 
Una web española de servicios tiene un pequeño problema, quiere que indiquemos en su página de
 inicio el día de la semana,  el servidor nos proporciona el día en inglés mediante la función date().
Ayuda del ejercicio:
La función date() con el parametro 'D' nos devuelve las tres primeras letras del día de la semana en inglés: Mon, Tue, Wed, Thu, Fri, Sat, Sun.
Con este pequeño código $dia_ingles = date('D'); tendremos el día en la variable $dia_ingles.
Mostrar el día en español por pantalla con el mensaje: "El día de la semana es: XXXX". */
   
$dia = "Hoy es ";    
$dia_ingles = date("D");
if ( $dia_ingles == "Mon" ) {
    echo "$dia Lunes";
} else if ( $dia_ingles == "Tue" ) {
            echo "$dia Martes";
} else if ( $dia_ingles == "Wed" ) {
            echo "$dia Miercoles";
} else if ( $dia_ingles == "Thu" ) {
            echo "$dia Jueves";
} else if ( $dia_ingles == "Fri" ) {
            echo "$dia Viernes";
} else if ( $dia_ingles == "Sat" ) {
            echo "$dia Sabado";
} else {
    echo "$dia Domingo";
}
echo SaltoLinea();


/*Ejercicio 4 IF condicionales 

1.Si la compra del cliente es inferior a 19 euros podrán requerir 2 cosas   ----->  <19:

    -si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío"  ----->  ==.

    -si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 9 euros".

2. Si la compra tiene un importe entre 19 y 40 euros se le indicará el mensaje: "Los gastos de envío son 9 euros".
3. Si la compra supera los 40 euros deberemos indicar un mensaje de que los portes de envío son gratis.
4. Si la compra supera los 200 euros deberemos mostrar un mensaje con un código de descuento: CODIGODESC33.

Para este problema disponemos de los siguientes datos:
El importe total de la cesta de la compra viene en una variable $total_compra con un número decimal positivo. Ejemplo: 33.55.
En la variable $tipo_compra nos viene un texto que puede ser 'mascotas' o 'ropa'.
Debemos rellenar una variable $precio_envio para cada una de las posibilidades anteriores. */




echo "<h1>EJERCICIO 4 </h1>";

if ($importe < 19) { 
    if ($producto == "mascotas") {
       echo "No se puede realizar el envio";
    } else {                                       //Si la compra del cliente es inferior
        echo "Los gastos de envio son 9 euros";    //  a 19 euros podrán requerir 2 cosas
    }

 }else if($importe >= 19 and $importe < 40){    //Si la compra tiene un importe entre 19 y 40 euros 
    echo "Los gastos  de envio son 9 euros";


 }else if ($importe >= 40){                        // Si la compra supera los 40 euros deberemos 
    echo "Los portes de envio son gratuitos";     //indicar un mensaje de que los portes de envío son gratis.

    if ( $importe > 200 ) { 
       echo "Código de descuento: CODIGODESC33"; // Si la compra supera los 200 euros ......
    }
 }


 echo "<h1>EJERCICIO 5 </h1>";
 /*Ejercicio 5
Haz un código para que se imprima en pantalla la tabla de multiplicar del 5 y del 7 */

$numero = rand(5, 7);
echo "<h1>  Tabla del $numero </h1>";
echo "<br><br>";
for ($num = 1; $num <= 10; $num++) {
    $resultado = $num * $numero;
    echo " ", $numero, "x", $num, "=", $resultado;
}    
    echo "<br><br>";



$numero = 5;

echo "<h2>  Tabla del $numero </h2>";
echo "<br><br>";
for ($num = 1; $num <= 10; $num++) {
    $resultado = $num * $numero;
    echo " ", $numero, "x", $num, "=", $resultado;
    echo "<br><br>";
}
$numero = 7;

echo "<h2>  Tabla del $numero </h2>";
echo "<br><br>";
for ($num = 1; $num <= 10; $num++) {
    $resultado = $num * $numero;
    echo " ", $numero, "x", $num, "=", $resultado;
    echo "<br><br>";
}

echo "<h1>EJERCICIO 6 </h1>";
//Ejercicio 6
//Crea un array que tenga la tabla de multiplicar del 5 restandole 2 e imprimelo por pantalla */


$numero = 5;
$resta = 2;
    echo "<h1>Tabla del $numero menos 2 </h1>";
    echo "<br><br>";
    for ($num = 1; $num <= 10; $num++) {
        $resultado = $num * $numero;
        echo " ", $numero, "x", $num, "=", $resultado; // -$resta
       echo " -2= ", $resultado - $resta;
        echo "<br><br>";
    }
  





 ?>
    
</body>
</html>