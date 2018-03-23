<?php
	session_start();
	//include_once("seguranca.php");
	include_once("conexao/database.php");
	//seguranca_adm();
	$titulo = $id_area=$desc_curta = $desc_long = $desc_tag =$tag=$imagem=$valida=$imagePath="";

	$isSuccess =$imagemPath=$imagemExtension=$isUploadSuccess=$desc_curta_Error=$imagemError=$desc_longa_Error=$tagError="";

	if(isset($_POST) && !empty($_POST))
	{

		$titulo 				= verifyInput($_POST['titulo']);
		$desc_curta  		= verifyInput($_POST['desc_curta']);
		$desc_longa			= verifyInput($_POST['desc_longa']);
		$desc_tag 			= verifyInput($_POST['desc_tag']);
		$tag 						= verifyInput($_POST['tag']);
		$id_area				= verifyInput($_POST['area']);

		//Tratamento da imagem
		$imagem =  verifyInput($_FILES['imagem']['name']);
    $imagemPath =  'imagens/todas/'. basename($imagem);
    $imagemExtension = pathinfo($imagemPath,PATHINFO_EXTENSION);

    $isSuccess =  true;
    $isUploadSuccess = false;

	      if(empty($titulo))
	      {
	        $nameError = 'Escreva o titulo da imagem';
	        $isSuccess = false;
	      }
	      if(empty($desc_curta))
	      {
	        $desc_curta_Error = 'Escreva o desciçao curta da imagem';
	        $isSuccess = false;
	      }
				if(empty($desc_longa))
	      {
	        $desc_longa_Error = 'Escreva o desciçao longa da imagem';
	        $isSuccess = false;
	      }
				if(empty($tag))
 	      {
 	        $tagError = 'Escreva o tag';
 	        $isSuccess = false;
 	      }
	      if(empty($desc_tag))
	      {
	        $desc_tag_Error = 'Escreava um pouco vai';
	        $isSuccess = false;
	      }
	      if(empty($imagem))
	      {
	        $imagemError = 'Ce champ ne peut pas être vide';
	        $isSuccess = false;
	      }
	      else
	      {
	        $isUploadSuccess = true;
	        if($imagemExtension!='jpg' && $imagemExtension!='png' && $imagemExtension!='jpeg' && $imagemExtension!='gif')
	        {
	          $imagemError = 'Les fichiers autorisés sont : .jpg, .jpeg ,.png et .gif';
	          $isUploadSuccess = false;
	        }
	        if (file_exists($imagemPath))
	        {
	          $imagemError = 'O ficheiro ja existe';
	          $isUploadSuccess = false;
	        }
	        if($_FILES['imagem']['size'] > 5000000)
	        {
	          $imagemError = 'O ficheiro ultrapasou 5000 Kb';
	          $isUploadSuccess = false;
	        }
	        if($isUploadSuccess)
	        {
	          if(!move_uploaded_file($_FILES['imagem']['tmp_name'],$imagemPath))
	          {
	            $isUploadSuccess = false;
	          }
	        }
	  		}

			  if ($isSuccess && $isUploadSuccess)
			  {
					/*
					$titulo;
					$desc_curta;
					$desc_longa;
					$desc_tag ;
					$tag; */
						echo "";
					//Tratamento da imagem
					$imagem =  verifyInput($_FILES['imagem']['name']);
	        $db = Database::connect();
	        $statement = $db->prepare("INSERT INTO galeria (titre,descricao_curta,descricao_longa,image,id_area, tag_desc,tag,created,modified) VALUES(?, ?,?, ?, ?,?,?,now(),now()) ");
	        $statement->execute(array($titulo,$desc_curta,$desc_longa,$imagem,$id_area,$desc_tag,$tag));
					var_dump($isSuccess);
					//Tratamento tag
					$tab_name='galeria';

							Database::disconnect();
			        //header("Location: index.php");//Retour à index
			  }else
				{
					var_dump($id_area);
				}
	}else
	{
		var_dump("pas de post");
	}

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
				<form  class="form" role="form" action="" method="post" enctype="multipart/form-data">
					  <div class="col-md-6 col-sm-6">

					    <label for="exampleInputEmail1">Titulo</label>
					    <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">

					    <label for="descricao_curta">Descrição Curta</label>
					    <input type="text" name="desc_curta" class="form-control" id="exampleInputPassword1" placeholder="Descricão Curta">

							<label for="descricao_longa">Descrição Longa</label>
							<textarea maxlength="150" name="desc_longa" class="form-control input-lg" placeholder="Descricão Longa! *" required></textarea>
					 </div>

						<div class="col-md-6 col-sm-6">
					    <label for="exampleInputEmail1">Tag</label>
					    <input type="text" name="tag" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tag">

					    <label for="descricao_curta">Descriptio de tag</label>
					    <input type="text" name="desc_tag" class="form-control" id="exampleInputPassword1" placeholder="Descricão Curta">

							<div class="form-group">
								<label for="category">Catégorie:</label>
								<select class="form-control" name="area" id="category">
									<?php

									 $db = Database::connect();
									 foreach ($db->query('SELECT * FROM area_galeria;') as $row ) {
											 echo '<option value=" '.$row['id_area']. ' ">'. $row['area']. '</option>';
									 }
										 Database::disconnect();
									 ?>
								</select>
							</div>

							 <label for="exampleFormControlFile1">inserir Imagem </label>
							 <input type="file" name="imagem" class="form-control-file" id="exampleFormControlFile1">

							 <button type="submit" name="salvar" class="btn btn-success salvar">Validar</button>
						</div>
					</form>
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
