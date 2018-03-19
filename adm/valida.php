<?php
	session_start();
	$email=$senha="";
	include "conexao/database.php";

	//Verifica se os campos possuem dados
	if((isset($_POST['txt_usuario'])) && (isset($_POST['txt_senha']))){
		$email =  verifyInput($_POST['txt_usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = md5(verifyInput($_POST['txt_senha']));
		$nivel="";
		$db = Database::connect();
		$statement = $db->prepare('SELECT * from users u inner join tag t ON u.id_tag=t.id_tag WHERE u.email=? and u.senha=?');
		$statement->execute(array($email,$senha));
		$resultado = $statement->fetch();
		//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario
		if(isset($resultado))
		{
			$_SESSION['usuarioId'] = $resultado['id_users'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['senha'] = $resultado['senha'];
			$_SESSION['email'] = $resultado['email'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['nivel_de_acesso'];
			$_SESSION['id_tag'] = $resultado['id_tag'];
			$_SESSION['tag'] = $resultado['tag'];
			$_SESSION['description'] = $resultado['description'];
			$_SESSION['created'] = $resultado['created'];

			if($_SESSION['usuarioNiveisAcessoId'] == "1")
			{
				header("Location: administrativo.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2")
			{
				header("Location: colaborador.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "3")
			{
				header("Location: cliente.php");
			}else
			{
				$_SESSION['loginErro'] = "Erro - Entre em contato cesar@celke.com.br";
				header("Location: index.php");
			}
		}else
		{
			$_SESSION['loginErro'] = "Usuário ou senha inválido";
			header("Location: index.php");
		}

	}else
	{
		$_SESSION['loginErro'] = "Usuário ou senha inválido3";
		header("Location: index.php");
	}if(isset($_SESSION))
	{
		$email=$_SESSION['email'];
		$senha=$_SESSION['senha'];
		
		$db = Database::connect();
		$statement = $db->prepare('SELECT * from users u inner join tag t ON u.id_tag=t.id_tag WHERE u.email=? and u.senha=?');
		$statement->execute(array($email,$senha));
		$resultado = $statement->fetch();
		//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario
		if(isset($resultado))
		{
			$_SESSION['usuarioId'] = $resultado['id_users'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['senha'] = $resultado['senha'];
			$_SESSION['email'] = $resultado['email'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['nivel_de_acesso'];
			$_SESSION['id_tag'] = $resultado['id_tag'];
			$_SESSION['tag'] = $resultado['tag'];
			$_SESSION['description'] = $resultado['description'];
			$_SESSION['created'] = $resultado['created'];

			if($_SESSION['usuarioNiveisAcessoId'] == "1")
			{
				header("Location: administrativo.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2")
			{
				header("Location: colaborador.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "3")
			{
				header("Location: cliente.php");
			}else
			{
				$_SESSION['loginErro'] = "Erro - Entre em contato cesar@celke.com.br";
				header("Location: index.php");
			}
		}else
		{
			$_SESSION['loginErro'] = "Usuário ou senha inválido";
			header("Location: index.php");
		}

	}
Database::disconnect();
?>
