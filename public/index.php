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
    <title>T.IBusca</title>
   
       
    <link rel="Icon" type="imagem/x-icon" href="https://i.ibb.co/MNXz0ST/Logo-Branca.png">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" type="text/css" href="StyleII.css">
    <link rel="shortcut icon" type="imagex/png" href="LogoCabeçalho-_1_.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    
    <style>

      .Nav-login{
        background: transparent;

        text-decoration: none;

        border: none;

        cursor:pointer;

        display: flex;
        align-items: center;
        justify-content: center;
      }

      #botao-login{
        display:flex;
        align-items: center;
        justify-content: center;
        flex-direction: row-reverse;


        width: 120px;
        height: 40px;

        text-decoration: none;

        border: none;

        cursor:pointer;
        
        background-color: white;
        border-radius: 10px;

        color: #333;
      }
    </style>

</head>
<body>
    
    <header class="cabeçalho">
        <div id="nomeSite_btnMenu">
            
            <div id="nomeSite">
                <img id="Logo" src="https://i.ibb.co/4Js9pFg/Logo-Branca.png" alt="Logo-Branca" border="0">
                <h1>T.I Busca</h1>
            </div>
        </div>
        <div class="search-container">
            <form action="/search" method="get">

             

              <label for="searchTerm">Termo de pesquisa:</label>
              <input type="text" id="searchTerm" name="searchTerm" list="sugestões" required>
              <datalist id="sugestões">
                
                <option value="Memória ram"></option>
                <option value="Monitor"></option>
                <option value="Pc game"></option>
                <option value="SSD"></option>
                <option value="Placa mãe"></option>
                <option value="Fonte"></option>
                <option value="Teclado"></option>
                <option value="Fone"></option>
                <option value="Cooler"></option>
                <option value="Mouse"></option>
                <option value="Gabinete"></option>
                <option value="processador Ryzen"></option>
                <option value="processador Intel"></option>
                <option value="Fonte 650w"></option>
                <option value="SSD Kingston Nv2 500GB"></option>
                <option value="SSD Kingston Nv2 1TB"></option>
                <option value="Monitor IPS 29 LG Full HD"></option>
                <option value="Monitor LED 21,5  Antirreflexo AOC Full HD "></option>
                <option value="Monitor LED IPS 29  LG Full HD"></option>
                <option value="Monitor IPS 24 Samsung Full HD "></option>
                <option value="SSD 1TB Sandisk SDSSDA-1T00-G26"></option>
                <option value="SSD 960 GB Kingston A400, SATA"></option>
                <option value="HD SSD Kingston SA400S37 480GB"></option>
                <option value="SSD Crucial P3 1TB NVMe PCIe M.2 "></option>
                <option value="Memória Desktop Kingston 8GB DDR4 2666 Mhz KVR26N19S8/8-US"></option>
                <option value="Memória Hyperx Fury 16Gb Ddr4 2666Mhz "></option>
                <option value="Memória HyperX Impact de 8GB SODIMM DDR4 2400Mhz 1,2V para notebook"></option>
                <option value="Memória ram ddr3"></option>
                <option value="Memória ram ddr4"></option>
                <option value="Placa Mãe B550M AORUS ELITE AMD AM4 Micro ATX DDR4 GIGABYTE"></option>
                <option value="Placa Mãe Asus TUF Gaming B550M-Plus, AMD AM4, mATX, DDR4"></option>
                <option value="Placa Mãe Gigabyte B550M AORUS Elite, Chipset B550, AMD AM4, mATX, DDR4"></option>
                <option value="Fonte Aerocool Vx-500, 500W, Bivolt - En57136"></option>
                <option value="Fonte Atx Kcas 500W 80 Plus Bronze Pfc Ativo Aerocool"></option>
                <option value="Fonte Corsair Cv550, 550W, 80 Plus Bronze"></option>
                <option value="Carregador de notebook"></option>
                <option value="Carregador de notebook lenovo"></option>
                <option value="Carregador de notebook samsung"></option>
                <option value="Carregador de notebook positivo"></option>
                <option value="Processador amd"></option>
              </datalist>
              <button id="search" type="submit">Search</button>
                
                

                
               
                
            </form>
        </div>


            <nav class="Nav-login">
        <ul>
            <li id="botao-login">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <a href="PerfilUsuario.php"><span>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span></a>
                <?php else: ?>
                  <img id="imgLogin" src="https://i.ibb.co/XWmbxmS/Avatar-1.png" alt="Avatar-1" border="0">
                    <a href="login.php">Entrar</a>
                <?php endif; ?>
            </li>
            <?php if (isset($_SESSION['usuario'])): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
        
    </header>

    
   
    <!-- Restante do conteúdo do site aqui --> 
    <style>

    .carousel-container {
        max-width: 1000px;
        margin: auto;
    }

    .category {
        width: 200px; /* Largura das categorias */
        height: 150px; /* Altura das categorias */
        background-color: #f0f0f0; /* Cor de fundo das categorias */
        border: 1px solid #ddd; /* Borda das categorias */
        border-radius: 5px; /* Bordas arredondadas das categorias */
        display: flex; /* Usa um layout flexível */
        justify-content: center; /* Centraliza horizontalmente */
        align-items: center; /* Centraliza verticalmente */
        background-size: cover; /* Ajusta o tamanho da imagem para cobrir todo o espaço disponível */
        background-position: center; /* Centraliza a imagem de fundo */
        background-repeat: no-repeat; /* Evita a repetição da imagem de fundo */
        border: solid #f57600;
        border: 2px;
    }
    
    
    
