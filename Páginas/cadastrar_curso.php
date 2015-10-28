<?php
    $nome_curso = $_GET['nome_curso_tf'];
	$duracao_curso = $_GET['duracao_curso_tf'];
	$status_curso = $_GET['status_curso_tf'];
	
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