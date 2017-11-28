<?php
	
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "empresa";	
		$conexao = mysqli_connect($servidor, $usuario, $senha) or die (mysqli_error());
		$db =  mysqli_select_db($conexao, $banco); 
///////////////////////////////////////////////////////////////////////////////////////////////////////
	$dadosBanco = ( "SELECT * FROM tb_motorista");
		
	$consulta = mysqli_query($conexao, $dadosBanco);

		echo '<table border = 1 >';

		echo '<tr>';

		echo '<td>NOME</td>';

		echo '<td>CPF</td>';

		echo '<td>MODELO</td>';

		echo '<td>SEXO</td>';

		echo '<td>STATUS</td>';

		echo '</tr>';


		$result = mysqli_query($conexao,$dadosBanco);
		while ($registro = mysqli_fetch_array($consulta)){

		$nome = 			$registro["nm_motorista"];
		$cpfCnpj = 			$registro["cpf_motorista"];
		$modeloVeiculo =	$registro["md_veiculo"];
		$sexo = 			$registro["sx_motorista"];
		$status = 			$registro["st_motorista"];

		echo '<tr>';

		echo '<td>'.$nome.'</td>';

		echo '<td>'.$cpfCnpj.'</td>';

		echo '<td>'.$modeloVeiculo.'</td>';

		echo '<td>'.$sexo.'</td>';

		echo '<td>'.$status.'</td>';


		echo '</tr>';

		
	}

		mysqli_close($conexao);
		echo '</table>';
			
?>