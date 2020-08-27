<?php
    class usuario{

       private $strNombre;
        public $strEmail;
        public $strTipo;
        private $strClave;
        protected $strFecha;
        static $strEstado = "Activo";

        function __construct(string $nombre,string $email,string $tipo){

            $this -> strNombre = $nombre;
            $this -> strEmail = $email;
            $this -> strTipo = $tipo;
            $this -> strClave= rand();
            $this -> strFecha= date('Y-m-d H:m:s');

        }

        public function getNombre():string{
            return $this->strNombre;
        }

        public function getDatos()
        {
            echo "datos del usuario <br>";
            echo "Nombre: ". $this->strNombre."<br>";
            echo "Email: ". $this->strEmail."<br>";
            echo "Clave: ". $this->strClave."<br>";
            echo "Fecha Registro: ". $this->strFecha."<br>";
            echo "Estado: ". self::$strEstado."<br>";
        }

        public function setCambioClave(string $pass){
            $this->strClave=$pass;
        }
    }
?>