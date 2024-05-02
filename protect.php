<?php 
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta pagina porque não está logado. <p> <a href=\"/sos-sistemav2/login/login.php\">Entrar</a></p>");
}

