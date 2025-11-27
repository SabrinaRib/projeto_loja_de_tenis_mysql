<h1>Editar Produto</h1>
<?php
	$sql_1 = "SELECT * FROM produto WHERE id_produto=".$_REQUEST['id_produto'];
	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=produto-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_produto" value="<?php print $row_1->id_produto; ?>">
	<div class="mb-3">
		<label>Marca</label>
		<select name="marca_id_marca" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM marca";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						if($row_1->marca_id_marca == $row->id_marca){
							print "<option value='".$row->id_marca."' selected>".$row->nome_marca."</option>";
						}else{
							print "<option value='".$row->id_marca."'>".$row->nome_marca."</option>";
						}
					}
				}else{
					print "<option>Não há marcas cadastradas</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Cor</label>
		<input type="text" name="cor_produto" value="<?php print $row_1->cor_produto; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>Tamanho</label>
		<input type="text" name="tamanho_produto" value="<?php print $row_1->tamanho_produto; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>