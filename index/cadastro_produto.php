<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Produto</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

	<head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class=" page-header">
				<br>
				<h1 class="col-sm-5 offset-sm-2 bg-light text-info text-center border border-info" enctype="multipart/form-data">Cadastro de Produto: </h1>
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
			<div class="row justify-content-md-center">
				<div class="text-center col-md-auto">
				<a href="home.php"><button class="text-center btn btn-info" type="button">Voltar</button>
				</div>

				<div class="text-center col-md-auto">
				<input class="text-center btn btn-success" type="submit" value="Enviar">
				</div>
			</div>

			</form>
		</div>

	
	</body>
</html>