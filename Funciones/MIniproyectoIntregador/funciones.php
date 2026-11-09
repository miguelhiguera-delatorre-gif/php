    <?php

    //4 Funciones: coincideNombre, filtrarProductos, valorInventario y fechaValida

    function coincideNombre(String $nombreProducto, String $productoBuscado): bool{

        $nombreProducto = trim($nombreProducto);
        $productoBuscado = trim($productoBuscado);

        $nombreProducto = mb_strtolower($nombreProducto);
        $productoBuscado = mb_strtolower($productoBuscado);

        if ($nombreProducto == $productoBuscado) {
            return true;
        } else {
            return false;
        }
    }

    //Cuando busque el producto, me devolvera lo que coincida con lo buscado
    function filtrarProductos(array $productos, string $busqueda): array{
        $productosCoincidentes = [];

        foreach ($productos as $producto) {
            if (coincideNombre($producto["nombre"], $busqueda)) {
                $productosCoincidentes[] = $producto;
            }
        }

        return $productosCoincidentes;
    }

    function valorInventario(array $productos): float{
        $valor = 0;


        foreach ($productos as $producto) {
            $valor += $producto["precio"] * $producto["stock"];
        }

        return $valor;
    }

    function fechaValida(string $fecha): bool{

        $partes = explode("-", $fecha);

        $año = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];
        //checkdate comprueba si la fecha existe
        return checkdate($mes, $dia, $año);
    }
    ?>
