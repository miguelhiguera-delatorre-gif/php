<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <!-- Ejercicio 2.
    Realiza un ejercicio similar al anterior, pero para la hora. -->


    <form method="post">
        Introduce la hora: <input type="number" name="hora"><br>
        Introduce los minutos: <input type="number" name="min"><br>
        Introduce los segundos: <input type="number" name="seg"><br>

        Selecciona el formato: 
        <select name="formato">
            <option value="h/m/s">Hora/Minutos/Segundos</option>
            <option value="m/s/h">Minutos/Segundos/Hora</option>
        </select>
        <br><br>

        <button type="submit" name="boton">Enviar</button>
    </form>


    
<?php 
    $mensaje = "";

    if (isset($_POST['boton'])) {

        $hora = $_POST["hora"];
        $min = $_POST["min"];
        $seg = $_POST["seg"];
        $formato = $_POST["formato"];

        if($hora >= 0 && $hora <= 23 &&
           $min >= 0 && $min <= 59 &&
           $seg >= 0 && $seg <= 59){

           //Con str_pad pongo un 0 delante del numero si no tiene dos numeros 
            $hora = str_pad($hora, 2, "0", STR_PAD_LEFT);
            $min = str_pad($min, 2, "0", STR_PAD_LEFT);
            $seg = str_pad($seg, 2, "0", STR_PAD_LEFT);

            if($formato=="h/m/s"){
                $mensaje = $hora.":".$min.":".$seg;
            }else if($formato=="m/s/h"){
                $mensaje = $min.":".$seg.":".$hora;
            }

        }else{
            $mensaje = "La hora no es correcta";
        }

        echo $mensaje;
    }
?>


</body>
</html>