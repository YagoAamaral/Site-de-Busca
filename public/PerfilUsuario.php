<?php
session_start();

// Checa se o usuário está logado e armazena o nome do usuário em uma variável
$usuarioLogado = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="PerfilStyle.css">
</head>
<body>

        <div class="BordaCima">
            <div class="Borda-lado-direito">
            <img id="Logo" src="https://i.ibb.co/4Js9pFg/Logo-Branca.png" alt="Logo-Branca" border="0">
            <h3><a href="index.php" class="Nome-Logo">T.I Busca</a></h3>
            </div>
            <div id="Nome-Usuario">
            <nav class="Nav-login">
        <ul>
            <li id="botao-login">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <span>Olá, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span></a>
                <?php else: ?>
                <?php endif; ?>
        </ul>
            </div>
            <div class="Borda-lado-esquerdo">
                <a href="#" class="Borda-lado-esquerdo-btn">precisa de ajuda ?</a>
            </div>
        </div>
    
        <div class="Favoritos">
            <div class="Conteudo">
                <div class="SeusFavs-Voltar">
                    <div>
                    <p><b>Seus Produtos Favoritos</b></p>
                    </div>
                    <div>
                    <a href="index.php"><p><b>Voltar</b></p></a>
                    </div>
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
</body>
</html>
