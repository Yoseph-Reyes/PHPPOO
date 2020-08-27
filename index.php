<?php
    require_once('classOper.php');

    $oper1= new Operacion (10,2);

    $totalsum = $oper1-> getSuma();
    $totalres = $oper1-> getResta();
    $totalmult = $oper1-> getMult();
    $totaldiv = $oper1-> getDiv();

    echo 'Total de la suma es:' . $totalsum.'<br>';
    echo 'Total de la resta es:' . $totalres.'<br>';
    echo 'Total de la multiplicacion es:' . $totalmult.'<br>';
    echo 'Total de la division es:' . $totaldiv.'<br>';

?>