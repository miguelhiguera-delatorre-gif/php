
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>

    <style>
        table {
            border-collapse: collapse;
            width: 600px;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: lightblue;
        }

        h2 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
    <?php 

        $tienda1 = $_POST['tienda1'];
        $tienda2 = $_POST['tienda2'];
        $tienda3 = $_POST['tienda3'];
    
        $media = ($tienda1 + $tienda2 + $tienda3) / 3;

        $dif1 = abs($media - $tienda1); 
        $dif2 = abs($media - $tienda2); 
        $dif3 = abs($media - $tienda3); 

    ?>

    <h2>Precios de las tiendas</h2>

    <table>
        <tr>
            <th>Tienda</th>
            <th>Precio</th>
            <th>Media</th>
            <th>Diferencia respecto a la media</th>
        </tr>

        <tr>
            <td>Tienda 1</td>
            <td><?= $tienda1 ?> €</td>
            <td><?= round($media, 2) ?> €</td>
            <td><?= round($dif1, 2) ?> €</td>
        </tr>

        <tr>
            <td>Tienda 2</td>
            <td><?= $tienda2 ?> €</td>
            <td><?= round($media, 2) ?> €</td>
            <td><?= round($dif2, 2) ?> €</td>
        </tr>

        <tr>
            <td>Tienda 3</td>
            <td><?= $tienda3 ?> €</td>
            <td><?= round($media, 2) ?> €</td>
            <td><?= round($dif3, 2) ?> €</td>
        </tr>
    </table>

</body>
</html>

