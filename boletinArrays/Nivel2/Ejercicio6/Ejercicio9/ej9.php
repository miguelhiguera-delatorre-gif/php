<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array9</title>
</head>
<body>
    <!-- Crea un formulario con varios checkbox de colores
     usando name="colores[]". Cuando se envíe, muestra los
    colores elegidos. Si no se elige ninguno, muestra un aviso. -->

    <form  method="post">
    <input type="checkbox" name="colores[]" value="Rojo"> Rojo
    <input type="checkbox" name="colores[]" value="Azul"> Azul

    <button type="submit">Enviar</button>
</form>



<?php
if (isset($_POST["colores"])) {
    foreach ($_POST["colores"] as $color) {
        echo $color . "<br>";
    }
} else {
    echo "No has seleccionado ningún color";
}
?>
</body>
</html>