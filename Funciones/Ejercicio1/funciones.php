<?php

//1 funcion combinacion
//Comprueba que algo no esta vacio y si lo esta pone un numero aleatorio

//Ponemos int|string porque nserie puede llegar como numero el que nostros introducimos o string ""
function combinacion(array $numeros, int|string $nserie): array
{

    foreach ($numeros as $clave => $numero) {
        //Genero numeros aleatorios y valido
        if ($numero == "") {
            $aleatorio = random_int(1, 49);

            while (in_array($aleatorio, $numeros)) {
                $aleatorio = random_int(1, 49);
            }

            $numeros[$clave] = $aleatorio;
            }
        }
        //Numero serie
        if ($nserie == "") {
        $nserie = random_int(1, 999);
    }
    $numeros[] = $nserie;


    return $numeros;
}


function imprimeApuesta(array $numeros, string $tituloRecibido): string
{

    $tabla = "<table border='1'>";

    //Titulo
    $tabla .= "<tr>";
    if ($tituloRecibido == "") {
        $tabla .= "<th colspan='7'>Combinación generada para la Primitiva</th>";
    } else {
        $tabla .= "<th colspan='7'>$tituloRecibido</th>";
    }
    $tabla .= "</tr>";

    //Combinacion
    $tabla .= "<tr>";
    foreach ($numeros as $numero) {
        $tabla .= "<td>$numero</td>";
    }
    $tabla .= "</tr>";

    $tabla .= "</table>";

    return $tabla;
}
