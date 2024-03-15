<?php 
    require_once 'funcionario.php';

    class Salario extends Funcionario{
        
        public function bonus(){
            return "O funcionario tem bonus de R$ " . $this->bonus;
        }
    }
?>