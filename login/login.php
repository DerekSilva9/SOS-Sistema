<?php 
include('../conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) { // Se a quantidade de caracteres do email for igual a 0, vai pedir que preencha o email
        echo 'preencha seu email !';
    } else if(strlen($_POST['senha']) == 0) { // Se a quantidade de caracteres da senha for igual a 0, vai pedir que preencha a senha
        echo 'Preencha sua senha!';
    } else {
        $email = $mysqli ->real_escape_string($_POST['email']);
        $senha = $mysqli ->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'"; // realiza a consulta no banco de dados se estiver tudo conforme
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL: " . $mysqli->error); // se nao estiver conforme apresenta um erro de consulta

        $quantidade = $sql_query->num_rows; 

        if($quantidade == 1) { // se os dados enviados pelo usuario estiverem no banco de dados, leve o usuario até a tela inicial ('index.php') e inicie uma sessão

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../home/index.php");

        } else{ // caso contrario, não permite a entrada.
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
                                
        <form action="" method="POST">
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