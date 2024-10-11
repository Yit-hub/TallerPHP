<!--Ejercicio con Bucledo-while
Escribe un script en PHP que use un bucle do-whilepara pedir al usuario que
ingrese un número positivo. Si el número ingresado es negativo, el script debe
continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
número positivo ingresado.-->

<?php


do{
    $num = trim(readline("Introduzca un número positivo:"));
}while($num<0);

echo "<p></p>";

?>