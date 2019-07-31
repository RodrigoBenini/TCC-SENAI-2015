<?php
//criar conexao com banco de dados
class db{
private $host = 'localhost';
private $usuario = 'root';
private $senha = '';
private $banco = 'produtos';

public function conecta_mysql(){

	$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->banco);
	mysqli_set_charset($con, 'utf8');

	if(mysqli_connect_errno()){

		  echo 'Erro ao se conectar ao banco de dados: '. mysqli_connect_errno();	
	}

			return $con;

}
}




?>