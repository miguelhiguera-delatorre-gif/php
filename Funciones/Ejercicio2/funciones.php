<?php
//Tres funciones
//dameTarjeta(), compruebaClave() e imprimeTarjeta()

$tarjetaAdmin = [
    [123, 456, 789, 987, 654],
    [234, 567, 890, 321, 432],
    [111, 222, 333, 444, 555],
    [666, 777, 888, 999, 000],
    [122, 133, 144, 155, 166]
];

$tarjetaUsuario = [
    [155, 255, 355, 455, 555],
    [144, 244, 344, 444, 544],
    [133, 233, 333, 433, 533],
    [189, 289, 389, 489, 589],
    [175, 275, 375, 475, 575]
];

//Primera función
function dameTarjeta(string $perfil, array $tarjetaAdmin, array $tarjetaUsuario): array
{
    if ($perfil == "admin") {
        return $tarjetaAdmin;
    } else {
        return $tarjetaUsuario;
    }
}

//Segunda función
function compruebaClave(array $tarjeta, int $fila, string $columna, int $valor): bool
{
    // Convertimos la letra de la columna ('A'-'E') a su índice (0-4)
    $columna = [
        'A' => 0,
        'B' => 1,
        'C' => 2,
        'D' => 3,
        'E' => 4
    ];

    if ($columna == 'A') {
        $colIndex = 0;
    } elseif ($columna == 'B') {
        $colIndex = 1;
    } elseif ($columna == 'C') {
        $colIndex = 2;
    } elseif ($columna == 'D') {
        $colIndex = 3;
    } elseif ($columna == 'E') {
        $colIndex = 4;
    } else {
        $colIndex = 0;
    }

    // Cogemos el número que hay en la posición de la matriz [fila][columna]
    $numeroElegido = $tarjeta[$fila - 1][$colIndex];

    if ($numeroElegido == $valor) {
        return true;
    } else {
        return false;
    }
}

//Tercera función
function imprimeTarjeta(array $tarjeta): string
{
    $tabla = "<table border='1' cellpadding='4' cellspacing='0'>";

    // Cabecera de columnas (A-E)
    $tabla .= "<tr><th></th><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th></tr>";

    for ($i = 0; $i < count($tarjeta); $i++) {
        $tabla .= "<tr>";
        // Número de fila (1-5)
        $tabla .= "<th><b>" . ($i + 1) . "</b></th>";

        for ($j = 0; $j < count($tarjeta[$i]); $j++) {
            $tabla .= "<td>" . sprintf("%03d", $tarjeta[$i][$j]) . "</td>";
        }
        $tabla .= "</tr>";
    }
    $tabla .= "</table>";

    return $tabla;
}
