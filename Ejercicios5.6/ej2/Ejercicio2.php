<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
        $n5 = $_POST['n5'];
        $n6 = $_POST['n6'];
        $n7 = $_POST['n7'];
        $n8 = $_POST['n8'];
        $n9 = $_POST['n9'];
        $n10 = $_POST['n10'];
        
       $numeros = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10];

       $mayor = max($numeros);
       $menor = min($numeros);

            echo "El mayor es: " . $mayor;
            echo "<br>";
            echo "El menor es: " . $menor;

    
        
    ?>
</body>
</html>