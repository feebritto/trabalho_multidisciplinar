<?php
    $nome = $_GET['primeiro_nome_tf'];
	$sobrenome = $_GET['sobrenome_tf'];
	$email = $_GET['email_tf'];
	$senha = $_GET['senha_tf'];
	$confirmasenha = $_GET['confirma_senha_tf'];
	
	include('bd.php');
	//$dbh = new PDO('pgsql:host=localhost;port=5432;dbname=ifsp', 'postgres', 'postgres');
	//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = "insert into user_aluno(nome_aluno,sobrenome_aluno,email,senha) values ('$nome','$sobrenome','$email','$senha')";
  
    //insert
	
	session_start();
	
	
	if($confirmasenha != $senha){
		$_SESSION['msg'] = 'Senha não confirmada';
		header("location: index.php");
	}
	//if else (!empty($email) || !empty($senha))
	//então $_SESSION['msg'] = 'Cadastrado com sucesso!'
	//caso contrário
	//$_SESSION['msg'] = 'Erro no Cadastro!'
	
	//header("location: curso.html");
  
  
  
?>