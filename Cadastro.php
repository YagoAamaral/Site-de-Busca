<?php
    if(isset($_POST['submit']))
    {
        //print_r($_POST['usuario']);
        //print_r($_POST['senha']);
        //print_r($_POST['confirmar-senha']);

        include_once('config.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $confirmar = $_POST['confirmar-senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(id,senha,confirmar) VALUES('$usuario','$senha','$confirmar')");

        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="shortcut icon" type="imagex/png" href="LogoCabeçalho-_1_.ico">
    <title>Cadastrar</title>
</head>
<body>
    <form action="Cadastro.php" method="POST">
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
            <h1>Cadastre-se<br>E descubra as melhores ofertas!</h1>
            <img src="https://i.ibb.co/72CS3mv/Search-cadastro.png" class="LadoEsquerdo-Imagem" alt="Busca">
        </div>
        <div class="LadoDireito">
            <div class="Cartão-Login">
                <h1>CADASTRO</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Sanha</label>
                    <input type="password" name="senha" placeholder="Crie uma senha">
                </div>
                <div class="textfield">
                    <label for="confirmar-senha">Confirmar senha</label>
                    <input type="password" name="confirmar-senha" placeholder="Confirme sua senha">
                </div>
                <input class="btnLogin" type="submit" name="submit" id="submit">
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