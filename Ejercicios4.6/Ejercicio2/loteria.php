<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteriaphp</title>
</head>

<body>

    <style>
        body {
            background-color: rgb(193, 231, 255);
        }

        td {
            background-color: lightblue;
            padding: 4px;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1{
            color: blue;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

    <?php

    // Generamos los 6 números ganadores
    $n1 = rand(1, 50);
    $n2 = rand(1, 50);
    $n3 = rand(1, 50);
    $n4 = rand(1, 50);
    $n5 = rand(1, 50);
    $n6 = rand(1, 50);

    $contador = 0;


    // Recorremos los 50 números
    for ($i = 1; $i <= 50; $i++) {

        if (isset($_POST['n' . $i])) {

            $contador++;

            // Guardamos el número dependiendo de su posición
            if ($contador == 1) {
                $numero1 = $i;
            }

            if ($contador == 2) {
                $numero2 = $i;
            }

            if ($contador == 3) {
                $numero3 = $i;
            }

            if ($contador == 4) {
                $numero4 = $i;
            }

            if ($contador == 5) {
                $numero5 = $i;
            }

            if ($contador == 6) {
                $numero6 = $i;
            }
        }
    }

    ?>
    <h1>Resultado</h1>
    <table border="1">

        <tr>
            <td colspan="6">Combinación ganadora</td>
        </tr>

        <tr>
            <td><?= $n1 ?></td>
            <td><?= $n2 ?></td>
            <td><?= $n3 ?></td>
            <td><?= $n4 ?></td>
            <td><?= $n5 ?></td>
            <td><?= $n6 ?></td>
        </tr>

        <tr>
            <td colspan="6">Combinación elegida</td>
        </tr>

        <tr>
            <td><?= $numero1 ?></td>
            <td><?= $numero2 ?></td>
            <td><?= $numero3 ?></td>
            <td><?= $numero4 ?></td>
            <td><?= $numero5 ?></td>
            <td><?= $numero6 ?></td>
        </tr>

    </table>

</body>

</html>