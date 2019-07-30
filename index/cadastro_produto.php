<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Produto</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	<head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class=" page-header">
				<h1 class="col-sm-8 offset-sm-2 text-info">Cadastro de Produto: </h1>
				<br>
			</div>
			<form class="form-horizontal" name="formulario_produtos" method="POST" action="registra_produto.php">
			<div class="bg-light col-sm-8 offset-sm-2"> 

				<div class="form-group">
					<label for="inputEmail3" class=" control-label">
						ID do produto: 
					</label>
					<div class="">
						 <input type="text" class="form-control col-sm-2" name="id" placeholder="ID única" required>
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="control-label">
						Nome do produto: 
					</label>
					<div class="">
						<input type="text" class="form-control" name="nome_produto" placeholder="Digite o nome do produto" required>
					</div>
				</div>
		
				<div class="form-group">
					<label for="inputEmail3" class=" control-label">
						Foto: 
					</label>
					<div class="custom-file">
						 <input type="file" class="custom-file-input" id="foto_produto"  name="foto_produto" placeholder="Insira a foto do produto" required>
						  <label class="custom-file-label" for="foto_produto">Selecione a foto</label>
					</div>

				</div>

				<div class="form-group">
					<label for="inputEmail3" class=" control-label">
						Preço unitário: 
					</label>
					
					<div class="input-group mb-3">
  							<div class="input-group-prepend">
    							<span class="input-group-text">R$</span>
 							</div>
						 <input type="text" class="form-control" name="preco_produto" placeholder="Valor" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class=" control-label">
						Descrição do Produto: 
					</label>
					<div class="form-group">
						<textarea class="form-control" name="descricao_produto" required></textarea>
					</div>

				</div>
				<div class="form-group">
					<label for="inputEmail3" class=" control-label">
						Dimensões: 
					</label>
					<div class="">
						 <input type="text" class="form-control col-sm-2 float-sm-left" name="altura_produto" placeholder="Altura" required>
						 <input type="text" class="form-control col-sm-2 offset-sm-1 float-sm-left" name="largura_produto" placeholder="Largura" required>				
						 <input type="text" class="form-control col-sm-2  offset-sm-1 float-sm-left" name="profundidade_produto" placeholder="Profundidade" required>
						 
					</div>

				</div>
	<br>
		<br>
			</div>
			<br>
				<div class=" text-center">
				<input class="text-center btn btn-success" type="submit" value="Enviar">
			</div>
			</form>
		</div>

	
	</body>
</html>