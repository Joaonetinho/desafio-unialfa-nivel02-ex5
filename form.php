<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<style>
    .css {
        width: 50%;
        margin-left: 300px;
    }

    h2 {
        text-align: center;
        color: #FFF;
        margin-top: 120px;
    }

    body {
        background-color: #300;
    }

    form label {
        color: #FFF;
    }
</style>
<body>
    <h2>Formulário</h2>
    <form class="css" method="post" action="recuperadados.php">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control">

    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control">

    <label for="idade">Idade</label>
    <input type="number" name="idade" id="idade" class="form-control">

    <label for="hobbie">Hobbie</label>
    <input type="text" name="hobbie" id="hobbie" class="form-control">

    <br>
    <input type="submit" value="enviar" class="btn btn-warning">
    </form>
    </h2>
</body>
</html>