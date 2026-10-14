<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array12</title>


    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        text-align: center;
        margin-top: 50px;
    }

    form {
        background-color: white;
        width: 300px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    label {
        font-size: 20px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 90%;
        padding: 10px;
        margin-top: 15px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
    
</head>
<body>
<!--     
Crea un array asociativo con usuarios.
La clave será el nombre de usuario y el valor será otro array con nombre completo, correo y rol. 
Mediante formulario, pide un usuario y muestra sus datos si existe. -->

<form method="post">
    <label>Ejercicio 12- Usuarios</label><br>
    <input type="text" placeholder="Introduce el nombre del usuario" name="usuario"><br>
    <input type="submit" value="Enviar"><br>
</form>



<?php

    $usuarios = [

       "Miguelhd" => [
        "nombre" => "Miguel Higuera",
        "correo" => "mhdtorre@gmail.com",
        "rol" => "porgramador junior"
       ],

       "Mariojg" => [
        "nombre" => "Mario Jimenez",
        "correo" => "mjrodriguez@gmail.com",
        "rol" => "becario"
       ]
    ];


//1. Recogemos el dato que enviamos por el formulario
$usuario = $_POST["usuario"];

//2.Vamos a comrpobar si existe en el array ese nombre que hemos enviado 
if (array_key_exists($usuario, $usuarios)) {
    // El usuario existe
    echo $usuarios[$usuario]["nombre"]. "</p>";
    echo $usuarios[$usuario]["correo"]. "</p>";
    echo $usuarios[$usuario]["rol"]. "</p>";
} else {
    // El usuario no existe
    echo"El usuario no existe";
}
    
?>

</body>
</html>