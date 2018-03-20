<?php
	session_start();
	//include_once("seguranca.php");
	include_once("conexao/database.php");
	//seguranca_adm();

	$id_users 				= $_SESSION['usuarioId'];
	$nome  						= $_SESSION['usuarioNome'];
	$nivel_de_acesso	= $_SESSION['usuarioNiveisAcessoId'];
	$nivel_decision 	= nivel_de_acesso($nivel_de_acesso);
	$email 						= $_SESSION['email'];
	$id_tag 					= $_SESSION['id_tag'];
	$tag 							= $_SESSION['tag'];
	$description 			= $_SESSION['description'];
	$created 					= $_SESSION['created'];

	$Ativo="Activo";//DEve criar uma funçao que vai verificar se o user é online ou nao
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="diacanua daniel - Pedro">
		<link rel="icon" href="imagens/favicon.ico">

		<title>Administrativo - Meela</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
	</head>

	<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Area Administrartiva</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="Administrativo.php">Usuários</a></li>
				
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atividades <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="galeriajcc.php">JCC</a></li>
							<li><a href="galeriacpm.php">CPM</a></li>
							<li><a href="galeriacifmc.php">CIFMC</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
    </nav>

	<div class="container theme-showcase" role="main">
		<div class="col">
			<a   href="../index.php" class="btn btn-info">Home</a>
		</div>
		<div class="row">
			<div class="page-header">
				<h1>Galeria CIFMC</h1>
			</div>

		<div>

		<div class="row">
			<div class="col-md-12">
		

				<form>
					  <div class="col-md-6">
					    <label for="exampleInputEmail1">Titulo</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>

					 <div class="col-md-6">
					    <label for="tag">Descricão da Tag</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>



					  <div class="col-md-6">
					    <label for="exampleInputPassword1">Descricão Curta</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>

					  <div class="col-md-6">
					  <label for="descricao longa">Descricão Longa</label>
                                <textarea class="form-control input-lg" placeholder="Sua mensagem! *" required></textarea>
                            </div>

							<form>
							  <div class="col-md-6">
							    <label for="exampleFormControlFile1">inserir Imagem </label>
							    <input type="file" class="form-control-file" id="exampleFormControlFile1">
							  </div>
							</form>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
