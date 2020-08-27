<?php

    require_once("classUser.php");

    $objUser1 = new Usuario("andres","andres@info.com","admin");
    $objUser2 = new Usuario("Yoseph","Yoseph@info.com","master");

    echo $objUser1->getDatos()."<br>";
    echo $objUser2->getDatos()."<br>";
    //echo $objUser1->strEmail."<br>";
    //echo $objUser1->strTipo."<br>";
    //echo $objUser1->strClave."<br>";
    //echo $objUser1->strFecha."<br>";
    //echo Usuario::$strEstado."<br>";

    $objUser2->setCambioClave("yoseph565");
    echo "<br><br>";
    echo $objUser2->getDatos()."<br>";

?>