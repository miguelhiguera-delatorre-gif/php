<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aspectoPagina</title>
</head>
<body>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam eveniet impedit maxime accusantium animi aperiam libero necessitatibus iste facere, magni repudiandae quia labore neque deleniti amet perferendis aut. Adipisci, sit
    <?php 

        $color = $_POST['color'];
        $letra = $_POST['letra'];
        $alineacion = $_POST['alineacion'];

    ?>

    <body style="
    background-color: <?php echo $color; ?>;
    font-family: <?php echo $letra; ?>;
    text-align: <?php echo $alineacion; ?>;
    ">
</body>
</html>