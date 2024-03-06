<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
</head>
<body>
    <h1>Detalhes do usuario</h1>

    <?php 
        require_once 'conn.php';
        require_once 'lista.php';

        $id = filter_input(INPUT_GET, 'id',    FILTER_SANITIZE_NUMBER_INT);

        if(!empty($id)){
            require_once 'conn.php';
            require_once 'lista.php';
            print "ID do usuario: ".$id;

            $view = new Lista();
            $view->id = $id;
            $valorUser = $view->view();
            var_dump($valorUser);
        }
    
    ?>
    
</body>
</html>