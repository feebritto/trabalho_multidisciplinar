<?php
  $id_aluno = $_POST['prontuario'];
  $nome_aluno = $_POST['nome'];
  $numero_rg = $_POST['rg'];
  $data_nascimento = $_POST['data_nasc'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $pais = $_POST['pais'];
  $profissao = $_POST['profissao'];
  $cursando = $_POST['cursando'];
	
  //include('bd_cadastro.php');
  $dbh = new PDO('pgsql:host=localhost;port=5432;dbname=ifsp', 'postgres', 'postgres');

  $sql = "INSERT INTO curso VALUES ($nome_curso, '$duracao_curso', '$status_curso')";

  $resultado = $dbh->exec($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
      if($resultado > 0){
        echo '<p>Cadastro feito com sucesso!</p>';
      }else{
        echo '<p>Cadastro não realizado!</p>';
      }
    ?>
  </body>
</html>