<?php
    //Inicializo el array
    $productos = [];

    if (isset($_POST["boton"])) {
        
        if (isset($_POST["pizza"])) {
             $productos[] = [
                "nombre" => "Pizza",
                "precio" => 10
            ];
        }
        if (isset($_POST["patatas"])) {
            $productos[] = [
                "nombre" => "patatas",
                "precio" => 5
            ];
        }
        if (isset($_POST["perrito"])) {
            $productos[] = [
                "nombre" => "perrito",
                "precio" => 3
            ];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>

<body>
    <!-- El usuario selecciona varios productos mediante checkbox.
      PHP debe mostrar los productos elegidos, 
     calcular el precio total y aplicar un descuento si se supera una cantidad determinada. -->

    <form method="post">
        <h3>Productos</h3>
        Pizza: 10€<input type="checkbox" name="pizza"><br>
        Patatas: 5€<input type="checkbox" name="patatas"><br>
        Perrito: 3€<input type="checkbox" name="perrito"><br><br>

        <input type="submit" value="Enviar" name="boton">
    </form>

    <?php 
    //Calcular precio total
    $suma = 0;

    foreach($productos as $clave => $valor){
        $suma += $valor["precio"];
    }

    $precioDescuento=0;
    if($suma>10){
        $precioDescuento = $suma -2;
    }

    ?>

    <br><br>
    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <?php
        if (isset($_POST["boton"])) {
            foreach ($productos as $clave => $valor) {
                echo "<tr>";
                echo "<td>" . $valor["nombre"] . "</td>";
                echo "<td>" . $valor["precio"] . "</td>";
                echo "</tr>";
            }
        }
        ?>

        <tr>
            <td>Precio total</td>
            <td><?php echo $suma; ?></td>
        </tr>

         <tr>
            <td>Precio con descuento</td>
            <td><?php echo $precioDescuento; ?></td>
        </tr>


    </table>



</body>

</html>