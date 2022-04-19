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
        // CONEXIÓN A MYSQL
        $conn = mysqli_connect("10.50.85.104", "u2005_07", 'Pg$HdZz0A@wF', "2005B_07");
            
        // VERIFICAR CONEXIÓN
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
            
        // EXTRACCIÓN DE DATOS
        $nombre = $_REQUEST['nombre'];
        $matricula= $_REQUEST['matricula'];
        $apellido = $_REQUEST['apellido'];
        $semestre = $_REQUEST['semestre'];
        $carrera = $_REQUEST['carrera'];
        $campus = $_REQUEST['campus'];
        $restalem = $_REQUEST['restalem'];
            
        // QUERY DE INSERCIÓN
        $sql = "INSERT INTO alumnos VALUES ('$matricula', '$nombre')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>Datos almacenados correctamente</h3>";
            echo nl2br("$email\n "."$pass");

        } else{

            echo "ERROR $sql.".mysqli_error($conn);

        }
            
        // CERRAR CONEXIÓN
        mysqli_close($conn);
    ?>
</body>
</html>