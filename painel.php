<?php
	include ('cabecalho.php');
	include ('anotacao-banco.php');
	include ('conexao.php');
?>
 <section id="opcao">
        <a href="#" onclick="someSection(1);" class="inline">
            <div id="adicionar" >
               <span>Adicionar</span>
            </div>
        </a>
        <a href="#" onclick="someSection(2);" class="inline">
            <div id="editar" >
                <span>Editar</span>
            </div>
        </a>
  </section>

    <section id="inserir">
        <form action="inserir-anotacao.php" method="post">
            <label for="tituloId">Titulo: </label>
            <input type="text" name="titulo" id="tituloId" placeholder="Informe o novo titulo"><br>
            <textarea name="content" placeholder="Informe aqui seu novo post"></textarea>
            <input type="text" name="data" id="dataId" placeholder="Informe a data" value= "<?php echo date('Y-m-d H:i:s');?>"</input><br>
            <input type="submit" name="send" id="sendId" value="Enviar">
        </form>
    </section>
    <section id="titulos-section">
   <h2>Selecione o post que deseja editar: </h2>
	   	<ul>
	        <?php 
	            $anotacoes = listaAnotacao($conexao);
	            if ($anotacoes == ''){
	                echo '<h2> Nenhum post foi adicionado </h2>';   
	            }else{
	                foreach($anotacoes as $anotacao):
	                    echo '<li>';                                                        
	                        echo '<a href="painel.php?id='.$anotacao['id'].'"'.' >'.$anotacao['titulo'].'</a>';    
	                    echo '</li>';
	                endforeach;
	            }
	        ?>
	    </ul>
    </section>    

  <?php if (isset($_GET['id'])){
  	$id = $_GET['id'];
  	$anotacao = buscaAnotacao ($conexao, $id);
  ?>
	   <section id="update">
	        <form action="" method="post">
	            <label for="tituloId">Titulo: </label>
	            <input type="text" name="titulo" id="tituloId" placeholder="Informe o novo titulo" value="<?=$anotacao['content']?>">  <br>
	            <textarea name="content"><?=$anotacao['content']?></textarea>
	            '.'<input type="text" name="data" id="dateId" placeholder="Informe a data" value="'.date('Y-m-d H:i:s').'"></input><br>' .'
	            <input type="submit" name="send2" id="sendId" value="Atualizar">        
	        </form>
	    </section>
	<?php }?>
  <?php include ('rodape.php');?>