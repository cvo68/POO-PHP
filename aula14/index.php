<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
</head>
<body>

    <a href="index.php">Listar</a> <br>
    <a href="create.php">Cadastrar</a> <br>
    <a href="view.php?id=$id">Visualizar</a>
    
    <?php 
    require_once 'conn.php';
    require_once 'lista.php';

   $lista = new Lista();
   $listar = $lista-> listar();
    ?>
</body>
</html>