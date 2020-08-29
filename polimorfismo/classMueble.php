<?php

    require_once("classProduc.php");
    class Mueble extends Producto{
        public $strColor;
        public $strMaterial;
        public $strStatus="Agostado";
    

        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material){
            parent::__construct($descripcion,$precio);

            $this->strMaterial = $material;
            $this->strColor = $color;
        }

        public function getInfoProducto()
        {
            $arrProducto= array ('producto'=>$this->strDescripcion,
                                'precio'=>$this->fltPrecio,
                                'stock_minimo'=>$this->intStockMin,
                                'estado'=> $this->strStatus,
                                'color'=>$this->strColor,
                                'Material'=>$this->strMaterial
                                );
            return $arrProducto;                    
        }

    }    
?>