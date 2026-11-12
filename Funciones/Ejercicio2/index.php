<?php
require_once __DIR__ . "/funciones.php";

$columnas = ['A', 'B', 'C', 'D', 'E'];

// Si se envia el formulario, mantenemos las coordenadas enviadas
// Si se recarga la pagina por primera vez, las generamos aleatoriamente
if (isset($_POST["acceder"])) {
    $filaSel = $_POST["fila"];
    $columnaSel = $_POST["columna"];
} else {
    $filaSel = rand(1, 5);
    $columnaSel = $columnas[array_rand($columnas)];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index-Ej2</title>
</head>
<body>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Administrador</th>
            <th>Usuario estándar</th>
        </tr>
        <tr>
            <td><?php echo imprimeTarjeta($tarjetaAdmin); ?></td>
            <td><?php echo imprimeTarjeta($tarjetaUsuario); ?></td>
        </tr>
    </table>

    <br>

    <form method="POST" action="">
        <label>Perfil:</label><br>
        <select name="perfil">
            <option value="admin" <?php if(isset($_POST["perfil"]) && $_POST["perfil"] == "admin") echo "selected"; ?>>Administrador</option>
            <option value="estandar" <?php if(isset($_POST["perfil"]) && $_POST["perfil"] == "estandar") echo "selected"; ?>>Usuario estándar</option>
        </select>

        <br><br>

        <h3>INTRODUCE LA SIGUIENTE COORDENADA</h3>
        <label><b>COORDENADA Fila: <?php echo $filaSel; ?> Columna:<?php echo $columnaSel; ?></b></label>
        <input type="number" name="valor" required>
        
        <!-- Guardamos la fila y columna aleatoria actual para evaluarlas al hacer submit -->
        <input type="hidden" name="fila" value="<?php echo $filaSel; ?>">
        <input type="hidden" name="columna" value="<?php echo $columnaSel; ?>">

        <br><br>

        <input type="submit" name="acceder" value="COMPROBAR">
    </form>

<?php
    if(isset($_POST["acceder"])){
        $perfil = $_POST["perfil"];
        $fila = $_POST["fila"];
        $columna = $_POST["columna"];
        $valor = $_POST["valor"];

        // vemos la tarjeta correspondiente al perfil
        $tarjeta = dameTarjeta($perfil, $tarjetaAdmin, $tarjetaUsuario);

        // comrpobamos si la clave es correcta
        $correcto = compruebaClave($tarjeta, (int)$fila, $columna, (int)$valor);

        if($correcto){
            echo "<p style='color:green;'><b>Acceso permitido.</b></p>";
        }else{
            echo "<p style='color:red;'><b>Clave incorrecta. Inténtalo de nuevo.</b></p>";
        }
    }
?>

</body>
</html>