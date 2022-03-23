<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1 { color: #0000FF}
  </style>
</head>
<body>
    
    <?php

        $usuario = $_POST["nombre_usuario"];
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];

        
        
        $conexion = mysqli_connect("localhost", "raul2", "raul", "RG");
        
        

    
        $sqlQuery = "INSERT INTO tabla_RG(nombre_usuario,altura,peso,edad,genero) 
        VALUES(\"$usuario\",\"$altura\",\"$peso\",\"$edad\",\"$genero\")";

        
        $datos = mysqli_query($conexion, $sqlQuery);
        if($datos){
            if($genero == "masculino"){

                echo "<h1>el sujeto tiene una altura: \"$altura\"</h1>";
            }
            else{
                echo "<h1>la inquilina pesa: \"$peso\"</h1>";
            }
           
        }  
      


       
        
    ?>

</body>
</html>