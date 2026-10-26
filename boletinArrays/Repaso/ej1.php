<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <!-- Aplicacion web aspirantes y datos trabajo 
    Necestio 
    Nombre, edad, años de exp y gmail 
    boton de aceptar
    boton de terminar el formulario 
    Almacenar datos en array asociativo 

    Cuando se pulse el boton finalizar/ terminar
    muestro tabla con los aspirantes, los mayores de 30 en rojo -->

    <form method="post">
        <h3>Introduzca aquí sus datos:</h3>    <br>
        Nombre<br><input type="text" name="nombre"><br>
        Edad<br><input type="number" min="18" name="edad"><br>
        Años de exp<br><input type="number" min="0" name="años"><br>
        Corre electrónico<br><input type="email" name="correo">

        <br><br>
        <input type="submit" name="aceptar" value="Aceptar">
        <input type="submit" name="finalizar" value="Finalizar">
    </form>

    <?php 

    
    
    if (isset($_POST["aceptar"])) {
    // Guardar los datos del aspirante
        //1. recogemos los datos que envia con el formulario 
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $años = $_POST["años"];
        $correo = $_POST["correo"];
    }

    if (isset($_POST["finalizar"])) {
    // Mostrar la tabla de aspirantes
    }

        
    ?>


</body>
</html>