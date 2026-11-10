<?php 
    //Tres funciones
    //dameTarjeta(), compruebaClave() e imprimeTarjeta()

    $tarjetaAdmin = [
        [12, 45, 23],
        [12, 33, 99],
        [22, 55, 59],
        [87, 23, 11],
        [94, 29, 89]
    ];

    $tarjetaUsuario = [
        [12, 87, 37],
        [34, 98, 17],
        [45, 65, 37],
        [56, 54, 38],
        [67, 43, 91]
    ];

    //Primera función
    function dameTarjeta(String $perfil,array $tarjetaAdmin, array $tarjetaUsuario): array{
       
        if($perfil=="admin"){
            return $tarjetaAdmin;
        }else{
            return $tarjetaUsuario;
        }
    }

    //Segunda función
    function compruebaClave(array $tarjeta, int $fila, string $columna, int $valor): bool {
        
        //Cogemos el numero que hay en la posicion de la matriz [fila][columna]
        $numeroElegido = $tarjeta[$fila-1][$columna-1];

        if($numeroElegido==$valor){
            return true;
        }else{
            return false;
        }
    }


    //Tercera funcion
    

?>