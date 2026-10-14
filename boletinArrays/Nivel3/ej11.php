<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array11</title>

    <style>
        h2{
            text-align: center;
        }
    table {
        border-collapse: collapse;
        margin: 20px auto;
        width: 80%;
        background-color: white;
    }
    tr:nth-child(8){
    background-color: lightcoral;
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

   

  
    </style>
</head>
<body>

<!-- Crea un array bidimensional de productos. 
Cada producto tendrá nombre, precio y stock. 
Muestra una tabla y calcula el valor total del almacén multiplicando precio por stock. -->

    <h2>Productos</h2>

    <?php  
    $productos = [

         ["nombre"=>"macbook neo", "precio" => 700, "Stock"=> 80],
         ["nombre"=>"ratón logitech", "precio" => 50, "Stock"=> 12],
         ["nombre"=>"samsung galaxy a10", "precio" => 300, "Stock"=> 60],
         ["nombre"=>"tablet", "precio" => 140, "Stock"=> 180],
         ["nombre"=>"batería portatil", "precio" => 40, "Stock"=> 60],
         ["nombre"=>"airpods", "precio" => 100, "Stock"=> 67],
         

    ];
    
    ?>

        <table border="1">

            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
               
               
            </tr>

            <?php  
            $valor_total=0;

            foreach ($productos as $producto) {

                //valor total del almacén multiplicando precio por stock.

                echo "<tr>";
                echo "<td>".$producto["nombre"]."</td>";
                echo "<td>".$producto["precio"]."</td>";
                echo "<td>".$producto["Stock"]."</td>";
                echo "</tr>";
                 $valor_total +=  $producto["precio"] * $producto["Stock"];
            }
            ?>

                <tr>
                    <td colspan="1">Valor total</td>
                    <td colspan="4"><?php echo $valor_total ?></td>
                </tr>
        </table>
</body>
</html>