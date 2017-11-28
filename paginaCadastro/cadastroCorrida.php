<?php	
if ($_POST) 
		{
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "empresa";

			$conexao = mysqli_connect($servidor, $usuario, $senha) or die (mysqli_error());
			$db =  mysqli_select_db($conexao, $banco);

			$nomePassageiro = $_POST['txtNomePassageiro'];
			$nomeMotorista = $_POST['txtNomeMotorista'];
			$valor = $_POST['txtValorCorrida'];


			$query = "INSERT INTO tb_corrida  VALUES  ( '',  '$valor', '$nomePassageiro', '$nomeMotorista')";
	  		$executa = mysqli_query($conexao, $query);
			if ($query) {
				echo "<p>Corrida inserida com sucesso</p>";
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
		<form name="frmCadastro" action="cadastroCorrida.php" method="POST">
			<div class="form-group">
				Nome do passageiro *: 
				<input name="txtNomePassageiro" class="form-control" type="text" size="30" autofocus class="form-control" required /><br /><br />
			</div>
			
			<div class="form-group">
				Nome do Motorista *: 
				<input type="text" name="txtNomeMotorista" size="30" class="form-control" required>
				
			</div>
			
			<div class="form-group">
				Valor da corrida *:
				<input name="txtValorCorrida" class="form-control" type="text" size="30" class="form-control" required/><br /><br />
			</div>			
			<input type="submit" name="btnCadastrar" value="Cadastrar" class="btn btn-default"/>
			
		
			</form>	
	
		
	</body>
</html>