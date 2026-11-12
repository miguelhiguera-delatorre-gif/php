<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>

<body>

    <h2>Analizador de telegramas</h2>

    <!-- Formulario para introducir el telegrama -->
    <form method="POST">
        Introduce el telegrama:
        <input type="text" name="telegrama">
        <button type="submit">Analizar</button>
    </form>

    <?php

    // Comprobamos si se ha enviado el formulario.
    if (isset($_POST['telegrama'])) {

        // Guardamos el texto introducido.
        $telegrama = strtolower($_POST['telegrama']);

        // Separamos el telegrama en palabras utilizando los espacios.
        $palabras = explode(" ", $telegrama);

        // Inicializamos el contador de palabras de más de 10 letras.
        $contadorPalabras = 0;

        // Inicializamos los contadores de las vocales.
        $a = 0;
        $e = 0;
        $i = 0;
        $o = 0;
        $u = 0;

        // Inicializamos el contador de espacios.
        $espacios = 0;

        // Recorremos todas las palabras del telegrama.
        foreach ($palabras as $palabra) {

            // Comprobamos si la palabra tiene más de 10 caracteres.
            if (strlen($palabra) > 10) {
                $contadorPalabras++;
            }
        }

        // telegrama caracter por caracter
        for ($j = 0; $j < strlen($telegrama); $j++) {

            // Obtenemos el caracter de la posición actual
            $letra = substr($telegrama, $j, 1);

            // Comprobamos qué vocal aparece.
            if ($letra == "a") {
                $a++;
            } else if ($letra == "e") {
                $e++;
            } else if ($letra == "i") {
                $i++;
            } else if ($letra == "o") {
                $o++;
            } else if ($letra == "u") {
                $u++;
            }

            // Comprobamos si el caracter es un espacio
            if ($letra == " ") {
                $espacios++;
            }
        }

        //  porcentaje de espacios en blanco
        $porcentaje = ($espacios / strlen($telegrama)) * 100;

        // Mostramos los resultados
        echo "<h3>Resultados:</h3>";

        echo "Palabras con más de 10 letras: " . $contadorPalabras . "<br>";

        echo "Vocal a: " . $a . "<br>";
        echo "Vocal e: " . $e . "<br>";
        echo "Vocal i: " . $i . "<br>";
        echo "Vocal o: " . $o . "<br>";
        echo "Vocal u: " . $u . "<br>";

        echo "Porcentaje de espacios: " . round($porcentaje, 2) . "%";
    }

    ?>

</body>
</html>
