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
    $usuarioBD = "alumno";
    $contrasenaBD = "alumno";
    $direccionBD ="bd.iesguara.cf";
    $nombreBD ="bd_juego";

$conexion = mysqli_connect($direccionBD, $usuarioBD, $contrasenaBD, $nombreBD);
echo "KK";

$queryNombres = "select nombre from juegos";
$datos = mysqli_query ($conexion, $queryNombres);

for ($i = 0; $i < 20;  $i++ ){
    $fila = mysqli_fetc_assoc($datos);
    echo  $fila ["nombre"] . "<br>";  

}

?>

</script>

   
</body>
</html>