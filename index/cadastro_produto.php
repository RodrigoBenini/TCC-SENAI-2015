<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
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
		<script type="text/javascript">
			function validar_form_contato(){
				var nome = formcontato.nome.value;
				var email = formcontato.email.value;
				var assunto = formcontato.assunto.value;
				var mensagem = formcontato.mensagem.value;
				
				if(nome == ""){
					alert("Campo nome é obrigatorio");
					formcontato.nome.focus();
					return false;
				}if(email == ""){
					alert("Campo email é obrigatorio");
					formcontato.email.focus();
					return false;
				}if(assunto == ""){
					alert("Campo assunto é obrigatorio");
					formcontato.assunto.focus();
					return false;
				}if(mensagem == ""){
					alert("Campo mensagem é obrigatorio");
					formcontato.mensagem.focus();
					return false;
				}
			}
		</script>
	<head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class=" page-header">
				<h1 class="col-sm-8 offset-sm-2 text-info">Cadastro de Produto: </h1>
				<br>
			</div>
			<form class="form-horizontal" name="formprodutos" method="POST" action="produtos.php">
			<div class="bg-light col-sm-8 offset-sm-2"> 
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
						ID do produto: 
					</label>
					<div class="">
						 <input type="text" class="form-control" name="id_produto" placeholder="* ID única" required>
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
						Comentário: 
					</label>
					<div class="">
						<textarea class="form-control" name="comentario"></textarea>
					</div>
					<br>
				</div>
			</div>
				<div class=" text-center">
				<input class="text-center btn btn-success" type="submit" value="Enviar" onclick="return validar_form_contato()">
			</div>
			</form>
		</div>
	
	</body>
</html>