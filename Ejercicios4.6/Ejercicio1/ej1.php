<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina la imagen</title>

    <style>
        /* Hacemos la cuadrícula de 3x3 */
        .cuadricula {
            display: grid;
            grid-template-columns: repeat(3, 150px);
            grid-template-rows: repeat(3, 150px);
            gap: 5px;
        }

        /* Cada cuadrado */
        .cuadrado {
            width: 150px;
            height: 150px;
            background-color: gray;
            cursor: pointer;
        }

        /* Imagen que está oculta */
        .cuadrado img {
            width: 100%;
            height: 100%;
            display: none;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <h1>Adivina la imagen</h1>

    <p>Pulsa en los cuadrados para descubrir partes de la imagen.</p>

    <!-- Cuadrícula de 3x3 -->
    <div class="cuadricula">

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

        <div class="cuadrado" onclick="mostrar(this)">
            <img src="asta.jpg">
        </div>

    </div>

    <br>

    <!-- Formulario para escribir la respuesta -->
    <form action="comprobar.php" method="post">

        <label>¿Qué aparece en la imagen?</label>

        <input type="text" name="respuesta">

        <button type="submit">Comprobar</button>

    </form>


    <script>

        // Esta función muestra el cuadrado durante 2 segundos
        function mostrar(cuadrado) {

            // Buscamos la imagen que está dentro del cuadrado
            let imagen = cuadrado.querySelector("img");

            // Mostramos la imagen
            imagen.style.display = "block";

            // Esperamos 2 segundos
            setTimeout(function() {

                // Volvemos a ocultar la imagen
                imagen.style.display = "none";

            }, 2000);
        }

    </script>

</body>
</html>