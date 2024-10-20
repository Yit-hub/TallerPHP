<!--Ejercicio con if, else, elseifpara Determinar Edad
Escribe un script en PHP que pida al usuario ingresar su edad. Luego, utiliza una
estructura if, elseif, elsepara imprimir un mensaje diferente según la edad:
"Eres menor de edad" (< 18), "Eres adulto joven" (18-35), "Eres adulto" (36-65),
"Eres alcalde" (> 65).-->
<html>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="edad">
            <input type="submit" name="Enviar">
    </form>

</html>


<?php
$edad= $_POST["edad"];
if($edad <=0){
    echo"edad no válida";
}else{
    edades($edad);
}

function edades($edad){
    if($edad<18){
        echo "Eres menor de edad";
    }elseif($edad<35){
        echo "Eres adulto joven";
    }elseif($edad<65){
        echo"Eres adulto";
    }else{
        echo "Eres alcalde";
    }
}

?>