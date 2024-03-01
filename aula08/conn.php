<?php 
    class Conn{
        public $host = "localhost";
        public $user = "root";
        public $password = "";
        public $port = 3306;
        public $dbname = "usuarios";
        public $connect = null;

        public function conectar(){
            try{
                new PDO("mysql:host=".$this->host .";port=".$this->port .";dbname=".$this->dbname, $this->user, $this->password);
                print "Conexao feita com sucesso!!";
                return $this -> connect;
            }
            catch(Exception $erro){
                print "Erro na conexão com o banco de dados";
                print "Erro gerado: ".$erro;
                return false;
            }
        }


    }
?>