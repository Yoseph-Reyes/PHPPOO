<?php

    require_once("classOper.php");

    $objRaiz = new Calcular();

    echo $objRaiz->raizCuadra(9);
    echo "<br><br>";
    echo $objRaiz->potencia(4,5);
    echo "<br><br>";
    echo $objRaiz->op_basic(1.2,2.3,"a");
?>