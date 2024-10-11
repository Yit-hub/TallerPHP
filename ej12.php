<!--Ejercicio con switchpara Menús
Crea un menú de opciones con switch, donde el usuario pueda elegir entre
"Sumar", "Restar", "Multiplicar" y "Dividir". Solicita dos números al usuario y realiza la
operación seleccionada. Si el usuario selecciona una opción inválida, se muestra un
mensaje de error.-->


<?php

echo "<p>1. Sumar.</p>";
echo "<p>2. Restar.</p>";
echo "<p>3. Multiplicar.</p>";
echo "<p>4. Dividir.</p>";
echo "<p></p>";
echo "<p></p>";
echo "<p>Opción: </p>";
$opcion = readline();

operaciones($opcion);

function operaciones($opcion)
{
    switch ($opcion) {
        case 1:
            $n1 = pedirNum();
            $n2 = pedirNum();

            echo "<p>$1 + $n2 = " . ($n1 + $n2) . "</p>";
            break;
        case 2:
            $n1 = pedirNum();
            $n2 = pedirNum();

            echo "<p>$1 - $n2 = " . ($n1 - $n2) . "</p>";
            break;
        case 3:
            $n1 = pedirNum();
            $n2 = pedirNum();

            echo "<p>$1 * $n2 = " . ($n1 * $n2) . "</p>";
            break;
        case 4:
            $n1 = pedirNum();
            $n2 = pedirNum();

            echo "<p>$1 / $n2 = " . ($n1 / $n2) . "</p>";
            break;
        default:
            echo "<p>Error, no ha seleccionado una opción válida</p>";
    }
}

function pedirNum()
{
    echo "<p>Introduzca un número: </p>";
    $num = readline();
    return $num;
}



?>