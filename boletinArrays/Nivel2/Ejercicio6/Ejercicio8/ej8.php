
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array8</title>



</head>
<body>

    <form method="post">
        <label>Escribe aqui las notas</label><br>
        <input type="number" name="notas[]" placeholder="alumno 1" min="0" max="10" step="0.1" required><br>
        <input type="number" name="notas[]" placeholder="alumno 2" min="0" max="10" step="0.1" required><br>
        <input type="number" name="notas[]" placeholder="alumno 3" min="0" max="10" step="0.1" required><br>
        <input type="number" name="notas[]" placeholder="alumno 4" min="0" max="10" step="0.1" required><br>
        <input type="number" name="notas[]" placeholder="alumno 5" min="0" max="10" step="0.1" required><br>
        <input type="submit" value="Enviar"><br>
    </form>

<!-- 
    Tengo que calcular
    Media 
    Nota mas alta 
    Nota mas baja -->

    <?php 
    if (isset($_POST["notas"])) {

        $suma = 0;
        $guardador_alto = 0;
        $guardador_bajo = 10;

        foreach ($_POST["notas"] as $nota) {
            $suma += $nota;

            if ($nota > $guardador_alto) {
                $guardador_alto = $nota;
            }

            if ($nota < $guardador_bajo) {
                $guardador_bajo = $nota;
            }
        }

        $media = $suma / count($_POST["notas"]);

        echo "<p>La media es: " . round($media, 2) . "</p>";
        echo "<p>La nota más alta es: " . $guardador_alto . "</p>";
        echo "<p>La nota más baja es: " . $guardador_bajo . "</p>";
    }
    ?>

</body>
</html>

