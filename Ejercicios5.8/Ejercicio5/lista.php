<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
   
     <h2>Lista de aspirantes</h2>

    <?php
    $aspirantes = unserialize($_POST["aspirantes"]);

    foreach ($aspirantes as $nombre => $aspirante) {
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Edad: " . $aspirante["edad"] . "</p>";
        echo "<p>Años de experiencia: " . $aspirante["experiencia"] . "</p>";
        echo "<p>Correo: " . $aspirante["correo"] . "</p>";
        echo "<hr>";
    }

    ?>
</body>
</html>