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
        $usuario = $_POST['usuario'];
        $contrasenya = $_POST['contrasenya'];
        $hash_contrasenya = hash("md5",$_POST['contrasenya']);
        $dni = $_POST['dni'];
        $email = $_POST['email'];

        $usuarioBD = "nombre";
        $contrasenyaBD = "apellido";
        $host = "localhost";
        $db = "examenBD";
        $tabla = "usuariosExamen";

        $conn = mysqli_connect($host,$usuarioBD,$contrasenyaBD,$db);
        if(!$conn){
            echo "<p>Error:</p>";
            
        }
        else{
            echo "<h1>Conexión correcta</h1>";
            $ins = "insert into ".$tabla." values('".$usuario."','".$contrasenya."','".$hash_contrasenya."','".$dni."','".$email."');";
            $sql_insert = mysqli_query($conn,$ins);
            if($sql_insert){
                echo "<h1>Se ha creado un usuario correctamente</h1>";
                $sel = "select * from usuariosExamen where usuario = '".$usuario."';";
                $lectura = mysqli_query($conn,$sel);
                if($lectura){
                    $fila = mysqli_fetch_assoc($lectura);
                echo "<table>
                <tr><td>Usuario</td><td>Contraseña</td><td>Hash</td><td>DNI</td><td>email</td></tr>
                <tr><td>".$fila['usuario']."</td><td>".$fila['contrasenya']."</td><td>".$fila['hash_contrasenya']."</td><td>".$fila['dni']."</td><td>".$fila['email']."</td></tr>
                </table>";
                }
                 
            }
            else{
                echo "Error: " . $ins. "<br>" . mysqli_error($conn);
                
            }
        }
    ?>
</body>
</html>