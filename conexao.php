<?php
    require('config.php');
    echo '<meta charset="utf-8">';
   	/************************************************
			 		    CONEXAO
	************************************************/	
    $conexao =mysqli_connect(HOST,USER, PASS, DBSA) or die ('Erro ao conectar banco '.mysql_error());
	
?>