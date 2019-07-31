<head>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>			
	</head>

<?php
//-------------
require_once('conexao_banco.php');

//-------------
$comentarios = $_POST['comentarios'];
$objetodb = new db();
$link =  $objetodb -> conecta_mysql();
$sql = "insert into comentarios(comentarios) values('$comentarios')";
if(mysqli_query($link, $sql)){
		echo '<br>
		<div class="alert alert-success text-center" role="alert">
  				Comentario Salvo!
  			</div>';

  			header("Refresh: 1; url=home.php");
	


					
	}else{echo 'Erro ao cadastrar comentário';}


?>