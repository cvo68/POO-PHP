<?php 
    require_once 'curso.php';

    class Graduacao implements Curso{
        public string $nomeDisciplina;
        public string $nomeProfessor;

        public function disciplina(string $nomeDisciplina){
            $this-> nomeDisciplina = $nomeDisciplina;
            return "Nome da Disciplina: {$this-> nomeDisciplina} <br>";
        }

        public function professor(string $nomeProfessor){
            $this-> nomeProfessor = $nomeProfessor;
            return "Nome do professor: {$this-> nomeProfessor}<hr>";
        }
    }
?>