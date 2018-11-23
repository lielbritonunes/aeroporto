<form action="aviaoCadastrar.php" method="post">
	Modelo: <input type="text" name="Modelo"><br/>
	Marca: <input type="text" name="Marca"><br/>
	Quantidade passageiros: <input type="text" name="QtdPassageiros"><br/>
	Tamanho: <input type="text" name="Tamanho"><br/>
	Peso: <input type="text" name="Peso"><br/>
	Finalidade: <input type="text" name="Finalidade"><br/>
	Destino: <input type="text" name="Destino"><br>
	Quantidade Gasolina: <input type="text" name="QtdGasolina"><br>
	Vaga Ocupada: <input type="text" name="VagaOcupada"><br>
	Horario partida: <input type="time" name="HorarioPartida"><br>
	Distancia viagem: <input type="text" name="DistanciaViagem"><br>	
	Tempo no ar: <input type="time" name="TempoAr"><br>	
	<input type="submit" value="CADASTRAR"><br/>
</form>
<?php
	include("conexao.php");
	$sql = "SELECT CodAviao, Modelo, Marca, QtdPassageiros, Tamanho 
			FROM Controle order by Marca asc";
		
	$listar = $conectar->query($sql);
	
//	var_dump($listar);
	$numeroRegistro = $listar->num_rows;
	$arrayAviao = array();
	
	while($linha = $listar->fetch_array()) {
		$arrayAviao[] = $linha;
	}
	
	if($arrayAviao) {
	?>
	<table border="1">
		<th>Codigo</th>
		<th>Modelo</th>
		<th>Marca</th>
		<th>Quantidade Passageiros</th>
		<th>Tamanho</th>
		<th>Eventos</th>	
	<?php
		foreach($arrayAviao as $valor){
	?>
	<tr>
		<td><?php echo $valor["CodAviao"];?></td>
		<td><?php echo $valor["Modelo"];?></td>
		<td><?php echo $valor["Marca"];?></td>
		<td><?php echo $valor["QtdPassageiros"];?></td>
		<td><?php echo $valor["Tamanho"];?></td>
		<td>
		<a href=formAlterar.php?CodAviao=<?php echo $valor["CodAviao"];?>>ALTERAR</a> -
		<a href = excluir.php?CodAviao=<?php echo $valor["CodAviao"];?>>EXCLUIR</a>
		</td>
	</tr>
	<?php
	}
	?>
	</table>
	Foram Encontrados <?php echo $numeroRegistro; ?> registros

<?php
}
?>