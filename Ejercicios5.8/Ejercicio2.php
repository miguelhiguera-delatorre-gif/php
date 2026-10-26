
<?php
// Carta de comidas e ingredientes
$carta = [
    "Pizza" => ["jamon", "atun", "bacon", "pepperoni"],
    "Hamburguesa" => ["lechuga", "tomate", "queso"],
    "Perrito caliente" => ["lechuga", "cebolla", "patata"]
];

// Recuperamos el pedido anterior
$pedido = [];

if (isset($_POST["pedido"])) {
    $pedido = unserialize($_POST["pedido"]);
}

// Añadimos una comida al pedido
if (isset($_POST["comida"])) {
    $comida = $_POST["comida"];
    $ingredientes = [];

    if (isset($_POST["ingredientes"])) {
        $ingredientes = $_POST["ingredientes"];
    }

    $pedido[] = [
        "comida" => $comida,
        "ingredientes" => $ingredientes
    ];
}

// Finalizamos el pedido
$finalizar = isset($_POST["finalizar"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos de comida rápida</title>
</head>
<body>

<h1>Pedidos de comida rápida</h1>

<?php
// Mostramos un formulario por cada comida
if (!$finalizar) {
    foreach ($carta as $comida => $ingredientes) {
?>

    <h2><?php echo $comida; ?></h2>

    <form method="post">
        <?php
        // Mostramos los ingredientes disponibles
        foreach ($ingredientes as $ingrediente) {
        ?>
            <label>
                <input type="checkbox"
                       name="ingredientes[]"
                       value="<?php echo $ingrediente; ?>">
                <?php echo $ingrediente; ?>
            </label>
            <br>
        <?php } ?>

        <input type="hidden" name="comida"
               value="<?php echo $comida; ?>">

        <input type="hidden" name="pedido"
               value="<?php echo htmlspecialchars(serialize($pedido)); ?>">

        <input type="submit" value="Añadir al pedido">
    </form>

<?php
    }
?>

    <h2>Finalizar pedido</h2>

    <form method="post">
        <input type="hidden" name="pedido"
               value="<?php echo htmlspecialchars(serialize($pedido)); ?>">

        <input type="submit" name="finalizar"
               value="Finalizar pedido">
    </form>

<?php
} else {
?>

    <h2>Pedido completo</h2>

    <?php if (count($pedido) > 0) { ?>

        <table border="1" cellpadding="8">
            <tr>
                <th>Comida</th>
                <th>Ingredientes seleccionados</th>
            </tr>

            <?php foreach ($pedido as $elemento) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($elemento["comida"]); ?></td>
                    <td>
                        <?php
                        if (count($elemento["ingredientes"]) > 0) {
                            echo htmlspecialchars(implode(", ", $elemento["ingredientes"]));
                        } else {
                            echo "Sin ingredientes";
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>

        </table>

    <?php } else { ?>

        <p>No has añadido ninguna comida.</p>

    <?php } ?>

<?php } ?>

</body>
</html>