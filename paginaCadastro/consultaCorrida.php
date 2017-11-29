<?php
include 'menu.php';	
	    error_reporting(0);
		$servidor = "localhost";
		$usuario = "id3221689_dso";
		$senha = "123456";
		$banco = "id3221689_empresa";	
		$conexao = mysqli_connect($servidor, $usuario, $senha) or die (mysqli_error());
		$db =  mysqli_select_db($conexao, $banco); 
///////////////////////////////////////////////////////////////////////////////////////////////////////
	$dadosBanco = ( "SELECT * FROM tb_corrida");
		
	$consulta = mysqli_query($conexao, $dadosBanco);

		echo '<h1 align="center">Consultar motorista</h1>';
		echo '<table border = 1 >';

		echo '<tr>';

		echo '<td>NOME DO PASSAGEIRO</td>';

		echo '<td>NOME DO MOTORISTA</td>';

		echo '<td>VALOR DA CORRIDA</td>';

		echo '</tr>';


		$result = mysqli_query($conexao,$dadosBanco);
		while ($registro = mysqli_fetch_array($consulta)){

		$nomeMotorista = 			$registro["nm_motorista"];
		$nomePassageiro = 			$registro["nm_passageiro"];
		$valor =	$registro["vl_total"];
	
		echo '<tr>';

		echo '<td>'.$nomeMotorista.'</td>';

		echo '<td>'.$nomePassageiro.'</td>';

		echo '<td>'.$valor.'</td>';

		
		echo '</tr>';

		
	}

		mysqli_close($conexao);
		echo '</table>';
			
?>