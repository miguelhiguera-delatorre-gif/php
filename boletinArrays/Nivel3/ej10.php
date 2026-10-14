
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array10</title>
    <style>
    table {
        border-collapse: collapse;
        margin: 20px auto;
        width: 80%;
        background-color: white;
    }

    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr.suspenso {
        background-color:  #ff0000;
        color: white;
    }
    </style>
</head>
<body>

<!-- Crea un array bidimensional con al menos cinco alumnos. 
Cada alumno tendrá nombre, curso, nota_media y correo. 
Muestra la información en una tabla. 
Si la nota media es inferior a 5, muestra la fila con una clase CSS llamada suspenso. -->

<?php 
        //1. Array bidimensional con 5 alumnos 
        $alumnos = [

            [
            "nombre" => "Miguel",
            "curso" => "1 daw",
            "correo" => "mm@gmail.com",
            "nota" => 7
            ],

            [
            "nombre" => "Mario",
            "curso" => "1 CAFYD",
            "correo" => "mJ@gmail.com",
            "nota" => 9
            ],

            [
            "nombre" => "Luis Cansino",
            "curso" => "grado de deporte",
            "correo" => "luis@gmail.com",
            "nota" => 0
            ],

            [
            "nombre" => "Laura",
            "curso" => "1 dam",
            "correo" => "lra@gmail.com",
            "nota" => 8
            ],

            [
            "nombre" => "Ana",
            "curso" => "1 daw",
            "correo" => "eana@gmail.com",
            "nota" => 4
            ]

        ];

?>

<table border="1">

<tr>
    <th>Nombre</th>
    <th>Curso</th>
    <th>Correo</th>
    <th>Nota media</th>
</tr>

<?php  

foreach ($alumnos as $alumno) {

    if ($alumno["nota"] < 5) {
        echo "<tr class='suspenso'>";
    } else {
        echo "<tr>";
    }

    echo "<td>".$alumno["nombre"]."</td>";
    echo "<td>".$alumno["curso"]."</td>";
    echo "<td>".$alumno["correo"]."</td>";
    echo "<td>".$alumno["nota"]."</td>";
    echo "</tr>";

}
?>

</table>

</body>
</html>
