<?php
    $email = $_GET['email_login_tf'];
	$senha = $_GET['senha_login_tf'];
	$opcao = isset($_GET['opcao']) ? $_GET['opcao'] : ''; 
	
	include('bd_cadastro.php');
	
	if(!empty($email) && !empty($senha)){
		if($opcao == "e"){
		  $op = 'AND';
		}else{
		  $op = 'OR';
		}
		//Procurar no banco o email equivalente e a senha
		$sql = "SELECT * FROM user_aluno WHERE email_login_tf = '$email' $op senha_login_tf = '$senha'";
	}  
	
	session_start();
		
	if $sql = "SELECT * FROM user_aluno WHERE email_login_tf = '$email' $op senha_login_tf = '$senha'";
		$_SESSION['msg'] = 'Email ou Senha não cadastrado!'
	
	header("location: curso.html");
?>