<?php 
    if(isset($_POST["btncalcular"])){
require_once 'Moneda.php';

$objmoneda = new Moneda();

        $valor = $_POST["txtvalorpesos"];
        $objmoneda->setValorpesos($valor);    
//echo "Lo que hay en el atributo de valorPesos es " . 
//        $objmoneda->getValorpesos();
        echo "La conversión de " . $valor . " es " .
            $objmoneda->calcularConversion();
    }else{
        echo "Eres un hacker, he capturado tu ip.";
    }
?>