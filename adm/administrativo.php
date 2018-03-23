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
		<!--Para icon do tipo i -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
					<li><a href="#">Usuários</a></li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atividades <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="galeriajcc.php">JCC</a></li>
							<li><a href="#">CPM</a></li>
							<li><a href="#">CIFMC</a></li>
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
				<h1>Usuários</h1>
				<a class="btn btn-info" href="insertgaleria.php">	<i class="material-icons">add_circle</i></span>Addicionar</a>
			</div>

		<div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th>Inscrição</th>
							<th>Nome</th>
							<th>Situação</th>
							<th>Nivel de acesso</th>
							<th>Cadastrado</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php

								echo '<td>'.$id_users.'</td>';
								echo '<td>'.$nome.'</td>';
								echo '<td>'.$Ativo.'</td>';
								echo '<td>'.$nivel_decision.'</td>';
								echo '<td>'.$created.'</td>';
								echo '<td>';
									echo '<a class="btn btn-default" href="view.php?id='.$id_users.'"><span class="glyphicon glyphicon-eye-open"></span> Visualisar</a>';
									echo '<a class="btn btn-success" href="updates.php?id='.$id_users.'"><span class="glyphicon glyphicon-pencil"></span> Editar</a>';
									echo '<a class="btn btn-danger" href="view.php?id='.$id_users.'"><span class="glyphicon glyphicon-remove"></span> Apagar</a>';
								echo '</td>'
						?>
						</tr>
					</tbody>
				</table>
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