</style>

<div class="Slogan">
  <img id="Img-Slogan" src="https://i.ibb.co/SJCWrw3/Imagem-Topo.png" alt="Imagem-Topo" border="0" style="max-width: 400px;">
  <div>
    <p id="Texto-Slogan"><b>Comparação de preços<br>é no T.I Busca<b></b></p> 
    <p class="discount-text">Desconto imperdível em todos os sites!</p>
  </div>  
</div>



<div class="carousel-container">

    <div class="category">perifericos
      <a href="http://localhost:3000/categoria/perifericos">  <img style="position: relative; bottom: 44%;" src="https://i.ibb.co/N3TFBsL/Perifericos.png" alt="Perifericos" border="0">
      </a>
    </div>
    <div class="category">computadores
     <a href="http://localhost:3000/categoria/computador"><img style="position: relative; bottom: 44%;" src="https://i.ibb.co/yN4dQWX/Computadores-1.png" alt="Computadores" border="0">
     </a>
    </div>
    <div class="category">memória
      <a href="http://localhost:3000/categoria/memoriaram"><img style="position: relative; bottom: 44%;" src="https://i.ibb.co/tPnkrtK/Memorias.png" alt="Memorias" border="0">
      </a>
    </div>
    <div class="category">monitor
     <a href="http://localhost:3000/categoria/monitor"> <img style="position: relative; bottom: 44%;" src="https://i.ibb.co/zQBk243/Monitor.png" alt="Monitor" border="0">
     </a>
    </div>
    <div class="category">Processadores
      <img style="position: relative; bottom: 44%;" src="https://i.ibb.co/L60gfPc/Processadores.png" alt="Processadores" border="0">

    </div>
    <div class="category">Kit Upgrade
      <img style="position: relative; bottom: 44%;" src="https://i.ibb.co/bBMJPr0/Kit.png" alt="Kit" border="0">

    </div>

  </div>


    

    <!-- Adicione mais categorias conforme necessário -->
</div>

<!-- Adicione o link para o arquivo JavaScript do jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Adicione o link para o arquivo JavaScript do Slick Carousel -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel-container').slick({
            slidesToShow: 4, // Número de categorias visíveis ao mesmo tempo
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000, // Tempo de exibição de cada categoria em milissegundos
            infinite: true
        });
    });
