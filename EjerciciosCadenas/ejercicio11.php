<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>  
<!-- 
Escribir una clase que lea n caracteres que forman un número romano y que imprima:
a. si la entrada fue correcta, un string que represente el equivalente decimal
b. si la entrada fue errónea, un mensaje de error.
Nota: La entrada será correcta si contiene solo los caracteres M:1000, D:500, C:100, L:50, X:10,
I:1. No se tendrá en cuenta el orden solo se sumará el valor de cada letra. -->

<form method="post">
    Escribe un numero romano<input type="text" name="romano"><br>
    <button type="submit">Enviar</button>
</form>

 <?php

  
    class NumeroRomano {

        // funcion que recibe el número romano y lo convierte a decimal
        public function convertir(string $romano){

            // texto a mayusculas
            $romano = strtoupper($romano);

        
            $resultado = 0;

            // recorremos cada caracter
            for ($i = 0; $i < strlen($romano); $i++) {

                // substr(texto, posicionInicial, cantidadCaracteres);
                $letra = substr($romano, $i, 1);

    
                if ($letra == "M") {
                    $resultado += 1000;
                } else if ($letra == "D") {
                    $resultado += 500;
                } else if ($letra == "C") {
                    $resultado += 100;
                } else if ($letra == "L") {
                    $resultado += 50;
                } else if ($letra == "X") {
                    $resultado += 10;
                } else if ($letra == "I") {
                    $resultado += 1;
                } else {
                    return "Error: carácter no válido.";
                }
            }

            // Devolvemos el resultado decimal.
            return $resultado;
        }
    }

   //Segunda parte
    if (isset($_POST['romano'])) {

        // Guardamos el número introducido
        $romano = trim($_POST['romano']);

        // Creamos un objeto de la clase NumeroRomano.
        $conversor = new NumeroRomano();

        // Llamamos al método convertir.
        $resultado = $conversor->convertir($romano);

        // Mostramos el resultado.
        echo "<p>Resultado: " . $resultado . "</p>";
    }

    ?>

</body>
</html>