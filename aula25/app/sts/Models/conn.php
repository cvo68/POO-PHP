<?php 
    namespace Sts\Models;

use PDO;
use PDOException;

    abstract class Conn{
        private string $db = "mysql";
        private string $host = "localhost";
        private string $user = "root";
        private string $password = "";
        private string $dbname = "blog";
        private int $port = 3306;
        private object $connect;

        public function connectDb(){
            try{
                $this->connect = new PDO($this-> db. ':host='. $this->host.'; port='. $this->port.';dbname='.$this->dbname, $this-> user, $this-> password);
                print "Conexão realizada com sucesso!!<br>";
                return $this-> connect;
            }
            catch(PDOException $erro){
                die("Erro! Tente novamente!");
            }
        }

    }
?>