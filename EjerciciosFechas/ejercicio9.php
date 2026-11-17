<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <style>
        *{font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
        input[type='submit']{background-color: gray;padding: 5px;}
        form{width: fit-content; border: 2px solid black; background-color: lightblue; border-radius: 5px;padding: 5px;}
        
    </style>
</head>
<body>

    <form method="POST">
        <label>Fecha del préstamo:</label><br>
        <input type="date" name="fecha" required><br><br>
        <input type="submit" value="Devolver libro"><br>
    </form>

    <?php
    if (isset($_POST['fecha'])) {

        $fechaPrestamo = new DateTime($_POST['fecha']);
        $fechaActual = new DateTime(date("Y-m-d"));

        $dias = $fechaPrestamo->diff($fechaActual)->days;

        if ($dias <= 15) {
            echo "Devolución realizada con éxito";
        } else {
            $retraso = $dias - 15;
            $precio = $retraso * 2;

            echo "Tienes un retraso de $retraso días.";
            echo "<br>Debes abonar $precio euros.";
        }
    }
    ?>

</body>
</html>
