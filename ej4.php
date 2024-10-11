<!--Ejercicio con Tipos y Conversión
Declara una variable de tipo cadena que contenga un número ( "25"). Luego,
convierte esta variable a un tipo de dato entero y realiza una suma con otro número.
Imprime el resultado antes y después de la conversión utilizando var_dump()para
ver el tipo de dato.-->

<?php

$variable="25";
echo "La variable en forma de cadena ".var_dump($variable);
$variable=(int)"25";
echo "<p></p>";
echo "La variable en forma de entero ".var_dump($variable);
echo "<p></p>";

$variable = 1 + $variable;
echo "La variable en forma de entero + 1".var_dump($variable);




?>