<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21</title>
</head>
<body>
    <?php 
        require_once 'funcionario.php';
        require_once  'salario.php';

        $funcionario = new Funcionario();

        $funcionario-> nome = "Trabalhador";
        $funcionario-> salario = 1234.56;

        print $funcionario-> verSalario()."<br><hr>";

        $salario = new Salario();
        print $salario-> bonus();
        
    ?>
    
</body>
</html>