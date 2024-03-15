<?php 
    class Funcionario{
        public string $nome;
        public float $salario;
        protected float $bonus = 30000;

        public function verSalario(){
            return "O funcionario {$this-> nome} tem o salario de {$this->salario}";
        }
    }
?>