<?php 

    namespace Sts\Models;

    class StsListarBlog extends Conn{
        private object $conn;

        public function listar(){
            //print "Acessou a models listar. <br>";
            $this-> conn = $this->connectDb();
            //var_dump($this->conn);

            $querry_artigos = "SELECT id, titulo, conteudo FROM artigos ORDER BY id DESC LIMIT 40";
            $result_artigos = $this-> conn-> prepare($querry_artigos);
            $result_artigos-> execute();
            $retorno = $result_artigos-> fetchAll();
            //var_dump($retorno);
            return $retorno;
        }
    }
?>