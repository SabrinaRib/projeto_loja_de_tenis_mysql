<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KickZone</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">KickZone</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	       
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Marcas
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=marca-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=marca-cadastrar">Cadastrar</a></li></li>
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Produtos
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=produto-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=produto-cadastrar">Cadastrar</a></li></li>
	          </ul>
	        </li>
	        
	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<?php
					//conexão com o banco de dados
					include('config.php');

					//includes das páginas
					switch (@$_REQUEST['page']) {
						//marcas
						case 'marca-listar':
							include('marca-listar.php');
							break;
						case 'marca-cadastrar':
							include('marca-cadastrar.php');
							break;
						case 'marca-editar':
							include('marca-editar.php');
							break;
						case 'marca-salvar':
							include('marca-salvar.php');
							break;

						//Produtos
						case 'produto-listar':
							include('produto-listar.php');
							break;
						case 'produto-cadastrar':
							include('produto-cadastrar.php');
							break;
						case 'produto-editar':
							include('produto-editar.php');
							break;
						case 'produto-salvar':
							include('produto-salvar.php');
							break;
						
						default:
							print "<h1>Seja bem-vindo à KickZone!</h1>";
							print "<h1>Encontre o par perfeito para cada passo do seu estilo👟</h1>";

					}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>