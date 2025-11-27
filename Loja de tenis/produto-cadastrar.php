<h1>Cadastrar Produto</h1>			
<form action="?page=produto-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Produtos</label>
		<select name="marca_id_marca" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM marca";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_marca."'>".$row->nome_marca."</option>";
					}
				}else{
					print "<option>Não há marcas cadastradas</option>";
				}
			?>
		</select>
	</div>
		<label>Cor</label>
		<input type="text" name="cor_produto" class="form-control">
	</div>
	<div class="mb-3">
		<label>Tamanho</label>
		<input type="text" name="tamanho_produto" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>