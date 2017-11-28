<?php	
if ($_POST) 
		{
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "empresa";

			$conexao = mysqli_connect($servidor, $usuario, $senha) or die (mysqli_error());
			$db =  mysqli_select_db($conexao, $banco);

			$nome = $_POST['txtNome'];
			$dtNascimento = $_POST['txtDataNascimento'];
			$cpf = $_POST['txtCpf'];
			$sexo = $_POST['txtSexo'];

		   	$query = "INSERT INTO tb_passageiro  VALUES  ( '$nome', '$cpf', '$sexo', '$dtNascimento', ' ')";
	  		$executa = mysqli_query($conexao, $query);
			if ($query) {
				echo "<p>Cliente $nome inserido com sucesso</p>";
			}
				 
		}
?>		 
<html lang="pt-br">
	<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>Cadastro Passageiro</title>
		   
	</head>
	<body>
		<form name="frmCadastro" action="cadastroPassageiro.php" method="POST">
			<div class="form-group">
				Nome *: 
				<input name="txtNome" class="form-control" type="text" size="30" autofocus class="form-control" required /><br /><br />
			</div>
			
			<div class="form-group">
				Data de Nascimento *: 
				<input type="date" name="txtDataNascimento" size="30" class="form-control" required>
				
			</div>
			
			<div class="form-group">
				Cpf *:
				<input name="txtCpf" class="form-control" type="text" size="30" class="form-control" required/><br /><br />
			</div>
			
			<div class="form-group">
				Sexo *: 
				 <select name="txtSexo" required >
				  <option name="txtSexo" value="selecione">Selecione</option>
				  <option name="txtSexo" value= "masculino">Masculino</option>
				  <option name="txtSexo" value="feminino">Feminino</option>
				  
				</select><br /><br /> 
			</div>
			
			<input type="submit" name="btnCadastrar" value="Cadastrar" class="btn btn-default"/>
			
		
			</form>	
	
		
	</body>
</html>