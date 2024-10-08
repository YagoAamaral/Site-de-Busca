<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['id']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="shortcut icon" type="imagex/png" href="LogoCabeçalho-_1_.ico">
    <title>Faça Login</title>
</head>
<body>
    <form action="testeLogin.php" method="POST">
    <div class="BordaCima">
        <div class="Borda-lado-direito">
        <img id="Logo" src="https://i.ibb.co/4Js9pFg/Logo-Branca.png" alt="Logo-Branca" border="0">
        <h3><a href="SiteDeBusca.html" class="Nome-Logo">Nome do Site</a></h3>
        </div>
        <div class="Borda-lado-esquerdo">
            <a href="#" class="Borda-lado-esquerdo-btn">precisa de ajuda ?</a>
        </div>
    </div>
    <div class="main-login">
        <div class="LadoEsquerdo">
            <h1>Faça login<br>E descubra as melhores ofertas</h1>
            <img src="Ilustração-Busca.svg" class="LadoEsquerdo-Imagem" alt="Busca">
        </div>
        <div class="LadoDireito">
            <div class="Cartão-Login">
                <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Sanha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <input class="btnLogin" type="submit" name="submit" id="submit">
                    <p class="Criar-Conta">Ainda não tem uma conta? <a href="Cadastro.php">Criar conta</a></p>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Sobre</h3>
                <p>O Nome do site é o seu destino definitivo para encontrar os melhores produtos online. De celulares a geladeiras, nossa plataforma busca em uma ampla variedade de lojas para oferecer as melhores opções e preços. Economize tempo e dinheiro comparando ofertas e faça compras informadas conosco.</p>
            </div>
            <div class="footer-section links">
                <h3>Links Úteis</h3>
                <ul>
                    <li><a href="SiteDeBusca.html">Página Inicial</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h3>Contato</h3>
                <p><i class="fas fa-envelope"></i> nomedosite@gmail.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Seu Nome. Todos os direitos reservados.
        </div>
    </footer>
    </form>
</body>
</html>
