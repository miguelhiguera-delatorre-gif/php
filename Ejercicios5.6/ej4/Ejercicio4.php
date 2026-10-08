<?php 
        
        //Generamos 100 numeros aleatorios del 0 al 20 
        for($i = 0; $i < 100; $i++){
            $numero[] = rand(0, 20);
        }

        //Mostramos eso números por pantalla
        for($i = 0; $i < 100; $i++){
            echo" ".$numero[$i]." ";
        }

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        for($i = 0; $i < count($numero); $i++){
        if($n1==$i){
            
        }
        }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>

<form action="Ejercicio4.php" method="post">
    <h4>El primer numero que pongas 
    sustituira al segundo en la lista todas las veces que aparezca</h4>
    <br>
    <input type="number" name="n1" min="1" max="20" placeholder="numero 1"><br>
    <input type="number" name="n2" min="1" max="20" placeholder="numero 2">
</form>
    




<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    input{
        background-color: aqua;
        padding: 10px;
        width: 125px;
        text-align: center;
    }
</style>
    
</body>
</html>