<?php
    $email = $_GET['email_login_tf'];
	$senha = $_GET['senha_login_tf'];
	$opcao = isset($_GET['opcao']) ? $_GET['opcao'] : ''; 
	
	if(!empty($email) && !empty($senha)){
		if($opcao == "e"){
		  $op = 'AND';
		}else{
		  $op = 'OR';
		}
		//Procurar no banco o email equivalente e a senha
		$sql = "SELECT * FROM users WHERE email_login_tf = '$email' $op senha_login_tf = '$senha'";
	}

  //include('bd_cadastro.php');
  $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=ifsp', 'postgres', 'postgres');
?>