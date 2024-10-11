<!--Ejercicio con Operadores de Asignación y Condicionales
Declara una variable con un valor inicial de 100. Usa operadores de asignación (+=, -=, etc.) 
para modificar su valor en diferentes etapas y luego usa una
condicional if para determinar si el valor final es mayor o menor que 100.-->
<?php
$valor = 100;
echo "<p>Valor actual: $valor</p>";
$valor += $valor;
echo "<p>Valor actual: $valor</p>";
$valor -=123;
echo "<p>Valor actual: $valor</p>";
$valor *=17;
echo "<p>Valor actual: $valor</p>";
$valor /= 3;
echo "<p>Valor actual: $valor</p>";
--$valor;
echo "<p>Valor actual: $valor</p>";
if($valor>100){
    echo "<p>El Valor actual: $valor es mayor que 100</p>";
}else{
    echo "<p>El Valor actual: $valor es menor que 100</p>";
}



?>