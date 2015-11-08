<?php
include('conexao.php');

function listaAnotacao($conexao){
	$posts = array();
	$query = 'SELECT * from up_posts ORDER BY data DESC';
	$exeqr = mysqli_query($conexao, $query) or die (mysql_error());
	while ($res = mysqli_fetch_assoc($exeqr)){
		array_push($posts, $res);
	}
	return $posts;
}
function inserirAnotacao($conexao, $titulo, $content, $data){
	$query = "INSERT INTO up_posts (titulo, content, data) values ('{$titulo}', '{$content}', '{$data}')";
	$exeqr = mysqli_query($conexao, $query) or die ("Erro na inserção em: <strong>".$tabela."</strong>".mysql_error()); 
    if ($exeqr){
        return true;
    }else
        return false;
}
function buscaAnotacao($conexao, $id){
    $query = 'SELECT * FROM up_posts WHERE id ='.$id;
    $exeqr = mysqli_query($conexao,$query) or die (mysql_error());
    $res = mysql_fetch_assoc($exeqr);
  
    return $res;
}