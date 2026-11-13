<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
    <style>
        body{font-family: sans-serif;}
        form{ border: 2px dashed black; width: fit-content; padding: 15px; background-color: turquoise;}
        button{background-color: aqua; border: none; border: 2px solid black; padding: 5px;}
        option{font-size: 18px; background-color: lightblue;}
    </style>
</head>

<body>
    <!--
Pedir un día de la semana en un formulario, seleccionándolo desde una lista desplegable.
Mostrar la fecha correspondiente al próximo día de la semana elegido por el usuario. Por
ejemplo, si el usuario elige Martes, el mensaje obtenido sería “El próximo martes será el
03/12/2025”
 -->

    <form method="post">
        <label>Selecciona un dia de la semana</label>
        <select name="dia">
            <option value="monday">Lunes</option>
            <option value="tuesday">Martes</option>
            <option value="wednesday">Miércoles</option>
            <option value="thursday">Jueves</option>
            <option value="friday">Viernes</option>
            <option value="saturday">Sabado</option>
            <option value="sunday">Domingo</option>
        </select>
        <br>
        <button type="submit" name="boton">Enviar</button>
    </form>
    <br>
    
    <?php

    if (isset($_POST['dia']) && isset($_POST['boton'])) {

        $dia = $_POST['dia'];

        $fecha = strtotime("next " . $dia);

        echo "El próximo $dia será el " . date("d/m/Y", $fecha);
    }

    ?>


</body>

</html>