<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

<?php

// Guardamos la respuesta que ha escrito el usuario
$respuesta = $_POST["respuesta"];

// Pasamos la respuesta a minúsculas
$respuesta = strtolower($respuesta);

// Comprobamos si la respuesta es correcta
if ($respuesta == "asta") {

    // Si ha acertado, mostramos un mensaje
    echo "<h1>¡Has acertado!</h1>";

    echo "<p>¡Enhorabuena! Has descubierto la imagen.</p>";

    // Mostramos la imagen completa
    echo "<img src='asta.jpg' width='300'>";

} else {

    // Si no ha acertado
    echo "<h1>Has fallado</h1>";

    echo "<p>La respuesta no es correcta. Inténtalo otra vez.</p>";

    // Botón para volver al juego
    echo "<a href='ej1.php'>Volver</a>";
}

?>

</body>
</html>