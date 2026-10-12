
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array6</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        text-align: center;
        margin-top: 100px;
    }

    
    input {
        padding: 8px;
        margin: 5px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
</head>
<body>
    

    <!-- Tengo que crear un array asociativo
    El array se llamara lenguajes
    claves: nombre del lenguaje
    valores: descripcion de cada lenguaje

    Crear un formulario
    En el formulario escribo el lenguaje 
    Cuando le de a enviar veo la descripcion
    Si no existe , muestro “Extensión no encontrada” -->



    <form method="post">
        <label>Introduce una extensión:</label>
        <input type="text" name="extension"><br>
        <input type="submit" value="Buscar"><br><br>
    </form>

    <?php 
    //Creamos el array asociativo  clave=>valor
    $lenguajes = [
    "php" => "Archivo PHP",
    "html" => "Página web",
    "css" => "Hoja de estilos",
    "js" => "JavaScript",
    "sql" => "Base de datos",
    "jpg" => "Imagen"
    ];


    //1. recogemos lo que el usuario ha escrito en el formulario 
    if (isset($_POST["extension"])) {
    //2. Guardamos en una variable lo que ha escrito 
    $lenguaje = $_POST["extension"];
    //3.Comrpobamos si existe en el array
    //Aqui lo que hacemos es si escribimos php por ejemplo: $lenguajes[php]
    if (isset($lenguajes[$lenguaje])) {
        //Si existe mostramos el valor
        echo $lenguajes[$lenguaje];
    }else {

        echo "Extensión no encontrada";
    }

    }

    ?>
    
</body>
</html>
