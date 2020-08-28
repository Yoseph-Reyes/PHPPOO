<?php
    require_once("classPerso.php");
    class Cliente extends Persona{
        protected $fltCredito;

        function __construct(int $ci,string $nombre,int $edad){
            parent::__construct($ci,$nombre,$edad);
        }

        public function setCredito(float $credito)   
        {
            $this->fltCredito= $credito;
        }

        public function getCredito():float   
        {
            return $this->fltCredito;
        }
    }

?>