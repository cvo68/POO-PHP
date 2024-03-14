<?php 
require_once 'conn.php';

class Lista extends Conn{
    public object $conn;
    public array $formData;
    public int $id;

    public function listar(){
        $this->conn = $this->conectar();
        $querry = "SELECT * FROM users ORDER BY id";
        $resultado =  $this->conn->prepare($querry);
        $resultado->execute();
        $retorno = $resultado->fetchAll();
        print_r($retorno);
    }

    public function create(){
        var_dump($this-> formData);
        $this->conn = $this->conectar();

        $querryIn = "INSERT INTO users (nome, email) VALUES (:nome, :email)";
        $add = $this->conn->prepare($querryIn);
        $add->bindParam(':nome', $this->formData['nome']);
        $add->bindParam(':email', $this->formData['email']);
        $add->execute();

        if($add->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }

    public function view(){
        $this->conn = $this->conectar();
        $querryView = "SELECT * FROM users WHERE id=id LIMIT 1";

        $resultView = $this->conn->prepare($querryView);
        $resultView->bindParam(':id', $this->id);
        $resultView->execute();
        $valor = $resultView->fetch();
        return $valor;
    }
}