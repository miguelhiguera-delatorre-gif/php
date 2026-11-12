<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>
</head>
<body>

    <form method="POST">
        Introduce tu nombre completo:
        <input type="text" name="nombre">
        <button type="submit">Enviar</button>
    </form>

    <?php

    if (isset($_POST['nombre'])) {

        $nombre = $_POST['nombre'];

        $palabras = explode(" ", $nombre);

        $nombreMayusculas = "";
        $iniciales = "";

        foreach ($palabras as $palabra) {

            $nombreMayusculas .= ucfirst(strtolower($palabra)) . " ";
            // Convertimos la palabra a minúsculas y ponemos su primera letra en mayúscula.
            // Después la añadimos a la variable junto con un espacio.

            // Obtenemos el primer carácter de cada palabra y lo añadimos a las iniciales.
            $iniciales .= substr($palabra, 0, 1);
        }

        $nombreMayusculas = trim($nombreMayusculas);    
        $iniciales = strtoupper($iniciales);
        //Convierte todo a mayusculas
        
        echo "<p>Nombre: " . $nombreMayusculas . "</p>";
        echo "<p>Iniciales: " . $iniciales . "</p>";
    }

    ?>

</body>
</html>