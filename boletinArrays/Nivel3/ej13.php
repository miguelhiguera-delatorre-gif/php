
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array13</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }

        table{
            border-collapse: collapse;
            
        }

        th{
            padding: 5px;
            background-color: lightblue;
        }
    </style>
</head>





<body>

    <!-- Formulario para añadir contactos -->
    <form method="post">

        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="tlf" placeholder="Telefono" required><br>
        <input type="email" name="contacto" placeholder="Correo" required><br>

        <!-- Aqui guardamos la agenda anterior -->
        <input type="hidden" name="agenda" value="<?php echo $_POST['agenda'] ?? ''; ?>">

        <input type="submit" value="Añadir contacto">
    </form>

    <?php

    // Creamos la agenda vacia
    $agenda = [];

    // Recuperamos la agenda anterior si existe
    if (isset($_POST["agenda"]) && $_POST["agenda"] != "") {
        $agenda = unserialize(base64_decode($_POST["agenda"]));
    }

    // Comprobamos si se ha enviado un contacto
    if (isset($_POST["nombre"], $_POST["tlf"], $_POST["contacto"])) {

        // Creamos el nuevo contacto
        $nuevoContacto = [
            "nombre" => $_POST["nombre"],
            "telefono" => $_POST["tlf"],
            "correo" => $_POST["contacto"]
        ];

        // Añadimos el contacto a la agenda
        $agenda[] = $nuevoContacto;
    }

    // Convertimos la agenda para guardarla en el campo oculto
    $agenda_codificada = base64_encode(serialize($agenda));

    ?>

    <!-- Mostramos todos los contactos -->
    <h2>Mi agenda</h2>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
        </tr>

        <?php
        foreach ($agenda as $contacto) {
            echo "<tr>";
            echo "<td>".$contacto["nombre"]."</td>";
            echo "<td>".$contacto["telefono"]."</td>";
            echo "<td>".$contacto["correo"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
