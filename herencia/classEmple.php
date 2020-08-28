<?php
    require_once("classPerso.php");
    class Empleado extends Persona{
        protected $strPuesto;

        function __construct(int $ci,string $nombre,int $edad){
            parent::__construct($ci,$nombre,$edad);
        }

        public function setPuesto(string $puesto)   
        {
            $this->strPuesto = $puesto;
        }

        public function getPuesto():string   
        {
            return $this->strPuesto;
        }
    }

?>