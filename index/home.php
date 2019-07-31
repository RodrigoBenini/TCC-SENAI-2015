<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Listagem de Produto</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<head>
	<body>
    <!---
		Tabela de listagem de produtos
    -->     <div class="container">
        <h1 class="p-3 mb-2 col-sm-4 offset-sm-4 bg-light text-info text-center border border-info"> Lista de Produtos </h1>
           <span id="produtos_lista"></span>
        <script>
            $(document).ready(function () {
                $.post('lista_produtos.php', function(retorna){
                
                    $("#produtos_lista").html(retorna);
                });
            });
  </script>
           </div>
       


        <div class="col-sm-4 offset-sm-5">
           <a href="cadastro_produto.php"> <button type="button" class="btn btn-outline-success" >Cadastrar Novo Produto</button>
        </div>
    </body>
</html>
