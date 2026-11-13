<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio7</title>
</head>
<body>
    <!-- 
        Pedir al usuario su fecha de nacimiento y una 
        fecha futura, y mostrar la edad que tendrá en esa
        fecha (un año tiene 60*60*24*365.25 segundos)
    -->
    <form method="post">

    <label>Introduce tu fecha de nacimiento:</label>
    <input type="date" name="nacimiento" required><br><br>

    <label>Introduce una fecha futura:</label>
    <input type="date" name="fechaFutura" required><br><br>

    <button type="submit" name="boton">Calcular edad</button>

    </form>

    

    <?php 
    if (isset($_POST['boton'])) {

        $nacimiento = $_POST["nacimiento"];

        $nacimientoSeparado = explode("-", $nacimiento);

        $diaN = $nacimientoSeparado[2];
        $mesN = $nacimientoSeparado[1];
        $añoN = $nacimientoSeparado[0];


        $fechaFutura = $_POST["fechaFutura"];

        $Futuro = explode("-", $fechaFutura);

        $diaF = $Futuro[2];
        $mesF = $Futuro[1];
        $añoF = $Futuro[0];

        //Calculamos la edad que tendra

        $año = $añoF - $añoN;
        $mes = $mesF - $mesN;
        $dia = abs($diaF - $diaN);

        echo "En el año ".$añoF." tendrás ".$año." año/s " .$mes." mese/s y " .$dia." día/s ";
    }
    ?>
</body>
</html>