<?php
    require_once("classMesa.php");

    $objCama= new Producto("cama",10600);
    $arrInfoProd = $objCama->getInfoProducto();
    print_r('<pre>');
    print_r($arrInfoProd);
    print_r('</pre>');

    $objMueble= new Mueble("Closet",20800,"cas","cafe","Madera");
    $arrInfoMueble = $objMueble->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoMueble);
    print_r('</pre>');

    $objMesa= new Mesa("Mesita de Noche",2000,"casio","negro","Melanima","jet");
    $objMesa->setForma("redonda");
    $arrInfoMesa = $objMesa->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoMesa);
    print_r('</pre>');
?>