
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array7</title>

    <style>
    table {
        border-collapse: collapse;
        margin: 20px auto;
        width: 80%;
        background-color: white;
    }

    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>
</head>
<body>

    <!-- Crea un array asociativo de productos y precios.
    Muestra una tabla con producto y precio.
    Al final muestra el precio medio y el producto más caro. -->

    <?php 
    //Creamos el array asociativo clave=>valor
    $productos = [
        "queso" => 5.50,
        "leche" => 2,
        "pan" => 1,
        "gazpacho" => 3.49,
        "lomo" => 6.99
    ];
    ?>

    <table border="1">

        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>

        <?php 
        $suma = 0;

        foreach ($productos as $clave => $valor) {

            echo "<tr>";

            echo "<td>".$clave."</td>";
            echo "<td>".$valor." €</td>";

            echo "</tr>";

            $suma += $valor;
        }
        ?>

    </table>

    <?php
    //Calculamos el precio medio
    $media = $suma / count($productos);

    echo "Precio medio: " . round($media, 2) . " €";
    ?>

    <?php
    //Buscamos el producto más caro
    $caro = reset($productos);//Con reset cogemos el primer precio (valor)
    $nombreCaro = array_key_first($productos);//Obtiene la primera clave "queso"

    foreach ($productos as $key => $value) {
        if ($value > $caro) {
            $caro = $value;
            $nombreCaro = $key;
        }
    }

    echo "<p>Producto más caro: " . $nombreCaro . " (" . $caro . " €)</p>";
    ?>

</body>
</html>
