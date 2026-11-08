<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-Gestor de Notas</title>
    <style>
        body{
            text-align: center;
        }

        table{
            border-collapse: collapse ;
        }
    </style>
</head>
<body>
    <!-- Gestor de notas de una clase 
     Tengo que tener un array con los alumnos y sus notas 
     en una tabla la media de cada alumno quien aprueba y obtener la nota media de la clase
    -->

    <!-- Lo primero sera crear el array asociativo con los alumnos -->
    <?php 
    
    $alumnos = [

        "alumno1" => [
            "nombre" =>"Miguel",
            "nota" => 8
        ],

        "alumno2" => [
            "nombre" =>"Diego",
            "nota" => 6
        ],

        "alumno3" => [
            "nombre" =>"Ana",
            "nota" => 2
        ],

        "alumno4" => [
            "nombre" =>"Luis",
            "nota" => 5
        ],


    ];


    //Una vez creado el array con los alumnos 
    //Calculo la media
    //Quien aprueba y quien suspende
    //nota media

    //CALCULAMOS LA MEDIA
    $suma = 0;
    foreach($alumnos as $clave => $valor){
        $suma += $valor["nota"];
    }

    $media = $suma / count($alumnos);

    ?>

    <table border="1">

        <tr>
            <th>Alumno</th>
            <th>Nombre</th>
            <th>Nota</th>
            <th>A/S</th>
        </tr>

        <?php 
        
         foreach ($alumnos as $clave => $valor) {
            echo "<tr>";
            echo "<td>".$clave. "</td>";
            echo "<td>".$valor["nombre"]. "</td>";
            echo "<td>".$valor["nota"]. "</td>";
            echo "<td>";
                if($valor["nota"]>5){
                    echo "<span style='background-color: green;'>Aprobado</span>";
                }else{
                    echo "<span style='background-color: red;'>Suspenso</span>";
                }
            "</td>";
            echo "</tr>";
        }
        ?>

        <tr>
            <td>Media</td>
            <td colspan="3"> <?php echo"$media"; ?></td>
        </tr>
    </table>

</body>
</html>