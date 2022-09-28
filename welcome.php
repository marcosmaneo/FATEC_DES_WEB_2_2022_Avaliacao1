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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
         body{ font: 14px sans-serif; text-align: center;
              background-color: #fdf9f2;}
            h1 {color: #8B4513;}
            p {color: #8B4513;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Seja bem vindo à esta avaliação!</h1>
    </div>
    <p>
        
        <a href="cadastro.php" class="btn btn-primary">Cadastrar Pessoas</a>
           
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>