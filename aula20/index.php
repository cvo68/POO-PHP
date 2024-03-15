<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 20</title>
</head>
<body>
    <?php 
        require_once 'funcionario.php';

        $funcionario = new Funcionario();

        $funcionario-> nome = "Trabalhador";
        $funcionario-> salario = 5678.90;

        print $funcionario-> verNome();
        print $funcionario-> verSalario();
   
    ?>
    
</body>
</html>