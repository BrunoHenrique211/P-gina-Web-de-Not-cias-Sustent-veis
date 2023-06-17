<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/guiahome.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title> Home | Mundo Melhor </title>
</head>
<body>
    <header style="background-image: url(img/Verde.jpeg);">
                <div class="container">
            <nav>
                <a href="index.php">
                    <img src="img/Logo.png" alt="Logo Mundo Melhor">
                </a>
                <ul class="ul">
                <a href="index.php"><b>Home</b></a>
                <a href="servicos.php"><b>Serviços</b></a>
                <a href="noticias.php" ><b>Notícias</b></a>
                    <a href="home.php"><b>Formulário</b></a>
                    <a href="jogo.php"><b>Divirta-se</b></a>
                    <a href="contato.php"class="btn animate-btn"><b>Contato</b></a>
                <div class="close-icon" onclick="closeMenu()">
                        <i class="fa fa-times-circle"></i>
                </div>
                </ul>
            <div class="menu-icon" onclick="openMenu()"> 
                    <i class="fa fa-bars"></i>
            </div>
            </nav>
            <section class="banner">
            <div class="banner-text">
                    <h1>Mundo Melhor</h1>
                    <p>Vamos juntos em busca de um Mundo Melhor</p>
                    <a href="contato.php" class="btn animate-btn"><b>Entrar em contato</b></a>
            </div>
            </section>
            </div>
    </header>

    <section class="faca-mais">
            <div class="container">
            <div class="faca-mais-text">
                <h3> Por um Mundo Melhor </h3>
                <p> Últimas notícias sobre avanços da energia limpa e renovável. </p>
                <a href="contato.php" class="btn animate-btn"><b>Entrar em contato</b></a>
            </div>
            <div class="faca-mais-img"></div>   
                <img src="img/TrabalhoMundo.png" alt="Imagem">
            </div>
    </section>

    <section class="faca-mais">
            <div class="container">
            <div class="faca-mais-text">
                <h3> Juntos Fazemos a diferença </h3>
                <p> informações valiosas e atualizadas sobre práticas e tecnologias que promovem um futuro mais equilibrado e consciente para o planeta, dicas para implementar a sustentabilidade no seu dia a dia e muito mais. </p>
                <a href="contato.php" class="btn animate-btn"><b>Entrar em contato</b></a>
            </div>       
            <div class="faca-mais-img"></div>   
                <img src="img/ImagemMãos.png" alt="Imagem">
            </div>
        </div>
    </section> 

    <section class="faca-mais">
        <div class="container">
        <div class="faca-mais-text">
                <h3> Comece por você </h3>
                <p> A preservação do nosso planeta depende da conscientização de cada um de nós sobre a importância da sustentabilidade. Pequenas atitudes podem fazer uma grande diferença para garantir um futuro mais sustentável para todos. </p>
                <a href="contato.php" class="btn animate-btn"><b>Entrar em contato</b></a> 
        </div>
        <div class="faca-mais-img"></div>   
        <img src="img/CuidadoPlaneta.jpeg" alt="Imagem">
        </div>
    </section> 
    <section class="depoimentos">
        <div class="container">
            <h3> Declarações </h3>
            <p> Leia Declarações de Pessoas influentes sobre Desenvolvimento sustentável </p>
            <div class="cards">
                <div class="card-item">
                    <img src="img/FotoLula.jpeg" alt="Foto do Lula">
                    <p class="nome-user"> Presidente Lula </p>
                    <p class="depoimento-user">"O Brasil tem uma riqueza natural incomparável e uma responsabilidade imensa na preservação do meio ambiente. Precisamos conciliar o desenvolvimento econômico com a proteção da biodiversidade e dos recursos naturais."</p>
                    <div class="estrelas">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>   
                      
                <div class="card-item">
                    <img src="img/FotoAngela.jpeg" alt="Foto da Chanceler Alemã">
                    <p class="nome-user">  Angela Merkel, ex-chanceler da Alemanha </p>
                    <p class="depoimento-user">"Precisamos repensar a nossa relação com a natureza e encontrar maneiras de protegê-la enquanto continuamos a crescer e a desenvolver nossas sociedades."</p>
                    <div class="estrelas">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>              
            
                <div class="card-item">
                    <img src="img/FotoLeonardoDiCaprio.jpeg" alt="Foto do Leonardo Di Caprio">
                    <p class="nome-user"> Leonardo Di Caprio </p>
                    <p class="depoimento-user">"A natureza é a minha inspiração e eu sempre fui apaixonado pela preservação ambiental. Temos a responsabilidade de cuidar do planeta e fazer a nossa parte para garantir um futuro mais sustentável." - Leonardo DiCaprio, ator e ambientalista americano.</p>
                    <div class="estrelas">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>             
        </div>
    </section>
    <!-- My Objectives -->
    <section class="clientes">
        <div class="container">
            <h3> Nossos Objetivos </h3>
            <p> Sustentabilidade é a chave para garantir um futuro próspero e equilibrado, onde as necessidades das gerações presentes são atendidas sem comprometer a capacidade das gerações futuras de atenderem às suas próprias necessidades. Abaixo alguns exemplos do que devemos cuidar, conscientizar e proteger.</p>
            <div>
                <img src="img/Arvore.jpeg" alt="Foto de árvore">
                <img src="img/Mundo.jpeg" alt="Foto de planeta">
                <img src="img/Sustentabilidade.jpeg" alt="Imagem símbolo sustentável">
                <img src="img/Lampada.jpeg" alt="Imagem de lampada sustentável">
            </div>
        </div>
    </section>
      <!-- End Objectives-->

      <section class="faca-mais">
        <div class="container">
        <div class="faca-mais-text">
                <h3> Faça a sua parte </h3>
                <p> Não importa onde você esteja, sempre lembre-se de que cada pequena ação conta na construção de um mundo mais limpo e saudável - então, faça sua parte e jogue o lixo no lugar certo! </p>
                <a href="contato.php" class="btn animate-btn"><b>Entrar em contato</b></a>
            </div>
        <div class="faca-mais-img"></div>   
            <img src="img/LixoSustentavel.jpeg" alt="Imagem de descarte de lixos correto">
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="links">
              <a href="https://www.facebook.com/bruno.h.oliveira.33/" target="_blank"><i class="fa fa-facebook"></i> </a>  
              <a href="https://www.instagram.com/brunoo_henrique9/" target="_blank"> <i class="fa fa-instagram"></i> </a>
              <a href="https://github.com/BrunoHenrique211" target="_blank"> <i class="fa fa-github"></i> </a>
              <a href="https://www.linkedin.com/in/bruno-henrique-89407223a/" target="_blank"> <i class="fa fa-linkedin"></i> </a>
            </div>
            <p>Desenvolvido por Bruno Henrique </p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>