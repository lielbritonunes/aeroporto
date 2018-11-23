<?php
	$CodAviao = filter_input(INPUT_GET, "CodAviao");
	
	$sql = "delete from Controle where CodAviao=$CodAviao";
	include ("cadastro/conexao.php");
	$excluir = $conectar->query($sql);
	
	$registrosAfetados = $conectar->affected_rows;
	if($registrosAfetados ==1) {
		echo "O registro foi excluido com sucesso!!!";
	}else {
		echo "Ocorreu erro ao excluir o registro";
	}
?>
		