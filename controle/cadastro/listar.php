<?php
	//1 - conectar com o banco de dados
	include 'cadastro/conexao.php';//inclui o arquivo de conexão
	
	//2 - montar a query(string) de consulta 
	$sql = "select * from Controle";
	 	
	//3 - executar a query
	$listar = $conectar -> query($sql);	
	
	/*4 - associar o conteudo da execução da query 
	em um array,	utilizando o laço de repetição que
	percorrerá a todos os registros que ele encontrar
	na tabela colocando cada linha em uma posição do 
	array.*/
	while($relatorio = $listar	->fetch_assoc()){
		$dado[] = $relatorio;
	}
	//var_dump($dado);
	
	foreach($dado as $linha){
		echo "Código: $linha[CodAviao]";
		echo "<br />Modelo: $linha[Modelo]";			
		echo "<br /> Marca: " . $linha["Marca"];
		echo "<br /> Quantidade Passageiros: " . $linha["QtdPassageiros"];
		echo "<br /> Tamanho: " . $linha["Tamanho"];
		echo "<br /> Peso " . $linha["Peso"];
		echo "<br /> Finalidade " . $linha["Finalidade"];
		echo "<br /> Quantidade Gasolina: " . $linha["QtdGasolina"];
		echo "<br /> Vaga Ocupada: " . $linha["VagaOcupada"];
		echo "<br /> Horario Partida: " . $linha["HorarioPartida"];
		echo "<br /> Distancia Viagem: " . $linha["DistanciaViagem"];
		echo "<br /> Tempo Ar: " . $linha["TempoAr"];
		echo "<hr />";	
	}	
?> 