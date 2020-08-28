<?php

    class Persona{

        public $intci;
        public $strnombre;
        public $intedad;

        function __construct(int $ci,string $nombre, int $edad){
            
            $this->intci = $ci;
            $this->strnombre = $nombre;
            $this->intedad = $edad;

        }

        public function getDatosPer()
        {
            $datos="
                <h2>DATOS PERSONALES</h2><br>

                CI: {$this->intci}<br>
                NOMBRE: {$this->strnombre}<br>
                EDAD: {$this->intedad}<br>
            ";
            return $datos;
        }

    }

?>