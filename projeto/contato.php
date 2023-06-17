<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/guiahome.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title> Contato | Mundo Melhor </title>
</head>
<body>
    <header style="background-image: url(img/BackgroundContato.jpg);">
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
                    <h1> Nos Contate </h1>
                    <p>Se você é apaixonado por questões sustentáveis e deseja fazer a diferença, nós estamos aqui para ouvir suas ideias e opiniões. Não hesite em nos contatar e se juntar a nós em prol de um mundo mais sustentável.</p>
        </div>
    </section>
        </div>
    <!-- End Container -->    
    </header>
    <!-- End Header-->
    <section class="contato">
        <div class="container">
        <div class="mapa">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.7497305140128!2d-48.03473762562575!3d-15.869745724813495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a2d98f7ffffff%3A0x4f7d7a315233f8c1!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio!5e0!3m2!1spt-BR!2sbr!4v1682188390164!5m2!1spt-BR!2sbr" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contato-info">
        <div class="left-side">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><b>Centro Universitário Estácio</b> CSG 09, Lotes 11/12/15/16, Taguatinga Sul - Taguatinga, Brasília - DF, 72035-509</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p>brunohenrique211@gmail.com</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>61 995295761</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>4002 - 8922</p>
        </div>
        </div>
        <div class="right-side">
            <form action="">
                <input type="text" placeholder="Nome" required>
                <input type="email" placeholder="E-mail" required>
                <input type="text" placeholder="Assunto" required>
                <textarea cols="30" rows="10" placeholder="Sua Mensagem" required></textarea>
                <button class="btn">Enviar Mensagem</button>
            </form>
        </div>

        </div>      
        </div>

    </section>
   
    <!-- Beginning Footer -->
    <footer class="footer">
        <div class="container">
        <div class="links">
              <a href="https://www.facebook.com/bruno.h.oliveira.33/" target="_blank"><i class="fa fa-facebook"></i> </a>  
              <a href="https://www.instagram.com/brunoo_henrique9/" target="_blank"> <i class="fa fa-instagram"></i> </a>
              <a href="https://github.com/BrunoHenrique211" target="_blank"> <i class="fa fa-github"></i> </a>
              <a href="https://www.linkedin.com/in/bruno-henrique-89407223a/" target="_blank"> <i class="fa fa-linkedin"></i> </a>
            </div>
            <p> Desenvolvido por Bruno Henrique </p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>