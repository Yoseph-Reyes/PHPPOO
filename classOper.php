<?php
    class Operacion{

        public $cant1=0;
        public $cant2=0;
        public $res=0;

       function __construct($intcant1,$intcant2){
            $this->cant1=$intcant1;
            $this->cant2=$intcant2;
       }

        public function getSuma(){
            $this->res=$this->cant1+$this->cant2;
            return $this->res;
        }
        public function getResta(){
            $this->res=$this->cant1-$this->cant2;
            return $this->res;
        }
        public function getMult(){
            $this->res=$this->cant1*$this->cant2;
            return $this->res;
        }
        public function getDiv(){
            $this->res=$this->cant1/$this->cant2;
            return $this->res;
        }

    }//clase de operaciones
?>