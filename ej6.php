<!--Ejercicio con Variables y Constantes
Define una constante TASA_INTERES con el valor 0.05. Luego, escribe un script
que acepta una cantidad principal ingresada por el usuario y calcula el interés simple
después de un año, utilizando la constante. Imprima el resultado con un formato
adecuado.-->

<?php

define("TASA_INTERES",0.05);

function interes($cantidad){
    if($cantidad>0){
        $interes = $cantidad * TASA_INTERES;
        echo "Partiendo de $cantidad € iniciales, deberá de pagar $interes € en un año";
    }else{
        echo "No debe nada";
    }
}



?>