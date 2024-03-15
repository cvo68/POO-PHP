<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19</title>
</head>
<body>
    <?php 
        require_once 'disciplina.php';

        //acessando atributo estatico
        print "Media: " .Disciplina::$media . "<br><hr>";

        $aluno = new Disciplina("Fulano", 7.5, 8.5);

        print $aluno->situacao();

        //acessando metodo estatico
        print Disciplina::situacaoAluno(6.5) ."<hr>";
    ?>
    
</body>
</html>