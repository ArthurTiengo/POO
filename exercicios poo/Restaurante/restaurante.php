<?php
class Restaurante {
    private $valorPrato;
    private $taxaGarcom = 0.10; // 10% de taxa para o garçom

    public function __construct($valorPrato) {
        $this->valorPrato = $valorPrato;
    }

    public function calcularTotal() {
        $valorGarcom = $this->valorPrato * $this->taxaGarcom;
        return $this->valorPrato + $valorGarcom;
    }
}
?>
