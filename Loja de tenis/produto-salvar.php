<h1>Salvar Produto</h1>
<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO produto (
						marca_id_marca,
						cor_produto,
						tamanho_produto
					)VALUES(
						'".$_POST["marca_id_marca"]."',
						'".$_POST["cor_produto"]."',
						'".$_POST["tamanho_produto"]."'
					)";

			$res = $conn->query( query: $sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			} break;
		
		case 'editar':
			$sql = "UPDATE produto SET
						marca_id_marca='".$_POST['marca_id_marca']."',
						cor_produto='".$_POST['cor_produto']."',
						tamanho_produto='".$_POST['tamanho_produto']."'
					WHERE id_produto= ".$_POST['id_produto'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM produto WHERE id_produto=".$_REQUEST['id_produto'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=produto-listar';</script>";
			}
			break;
	}