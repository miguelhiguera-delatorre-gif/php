
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array1</title>

    <style>
        th {
            background-color: lightblue;
            padding: 15px;
        }

        td {
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<?php
$temperaturasMedia = [15, 20, 18, 17, 19, 20, 14];

$dias = ["Lunes", "Martes", "Miercoles", "Jueves",
         "Viernes", "Sabado", "Domingo"];

$suma = 0;
?>

<table border="1">
    <tr>
        <th>Dia</th>
        <th>Temperatura</th>
    </tr>

    <?php
    foreach ($temperaturasMedia as $indice => $temps) {
        echo "<tr>";
        echo "<td>" . $dias[$indice] . "</td>";
        echo "<td>" . $temps . "</td>";
        echo "</tr>";

        $suma += $temps;
    }
    ?>

</table>

<?php
$media = $suma / 7;

echo "<p>Temperatura media semanal redondeada: " . round($media,2) . " </p>";
?>

</body>
</html>
