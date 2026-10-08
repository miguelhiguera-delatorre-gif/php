<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria PHP</title>

    <style>
        /* =========================
           ESTILOS DE LA PAGINA
           ========================= */

        body {
            background-color: rgb(193, 231, 255);
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        h1 {
            color: blue;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        td,
        th {
            background-color: lightblue;
            padding: 8px;
            border: 1px solid black;
        }

        th {
            background-color: rgb(100, 180, 230);
        }
    </style>
</head>

<body>

<?php

// =========================
// GENERAMOS LOS NUMEROS GANADORES
// =========================

$n1 = rand(1, 50);
$n2 = rand(1, 50);
$n3 = rand(1, 50);
$n4 = rand(1, 50);
$n5 = rand(1, 50);
$n6 = rand(1, 50);

$nserie = rand(1, 999);

$contador = 0;


// =========================
// GUARDAMOS LOS NUMEROS DEL USUARIO
// =========================

// Recorremos los 50 numeros
for ($i = 1; $i <= 50; $i++) {

    if (isset($_POST['n' . $i])) {

        $contador++;

        // Guardamos el numero dependiendo de su posicion
        if ($contador == 1) {
            $numero1 = $i;
        }

        if ($contador == 2) {
            $numero2 = $i;
        }

        if ($contador == 3) {
            $numero3 = $i;
        }

        if ($contador == 4) {
            $numero4 = $i;
        }

        if ($contador == 5) {
            $numero5 = $i;
        }

        if ($contador == 6) {
            $numero6 = $i;
        }
    }
}


// =========================
// GUARDAMOS EL NUMERO DE SERIE
// =========================

$nserieusu = $_POST["serie"];


// =========================
// CALCULAMOS EL DINERO CONSEGUIDO
// =========================

$counter = 0;

// Comprobamos los 6 numeros
if ($n1 == $numero1) {
    $counter = $counter + 100;
}

if ($n2 == $numero2) {
    $counter = $counter + 100;
}

if ($n3 == $numero3) {
    $counter = $counter + 100;
}

if ($n4 == $numero4) {
    $counter = $counter + 100;
}

if ($n5 == $numero5) {
    $counter = $counter + 100;
}

if ($n6 == $numero6) {
    $counter = $counter + 100;
}

// Comprobamos el numero de serie
if ($nserieusu == $nserie) {
    $counter = $counter + 500;
}

?>

<!-- =========================
     MOSTRAMOS LOS RESULTADOS
     ========================= -->

<h1>Resultado</h1>

<table border="1">

    <tr>
        <td colspan="6"><strong>Combinacion ganadora</strong></td>
    </tr>

    <tr>
        <td><?= $n1 ?></td>
        <td><?= $n2 ?></td>
        <td><?= $n3 ?></td>
        <td><?= $n4 ?></td>
        <td><?= $n5 ?></td>
        <td><?= $n6 ?></td>
    </tr>

    <tr>
        <td colspan="6"><strong>Combinacion elegida</strong></td>
    </tr>

    <tr>
        <td><?= $numero1 ?></td>
        <td><?= $numero2 ?></td>
        <td><?= $numero3 ?></td>
        <td><?= $numero4 ?></td>
        <td><?= $numero5 ?></td>
        <td><?= $numero6 ?></td>
    </tr>

    <tr>
        <td colspan="3"><strong>Numero Serie</strong></td>
        <td colspan="3"><strong>Nserie elegido</strong></td>
    </tr>

    <tr>
        <td colspan="3"><?= $nserie ?></td>
        <td colspan="3"><?= $nserieusu ?></td>
    </tr>

</table>


<!-- =========================
     MOSTRAMOS EL DINERO
     ========================= -->

<table border="1">

    <tr>
        <th>Dinero conseguido</th>
    </tr>

    <tr>
        <td><strong><?= $counter ?> €</strong></td>
    </tr>

</table>

</body>
</html>