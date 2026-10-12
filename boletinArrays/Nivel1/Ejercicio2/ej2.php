<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <style>
        th {
            background-color: lightblue;
            padding: 15px;
        }

        td {
            padding: 7px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>


    <!-- Genera 12 números aleatorios entre 1 y 20. Guárdalos en un array. 
    Muestra una tabla con tres columnas:
    número, cuadrado y cubo. No crees tres arrays distintos; 
    calcula cuadrado y cubo al mostrar.     -->

    <?php 
    $numeros = [];

    for ($i = 0; $i < 12; $i++) {
    $numeros[] = random_int(1, 20);
    }

    
    ?>

    <table border="1">

    <tr>
        <th>Numero</th>
        <th>Cuadrado</th>
        <th>Cubo</th>
    </tr>

    <?php 
        for( $i = 0; $i < 12; $i++ ){
            echo "<tr>";
            echo "<td>". $numeros[$i] . "</td>";
            echo "<td>". $numeros[$i]*$numeros[$i] .  "</td>";
            echo "<td>". $numeros[$i]*$numeros[$i]*$numeros[$i] .  "</td>";
            echo "</tr>";
    
        }
    ?>

    </table>


</body>
</html>