</script>

<p class="marcar">Confira os melhores de cada marcar que está aqui abaixo</p>
<style>
    /* Estilo para o texto de desconto */
    .discount-text {
        position: relative;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        font-weight: bold;
        color: #F98101;
        opacity: 0;
        animation: moveText 2s linear infinite;
    }

    /* Animação para mover o texto */
    @keyframes moveText {
        0% { opacity: 0; transform: translate(-50%, -50%); }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { opacity: 0; transform: translate(-50%, -50%); }
    }
</style>
</head>



<br>
<div class="container-lojas">
    <div class="row">
      <div class="col">
        <a href="https://www.amazon.com.br/?tag=msndesktopabk-20&ref=pd_sl_7to86bd2ph_e&adgrpid=1141293728081284&hvadid=71331024009172&hvnetw=o&hvqmt=e&hvbmt=be&hvdev=c&hvlocint=&hvlocphy=116069&hvtargid=kwd-71331371436168:loc-20&hydadcr=26346_11690411">
            <img src="https://i.ibb.co/ZzwD0dB/R-4.jpg" alt="Imagem 1">
        </a>
      </div>
      <div class="col">
       <a href="https://www.mercadolivre.com.br/">
        <img src="https://i.ibb.co/sgN17rq/R-5.jpg" alt="Imagem 2">
       </a>
      </div>
      <div class="col">
       <a href="https://www.americanas.com.br/">
        <img src="https://i.ibb.co/ygTM0Dw/0d222d04-e60e-44e1-9e73-652b6315b253.png" alt="Imagem 3">
       </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
       <a href="https://www.kabum.com.br/?msclkid=f2029d626f04175b6442fb72fb298027&utm_source=bing&utm_medium=cpc&utm_campaign=search_inst_variacao&utm_term=kabum%5D&utm_content=variacao">
        <img src="https://i.ibb.co/0CXQbM1/R-6.jpg" alt="Imagem 4">
       </a>
      </div>
      <div class="col">
       <a href="https://www.pichau.com.br/">
        <img src="https://i.ibb.co/XZnP6fx/OIP-8.jpg" alt="Imagem 5">
       </a>
      </div>
      <div class="col">
        <a href="https://www.samsung.com/br/offer/?utm_source=bing&utm_medium=search&utm_campaign=br_search_bing_multi_loe_cad1-b0009-mx-institucional_na_paid-cdm-na_pfm-*samsung*_always-on&utm_content=na&utm_term=*samsung*&cid=br_search_bing_multi_loe_cad1-b0009-mx-institucional_na_paid-cdm-na_pfm-*samsung*_always-on&keeplink=true&msclkid=d42137b1a6141d247c1851a1332c2510">
            <img src="https://i.ibb.co/2KmCc10/R-7.jpg" alt="Imagem 6">
        </a>
      </div>
    </div>
  </div>


  


  
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
  
  <h2 class="vitrine"> computadores </h2>
  <section class="products">
    <button class="pre-btn"><img src="https://i.ibb.co/H4MPKtS/Seta-Esquerda.png" alt="Seta-Esquerda" border="0"></button>
    <button class="nxt-btn"><img src="https://i.ibb.co/7pZKPP9/Seta-Direita.png" alt="Seta-Direita" border="0"></button>
      <ul class="product-list">
        <div class="product-container">
          <div class="product-card">
            <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=pc+game+tmoba&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://img.terabyteshop.com.br/produto/g/pc-gamer-t-moba-tiger-amd-ryzen-3-3200g-nvidia-geforce-gtx-1650-ddr4-8gb-ssd-240gb_202019.png" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">computador Gamer</h2>
            <p class="description">PC Gamer T-MOBA Tiger AMD Ryzen 3 3200G / NVIDIA GeForce GTX 1650 / 8GB DDR4 / SSD 240GB </p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li class="qtd-votes">
                </span>(200)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$ 4.900,00</del>
                <ins>Ver detalhes</ins>
              </div>
              <span class="price-info">Ver datalhes</span>
            </div>
            <div><button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button></div>

          </div>
        </figure>
      </a>
            </li>
          </div>
          <div class="product-card">
            <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=computador+game&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://img.terabyteshop.com.br/produto/g/computador-t-gamer-starter-intel-core-i7-4790-geforce-gt-610-8gb-ddr3-ssd-480gb_203260.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Pc Gamer Novo Completo Amd A8 Ssd /16 Ram+ Monitor +kit Game</h2>
            <p class="description">Pc Gamer Completo Fácil Intel Core i7 10700F (10ª Geração) 16GB DDR4 rtx 2060 Super 8GB ssd 960GB - Monitor 19 Kit Game
            </p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(82)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$7.004,00</del>
                <ins>Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes </span>
            </div>
            <div><button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button></div>

          </div>
        </figure>
      </a>
            </li>
          </div>
          <div class="product-card">
            <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=notebook+game+ace&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/527012/notebook-gamer-acer-nitro-5-intel-core-i7-16gb-ram-geforce-rtx-3050-ssd-512gb-17-3-fhd-linux-preto-com-vermelho-an517-54-765v_1709304791_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">notebook gamer acer nitro</h2>
            <p class="description">Notebook Gamer Acer Nitro 5 Intel Core i7-11600H, 16GB RAM, NVIDIA GeForce RTX 3050, SSD 512GB, 17.3" FHD 144Hz IPS, Linux, Preto com vermelho - AN517-54-765V</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(54)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$5.789,46</del>
                <ins>Ver completo</ins>
              </div>
              <span class="price-info">Ver completo</span>
            </div>
            <div><button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button></div>

          </div>
        </figure>
      </a>
            </li>
          </div>
          <div class="product-card">
            <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=notebook+game+ace+nitro+5&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/sync_mirakl/483425/Notebook-Gamer-Acer-Nitro-5-AMD-Ryzen-5-8GB-RTX-3050-SSD-512GB-Tela-15-6-Full-HD-Windows-11-Home-An515-47-R1n8_1712664482_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">notebook gamer acer nitro 5</h2>
            <p class="description"> Notebook Gamer Acer Nitro 5, AMD Ryzen 5, 8GB, RTX 3050, SSD 512GB, Tela 15.6 Full HD, Windows 11 Home - An515-47-R1n8</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li class="qtd-votes">
                </span>(154)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$7.000,00</del>
                <ins>Ver completo</ins>
              </div>
              <span class="price-info">Ver completo </span>
            </div>
            <div><button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button></div>
          </div>
        </figure>
        
      </a>
            </li>
          </div>
          <div class="product-card">
            <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=notebook+game+ace+nitro+5&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://http2.mlstatic.com/D_NQ_NP_824950-MLB49471763307_032022-O.webp" alt="description image" style="width: 70%;">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Computador Intel I7 16gb</h2>
            <p class="description"> Processador Intel i7, 16Gb DDR3, 480Gb SSD, Fonte Bivolt Manual, Placa de vídeo onboard Intel HD Graphics</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(57)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$1.674,99</del>
                <ins>Ver completo</ins>
              </div>
              <span class="price-info">Ver completo </span>
            </div>
            <div><button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button></div>
          </div>
        </figure>
        
      </a>
            </li>
          </div>
          <div class="product-card">
            <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=notebook+game+ace+nitro+5&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/sync_mirakl/427773/Computador-Completo-3green-3D-099-Intel-Core-i7-16GB-RAM-512GB-SSD-Monitor-LED-19-5-Windows-10_1721325105_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Computador Completo 3green 3D-099</h2>
            <p class="description">Intel Core i7, 16GB RAM, 512GB SSD, Monitor LED 19.5"</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(23)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$1.829,99</del>
                <ins>Ver completo</ins>
              </div>
              <span class="price-info">Ver completo </span>
            </div>
            <div><button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button></div>
          </div>
        </figure>
        
      </a>
            </li>
          </div>
          <div class="product-card">
            <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=notebook+game+ace+nitro+5&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/576020/notebook-lenovo-v15-g3-intel-core-i5-1235u-8gb-ram-ssd-256gb-15-6-full-hd-intel-iris-xe-graphics-windows-11-pro-preto-82um0007br_1716898385_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Notebook Lenovo V15 G3</h2>
            <p class="description">Intel Core i5-1235U, 8GB RAM, SSD 256GB, 15,6" Full HD</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li class="qtd-votes">
                </span>(5)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$3.299,99</del>
                <ins>Ver completo</ins>
              </div>
              <span class="price-info">Ver completo </span>
            </div>
            <div><button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button></div>
          </div>
        </figure>
        
      </a>
            </li>
          </div>
        </div>
      </ul>
  </section>

  
  <!-- segunda vitrine -->
  <h2 class="vitrine">Memórias</h2>
  <section class="products">
    <button class="pre-btn"><img src="https://i.ibb.co/H4MPKtS/Seta-Esquerda.png" alt="Seta-Esquerda" border="0"></button>
    <button class="nxt-btn"><img src="https://i.ibb.co/7pZKPP9/Seta-Direita.png" alt="Seta-Direita" border="0"></button>
    <ul class="product-list">
      <div class="product-container">
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=Mem%C3%B3ria+Kingston+Fury+Beast%2C+8GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/172365/memoria-kingston-fury-beast-8gb-3200mhz-ddr4-cl16-preto-kf432c16bb-8_1626270523_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Memória Kingston Fury Beast, 8GB</h2>
            <p class="description">Memória Kingston Fury Beast, 8GB, 3200MHz, DDR4, CL16, Preto - KF432C16BB/8</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(200)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$223,52</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
          
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=Mem%C3%B3ria+Kingston+Fury+Beast%2C+16GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/172366/memoria-kingston-fury-beast-16gb-3200mhz-ddr4-cl16-preto-kf432c16bb1-16_1626271100_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Memória Kingston Fury Beast, 16GB</h2>
            <p class="description">Memória Kingston Fury Beast, 16GB, 3200MHz, DDR4, CL16, Preto - KF432C16BB1/16</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(200)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$352,93</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
          
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+1+TB+Kingston+NV2&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/380745/ssd-kingston-nv2-1-tb-m-2-2280-pcie-nvme-leitura-2-100-mb-s-e-gravacao-1-700-mb-s-snv2s-1000g_1666033119_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">SSD 1 TB Kingston NV2</h2>
            <p class="description">SSD 1 TB Kingston NV2, M.2 2280 PCIe, NVMe, Leitura: 3500 MB/s e Gravação: 2100 MB/s - SNV2S/1000G</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(200)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$555,54</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+Kingston+Nv2%2C+500GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/sync_mirakl/400945/SSD-Kingston-Nv2-500GB-M-2-2280-NVME-PCIE-4-0-X4-Leitura-3500MB-s-E-Grava-o-2100MB-s-Snv2s-500g_1712341688_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">SSD Kingston Nv2, 500GB</h2>
            <p class="description">SSD Kingston Nv2, 500GB, M.2 2280, NVME PCIE 4.0 X4, Leitura 3500MB/s E Gravação 2100MB/s - Snv2s/500g</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(200)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$339,90</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+Kingston+Nv2%2C+500GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/474946/memoria-xpg-spectrix-d35g-rgb-16gb-3200mhz-ddr4-cl16-preto-ax4u320016g16a-sbkd35g_1700162057_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Memória RAM XPG Spectrix D35G</h2>
            <p class="description">RGB, 16GB, 3200MHz, DDR4, CL16, Preto</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li class="qtd-votes">
                </span>(136)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$352,93</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+Kingston+Nv2%2C+500GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/508091/memoria-corsair-vengeance-rgb-rs-16gb-2x8gb-3600mhz-ddr4-cl18-preto-cmg16gx4m2d3600c18_1703789420_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Memória RAM Corsair Vengeance RGB RS</h2>
            <p class="description">16GB (2x8GB)3600MHz, DDR4, CL18, Preto</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li class="qtd-votes">
                </span>(17)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$339,90</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+Kingston+Nv2%2C+500GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/272356/ssd-kingston-fury-renegade-1000gb-m-2-2280-pcie-nvme-leituras-7-300mb-s-gravacao-6-000mb-s-sfyrs-1000g_1637328670_gg.jpg" alt="description image">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">SSD 1 TB Kingston Fury Renegade</h2>
            <p class="description"> M.2 2280 PCIe, NVMe, Leitura: 7300MB/s e Gravação: 6000MB/s</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li class="qtd-votes">
                </span>(329)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$1.058,81</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
      </div>
  </ul>
  </section>


  <!-- terceir vitrine -->
  <h2 class="vitrine">Processadores</h2>
  <section class="products">
    <button class="pre-btn"><img src="https://i.ibb.co/H4MPKtS/Seta-Esquerda.png" alt="Seta-Esquerda" border="0"></button>
    <button class="nxt-btn"><img src="https://i.ibb.co/7pZKPP9/Seta-Direita.png" alt="Seta-Direita" border="0"></button>
    <ul class="product-list">
      <div class="product-container">
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=Mem%C3%B3ria+Kingston+Fury+Beast%2C+8GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/520368/processador-amd-ryzen-5-5600gt-3-6-ghz-4-6ghz-max-turbo-cache-4mb-6-nucleos-12-threads-am4-100-100001488box_1708024586_gg.jpg" alt="description image" style="width: 70%;">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Processador AMD Ryzen 5 5600GT</h2>
            <p class="description">3.6 GHz, (4.6GHz Max Turbo), Cachê 4MB, 6 Núcleos, 12 Threads, AM4</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li class="qtd-votes">
                </span>(116)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$1.052,62</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
          
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=Mem%C3%B3ria+Kingston+Fury+Beast%2C+16GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/283718/processador-intel-core-i5-12400f-cache-xmb-xghz-xghz-max-turbo-lga-1700-bx8071512400f_1640094446_gg.jpg" alt="description image" style="width: 70%;">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Processador Intel Core i5-12400F</h2>
            <p class="description">2.5GHz (4.4GHz Max Turbo), Cache 18MB, LGA 1700</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(228)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$1.177,41</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
          
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+1+TB+Kingston+NV2&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/102248/processador-amd-ryzen-3-3200g-cache-4mb-3-6ghz-4ghz-max-turbo-am4-yd3200c5fhbox_1607691191_gg.jpg" alt="description image" style="width: 80%;">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Processador AMD Ryzen 3 3200G</h2>
            <p class="description">3.6GHz (4GHz Max Turbo), Cache 4MB, Quad Core, 4 Threads, AM4</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li class="qtd-votes">
                </span>(417)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$519,99</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+Kingston+Nv2%2C+500GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/520367/processador-amd-ryzen-7-5700-3-7-ghz-4-6ghz-max-turbo-cache-4mb-8-nucleos-16-threads-am4-100-100000743box_1708024352_gg.jpg" alt="description image" style="width: 70%;">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Processador AMD Ryzen 7 5700</h2>
            <p class="description">3.7 GHz (4.6GHz Max Turbo), Cachê 4MB, 8 Núcleos, 16 Threads, AM4</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(18)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$1.348,60</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+Kingston+Nv2%2C+500GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/181065/processador-intel-core-i3-10105-cache-6mb-3-7ghz-4-4ghz-max-turbo-lga-1200-bx8070110105_1660591733_gg.jpg" alt="description image" style="width: 70%;">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Processador Intel Core i3-10105</h2>
            <p class="description">3.7GHz (4.4GHz Max Turbo), Cache 6MB, Quad Core, 8 Threads, LGA 1200</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/TwYYb93/star-1.png">
              </li>
              <li class="qtd-votes">
                </span>(54)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$704,69</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+Kingston+Nv2%2C+500GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/426261/processador-amd-ryzen-9-7900x3d-5-6ghz-max-turbo-cache-140mb-am5-12-nucleos-video-integrado-100-100000909wof_1676552311_gg.jpg" alt="description image" style="width: 80%;">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Processador AMD Ryzen 9 7900X3D</h2>
            <p class="description">5.6GHz Max Turbo, Cache 140MB, AM5, 12 Núcleos</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li class="qtd-votes">
                </span>(6)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$4.181,44</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
        <div class="product-card">
          <li class="product-item">
      <a href="http://localhost:3000/search?q=&searchTerm=SSD+Kingston+Nv2%2C+500GB&categoria=todas" target="_blank" class="product-link">
        <figure class="product-info">
          <div class="product-info-img">
            <img src="https://images.kabum.com.br/produtos/fotos/497573/processador-intel-core-i9-14900k-bx8071514900k_1697721913_gg.jpg" alt="description image" style="width: 70%;">
          </div>
          <figcaption class="product-info-description">
            <h2 class="title">Processador Intel Core i9-14900K</h2>
            <p class="description">14ª Geração, 6GHz Max Turbo, Cache 36MB, 24 Núcleos, 32 Threads, LGA1700</p>
            <ul class="star-ranking">
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/2kW5mnM/star.png">
              </li>
              <li><img src="https://i.ibb.co/rGmv1GN/Meia-Estrela.png">
              </li>
              <li class="qtd-votes">
                </span>(5)</span>
              </li>
            </ul>
          </figcaption>
          <div class="price-box">
            <div class="price">
              <div>
                <del>R$4.300,00</del>
                <ins class="d-block">Ver detalhes</ins>
              </div>
              <span class="price-info">Ver detalhes</span>
            </div>
            <button href="#" class="btn btn-buy">comparar <i class="fas fa-arrow-right"></i></button>
          </div>
        </figure>
      </a>
          </li>
        </div>
      </div>
  </ul>
  </section>

  <script src="SlideScript.js"></script>
  
