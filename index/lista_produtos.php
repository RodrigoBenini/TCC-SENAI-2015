 
<head>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
					
	</head>
<?php
  include_once("conexao_banco.php");
  
   //retornar dados do banco pro front-end ----------------------------------


$objetodb = new db();
$link =  $objetodb -> conecta_mysql();
$result_produtos = "select * from produtos order by nome_produto desc";
$resultado_produtos = mysqli_query($link,$result_produtos);
$result_comentarios = "select comentarios from comentarios order by id desc";
$resultado_comentarios = mysqli_query($link,$result_comentarios);



//Verificar se encontrou resultado na tabela "produtos"
if(($resultado_produtos) AND ($resultado_produtos->num_rows != 0)){
	?>
<table class="table table-bordered table-striped col-sm-10  offset-sm-1">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
      <th>Altura</th>
      <th>Largura</th>
      <th>Profundidade</th>
      <th>Comentários</th>
      <th>Adicionar Comentário</th>
    </tr>
  </thead>


<tbody>
<?php
    while($row_produtos = mysqli_fetch_assoc($resultado_produtos)){
    	?>
    	<tr>
      		<th><?php echo $row_produtos['id']; ?></th>
      		<td><?php echo $row_produtos['nome_produto']; ?></td>
      		<td><?php echo $row_produtos['preco_produto']; ?> R$</td>
      		<td><?php echo $row_produtos['descricao_produto']; ?></td>
      		<td><?php echo $row_produtos['altura_produto']; ?> Metros</td>
      		<td><?php echo $row_produtos['largura_produto']; ?> Metros</td>
      		<td><?php echo $row_produtos['profundidade_produto']; ?> Metros</td>
      		<td>                     <!-- modal ver cadastar comentario -->
<!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ver_comentarios">
  Ver Comentários
</button>

<!-- Modal -->
<div class="modal fade" id="ver_comentarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Listagem de comentários</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                   <?php 
                                 
                                   	//AQUI VAI OS Comentários
                                   	if($resultado_comentarios->num_rows == 0){
                                   		
										echo '
		<div class="alert alert-info text-center" role="alert">
		Nenhum comentario cadastrado!
		</div>';


      			}
					else{
					    	
					// Lista os comentarios encontrados

					    	while($row_comentarios = mysqli_fetch_assoc($resultado_comentarios)){ 
    
    								?>
					    			<div class="alert alert-primary" role="alert">

      	 									<?php echo $row_comentarios['comentarios']; ?> 			
							</div>
						<?php
      					}
      				//-----------
      					}
      					?>
      	

  
      						
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
      </div>
    </div>
  </div>
</div>
 

      		</td>
      		<td>
      		
<!-- Modal + Formulario de envio de comentario -->
      			  
      			 <form class="form-horizontal" name="formulario_comentarios" method="POST" action="add_comentario.php">
      			  	<!-- Botão para acionar modal -->
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_comentarios">
  										ADD comentários
								</button>


 
		<div class="modal fade" id="add_comentarios" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="TituloModalLongoExemplo">Cadastrar comentário</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          		<span aria-hidden="true">&times;</span>
        		</button>
      		</div>

      		<div class="modal-body">
        				<div class="form-group">
            				<label for="message-text" class="col-form-label">Digite o Comentário:</label>
            				<textarea class="form-control" id="comentarios" name="comentarios"></textarea>
          				</div>

      		</div>
     
      		<div class="modal-footer">
      			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        		<input type="submit" class="btn btn-success">
        			
         		</div>
      		</div>
    		</div>
  		</div>
  </form>
      		</td>
    	</tr>
    	<?php

    }
}else{
    echo "Nenhum Produto encontrado";
}
 ?>
</tbody>

</table>