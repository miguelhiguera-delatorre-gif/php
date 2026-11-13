<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>
</head>

<body>

    <h2>Analizador de texto</h2>

    <!-- Formulario para introducir el texto -->
    <form method="POST">
        Introduce un texto:
        <input type="text" name="texto">
        <button type="submit">Analizar</button>
    </form>

    <?php

    if (isset($_POST['texto'])) {

 
        $texto = strtolower($_POST['texto']);

       
        $palabras = explode(" ", $texto);

        // variables que son para guardar la palabra mas larga
        $longitudMaxima = 0;
        $posicionInicial = 0;
        $posicion = 0;

        // Contador de palabras que cumplen las condiciones
        $contadorPalabras = 0;

        // Recorremos todas las palabras.
        foreach ($palabras as $palabra) {

            // Calculamos la longitud de la palabra
            $longitud = strlen($palabra);

            // Comprobamos si es la palabra mas larga
            if ($longitud > $longitudMaxima) {

                $longitudMaxima = $longitud;
                $posicionInicial = $posicion;
            }



            // Contamos las letras a de la palabra
            $contadorA = 0;

            for ($i = 0; $i < $longitud; $i++) {

                $letra = substr($palabra, $i, 1);

                if ($letra == "a") {
                    $contadorA++;
                }
            }

            // Comprobamos que tenga entre 8 y 16 letras
            // y que tenga más de tres letras a
            if ($longitud >= 8 && $longitud <= 16 && $contadorA > 3) {
                $contadorPalabras++;
            }

            // Actualizamos la posición para la siguiente palabra
            $posicion += $longitud + 1;
        }

        // Mostramos los resultados.
        echo "<h3>Resultados:</h3>";

        echo $texto ."<br><br>";
        
        echo "Posición inicial de la palabra más larga: " . $posicionInicial . "<br>";

        echo "Longitud de la palabra más larga: " . $longitudMaxima . "<br>";

        echo "Palabras entre 8 y 16 letras con más de tres 'a': " . $contadorPalabras;

    }

    ?>

</body>
</html>
