<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/guiahome.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Notícias | Mundo Melhor </title>
</head>
<body>
    <header style="background-image: url(img/informando.jpg);">
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
                    <h1> Noticias </h1>
                </div>
            </section>
        </div>
    </header>
    <br>
    <header>
      <div class="center">
          <div class="about-header">
              <p> Acompanhe Notícias sobre desenvolvimento Sustentável</p>
          </div>
          <div class="wraper-header">
              <div class="logo">
                  <h2><span>Notícias</span> Mundo Melhor</h2>
              </div>
              <div class="banner-ads">
                  <h2><span style="font-size: 23px;">Notícias</span><br>Insira um anúncio aqui</h2>
              </div>
          </div>
      </div>
  </header>
  <!--Fim Header-->
  <section class="noticias-1">
      <div class="center">
        <div class="noticias-wraper-1">
          <div class="noticia-destaque">
            <a href="atualizaçoes.php">
              <div style="background-image: url(img/jornalista.jpg);" class="noticia-destaque-single">
                <h3> Notícias e Informações </h3>
              </div>
            </a>
          </div>
          <div class="outras-noticias-1">
            <div style="background-image: url(img/SalveoPlaneta.jpeg);" class="outras-noticias-1-single" onclick="redirectTo('estilovida.php')">
              <h3> Dicas de estilo de vida sustentável </h3>
            </div>
            <div style="background-image: url(img/giz.jpg);" class="outras-noticias-1-single" onclick="redirectTo('empresa.php')">
              <h3> Empresas sustentáveis </h3>
            </div>
            <div style="background-image: url(img/eventos.avif);" class="outras-noticias-1-single" onclick="redirectTo('eventos.php')">
              <h3> Eventos sustentáveis </h3>
            </div>
            <div style="background-image: url(img/carroviajem.jpg);" class="outras-noticias-1-single" onclick="redirectTo('turismo.php')">
              <h3> Turismo sustentável</h3>
            </div>
            
          </div>
        </div>
      </div>
    </section>
<!--JavaScript-->
    <script>
      function redirectTo(url) {
        window.location.href = url;
      }
    </script>

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


    