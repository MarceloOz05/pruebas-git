<?php

//Biblioteca de funciones


//Compara palabras a y b. Si la longitud de a > b, devuelve un numero positivo  1
    //                  si a>b, devuelve numero negarito,
    //                  si son iguales devuelve 0

    /*function comparar($a,$b){
        $resultado=0;
        if(strlen($a)>strlen($b)){
            $resultado=1;
        }else if(strlen($a)<strlen($b)){
            $resultado = -1;
        }
        return $resultado;
    }*/

    function comparar($a, $b){
        return strlen($a) - strlen($b);

    }
    
    


//Tampoco se pone el símbolo de cierre de PHP