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