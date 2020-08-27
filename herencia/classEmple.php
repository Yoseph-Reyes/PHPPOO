<?php
    require_once("classPerso.php");
    class Empleado extends Persona{

        function __construct(int $ci,string $nombre,int $edad){
            parent::__construct($ci,$nombre,$edad);
        }
    }

?>