<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array5</title>
    <style>
        th {
            background-color: lightblue;
            padding: 15px;
        }

        td {
            padding: 7px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }
    </style>


</head>



<body>
    <!-- Crea un array con cinco nombres. Muéstralos en una tabla con 
    el índice en la primera columna y el nombre
    en la segunda. El objetivo es practicar que el primer índice es 0. -->

    <?php  
    
    $nombres = ["Miguel", "Leandro", "Cape", "Mau", "Carmen"];

    ?>

    <table border="1">
        <tr>
            <th>Indice</th>
            <th>Nombre</th>
        </tr>
        <?php
        foreach ($nombres as $indice => $nombre) {
            echo "<tr>";
            echo "<td>".$indice. "</td>";
            echo "<td>".$nombre. "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>