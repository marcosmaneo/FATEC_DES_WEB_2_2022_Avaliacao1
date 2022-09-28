<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
         body{ font: 14px sans-serif; text-align: center;
              background-color: #fdf9f2;}
            h1 {color: #8B4513;}
            h2 {color: #8B4513;}
            p {color: #8B4513;}
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body><center>
    <div class="wrapper">
        <h2>Efetue nos campos abaixo o cadastro: </h2>
        <form action="cadastrar.php" method="post">
            <div class="form-group">
                <input type="text" name="nometext" class="form-control" value="" placeholder="Digite seu nome completo" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="text" name="emailtext" class="form-control" value="" placeholder="Digite seu melhor E-mail" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="text" name="teltext" class="form-control" value="" placeholder="Digite seu telefone" required>
                <span class="help-block"></span>
            </div>     
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="cadastar">
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>
            </div>
        </form>
    </div>    
</body></center>
</html>