<?php
// Esta opcion es por si hay varios botones por ejemplo de restar, sumar, dividir. lo lleva al boton solicitado
/*if(isset($_REQUEST['btn_calcular']))*/

    $numero1 = $_REQUEST['numero1'];
    $numero2 = $_REQUEST['numero2'];

    $resultado = $numero1 + $numero2;

    echo "La suma es: " .$resultado

?>