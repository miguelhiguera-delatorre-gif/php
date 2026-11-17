<?php
session_start();

if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [];
}

if (isset($_POST['numero'])) {

    $numero = $_POST['numero'];

    if ($numero >= 0) {
        $_SESSION['numeros'][] = $numero;
    } else {
        echo "Muchas gracias, el programa ha terminado";
        session_destroy();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>

<body>

    <form method="POST">
        Introduce un número:<br>
        <input type="number" name="numero" required><br>
        <input type="submit" value="Enviar"><br>
    </form>
    <table border="1">
        <?php
        $suma = 0;
        $contador = 0;
        foreach ($_SESSION['numeros'] as $numero) {
            $suma += $numero;
            $contador++;

            echo "<tr>";
                echo "<td>";
                echo $numero . "<br>";
                echo "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td>";
                echo "<span style='background-color: lightblue;'>$suma </span>" . "<br>";
                echo "</td>";
            echo "</tr>";
        }

            echo "La media de numeros es de : " . $suma / $contador;
        ?>
    </table>


  
</body>

</html>