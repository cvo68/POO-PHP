<?php 
    class Funcionario{
        public string $nome;
        public float $salario;

        public function verNome(){
            return "O nome do funcionario e {$this->nome}. <br>";
        }

        public function verSalario(){
            return "E o seu salario e R$ {$this->salario}. <br><hr>";
        }
    }
?>