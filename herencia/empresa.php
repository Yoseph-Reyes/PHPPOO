<?php
    require_once("classEmple.php");
    require_once("classClien.php");

    $objEmple = new Empleado(26960440,"Yoseph Andres",21);
    $objEmple->setPuesto("administrador");

    echo $objEmple->getDatosPer();
    echo "Puesto: ". $objEmple->getPuesto();

    $objClien = new Cliente(444,"Yoseph ",20);
    $objClien->setCredito(1000.2);

    echo $objClien->getDatosPer();
    echo "Cretido: ". $objClien->getCredito();
?>