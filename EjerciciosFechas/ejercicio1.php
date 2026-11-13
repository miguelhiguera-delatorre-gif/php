<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
    <!-- 
    Crea un formulario donde el usuario introduce una fecha a través de 3 cajas de texto, si no es
    correcta se debe indicar en un mensaje; si es correcta se debe mostrar en el formato elegido.
    Crea una lista desplegable con todas las posibilidades de formato que se te ocurran.
    -->

    <form method="post">
        Introduce el dia: <input type="number" name="dia"><br>
        Introduce el mes: <input type="number" name="mes"><br>
        Introduce el año: <input type="number" name="año"><br>
        Selecciona el formato: 
        <select name="formato">
            <option value="d/m/Y">Dia/Mes/Año</option>
            <option value="m/d/Y">Mes/Dia/Año</option>
        </select>
        <br><br>

        <button type="submit" name="boton">Enviar</button>
    </form>

    <?php 
    $mensaje = "";

    if (isset($_POST['boton'])) {

        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $año = $_POST["año"];
        $formato = $_POST["formato"];

        if(checkdate ($mes, $dia, $año)){
            $fecha = strtotime("$año-$mes-$dia");
            $mensaje = "la fecha es correcta";

            if($formato=="d/m/Y"){
                echo $dia."/".$mes."/".$año;
                echo"<br>";
            }else{
                echo $mes."/".$dia."/".$año;
                echo"<br>";
            }
        
        }else{
             echo "La fecha no es correcta";
        }
    
    }
    echo $mensaje;
    ?>
</body>
</html>