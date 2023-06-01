<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_POST){
            $nome = str_replace(' ', '',$_POST['nome']);
            $email = $_POST['email'];
            $idade = $_POST['idade'];
            $hobbie = $_POST['hobbie'];

            if(strlen($nome) < 6 ) {
                echo 'Nome inválido, nome precisar ter no mínimo 6 caracteres.';
                exit();
            }

            if($idade < 18){
                echo 'Você é de menor, não poderá acessar o site';
                exit();
            }
        }
            echo 'Dados do cliente:';
            echo '<br>';       
            echo 'nome: ' . $nome;
            echo '<br>';
            echo 'email: ' . $email;
            echo '<br>';
            echo 'idade: ' . $idade;
            echo '<br>';
            echo 'hobbie: ' . $hobbie;
    ?>
</body>
</html>