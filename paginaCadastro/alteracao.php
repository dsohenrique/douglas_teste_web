<?php
	if ($_POST) 
	{
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "empresa";	
		$conexao = mysqli_connect($servidor, $usuario, $senha) or die (mysqli_error());
		$db =  mysqli_select_db($conexao, $banco); 

		$statusMotorista = $_POST['txtStatus'];
		$cpf = $_POST['txtCpf'];

		
		$result = "UPDATE tb_motorista SET st_motorista ='$statusMotorista' WHERE cpf_motorista ='$cpf' ";

		if (mysql_num_rows($verifica) > 0) {
		mysqli_query($conexao, $result);
		echo "Status do motorista com cpf $cpf alterado com sucesso";
		}
		else {
			echo "Motorista não encontrado por favor verifique o cpf digitado. ";
		}
	}
 ?>
 <html lang="pt-br">
	<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>Alterar Motorista</title>
		
	</head>
	<body>
		<form name="frmCadastro" action="alteracao.php" method="POST">
			<div class="form-group">
				Cpf *:
				<input name="txtCpf" class="form-control" type="text" size="30" autofocus required /><br /><br />
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