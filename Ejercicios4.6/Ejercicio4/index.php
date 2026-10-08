<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llamar al piso</title>
</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(192, 255, 255);
        }

        h2, h3 {
            color: red;
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
        }
    </style>

    <h2>Ejercicio 4</h2>
    <h3>Bloques y pisos</h3>

    <!-- Hay 10 bloques
    Cada bloque tiene 7 pisos
    Cada fila un boton -->

    <!-- Para no escribir tantas filas manualmente usamos for -->

    <table border="1">

        <tr>
            <th>Bloque</th>
            <th>Piso</th>
            <th>Llamar</th>
        </tr>

        <?php

        for ($bloque = 1; $bloque <= 10; $bloque++) {

            for ($piso = 1; $piso <= 7; $piso++) {

                echo "<tr>";

                echo "<td>$bloque</td>";

                echo "<td>$piso</td>";

                echo "<td><a href='llamar.php?bloque=$bloque&piso=$piso'><button>Llamar</button></a></td>";
                // ? A PARTIR DE AQUI EMPIEZAN LOS DATOS 
                //bloque = numero que haya 
                //piso es igual al numero que haya 
                //lo hacemos asi para despues recogerlo con get
                echo "</tr>";
            }
        }

        ?>

    </table>

</body>
</html>