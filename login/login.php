<?php 
include('../conexao.php');

if(isset($_GET['email']) || isset($_GET['senha'])) {
    if(strlen($_GET['email']) == 0) {
        echo 'preencha seu email !';
    } else if(strlen($_GET['senha']) == 0) {
        echo 'Preencha sua senha!';
    } else {
        $email = $mysqli ->real_escape_string($_GET['email']);
        $senha = $mysqli ->real_escape_string($_GET['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../home/index.php");

        } else{
            echo "Falha ao logar! Email ou senha incorretos";
        }
    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="cadastre.html">
    <link rel="stylesheet" href="index.php">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <title>Login</title>
</head> <!--Tela de login, quando a pessoa vai entrar no site-->
<body>
    <div class="tela-login">
    <img src="" alt="">
    <div class="fac">
        <h1>Faça seu Login!</h1>
    </div>
                                
        <form action="" method="GET">
            <input name="email" type="email" placeholder="Gmail">
            <br><br>
            <input name="senha" type="password" placeholder="Senha">
            <div class="log">
                <button type="submit">Entrar</button>
            </div>
        </form>
                               
    <br>
    <div class="bot">
        <a href="esqueceu.html"><button>Esqueceu a senha?</button></a>
        <a href="cadastre.html"><button>Criar nova Conta!</button></a>
    </div>
    <br>

    </div>
</body>
</html>