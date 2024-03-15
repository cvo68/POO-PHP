<?php 
    class Disciplina{
        public string $aluno;
        public float $notaTrabalho;
        public float $notaProva;
        public static $media = 0;

        function __construct(string $aluno, float $notaTrabalho, float $notaProva){
            $this-> aluno = $aluno;
            $this-> notaTrabalho = $notaTrabalho;
            $this->notaProva = $notaProva;
            self::$media = ($this->notaProva + $this->notaTrabalho) / 2;
        }

        public function situacao(){
            if(self::$media >= 7){
                return "Aluno {$this->aluno} esta aprovado com a média ".self::$media.".<hr>";
            }
            else{
                return "O aluno {$this-> aluno} esta reprovado!!";
            }
        }
        static function situacaoAluno(float $nota){
            if($nota>= 7){
                return "Aluno esta aprovado com a média ".self::$media.".<hr>";
            }
            else{
                return "Aluno reprovado!!";
            }
        }
    }

?>