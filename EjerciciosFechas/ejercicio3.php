<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<style>
    form{
        border: 1px solid black;
        padding: 10px;
        width: fit-content;
        height: fit-content;
        background-color: lightblue;
    }
</style>

<body>
<!-- 
Pedir una fecha en un formulario con un input de fecha y mostrar a que día de la semana
corresponde (en español).
 -->

 <form method="post">
    Introduce una fecha<input type="date" name="fecha"><br>
    <button type="submit" name="boton">Enviar</button><br>
 </form>

 
<?php 
    $mensaje = "";

    if (isset($_POST['boton'])) {

        $fecha = $_POST["fecha"];

            $numeroDia = date("N", strtotime($fecha));
            //N hace que podamos ver el numero dde la semana 

            if($numeroDia == 1){
                $mensaje = "Lunes";
            }else if($numeroDia == 2){
                $mensaje = "Martes";
            }else if($numeroDia == 3){
                $mensaje = "Miércoles";
            }else if($numeroDia == 4){
                $mensaje = "Jueves";
            }else if($numeroDia == 5){
                $mensaje = "Viernes";
            }else if($numeroDia == 6){
                $mensaje = "Sábado";
            }else{
                $mensaje = "Domingo";
            }

        }else{
            $mensaje = "Fecha incorrecta";
        }

        echo $mensaje;
    
?>


</body>
</html>