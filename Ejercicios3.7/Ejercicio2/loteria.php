<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotería</title>
</head>
<body>
    <table border="1">
    <tr>
    </table>
<?php   
    // Cogemos la altura y el radio del HTML con POST
    $numeroCupon1 = $_POST['numeroCupon1'];
    $numeroCupon2 = $_POST['numeroCupon2'];
    $numeroCupon3 = $_POST['numeroCupon3'];
    $numeroCupon4 = $_POST['numeroCupon4'];
    $numeroCupon5 = $_POST['numeroCupon5'];
    $numeroCupon6 = $_POST['numeroCupon6'];

    $numeroSerie = $_POST['numeroSerie'];

    $n1=rand(1,49);
    $n2=rand(1,49);
    $n3=rand(1,49);
    $n4=rand(1,49);
    $n5=rand(1,49);
    $n6=rand(1,49);

  
?>

<table border="1" width="500" height="300">
    <tr>
        <td>Numero de mi cupón</td>
        <td><?= $numeroCupon1 ?> </td>
        <td><?= $numeroCupon2 ?></td>
        <td><?= $numeroCupon3 ?></td>
        <td><?= $numeroCupon4 ?></td>
        <td><?= $numeroCupon5 ?></td>
        <td><?= $numeroCupon6 ?></td>
        
    </tr>
    <tr>
        <td>Numero que ha tocado</td>
        <td><?= $n1 ?></td>
        <td><?= $n2 ?></td>
        <td><?= $n3 ?></td>
        <td><?= $n4 ?></td>
        <td><?= $n5 ?></td>
        <td><?= $n6 ?></td>
        
    </tr>
    <tr>
        <td >Numero de Serie</td>
        <td colspan="6"><?= $numeroSerie ?></td>
        
    </tr>
    </table>


</body>
</html>