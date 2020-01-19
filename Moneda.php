<?php 

    class Moneda{

        private $valorpesos;

        public function __construct(){
            $this->valorpesos = 0;
        }

        public function getValorpesos(){
            return $this->valorpesos;
        }

        public function setValorpesos($valor){
            $this->valorpesos = $valor;
        }

        public function calcularConversion(){
            return ($this->getValorpesos() * 0.00027);
        }

    }

?>