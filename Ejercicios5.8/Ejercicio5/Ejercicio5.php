<?php

if (isset($_POST["aspirantes"]) && $_POST["aspirantes"] != "") {
    // Recuperamos los aspirantes anteriores
    // unserialize convierte el texto en array
    $aspirantes = unserialize($_POST["aspirantes"]);
} else {
    // Si no hay aspirantes anteriores, creamos un array vacío
    $aspirantes = [];
}

// Comprobamos si hemos pulsado Aceptar
if (isset($_POST["aceptar"])) {

    // Cojo los datos del formulario
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $experiencia = $_POST["años"];
    $correo = $_POST["correo"];

    // Añadimos el nuevo aspirante al array
    $aspirantes[$nombre] = [
        "edad" => $edad,
        "experiencia" => $experiencia,
        "correo" => $correo
    ];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

    <!-- Formulario donde introducimos datos -->

    <!--
    boton aceptar -> acepta los datos y los guarda
    boton finalizar -> finaliza la lista de aspirantes
    -->

    <form method="post">
        <h2>Formulario datos</h2>

        Nombre <input type="text" name="nombre" required><br>
        Edad <input type="number" name="edad" required><br>
        Años experiencia <input type="number" name="años" required><br>
        Correo electrónico <input type="email" name="correo" required><br><br>

        <!-- Utilizamos un input oculto para enviar datos -->
        <input type="hidden" name="aspirantes"
               value="<?php echo htmlspecialchars(serialize($aspirantes)); ?>">
        <!-- Con serialize convertimos el array en texto -->

        <input type="submit" value="Aceptar" name="aceptar">
    </form>

    <br>

    <form action="lista.php" method="post">
        <input type="hidden" name="aspirantes" value="<?php echo htmlspecialchars(serialize($aspirantes)); ?>">

        <input type="submit" value="Finalizar" name="finalizar">
    </form>

</body>
</html>
