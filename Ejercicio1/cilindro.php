<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cilindroej1</title>
</head>
<body>
    <br>
    <img src="https://img.magnific.com/vector-premium/plantilla-diseno-ilustracion-vectorial-icono-tubo-cilindro_827767-5460.jpg" alt="Cilindro" width="120">

    <?php   
    // Cogemos la altura y el radio del HTML con POST
    $altura = $_POST['altura'];
    $radio = $_POST['radio'];
    $numeropi = 3.14;

    echo "El volumen del cilindro es 🠮 " , $numeropi*($radio*$radio)*$altura;
    

    ?>
</body>
</html>