<?php
session_start();
include 'config.php'; // Inclua seu arquivo de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['usuario'];
    $password = $_POST['senha'];

    // Verificar se username e password são strings
    if (!is_string($username) || !is_string($password)) {
        die("Erro: username e password devem ser strings");
    }

    // Verificação no banco de dados
    $query = "SELECT * FROM usuarios WHERE id = '$username' AND senha = '$password'";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Credenciais inválidas.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" type="imagem/x-icon" href="https://i.ibb.co/MNXz0ST/Logo-Branca.png">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="shortcut icon" type="imagex/png" href="LogoCabeçalho-_1_.ico">
    <title>Faça Login</title>
</head>
<body>
    <form action="login.php" method="POST">
    <div class="BordaCima">
        <div class="Borda-lado-direito">
        <img id="Logo" src="https://i.ibb.co/4Js9pFg/Logo-Branca.png" alt="Logo-Branca" border="0">
        <h3><a href="index.php" class="Nome-Logo">T.I Busca</a></h3>
        </div>
        <div class="Borda-lado-esquerdo">
            <a href="#" class="Borda-lado-esquerdo-btn">precisa de ajuda ?</a>
        </div>
    </div>
    <div class="main-login">
        <div class="LadoEsquerdo">
            <h1>Faça login<br>E descubra as melhores ofertas</h1>
            <img src="https://i.ibb.co/cxTZMgQ/Search.png" class="LadoEsquerdo-Imagem" alt="Busca">
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
                    <input class="btnLogin" type="submit" name="submit" id="submit" value="Entrar">
                    <p class="Criar-Conta">Ainda não tem uma conta? <a href="Cadastro.php">Criar conta</a></p>
            </div>
        </div>
    </div>

    <footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h3>Sobre</h3>
            <p>O T.I Busca é o seu destino definitivo para encontrar os melhores produtos online. De periféricos a computadores completos, nossa plataforma busca em uma ampla variedade de lojas para oferecer as melhores opções e preços. Economize tempo e dinheiro comparando ofertas e faça compras informadas conosco.</p>
        </div>
        <div class="footer-section links">
            <h3>Links Úteis</h3>
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="Sobre.html">Sobre</a></li>
                <li><a href="https://criarmeulink.com.br/u/1723131389">Contato</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <div class="contato">
            <h3>Contato</h3>
            <p><img style="margin-right: 3px;" width="2.5%" src="https://img.icons8.com/ios-filled/100/FFFFFF/secured-letter--v1.png" alt="secured-letter--v1"/>tibusca4@gmail.com</p>
            <p><img src="https://i.ibb.co/Xt6HzS5/icons8-instagram-150.png" alt="" style="width: 2.4%;"><a style="border: none; margin: 0;" href="https://www.instagram.com/tibusca.inc?igsh=MWh0cmR3M2FybWY3eQ==">@T.IBusca.inc</a></p>
            <p><img style="margin-right: 3px;" width="2.5%" src="https://i.ibb.co/wwjGPb2/icons8-whatsapp-100.png" alt="whatsapp--v1"/>+55 21 97468-1193</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 T.IBusca. Todos os direitos reservados.
    </div>
</footer>
    </form>
</body>
</html>
