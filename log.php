<?php
include('conexaosl.php');
if(isset($_POST['user']) || isset($_POST['pass'])){

	if(strlen($_POST['user'])==0){
	 echo '<script>alert("Preencha seu usuario")</script>';
	} else if(strlen($_POST['pass'])==0){
		echo '<script>alert("Preencha sua senha")</script>';
	} else{

		$usuario = $mysqli-> real_escape_string($_POST['user']);
		$senha = $mysqli-> real_escape_string($_POST['pass']);

		$sql_code = "SELECT * FROM cliente WHERE usuario ='$usuario' AND senha = '$senha'";
		$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código sql: ". $mysqli->error);

		$quantidade = $sql_query->num_rows;

		if($quantidade ==1){

          $usuario = $sql_query->fetch_assoc();

		  if(!isset($_SESSION)) {
			session_start();
		  }
		  $_SESSION['id'] = $usuario['id'];
		  $_SESSION['nome'] = $usuario['nome'];
		  $_SESSION['usuario'] = $usuario['usuario'];
		  $_SESSION['email'] =$usuario['email'];
		  header("Location:index.php");
		}else{
            echo '<script>alert("Falhar ao logar! Usuario ou senha incorretos")</script>';
		}
	}
}

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Trilheiros extremos</title>
		<meta charset="UTF-8" />
		<!-- Estilos da Index.php -->
		<style type="text/css">
			body{
			background: linear-gradient(45deg, #f0f9ff 10%, #cbebff 47%, #a1dbff 100%);
			font-family: Tahoma;
			}
			div.global{
			width: 40%;
			height: auto;
			background-color: #fff;
			border: 1px solid #606060;
			padding: 50px;
			box-shadow: 0px 0px 10px #000;
			margin-top: 10%;
			margin-left: auto;
			margin-right: auto;
			}
			input[type='text'], input[type='password']{
			width: 300px;
			height: 25px;
			border: solid 1px #606060;
			border-radius: 5px;
			}
			input[type='password']{
			margin-left: 10px;
			}
			
			input[type='submit'],button{
			width: 150px;
			}
			a {display:block;
			   text-decoration:none;
               color:black;
			}
		</style>
	</head>
	<body>
	
		<div class="global">
			<!-- Aqui temos o formulário
				*Action é vazia por que vamos fazer a validação e o redirecionamento nesta mesma página.
			-->
			
			<form name="" method="post" action="">
				<label>Usuário: <input type="text" name="user" /></label><br /><br />
				<label>Senha: <input type="password" name="pass" /></label><br /><br />
				<input type="submit" name="submit" value="Logar" /> 
				<button><a href="formnovocliente.html">Cadastrar</a></button>
			</form>
			
		
		</div>
	</body>
</html>			