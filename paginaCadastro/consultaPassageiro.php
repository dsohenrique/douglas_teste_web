<?php
	
		$servidor = 	"localhost";
		$usuario =		 "root";
		$senha =		 "";
		$banco = 		"empresa";	
		$conexao = 		mysqli_connect($servidor, $usuario, $senha) or die (mysqli_error());
		$db = 			 mysqli_select_db($conexao, $banco); 
///////////////////////////////////////////////////////////////////////////////////////////////////////
	$dadosBanco = 	( "SELECT * FROM tb_passageiro");
		
	$consulta =		 mysqli_query($conexao, $dadosBanco);

		echo '<table border = 1 >';

		echo '<tr>';

		echo '<td>NOME</td>';

		echo '<td>CPF</td>';

		echo '<td>SEXO</td>';

		echo '<td>DATA DE NASCIMENTO</td>';

		echo '</tr>';


		$result = mysqli_query($conexao,$dadosBanco);
		while (	$registro = mysqli_fetch_array($consulta)){

		$nome = 			$registro["nm_passageiro"];
		$cpfCnpj = 			$registro["cpf_passageiro"];
		$sexo =				$registro["sx_passageiro"];
		$data = 			$registro["dt_nascimento"];

		echo '<tr>';

		echo '<td>'.$nome.'</td>';

		echo '<td>'.$cpfCnpj.'</td>';

		echo '<td>'.$sexo.'</td>';

		echo '<td>'.$data.'</td>';

		echo '</tr>';

		
	}

		mysqli_close($conexao);
		echo '</table>';
			
?>