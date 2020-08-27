<?php
    class usuario{

        public $strNombre;
        public $strEmail;
        public $strTipo;
        public $strClave;

        function __construct(string $nombre,string $email,string $tipo){

            $this -> strNombre = $nombre;
            $this -> strEmail = $email;
            $this -> strTipo = $tipo;
            $this -> strClave= $clave;

        }

    }
?>