<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array4</title>
</head>
<body>
    
<!-- Crea un array clásico con cinco productos de una lista 
 de compra. Muéstralos en una lista HTML. Añade un
sexto producto usando $array[]. -->

     <?php

        $productos = ["Huevos", "Leche", "Pan", "Tomate", "Manzanas"];

        // Añadimos producto
        $productos[] = "Patatas";

        echo "<ul>";

            foreach ($productos as $product) {
                echo "<li>";
                echo $product;
                echo "</li>";
            }       

        echo "</ul>";

     ?>

</body>
</html>