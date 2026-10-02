
<?php

// Si el usuario ha escrito una respuesta
if (isset($_POST['respuesta'])) {

    $respuesta = $_POST['respuesta'];

    if ($respuesta == "perro") {

        echo "<h1>¡Has acertado!</h1>";
        echo '<img src="imagen.jpg" width="600">';

    } else {

        echo "<h1>Has fallado</h1>";
        echo '<a href="index.html">Volver</a>';

    }

}


// Si el usuario ha pulsado un cuadrado
if (isset($_GET['cuadrado'])) {

    $cuadrado = $_GET['cuadrado'];

    echo "<h1>Has pulsado el cuadrado $cuadrado</h1>";

    echo '<img src="imagen.jpg" width="200">';

    echo '<meta http-equiv="refresh" content="2;url=index.html">';

}

?>