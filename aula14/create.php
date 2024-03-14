<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuario</title>
</head>
<body>

    <a href="index.php">Listar</a> <br>
    <a href="create.php">Cadastrar</a> <br>

    <?php 
        require_once 'conn.php';
        require_once 'lista.php';

       $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

       if(!empty($form['enviar'])){
        var_dump($form);

        $create = new Lista();
        $create-> formData = $form;
        $value = $create-> create();
        if($value){
            print "Usuario cadastrado com sucesso!!";
        }
        else{
            print "Erro ao cadastrar o usuario!!";
        }
       }
    ?>

    <form action="" method="post">
        <label for="">Nome: </label>
        <input type="text" name="nome" id="" placeholder="Nome" required>
        <br>
        <label for="">Email: </label>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <br>
        <input type="submit" value="Cadastrar" name="enviar">

    </form>
    
</body>
</html>