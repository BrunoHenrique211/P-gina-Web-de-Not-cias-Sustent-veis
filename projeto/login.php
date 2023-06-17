<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/guiahome.ico" type="image/x-icon">
    <title>Tela de login</title>
    <style>
     body {
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, rgb(118, 255, 3), rgb(51, 105, 30));
    }
    div {
        background-color: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: #fff;
    }
    input {
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }
    .inputSubmit {
        background-image: linear-gradient(to right, rgb(118, 255, 3), rgb(51, 105, 30));
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 15px;
    }
    .inputSubmit:hover {
        background-image: linear-gradient(to right, rgb(46, 125, 50), rgb(27, 94, 32));
        cursor: pointer;
    }
    .name-link {
        position: fixed;
        top: 20px;
        left: 20px;
        display: inline-block;
        padding: 10px 20px;
        background-color: #00B300;
        color: #fff;
        text-decoration: none;
        font-family: "Press Start 2P", sans-serif;
        font-size: 16px;
        border-radius: 30px;
        border: 5px solid #004D00;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        transition: transform 0.2s ease-in-out;
    }
    .name-link:hover {
        transform: translateY(-5px);
        background-color: #004D00;
        border-color: #00B300;
    }
    </style>
</head>
<body>
    <a class="name-link" href="index.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>