<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php
    /*Crea una función te recomiende que beber.

Introducir 3 variables:
- dia de la semana
- estado animo
- dinero

Si es "lunes" y estas "cansado":
te recomienda un "cafe".
Si es "lunes", estas "animado"
te recomienda una "tila".

Si es "martes".
Te recomienda una Coca-Cola.

Si es miércoles o jueves y tienes mas de 10 o 10 te recomienda un "cocktail", si tienes menos de 10€ una cerveza.

Si es viernes, sábado o domingo y estas animado y tienes mas de 20 te recomienda un "chupito".

Si es viernes, sábado o domingo y estas cansado y tienes mas de 20 te recomienda un "Red Bull".


Si es viernes, sábado o domingo te dice que "estas de suerte ya que es fin de semana".


Si es viernes, sábado o domingo tienes menos de 20 te dice "lo tienes complicado para salir". */


    function llamada($dia, $estadoAnimo, $dinero)
    {

        if ($dia == "Lunes" && $estadoAnimo == "cansado") {
            echo "Hoy es  Lunes y te recomiendo que te tomes un café";
        } else if ($dia == "Lunes" && $estadoAnimo == "animado") {
            echo "Hoy es  Lunes y te recomiendo que te tomes un tila";
        } else if ($dia == "Martes") {
            echo "Te recomiendo beber una CocaCola";
        } else if (($dia == "Miercoles" || $dia == "Jueves")  && $dinero >= 10) {
            echo "Te recomiendo un cocktail";
        } else if (($dia == "Miercoles" || $dia == "Jueves")  && $dinero < 10) {
            echo "Te recomiendo una cerveza";
        } else if (($dia == "Viernes" || $dia == "Sabado" || $dia = "Domingo")  && $estadoAnimo = "animado" && $dinero > 20) {
            echo  "Te recomiendo un chupito";
        } else if (($dia == "Viernes" || $dia == "Sabado" || $dia = "Domingo")  && $estadoAnimo = "cansado" && $dinero > 20) {
            echo  "Te recomiendo un Red Bull";
        } else if ($dia == "Viernes" || $dia == "Sabado" || $dia = "Domingo") {
            echo  "Estás de suerte ya que es fin de semana";
        } else if (($dia == "Viernes" || $dia == "Sabado" || $dia = "Domingo") && $dinero < 20) {
            echo  "Lo tienes complicado";
        }
    }

    //llamada("Lunes", "cansado",10);
    llamada("Martes", "cansado", 10);

    /*
Tienes que crear un código php que:
Escriba 30 párrafos donde diga "Este es el párrafo nº X", y la X sea el número del párrafo.
Los párrafos impares debe mostrarlos en color rojo y los pares en color verde.
Deberá crear 25 imágenes con la imagen adjunta "Ejercicio1.jpg"
Para escribir el código se tendrá que utilizar los 2 archivos adjuntos llamados "Ejercicio1.php" y "Ejercicio1.css"
*/


    for ($i = 1; $i <= 30; $i++) {

        if ($i % 2 == 0) {

            echo " <p class = verde >Este parrafo es el numero $i </p>";
        } else {
            echo "<p  class = rojo >Este parrafo es el numero $i</p>";
        }
    }
    /*
for ($i = 1; $i <=25; $i ++){
    echo "<img src='./imagen.jpg'>";
}
*/

    /*
// Array

$telefono= 123456;

$lista = [12, 45, 78,  "Hola", $telefono];
echo "<h1>  $lista[0] </h1>";

echo "<h1>  $lista[7] </h1>"; 

    for ($i = 0; $i <= sizeof($lista); $i++){
    echo "<h1> $lista[$i]</h1>";
}
*/
    /*2. Tienes que crear un código php que:
Deberás que crear un array con 10 números diferentes.
Deberás sumarlos todos y mostrar el resultado en pantalla.
Deberás multiplicarlos todos y mostrar el resultado en pantalla.
Deberás restar  100 todos los numeros del array y mostrar el resultado en pantalla.
 */
    $num = 100;
    $lista1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    echo $lista1[0] + $lista1[1] + $lista1[2] + $lista1[3] + $lista1[4] + $lista1[5] + $lista1[6] + $lista1[7] + $lista1[8] + $lista1[9];
    echo "<br>";
    echo $lista1[0] * $lista1[1] * $lista1[2] * $lista1[3] * $lista1[4] * $lista1[5] * $lista1[6] * $lista1[7] * $lista1[8] * $lista1[9];
    echo "<br>";
    echo $lista1[0] - $num, $lista1[1] - $num, $lista1[2] - $num, $lista1[3] - $num, $lista1[4] - $num, $lista1[5] - $num,
    $lista1[6] - $num, $lista1[7] - $num, $lista1[8] - $num, $lista1[9] - $num;

    //
    function letras($saludo)
    {

        for ($i = 0; $i <= strlen($saludo) - 1; $i++){
           

        echo "<h1> La letra en posicion  $i $saludo[$i]  </h1> ";
       
    }}
    echo letras("Pepito");

    function letras2($saludo)
    {

        for ($i = 1; $i <= strlen($saludo) ; $i++){
           
            $indice = $i-1;

        echo "<h1> La letra en posicion  $i $saludo[$indice]  </h1> ";
       
    }}
    echo letras2("Pepito");    

    ?>
</body>

</html>