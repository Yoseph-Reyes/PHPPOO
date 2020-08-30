<?php

    require_once("intfaOper.php");
    require_once("operBasicas.php");

    class Calcular implements Operacion,Operacion_basicas{

        public function raizCuadra(float $numero):float{
            $total= sqrt($numero);
            return $total;
        }

        public function potencia(int $numero, int$potencia):int{
            $total= pow($numero,$potencia);
            return $total;
        }

        public function op_basic(float $cont1,float $cont2, string $oper)
        {
            if($oper=="+")
            {
                $result = $cont1+$cont2;
            }elseif ($oper=="-") {
                $result=$cont1-$cont2;
            }elseif ($oper=="*") {
                $result=$cont1*$cont2;
            }elseif ($oper=="/") {
                $result=$cont1/$cont2;
            }else{
                $result="No valido";
            }
            return $result;
        }
    }

?>