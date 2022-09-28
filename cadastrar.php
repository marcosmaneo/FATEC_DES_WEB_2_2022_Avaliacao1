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
        <h1>Parabéns Profº Orlando, seus dados foram cadastrados com sucesso!!!</h1>
    </div>
    <p>

<?php

if(!file_exists("log_avaliacao.txt")){
    $handle = fopen("log_avaliacao.txt", "w");
} else {
    $handle = fopen("log_avaliacao.txt", "a");
}    

fwrite($handle, "Nome: " . $_POST['nometext'] . PHP_EOL);
fwrite($handle, "Email: " . $_POST['emailtext'] . PHP_EOL);
fwrite($handle, "Telefone: " . $_POST['teltext'] . "\n" . PHP_EOL);
fflush($handle);
fclose($handle);



$handle = fopen("log_avaliacao.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);


?>    
        
        <a href="cadastro.php" class="btn btn-primary">Novo cadastro</a>

       
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>