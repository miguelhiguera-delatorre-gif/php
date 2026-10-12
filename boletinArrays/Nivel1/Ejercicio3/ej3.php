<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>

    <style>
        h2{
            color: blueviolet;
        }

        body{
            font-size: 22px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;

        }
    </style>
</head>
<body>
    
    <!-- Genera 20 números aleatorios entre 0 y 50. Muestra 
    todos los números y después indica cuántos son pares
    y cuántos son impares. -->



    <?php   
    $numerosAleatorios = [];

    for ($i = 0; $i < 20; $i++) {
    $numerosAleatorios[] = random_int(1, 50);
    }

    ?>


    <h2>Numeros pares e impares</h2>


    <?php 
    foreach ($numerosAleatorios as $numero) {
        if($numero%2==0){
           echo "Número: " . $numero ."⮕ número par" ;
           echo "<br>";
        }else{
            echo "Número: " . $numero ."⮕ número impar" ;
            echo "<br>";
        }
        
    }

    ?>

</body>
</html>