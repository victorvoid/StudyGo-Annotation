<?php 
    include ('conexao.php');
    include ('anotacao-banco.php');
    /* Pegando dados com proteção: */
    $titulo   = htmlspecialchars($_POST['titulo']);
    $content  = htmlspecialchars($_POST['content']);
    $data     = htmlspecialchars($_POST['data']);
    $exeqr = inserirAnotacao($conexao, $titulo, $content, $data);
    if ($exeqr){
        echo '<h1> Cadastrado com sucesso! </h1>';
    }else{
        echo '<h2> Erro ao cadastro ! </h2>';
    }