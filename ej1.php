<!--1. Ejercicio con echo y HTML Embebido
Crea un archivo PHP que imprime un formulario HTML usando la función echo. El
formulario debe contener un campo de texto para el nombre y un botón de envío.
Cuando el formulario se envía, muestra el nombre ingresado utilizando la misma
página PHP.-->

<?php

if (!is_null($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    echo "Su nombre es: $nombre";
}

?>