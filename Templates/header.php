<?php 
    include_once("config/url.php");
    include_once("config/processamento.php");

     //limpa a mensagem de sessao
     if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg']; //var para imprimir no html
        $_SESSION['msg'] = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>CSS/styl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <title>Gerenciador de tarefas</title>
</head>
<body>
    <header>
        <nav class="navprincipal">
            
            <a class="linkhome" href="">
                <img class="logo" src="<?= $BASE_URL ?>img/logo.png" alt="img">
            </a>
       
            
            <div class="nav-bar">
                <a class="nav-link" href="<?= $BASE_URL ?>index.php">Minhas tarefas</a>
                <a class="nav-link" href="<?= $BASE_URL ?>criar.php">Adicionar Tarefa</a>
            </div>
        </nav>
    </header>