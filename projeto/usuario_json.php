<?php
    session_start();
    include_once('config.php');
   
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) // Verificando se o campo foi preenchido
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql)->fetch_all(MYSQLI_ASSOC);
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($result);
?>