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
			$cpf = $_POST['txtCpf'];
			$dtNascimento = $_POST['txtDataNascimento'];
			$mdVeiculo = $_POST['txtModeloVeiculo'];
			$sexo = $_POST['txtSexo'];
			$status = $_POST['txtStatus'];

		   	$query = "INSERT INTO tb_motorista  VALUES  ('', '$nome', '$dtNascimento', '$cpf', '$sexo', '$mdVeiculo', '$status' )";
	  		$executa = mysqli_query($conexao, $query);
			if ($query) {
				echo "<p>Motorista $nome inserido com sucesso</p>";
			}
				 
		}
?>		 
<html lang="pt-br">
	<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>Cadastro Motorista</title>
		
	</head>
	<body>
		<form name="frmCadastro" action="cadastroMotorista.php" method="POST">
			<div class="form-group">
				Nome *: 
				<input name="txtNome" class="form-control" type="text" size="30" autofocus required /><br /><br />
			</div>
			
			<div class="form-group">
				Cpf *:
				<input name="txtCpf" class="form-control" type="text" size="30" required /><br /><br />
			</div>
			
			<div class="form-group">
				Data de Nascimento *: 
				<input name="txtDataNascimento" class="form-control" type="date" size="30" required /><br /><br />
			</div>
			
			<div class="form-group">
				Modelo do veiculo *: 
				<input name="txtModeloVeiculo" class="form-control" type="text" size="30" required /><br /><br />
			</div>
			
			<div class="form-group">
				Sexo *: 
				 <select name="txtSexo" required>
				  <option name="txtSexo">Masculino</option>
				  <option name="txtSexo">Feminino</option>
				  
				</select><br /><br /> 
			</div>
			
			<div class="form-group">
				Status *:
				 <select name="txtStatus" required>
				  	<option name="txtStatus">Ativo</option>
				 	 <option name="txtStatus">Inativo</option>
				  
				</select> 
			</div>
			
			<input type="submit" value="Cadastrar" class="btn btn-default"/>
		</form>						
	 
	</body>
</html>