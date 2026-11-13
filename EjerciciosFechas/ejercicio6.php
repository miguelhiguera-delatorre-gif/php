<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>

<body>
    <!-- 
    Ejercicio 6.
    Mostrar el día de la semana que correspondería, una vez transcurridos un número de años,
    meses, y días elegidos por el usuario, a partir de la fecha actual.
    -->

    <form method="post">
        Introduce dias: <input type="text" name="dia"><br>
        Introduce meses: <input type="text" name="mes"><br>
        Introduce año: <input type="text" name="año"><br><br>
        <button type="submit" name="boton">Enviar</button><br>
    </form>


    <?php
    if (isset($_POST['boton'])) {

    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $año = $_POST["año"];

    $fechaActual = date("d/m/Y", time());

    $fechaNueva = strtotime("$fechaActual + $dia days + $mes months + $año years");

     echo date("d-m-Y", $fechaNueva);

    }

    ?>

</body>

</html>