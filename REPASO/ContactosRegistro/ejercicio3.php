<?php
// Inicializo el array de contactos
$contactos = [];

// Recupero los contactos anteriores
if (isset($_POST["contactos"]) && $_POST["contactos"] != "") {
    // Unserialize para convertir el texto a array
    $contactos = unserialize($_POST["contactos"]);
}

// Envío los datos y los guardo en un array asociativo
// Si se ha pulsado el botón:
if (isset($_POST["boton"])) {

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $tlf = $_POST["tlf"];

    // Aquí es donde registro a los contactos
    $contactos[] = [
        "nombre" => $nombre,
        "correo" => $correo,
        "tlf" => $tlf
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        th {
            padding: 5px;
        }

        th {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <!-- Tengo que crear un formulario para registrar contactos 
         Nombre, Correo y tlf -->
    <h3>Registrador de Contactos</h3>
    <form method="post">

        Nombre <input type="text" name="nombre" required><br>
        Correo <input type="email" name="correo" required><br>
        Telefono<input type="tel" name="tlf" required><br><br>

        <!-- Usamos serialize para conertir el array en texto -->
        <input type="hidden" name="contactos" value="<?php echo htmlspecialchars(serialize($contactos)); ?>">

        <input type="submit" value="Registrar" name="boton"><br>

    </form>

    <br>
    <!-- Muestro los distintos contactos en una tabla -->

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>

        <?php
        if (isset($_POST["boton"])) {
            foreach ($contactos as $clave => $valor) {
                echo "<tr>";
                echo "<td>" . $valor["nombre"] . "</td>";
                echo "<td>" . $valor["correo"] . "</td>";
                echo "<td>" . $valor["tlf"] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

</body>

</html>