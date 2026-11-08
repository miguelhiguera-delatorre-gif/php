<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaComida</title>
</head>

<body>

    <?php
    //Utilizamos un array asociativo llamado carta
    //En ese array guardaremos lo singredientes de cada comida
    $carta = [
        "Pizza" => [
            "jamon",
            "atun",
            "bacon",
            "pepperoni"
        ],

        "Hamburguesa" => [
            "lechuga",
            "tomate",
            "queso"
        ],

        "Perrito caliente" => [
            "lechuga",
            "cebolla",
            "patata"
        ]
    ];

    ?>
    <!-- PIZZA -->
    <form method="post">
        Pizza<br>
        <input type="checkbox" name="ingredientes[]" value="jamon"> Jamón<br>
        <input type="checkbox" name="ingredientes[]" value="atun"> Atún<br>
        <input type="checkbox" name="ingredientes[]" value="bacon"> Bacon<br>
        <input type="checkbox" name="ingredientes[]" value="pepperoni"> Pepperoni<br>

        <input type="submit" value="Añadir pizza" name="pizza"><br><br>

    </form>

    <!-- HAMBURGUESA -->
    <form method="post">
        Hamburguesa<br>
        <input type="checkbox" name="ingredientes[]" value="lechuga"> Lechuga<br>
        <input type="checkbox" name="ingredientes[]" value="tomate"> Tomate<br>
        <input type="checkbox" name="ingredientes[]" value="queso"> Queso<br>

        <input type="submit" value="Añadir hamburguesa" name="hamburguesa"><br><br>

    </form>

    <!-- PERRITO -->
    <form method="post">
        Perrito caliente<br>
        <input type="checkbox" name="ingredientes[]" value="lechuga"> Lechuga<br>
        <input type="checkbox" name="ingredientes[]" value="cebolla"> Cebolla<br>
        <input type="checkbox" name="ingredientes[]" value="patata"> Patata<br>

        <input type="submit" value="Añadir perrito" name="perrito"><br><br><br>

    </form>

    <!-- FINALIZAR PEDIDO -->
    <form method="post">

        <input type="submit" value="Finalizar pedido" name="finalizar">

    </form>


</body>

</html>