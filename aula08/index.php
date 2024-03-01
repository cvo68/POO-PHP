<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
    <?php 
        require_once 'usuario.php';

        $listarUsuarios = new Usuarios();

        $resultado = $listarUsuarios-> listar();

        foreach($resultado as $linhaUser){
            extract($linhaUser);
            print "ID do usuario: $id <br>";
            print "Nome do usuario: $nome <br>";
            print "Email do usuario: $email <br>";
            print "<hr>";
        }
    ?>
    
</body>
</html>