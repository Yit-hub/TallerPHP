<!--Ejercicio con Tipos Compuestos (Arrays Multidimensionales)
Crea un array multidimensional llamado $alumnosque contiene información de al
menos tres estudiantes. Cada estudiante debe tener un nombre, una edad y una
lista de materias con sus respectivas calificaciones. Registre la matriz para mostrar
el nombre de cada alumno y la calificación promedio de sus materias.-->
<?php

$alumnosque = array(
    array("Nombre" => "Jose", "Edad" => 12, "Materias" => array("Matemáticas" => 4.99, "Lengua" => 5.50, "Física" => 2)),
    array("Nombre" => "Manuel", "Edad" => 14, "Materias" => array("Matemáticas" => 7.99, "Lengua" => 8.50, "Física" => 7)),
    array("Nombre" => "Armando", "Edad" => 10, "Materias" => array("Matemáticas" => 9, "Lengua" => 6, "Física" => 10))
);


for ($i = 0; $i <count($alumnosque); $i++) {
    echo $alumnosque[$i]["Nombre"] . " | " . " Media: ";

    $media = 0;
    foreach ($alumnosque[$i]["Materias"] as $calificacion) {
        $media += $calificacion;
    }
    echo $media / 3;
    echo "<p></p>";
}


?>