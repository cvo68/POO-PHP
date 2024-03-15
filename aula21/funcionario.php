<?php 
    class Funcionario{
        public string $nome;
        public float $salario;
        private string $salarioConvertido;

        public function verSalario(){
            return "O funcionario {$this-> nome} tem o salario de {$this->salario}";
        }

        private function converterSalario(){
            $this->salarioConvertido = number_format($this->salario, 2, ',', '.');
            return $this->salarioConvertido;
        }

    }
?>