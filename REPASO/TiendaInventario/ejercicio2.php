<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2-Inventario</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        th {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <?php

    $productos = [

        "Producto1" => [
            "nombre" => "Teclado",
            "precio" => 8,
            "cantidad" => 10
        ],
        "Producto2" => [
            "nombre" => "Ratón",
            "precio" => 4,
            "cantidad" => 20
        ],
        "Producto3" => [
            "nombre" => "Monitor",
            "precio" => 80,
            "cantidad" => 22
        ],
        "Producto4" => [
            "nombre" => "Auriculares",
            "precio" => 22,
            "cantidad" => 12
        ],
        "Producto5" => [
            "nombre" => "Webcam",
            "precio" => 44,
            "cantidad" => 2
        ]

    ];

    //Calcular el precio total de los productos
    $suma = 0;
    $numeroProductos = 0;

    foreach ($productos as $clave => $valor) {
        $suma += $valor["precio"];
        $numeroProductos += $valor["cantidad"];
    }

    $total = $suma * $numeroProductos;
    ?>


    <table border="1">

        <tr>
            <th>Producto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>

        <?php
        foreach ($productos as $clave => $valor) {
            echo "<tr>";
            echo "<td>" . $clave . "</td>";
            echo "<td>" . $valor["nombre"] . "</td>";
            echo "<td>" . $valor["precio"] . "</td>";
            echo "<td>" . $valor["cantidad"] . "</td>";

            echo "</tr>";
        }

        ?>

        <tr>
            <td>Precio Total </td>
            <td colspan="3"><?php echo "$total"; ?></td>
        </tr>
    </table>


    <br><br>
    Seccion de productos con poco stock<br>

    <?php
    foreach ($productos as $clave => $valor) {
        if ($valor["cantidad"] <= 4) {
            echo "Queda poco Stock del producto:" . $valor["nombre"];
        }
    }
    ?>
    <br><br>
    <br>Buscar Producto<br>

    <form method="post">
        <input type="text" name="productoBuscar">
        <input type="submit" value="Buscar" name="buscador">
    </form>
    <br>
    <?php
    $producto = $_POST["productoBuscar"];
    $encontrado = 0;

    foreach ($productos as $clave => $valor) {
        if ($producto == $valor["nombre"]) {
            echo "Precio: " . $valor["precio"];
            echo "<br>";
            echo "Cantidad: " . $valor["cantidad"];

            $encontrado = 1;
        }
    }

    if ($encontrado == 0) {
        echo "Ningún producto encontrado";
    }
    ?>


</body>

</html>