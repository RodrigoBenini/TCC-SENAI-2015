<?php
require_once('conexao_banco.php');
require_once('cadastro_produto.php');
//Regista dados do formulario de Produtos
$id = $_POST['id'];
$nome_produto = $_POST['nome_produto'];
//$foto_produto = $_POST['foto_produto'];
$preco_produto = $_POST['preco_produto'];
$descricao_produto = $_POST['descricao_produto'];
$altura_produto = $_POST['altura_produto'];
$largura_produto = $_POST['largura_produto'];
$profundidade_produto = $_POST['profundidade_produto'];




$objetodb = new db();
$link =  $objetodb -> conecta_mysql();
$sql = "insert into produtos(id,nome_produto,preco_produto,descricao_produto,altura_produto,largura_produto,profundidade_produto) values( '$id','$nome_produto','$preco_produto','$descricao_produto', '$altura_produto','$largura_produto','$profundidade_produto')";

$verifica_id = "select id from produtos";


if(mysqli_query($link, $sql)){
		echo '<br>
		<div class="alert alert-success text-center" role="alert">
  				Produto cadastrado com sucesso, Redirecionando para a página inicial...
			</div>';
		header("refresh:3;url=home.php");
	}else{
		if($id = mysqli_query($link, $verifica_id)){
		echo '<br>
		<div class="alert alert-warning text-center" role="alert">
		Produto com ID ja existente, insira outra ID do produto...
		</div>';
		header("refresh:2;url=cadastro_produto.php");

		}else{echo 'Erro ao cadastrar produto';};
		};


?>