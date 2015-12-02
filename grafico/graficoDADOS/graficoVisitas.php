<?php 	
	
	function contaDados ($inicio,$fim){
			$conexao = mysqli_connect("localhost","root","admin","Maudi")
		or die ("ERRO DE CONEXAO COM O BANCO DE DADOS - ARQUIVO conexaoBD.php");	
		//CONTA MES
			
		$sql = "SELECT * FROM Visita WHERE dataVisita BETWEEN ('$inicio') and ('$fim')";
		$result = mysqli_query($conexao,$sql) or die ('ERRO DE PESQUISA NA TABELA Visita - ARQ graficoVisitas VARIAVEL result');
		$total = mysqli_num_rows($result);
		return $total;
			
			
	}
		


	$janeiro = 800;
	$dados = array();
	$dados['jan'] = contaDados('2015-01-01','2015-01-31');
	$dados['fev'] = contaDados('2015-02-01','2015-02-31');
	$dados['mar'] = contaDados('2015-03-01','2015-03-31');
	$dados['abr'] = contaDados('2015-04-01','2015-04-31');
	$dados['mai'] = contaDados('2015-05-01','2015-05-31');
	$dados['jun'] = contaDados('2015-06-01','2015-06-31');
	$dados['jul'] = contaDados('2015-07-01','2015-07-31');
	$dados['ago'] = contaDados('2015-08-01','2015-08-31');
	$dados['set'] = contaDados('2015-09-01','2015-09-31');
	$dados['out'] = contaDados('2015-10-01','2015-10-31');
	$dados['nov'] = contaDados('2015-11-01','2015-11-31');
	$dados['dez'] = contaDados('2015-12-01','2015-12-31');	
	echo json_encode($dados);
?>

