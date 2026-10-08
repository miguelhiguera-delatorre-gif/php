<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>

    <?php  
//Define tres arrays de 20 números enteros cada una, con nombres 
// “numero”, “cuadrado” y “cubo”. Carga
// el array “numero” con valores aleatorios entre 0 y 100.
//  En el array “cuadrado” se deben almacenar los
// cuadrados de los valores que hay en el array “numero”. 
// En el array “cubo” se deben almacenar los cubos
// de los valores que hay en “numero”. A continuación, muestra el 
// contenido de los tres arrays dispuesto en
// tres columnas.

   

   for($i = 0; $i < 20; $i++){
    $numero[] = rand(0, 100);
    $cuadrado[] = $numero[$i] * $numero[$i];
    $cubo[] = $numero[$i] * $numero[$i] * $numero[$i];
}


    ?>

    <table border="1">
        <tr>  
            <th>Numero</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>
        <?php for($i = 0; $i < 20; $i++):?>
        <tr>  
            <td><?= $numero[$i] ?></td>
            <td><?= $cuadrado[$i] ?></td>
            <td><?= $cubo[$i] ?></td>
        </tr>
        <?php endfor;?>
    </table>

    <style>
        table{
            border-collapse: collapse;
        }
        th{
            background-color: aqua;
        }

        td{
            padding: 15px;
        }
    </style>

        
</body>
</html>