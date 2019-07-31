<?php
require_once('conexao_banco.php');
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

if(mysqli_query($link, $sql)){
		echo 'Produto cadastrado com sucesso, Redirecionando para a página inicial...';
		header("refresh:3;url=home.php");
	}else{
		echo 'Erro ao cadastrar produto';
		};


?>