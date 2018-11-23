<?php
//arquivo de conexao com o banco de dados
	$local = "localhost";//127.0.0.1
	$usuario = "root";
	$senha = "";
	$baseDados = "Aeroporto";
	
	
	$conectar = new mysqli ($local, $usuario,$senha,$baseDados);
	
	
	if ($conectar ->connect_errno) { 
		echo "Houve um erro na tentativa de conexão com MySQL:
			Código do erro: (" . $conectar->connect_errno . ") Motivo: " . $conectar->connect_error;
	}
	//echo "A sua conexão foi realizada com sucesso via " . $conectar->host_info;
?>