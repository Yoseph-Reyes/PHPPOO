<?php

    require_once("classMueble.php");
    final class Mesa extends Mueble{
        private $strForma = "";
        protected $strTama;
        
        public $strStatus="Activo";
    

        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material,string $tama){
            parent::__construct($descripcion,$precio,$marca,$color,$material);

            $this->strTama  = $tama;
            
        }

        public function setForma(string $forma)
        {
            $this->strForma=$forma;
                               
        }

        public function getInfoProducto(){
            $arrProducto= array ('producto'=>$this->strDescripcion,
                                'precio'=>$this->fltPrecio,
                                'stock_minimo'=>$this->intStockMin,
                                'estado'=> $this->strStatus,
                                'color'=>$this->strColor,
                                'Material'=>$this->strMaterial,
                                'Tamaño'=>$this->strTama,
                                'Forma'=>$this->strForma
                                );
            return $arrProducto;                    
        }
    }    
?>