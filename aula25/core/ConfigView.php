<?php 
    namespace Core;

    class ConfigView{
        private string $nome;
        private array $dados;

        public function __construct(string $nome, array $dados){
            $this-> nome = $nome;
            $this-> dados = $dados;

            //var_dump($this-> nome);
            //var_dump($this-> dados);   
        }

        public function renderizar(){
            if(file_exists('app/'. $this-> nome. '.php')){
                include 'app/'. $this-> nome. '.php';
            }
            else{
                print "Erro ao exibir o artigo!!<br>";
            }
        }
    }
?>