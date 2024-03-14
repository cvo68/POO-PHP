<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18</title>
</head>
<body>
    <?php 
        require_once 'curso.php';
        require_once 'graduacao.php';
        require_once 'pos.php';

        $graduacao = new Graduacao();

        print $graduacao -> disciplina("Desenvolvimento Web");
        print $graduacao-> professor("Charliston Vilela");

        $pos = new Pos();

        print $pos-> disciplina("PHP POO MVC");
        print $pos-> professor("Celke");
    
    ?>
    
</body>
</html>