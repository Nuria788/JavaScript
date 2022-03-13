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
        $dni = $_POST['dni'];
        $email = $_POST['email'];

        $usuarioBD = "nombre";
        $contrasenyaBD = "apellido";
        $host = "localhost";
        $db = "examenBD";
        $tabla = "usuarioExamen";

        $conn = mysqli_connect($host,$usuarioBD,$contrasenyaBD,$db);
        if(!$conn){
            echo "<p>Error:</p>";
            
        }
        else{
            $datos = "select usuario, contrasenya, hash_contrasenya from ".$tabla." where email = '".$email."' and dni = '".$dni."';";
            $login = mysqli_query($conn,$datos);
            if($login){
                $datos1 = mysqli_fetch_assoc($login);
                if ($datos1['usuario'] != ""){
                echo "<table>
                <tr><td>Usuario</td><td>Contraseña</td><td>Hash</td><td>DNI</td><td>email</td></tr>
                <tr><td>".$datos1['usuario']."</td><td>".$datos1['contrasenya']."</td><td>".$datos1['hash_contrasenya']."</td></tr>
                </table>";
                }
            }
            
        }
        

    ?>
</body>
</html>