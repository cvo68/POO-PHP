<?php 
    require_once 'conn.php';

    class Usuarios{
        public $connect;

        public function listar(){
            $conn = new Conn();
            $this -> connect = $conn -> conectar();

            $querry = "SELECT id, nome, email FROM users ORDER BY id DESC LIMIT 40";

            $resultado = $this -> connect -> prepare($querry);

            $resultado -> execute();

            return $resultado -> fetchAll(); 
        }
    }
?>