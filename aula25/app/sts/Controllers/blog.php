<?php 
    namespace Sts\Controllers;

use Core\ConfigView;

    class Blog{
        private array $dados;

        public function index(){
            print "Controller Blog! <br>";
            $listarArtigo = new \Sts\Models\StsListarBlog();
            $this-> dados['artigos'] = $listarArtigo-> listar();
            //var_dump($this-> dados);

            $carregarView = new \Core\ConfigView("sts/Views/blog/listarArtigo", $this-> dados);
            $carregarView-> renderizar();
        }
    }

?>