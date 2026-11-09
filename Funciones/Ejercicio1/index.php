<?php
require_once "funciones.php";

//Creamos el array numeros
//Dentro metemos cada numero que ha introducido el usuario

if (isset($_POST["numero1"])) {
    $numero1 = $_POST["numero1"];
} else {
    $numero1 = "";
}

if (isset($_POST["numero2"])) {
    $numero2 = $_POST["numero2"];
} else {
    $numero2 = "";
}

if (isset($_POST["numero3"])) {
    $numero3 = $_POST["numero3"];
} else {
    $numero3 = "";
}

if (isset($_POST["numero4"])) {
    $numero4 = $_POST["numero4"];
} else {
    $numero4 = "";
}

if (isset($_POST["numero5"])) {
    $numero5 = $_POST["numero5"];
} else {
    $numero5 = "";
}

if (isset($_POST["numero6"])) {
    $numero6 = $_POST["numero6"];
} else {
    $numero6 = "";
}

$numeros = [$numero1, $numero2, $numero3, $numero4, $numero5, $numero6];

if (isset($_POST["nserie"])) {  
    $nserie = $_POST["nserie"];
} else {
    $nserie = "";
}

if (isset($_POST["tituloRecibido"])) {
    $tituloRecibido = $_POST["tituloRecibido"];
} else {
    $tituloRecibido = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-index</title>
    <style>
        body{font-family: Arial, Helvetica, sans-serif;}
        label{font-size: 17px;color: blue; font-weight: bold;}
        button{background-color: blue; border: none; padding: 9px;}
        table{border-collapse: collapse;}
        th,td{padding: 3px;text-align: center;}
        th{background-color: blue;}
    </style>
</head>

<body>

    <form method="POST">
        <h1>Juego Primitiva</h1>
        <label>Introduce numeros del 1 al 49</label>
        <br><br>

        Numero 1 <input type="number" name="numero1" max="49" min="1"><br>
        Numero 2 <input type="number" name="numero2" max="49" min="1"><br>
        Numero 3 <input type="number" name="numero3" max="49" min="1"><br>
        Numero 4 <input type="number" name="numero4" max="49" min="1"><br>
        Numero 5 <input type="number" name="numero5" max="49" min="1"><br>
        Numero 6 <input type="number" name="numero6" max="49" min="1"><br><br>

        <label>Introduce el numero de serie</label><br>
        Numero de Serie <input type="number" name="nserie" max="999" min="1"><br>
        Introduce el titulo <input type="text" name="tituloRecibido"><br>

        <button type="submit">Jugar</button>
    </form>
    <br><br><br>


    <?php

        $resultado = combinacion($numeros, $nserie);
        echo imprimeApuesta($resultado, $tituloRecibido);
    
    ?>

</body>

</html>