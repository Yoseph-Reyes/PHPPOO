<?php

    abstract class Persona{

        public $intci;
        public $strnombre;
        public $intedad;
        public $mensaje;

        function __construct(int $ci,string $nombre, int $edad){
            
            $this->intci = $ci;
            $this->strnombre = $nombre;
            $this->intedad = $edad;

        }

        abstract public function getDatosPer();
        abstract public function setMensaje(string $mensaje);
        abstract public function getMensaje():string;

    }

?>