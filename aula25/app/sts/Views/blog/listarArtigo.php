<?php 
    print "Listar artigos para usuarios. <br><hr>";
    //var_dump($this-> dados);

    foreach($this-> dados ['artigos'] as $artigo){
        //var_dump($artigo);
        extract($artigo);
        print "ID: $id <br>";
        print "Titulo: $titulo <br>";
        print "Conteudo: $conteudo <br><<hr>";

    }


?>