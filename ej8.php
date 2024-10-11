<!--Ejercicio con Operadores de Comparación y Lógicos
Declara tres variables: $a, $by $c, con valores numéricos diferentes. Utilice
operadores de comparación y lógicos para verificar si $aes mayor que $b y si $ces
menor que $a. Imprima un mensaje que indique si ambas condiciones son
verdaderas o si alguna es falsa.-->
<?php

$a = -12;
$b = 17;
$c = 1222;

if($a >$b){
    echo "<p>$a es mayor que $b</p>";
}elseif($a <$b){
    if($a<$b && $a<$c){
        echo "<p>$a es menor que $b y menor que $c</p>";
    }else{
        echo "<p>$a es menor que $b</p>";
    }
}elseif($c>$b){
    echo "<p>$c es mayor que $b</p>";
}elseif($a>$c&&$b<$c){
    echo "<p>$a es menor que $b y $b menor que $c</p>";
}


?>