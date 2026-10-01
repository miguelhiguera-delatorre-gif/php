<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>horario</title>
</head>
<body>

    <form action="tienda.php" method="post">
        Elige el dia de la semana<br>

        <select name="dia">
            <option value="lunes">Lunes</option>
            <option value="martes">Martes</option>
            <option value="miercoles">Miercoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
        </select>

        <button type="submit">Ver que toca</button>
    </form>


    <?php 
    $dia = $_POST['dia'];
    
    switch ($dia) {

        case "lunes":
            echo "El lunes toca PHP";
            break;

        case "martes":
            echo "El martes toca Java";
            break;

        case "miercoles":
            echo "El miercoles toca HTML";
            break;

        case "jueves":
            echo "El jueves toca CSS";
            break;

        case "viernes":
            echo "El viernes toca JavaScript";
            break;
    }

    ?>



</body>
</html>