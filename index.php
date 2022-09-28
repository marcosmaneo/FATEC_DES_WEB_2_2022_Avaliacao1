<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Profº Orlando';
         header("location: welcome.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
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
        <h2>Acesso à avaliação</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <input type="text" name="username" class="form-control" value="" placeholder="Digite o usuário" required>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <input type="password" name="password" class="form-control" value="" placeholder="Digite a senha" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Logar">
            </div>
        </form>
    </div>    
</body></center>
</html>