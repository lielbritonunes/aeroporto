<?php
	$CodAviao = filter_input (INPUT_GET, "CodAviao");
	echo "Alterando o Registro" . $CodAviao;
	
	$sql = "SELECT *  from Controle
	WHERE CodAviao = $CodAviao";
	
	include ("cadastro/conexao.php");
	
	$listarAviao = $conectar -> query($sql);
	$dadoAviao = array();
	while($linha = $listarAviao ->fetch_array()) {
		$dadoAviao [] = $linha;	
	}
	//var_dump ($dadoVeiculos);
	foreach ($dadoAviao as $valor){
 ?>
 
 <form action="cadastro/aviaoCadastrar.php" method="post">
	Modelo <input type="text" name="Modelo" value=<?php echo $valor ["Modelo"];?>><br/>
	Marca<input type="text" name="Marca" value=<?php echo $valor ["Marca"];?>><br/>
	Quantidade passageiros<input type="text" name="QtdPassageiros"value=<?php echo $valor ["QtdPassageiros"];?>><br/>
	Tamanho<input type="text" name="Tamanho"value=<?php echo $valor ["Tamanho"];?>><br/>
	Peso<input type="text" name="Peso"value=<?php echo $valor ["Peso"];?>><br/>
	Finalidade<input type="text" name="Finalidade"value=<?php echo $valor ["Finalidade"];?>><br/>
	Destino<input type="text" name="Destino"value=<?php echo $valor ["Destino"];?>><br>
	Quantidade gasolina<input type="text" name="QtdGasolina"value=<?php echo $valor ["QtdGasolina"];?>><br>
	Vaga ocupada<input type="text" name="VagaOcupada"value=<?php echo $valor ["VagaOcupada"];?>><br>	
	Horario partida<input type="text" name="HorarioPartida"value=<?php echo $valor ["HorarioPartida"];?>><br>
	Distancia viagem<input type="text" name="DistanciaViagem"value=<?php echo $valor ["DistanciaViagem"];?>><br>	
	Tempo no Ar<input type="text" name="TempoAr"value=<?php echo $valor ["TempoAr"];?>><br>	
	<input type="submit" value="CADASTRAR"><br/>
</form>
<?php
}
?>
	