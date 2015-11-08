<?php include('cabecalho.php');
	  include('anotacao-banco.php');
	  include('conexao.php');

	$posts = listaAnotacao($conexao);
	$i = 0;
	 			/*SUMARIO*/
    echo '<section id="reference">';
    echo '<h1>Anotações:</h1>';
  	foreach ($posts as $post){
  		echo '<div>';
  		echo '<a href="#">'.$post['titulo'].'</a>'.'</br>';
  		echo '</div>';
  	}
  	echo'</section>';

	echo '<div id="container">';
	echo '<article>';
	foreach ($posts as $post){//TODOS AS ANOTAÇÕES
		$i++;
		echo '<div class="date-style" id="criei'.$i.'"><p>'.date('d/m/Y', strtotime($post['data'])).'</p></div>';
		echo '<h1>'.$post['titulo'].'</h1>';
		echo '<p>'.$post['content'].'</p>';
	}
    echo ' </article>';
    echo'</div>';

	include('rodape.php');