<?php 
require_once 'conn.php';

class Lista extends Conn{
    public object $conn;

    public function listar(){
        $this->conn = $this->conectar();
        $querry = "SELECT * FROM users ORDER BY id";
        $resultado =  $this->conn->prepare($querry);
        $resultado->execute();
        $retorno = $resultado->fetchAll();
        print_r($retorno);
    }
}