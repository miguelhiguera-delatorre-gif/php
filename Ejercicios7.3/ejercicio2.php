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
    <title>Ejercicio2</title>
    <style>
        form {
            border: 2px solid black;
            width: fit-content;
            padding: 5px;
            background-color: gray;
        }
    </style>
</head>

<body>
    <form method="POST">
        Introduce un número:<br>
        <input type="number" name="numero" required><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>

    <?php
    $contador = 0;
    $sumaImpares = 0;
    $numeroM = 0;
    $contadorI=0;

    //Numero de numeros que se han introducido
    //Media impares
    //El mayor de los pares

    foreach ($_SESSION['numeros'] as $numero) {
        $contador++;
        echo $numero . " ";

        if ($numero % 2 != 0) {
            $sumaImpares += $numero;
            $contadorI++;
        }

        if( $numero%2==0 && $numero>$numeroM ){
            $numeroM=$numero;
        }
    }
    echo "<br>";
    echo "Se han introducido " . $contador . " numeros";
    echo "<br>";
    echo "Media impares: " . round($sumaImpares / $contadorI, 2);
    echo "<br>";
    echo "El mayor de los pares: " . $numeroM;
    ?>

    <form method="post">
        <button type="submit" name="boton">Vaciar array</button>
    </form>

    <br><br><br>
    <?php
    if (isset($_POST['boton'])) {
        $_SESSION['numeros'] = [];
    }
    ?>
</body>

</html>