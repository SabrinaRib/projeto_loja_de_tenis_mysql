<h1>Listar Produto</h1>
<?php
	$sql = "SELECT * FROM produto AS mo
			INNER JOIN marca AS ma
			ON mo.marca_id_marca = ma.id_marca";

	$res = $conn->query(query: $sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Marca</th>";
		print "<th>Cor</th>";
		print "<th>Tamanho</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_produto."</td>";
			print "<td>".$row->nome_marca."</td>";
			print "<td>".$row->cor_produto."</td>";
			print "<td>".$row->tamanho_produto."</td>";
			print "<td>
					  <button onclick=\"location.href='?page=produto-editar&id_produto=".$row->id_produto."';\" class='btn btn-primary'>Editar</button>

					  <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=produto-salvar&acao=excluir&id_produto=".$row->id_produto."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}