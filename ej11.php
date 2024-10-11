<!--Ejercicio con Bucledo-while
Escribe un script en PHP que use un bucle do-whilepara pedir al usuario que
ingrese un número positivo. Si el número ingresado es negativo, el script debe
continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
número positivo ingresado.-->

<?php


do{
    echo "<p>Introduzca un número positivo:</p>";
    $num = readline();

}while($num<0);
if($num>0){
    echo "<p>$num</p>";
}

echo "<p></p>";

?>