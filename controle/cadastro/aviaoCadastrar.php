<?php
	//1 - conectar com o banco de dados
	include 'cadastro/conexao.php';
	//2 - montar a string de consulta 
  	//2.1 - receber os dados
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
  //consulta ao banco de dados
  
	echo $sql = "insert into Controle	  
		(Modelo, Marca, QtdPassageiros, Tamanho, Peso, Finalidade, Destino, QtdGasolina, VagaOcupada,
		 HorarioPartida, DistanciaViagem, TempoAr) 
		values 
		('$Modelo', '$Marca', '$QtdPassageiros', '$Tamanho', '$Peso', '$Finalidade', '$Destino', 
		'$QtdGasolina', '$VagaOcupada', '$HorarioPartida', '$DistanciaViagem', '$TempoAr')";	 	
	
		
	$inserir = $conectar->query($sql);
	$numRegistro = $conectar->affected_rows;
	if($numRegistro==1){
		echo "O registro <b>" . $Marca . " </b>foi armazenado no banco de dados";	
	}else{
		echo "O registro <b>"  . $Marca . " </b>não foi armazenado no banco de dados";	
	}
?>