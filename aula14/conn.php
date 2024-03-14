<?php 
abstract class Conn{
    public $host = "localhost";
    public $port = 3306;
    public $user = "root";
    public $password = "";
    public $dbname = "usuarios";
    public object $connect;

    public function conectar(){
        try{
            $this->connect = new PDO(
                "mysql:host=".$this->host.
                ";port=".$this->port.
                ";dbname=".$this->dbname, $this->user, $this->password);
            print"Conexao efetuada com sucesso!!";
            return $this->connect;
            
        }
        catch(Exception $erro){
            print "Erro de Conexao: ".$erro;
            return false;
        }
    }
}
?>