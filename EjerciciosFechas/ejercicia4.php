<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>

</head>

<body>
    <!-- 
    Pedir una fecha en un formulario con un input de fecha y mostrarla en el formato “12 de Enero
    de 2018” (en español)
     -->


    <form method="post">
        Introduce una fecha<input type="date" name="fecha"><br>
        <button type="submit" name="boton">Enviar</button><br>
    </form>


    <?php
    if (isset($_POST['boton'])) {

        $fecha = $_POST["fecha"];

        $fechas = explode("-", $fecha);

        $dia = $fechas[2];
        $mes = $fechas[1];
        $año = $fechas[0];

        $mesM = "";

        if ($mes == 1) {
            $mesM = "Enero";
        }
        if ($mes == 2) {
            $mesM = "Febrero";
        }
        if ($mes == 3) {
            $mesM = "Marzo";
        }
        if ($mes == 4) {
            $mesM = "Abril";
        }
        if ($mes == 5) {
            $mesM = "Mayo";
        }
        if ($mes == 6) {
            $mesM = "Junio";
        }
        if ($mes == 7) {
            $mesM = "Julio";
        }
        if ($mes == 8) {
            $mesM = "Agosto";
        }
        if ($mes == 9) {
            $mesM = "Septiembre";
        }
        if ($mes == 10) {
            $mesM = "Octubre";
        }
        if ($mes == 11) {
            $mesM = "Noviembre";
        }
        if ($mes == 12) {
            $mesM = "Diciembre";
        }

        echo $dia . " de " . $mesM . " del año " . $año;
    }
    ?>

</body>

</html>