<?php 
include('../protect.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS-Home</title>
    <link rel="stylesheet" href="style/homestyle.css">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="header"> <!--Header-->
        <div class="menu-button">
            <button onclick="openNav()">
                <img src="../assets/menu-button.png" alt="menu-button">
            </button>
        </div>

        <div class="collapsed-side-bar"> <!-- Side bar div-->
             <!--Botões laterais-->
             <div class="close-btn"> <!--Div do botão de fechar-->
                <a href="javascript:void(0)" onclick="closeNav()">&times;</a>
            </div>
            <span class="personal-area">Área pessoal</span>
            <a href="#"><em>Configurações</em></a> <!--Botões de place holder-->
            <a href="#"><em>Conta</em></a>
            <a href="#"><em>Contato</em></a>
            <a href="#"><em>Sobre</em></a>
            <a href="../login/logout.php">Logout</a>
        </div>

            <h2 class="title-header"> <!--Titulo do header-->
                SOS - Sistema Online De Saúde
                <div class="hearth-logo"> <!--Coração-Logo-->
                    <img src="../assets/hearth-icon.png" alt="hearth-logo">
                </div>
            </h2>

            

            <div class="social-icons"> <!--Icones das redes sociais/notificação-->
                <ul class="list-icons">
                    <a href="https://www.instagram.com/tecnico_informatica0/" class="bota" target="_blank"> <!--Redireciona a pessoa para o insta da sala-->
                        <img src="../assets/instagram-logo.png" alt="Instagram"></a>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=tecnicoinformaticaad2023@gmail.com" class="botao" target="_blank"><!--Redireciona a pessoa para o email da sala-->
                            <img src="../img/imagem.gmail-removebg-preview.png" alt="Gmail">
                        </a>
                        <li><img src="../img/notificacao-logo.png"></li>
                </ul>
            </div>
            <li class="sos-header">SOS</li>
        </ul>
    </div>

        <div class="search-bar"> <!--Icone Da Lupa-->
            <input placeholder="Pesquisar..." type="search" name="search-bar" id="search-bar" > 
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                <path d="M0 0h24v24H0z" fill="none"/>
            </svg>
        </div>
        
    </header> <!--Fim Header-->

    <main class="main-content"> <!--Conteudo principal-->
        <h2 style="padding: 30px;"><i>Conheça nosso site, <?php echo $_SESSION['nome']; ?>!</i></h2>

        <div class="content-boxes">

            <div class="up-boxes">
                <div class="sos-chat-box">
                    <h1><i>SOS CHAT 1.1</i></h1>
                    <p>O SOS Chat é uma inteligência artificial <br> usada para fornecer ajuda mais rapido e <br> compreensível sobre sua saúde baseado <br> nos seus dados fornecidos</p>
                </div>

                <div class="emergency-boxes">
                    <a class="emergency-button" href="tel:192">
                        <div class="call-box">
                                <h2><i>SAMU 192</i></h2>
                                <p>Só ligue em caso de emergência!</p>
                        </div>
                    </a>

                    <a  class="emergency-button" href="tel:193">
                        <div class="call-box">
                                <h2><i>Bombeiros 193</i></h2>
                                <p>Só ligue em caso de emergência!</p>
                        </div>
                    </a>
                </div>

            </div>

            <div class="down-boxes">
                <div class="remedy-box">
                    <h2><i>Área de remedíos</i></h2>
                    <h4><i>Seus remédios</i></h4>
                    <ul class="remedy-list">
                        <li>xarope de gauco herbarium 0,5ml as 12:00h</li>
                        <li>xarope de gauco herbarium 0,5ml as 12:00h</li>
                    </ul>
                </div>

                <div class="clinic-box">
                    <a href="../ubs-home/ubs-home.html">
                        <h2><i>Consultório mais próximo</i></h2>
                        <p>Localize o atendimento médico <br> mais próximo</p>
                    </a>
                </div>

                <div class="about-box">
                    <h2><i>Conheça mais sobre nós</i></h2>
                    <p>Explore nossa história e missão</p>
                </div>
            </div>
            
        </div>



    </main> <!--Fim Conteudo Principal-->
    <script src="../script/script.js"></script>
</body>
</html>