<?php
	$Modelo = filter_input (INPUT_POST, "Modelo");
 	$Marca = filter_input (INPUT_POST, "Marca");
  	$QtdPassageiros = filter_input (INPUT_POST, "QtdPassageiros");
  	$Tamanho = filter_input (INPUT_POST, "Tamanho");
  	$Peso = filter_input (INPUT_POST, "Peso");
  	$Finalidade = filter_input (INPUT_POST, "Finalidade");
  	$Destino = filter_input (INPUT_POST, "Destino");
  	$QtdGasolina = filter_input (INPUT_POST, "QtdGasolina");
  	$VagaOcupada = filter_input (INPUT_POST, "VagaOcupada");
   $HorarioPartida = filter_input (INPUT_POST, "HorarioPartida");
   $DistanciaViagem = filter_input (INPUT_POST, "DistanciaViagem");
   $TempoAr = filter_input (INPUT_POST, "TempoAr");
	$sql = "UPDATE Controle set 
		Modelo = '$marca', 
		Marca = '$modelo', 
		QtdPassageiros = '$ano', 
		Tamanho = '$cor', 
		Peso = '$valor', 
		Finalidade = '$portas', 
		Destino = '$combustivel'
		QtdGasolina = '$QtdGasolina',
		VagaOcupada = '$combustivel',
		HorarioPartida = '$HorarioPartida',
		DistanciaViagem = '$DistanciaViagem',
		TempoAr = '$TempoAr'
		WHERE CodAviao = '$CodAviao'
	";
	include ("cadastro/conexao.php");
	$alterar = $conectar->query($sql);
	$numeroRegistro = $conectar->affected_rows;
	if($numeroRegistro == 1) { 
		echo "O Registro foi alterado com sucesso!!!";
	}else{
		echo "Não foi possível atualizar o registro!!!";	
	}
?>	
	<a href="cadastro/formAviao.php">Voltar</a>

