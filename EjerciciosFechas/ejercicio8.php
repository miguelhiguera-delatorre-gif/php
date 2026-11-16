
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
    <style>
        form{border: 2px solid black; width: fit-content; padding: 5px;}
    </style>
</head>
<body>
    <!-- Pedir la fecha de nacimiento y el nombre 
     de dos personas y mostrar la edad de cada una, así
    como el nombre de la persona mayor. -->


    <form method="post">
        <h4>Persona numero 1</h4> <br>
        Nombre:<input type="text" name="nombre1"><br>
        Fecha: <input type="date" name="fecha1"><br>

        <h4>Persona numero 2</h4> <br>
        Nombre:<input type="text" name="nombre2"><br>
        Fecha: <input type="date" name="fecha2"><br><br><br><br>

        <button type="submit" name="boton">Enviar</button>
    </form>

<br><br>
    <?php 
        //Mostrar la edad de cada persona y el nombre de la persona mayor

        if (isset($_POST['boton'])) {
            $nombre1 = $_POST["nombre1"];
            $fecha1 = $_POST["fecha1"];

            $nombre2 = $_POST["nombre2"];
            $fecha2 = $_POST["fecha2"];

            //Mostramos edad de cada persona 

            //Obtenemos la fecha actual
            $fechaHoy = date('Y-m-d');

            //Convertimos las fechas a segundos y restamos la fecha de nacimiento a la actual
            //Dividimos entre los segundos que tiene un año para obtener la edad
            $edad1 = (strtotime($fechaHoy)-strtotime($fecha1))/(60*60*24*365.25);

            //Mostramos la edad sin decimales
            echo "La edad de la primera persona es : ".$edad1;
            echo "<br>";
            
            //Hacemos lo mismo con la segunda persona
            $edad2 = (strtotime($fechaHoy)-strtotime($fecha2))/(60*60*24*365.25);

            echo "La edad de la segunda persona es : ".$edad2;
            echo "<br>";

            //Nombre de la persona mas mayor

            //La fecha de nacimiento más antigua corresponde a la persona mayor
            if($fecha1<$fecha2){
                echo $nombre1." es mayor ";
                echo "<br>";
            }else{
                echo $nombre2 . " es mayor";
                echo "<br>";
            }
            
        }
    ?>
</body>
</html>
