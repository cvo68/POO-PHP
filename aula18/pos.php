<?php 
    require_once 'curso.php';

    class Pos implements Curso{
        public string $nomeDisciplina;
        public string $nomeProfessor;

        public function disciplina(string $nomeDisciplina){
            $this-> nomeDisciplina = $nomeDisciplina;
            return "Nome da Disciplina da Pos: {$this-> nomeDisciplina}<br>";
        }

        public function professor(string $nomeProfessor){
            $this-> nomeProfessor = $nomeProfessor;
            return "Nome do Professor da Pos: {$this-> nomeProfessor}<hr>";
        }
    }
?>