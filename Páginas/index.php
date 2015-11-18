<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" media="screen" href="estilos.css"/>
  </head>
  
  <body>
	<div class="site"><!--div que define a "caixa" geral do site -->
	
		<div class="header"><!--div que define o cabeçalho do site -->
			
			<div class="logo">
			  <img width="100px" height="80px" src = "imagens/simboloTeleduc.png" />
			</div>
			
			<div class="login">
				<form action="logar.php">
					<label for="email" id="email_l">Email:</label>
					<input type="text" name="email_login_tf" id="email_login_tf"/>
					
					<label for="senha" id="senha_l">Senha:</label>
					<input type="password" name="senha_login_tf" id="senha_login_tf"/>
					
					<input type="submit" value="Login!" id="botao_login"/>
				</form>
			</div>
			
		
		</div>
		
		<div class="conteudo"><!--div que define o conteúdo do site -->
			<div class="msg">
				
			</div>
			
			
			<div class="conteudo-left">
				<div class="descricaoTeleduc">  
					<label for="teleduc_l" id="teleduc_l">TELEDUC</label>
				
					<div class="resumoTeleduc">
						O TelEduc é um ambiente para realização de cursos a distância através da Internet. 
						Está sendo desenvolvido no Nied (Núcleo de Informática Aplicada a Educação).
					</div>
				</div>
			</div>
			
			<div class="conteudo-right">
			
			
				
				<form action="cadastrar.php" name="formcadastro">	
					<div class="cadastro_inicial">
						<label for="título_cadastro" id="cadastro_l">Cadastre-se Agora! </label>
						
						<!-- <label for="nome_completo" id="nome_completo">Nome Completo:</label> -->
						<input type="text" name="primeiro_nome_tf" id="primeiro_nome_tf" placeholder=" Nome"/>
						
						<!-- <label for="email_cadastro" id="email_cadastro">Email:</label> -->
						<input type="text" name="sobrenome_tf" id="sobrenome_tf" placeholder=" Sobrenome"/>
						</br></br>
						
						<input type="text" name="email_tf" id="email_tf" placeholder=" Email"/>
						</br></br>
						
						<input type="password" name="senha_tf" id="senha_tf" placeholder=" Senha"/>
						
						
						<input type="password" name="confirma_senha_tf" id="confirma_senha_tf" placeholder=" Confirma Senha"/>
						
						</br></br>
						<input type="submit" value="Pronto!" id="botao_pronto"/>
						
						<div class="msg">
							<?php
								session_start();
								if(isset($_SESSION['msg'])){
									echo $_SESSION['msg'];
									unset($_SESSION['msg']);
								}
							?>
						</div>
						
					</div>
				</form>
			</div> 
			
		</div><!-- fechar div conteúdo -->
		<div class="footer">
	</div><!--div que define o rodapé do site do site -->
	
	
	</div>
  </body>
</html>