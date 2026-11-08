<?php 
$candidatos = [];//Creo el array donde almaceno los candidatos

// Recupero los candidatos anteriores
if (isset($_POST["candidatos"]) && $_POST["candidatos"] != "") {
    // Unserialize para convertir el texto a array
    $candidatos = unserialize($_POST["candidatos"]);
}

if (isset($_POST["boton"])) {

    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $años = $_POST["años"];
    $email = $_POST["email"];

    // Aquí es donde registro a los contactos
    $candidatos[] = [
        "nombre" => $nombre,
        "edad" => $edad,
        "años" => $años,
        "email" => $email
    ];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    
    <style>
        form { display: grid; gap: 12px; max-width: 400px; font-family: system-ui, sans-serif; }
        input, select, textarea { padding: 8px 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { padding: 10px; background: #0066cc; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        table {
            border-collapse: collapse;
            text-align: center;
        }

        th {
            padding: 15px;
        }

        td{
            padding: 10px;
        }
        th {
            background-color: lightblue;
        }    
    </style>

</head>
<body>
    <!-- Crea un formulario para registrar candidatos a una oferta de trabajo. 
    Cada candidato tendrá los siguientes datos:
    - Nombre.
    - Edad.
    - Años de experiencia.
    - Correo electrónico.
    Cada vez que pulses el botón Registrar, se añadirá el candidato a 
    un listado sin perder los anteriores.

    Debes mostrar una tabla con todos los candidatos y 
    destacar en rojo aquellos que tengan más de 30 años. -->

    <form method="post">
        Nombre:      <input type="text" name="nombre"><br>
        Edad:        <input type="number" name="edad"><br>
        Años de exp: <input type="number" name="años"><br>
        Correo:      <input type="email" name="email"><br><br>

        <!-- Usamos serialize para conertir el array en texto -->
        <input type="hidden" name="candidatos" value="<?php echo htmlspecialchars(serialize($candidatos)); ?>">

        <input type="submit" name="boton" value="Enviar"><br>
    </form>


    <br>
    <!-- Muestro los distintos contactos en una tabla -->

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Años</th>
            <th>Email</th>
        </tr>

        <?php
        if (isset($_POST["boton"])) {
            foreach ($candidatos as $clave => $valor) {
                echo "<tr>";
                echo "<td>" . $valor["nombre"] . "</td>";
                echo "<td>" . $valor["edad"] . "</td>";
                echo "<td>" . $valor["años"] . "</td>";
                echo "<td>" . $valor["email"] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>