<script>
  document.getElementById('search-input').addEventListener('submit', function (event){
    event.preventDefault();
    const productId = document.getElementById('search-input').value;
      // Redirecionar para a página de resultados com o ID do produto na URL
      window.location.href = `results.html?productId=${productId}`;
})
</script> 
  
  <div style="margin: 50px 0; display: flex; align-items: center; justify-content: center; width: 100%">
  
    <a style="display: block; text-align:  center; color: #555; text-decoration: none; margin-right: 15px; " href="" target="_blank"><i class="fas fa-home" style="color: #1da1f2; margin-right: 5px;"></i>T.IBusca.com.br</a>
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
            <p><img style="margin-right: 3px; width: 2%;" src="https://img.icons8.com/ios-filled/100/FFFFFF/secured-letter--v1.png" alt="secured-letter--v1"/>tibusca4@gmail.com</p>
            <p><img src="https://i.ibb.co/Xt6HzS5/icons8-instagram-150.png" alt="" style="width: 2.4%;"><a style="border: none; margin: 0;" href="https://www.instagram.com/tibusca.inc?igsh=MWh0cmR3M2FybWY3eQ==">@T.IBusca.inc</a></p>
            <p><img style="margin-right: 3px; width: 2%;" src="https://i.ibb.co/wwjGPb2/icons8-whatsapp-100.png" alt="whatsapp--v1"/>+55 21 97468-1193</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 T.IBusca. Todos os direitos reservados.
    </div>
</footer>
  
</body>
</html>
   
   



