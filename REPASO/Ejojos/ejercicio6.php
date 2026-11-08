
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>

    <?php

    // Inicializamos el array
    $ojos = [0, 0, 0, 0, 0, 0];

    // Recuperamos los estados anteriores
    if (isset($_POST["ojos"])) {
        $ojos = unserialize($_POST["ojos"]);
    }

    // Comprobamos si hemos pulsado algún ojo
    if (isset($_POST["ojo"])) {

        $posicion = $_POST["ojo"];

        // Cambiamos el estado del ojo
        if ($ojos[$posicion] == 0) {
            $ojos[$posicion] = 1;
        } else {
            $ojos[$posicion] = 0;
        }
    }

    // Mostramos los ojos
    foreach ($ojos as $clave => $valor) {

        echo '<form method="POST">';

        // Guardamos el array
        echo '<input type="hidden" name="ojos" value="' . htmlspecialchars(serialize($ojos), ENT_QUOTES, 'UTF-8') . '">';

        // Guardamos la posición del ojo
        echo '<input type="hidden" name="ojo" value="' . $clave . '">';

        // Mostramos el estado
        if ($valor == 0) {
            echo '<button type="submit">👁️ Cerrado</button>';
        } else {
            echo '<button type="submit">👀 Abierto</button>';
        }

        echo '</form>';
    }

    ?>

</body>
</html>
