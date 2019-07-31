 
<?php
  include_once("conexao_banco.php");
   //retornar dados do banco pro front-end ----------------------------------


$objetodb = new db();
$link =  $objetodb -> conecta_mysql();
$result_produtos = "select * from produtos order by nome_produto desc";
$resultado_produtos = mysqli_query($link,$result_produtos);

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
    	</tr>
    	<?php

    }
}else{
    echo "Nenhum Produto encontrado";
}
 ?>
</tbody>

</table>