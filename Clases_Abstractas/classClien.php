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

        public function setMensaje(string $mensaje)
        {
            $this->mensaje=$mensaje;
        }
        public function getMensaje():string{
            return $this->mensaje.''.$this->strnombre;
        }
    }

?>