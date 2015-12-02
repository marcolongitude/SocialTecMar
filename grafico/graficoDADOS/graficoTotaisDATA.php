<?php 	
	
	
		$conexao = mysqli_connect("localhost","root","admin","SOCIAL")
			or die ("ERRO DE CONEXAO COM O BANCO DE DADOS ( SOCIAL ) - ARQUIVO conexaoBD.php");	
	
		//busca pelo total de beneficiarios no banco	
		$pesquisaBeneficiario = "SELECT * FROM Beneficiario";
		$resultPesquisaBeneficiario = mysqli_query($conexao,$pesquisaBeneficiario)
			or die ('ERRO DE PESQUISA NA TABELA Beneficiario - ARQ graficoBeneficiarioDATA.php LINHA 9');
		$totalBeneficiario = mysqli_num_rows($resultPesquisaBeneficiario);

		//busca pelo total de dependentes no banco
		$pesquisaDependente = "SELECT * FROM Dependente";
		$resultPesquisaDependente = mysqli_query($conexao, $pesquisaDependente)
			or die ('ERRO DE PESQUISA NA TABELA Dependente - ARQ graficoBeneficiarioDATA.php LINHA 14');
		$totalDependente = mysqli_num_rows($resultPesquisaDependente);

		//busca pelo total de Beneficios no banco
		$pesquisaBeneficio = "SELECT * FROM Beneficio";
		$resultPesquisaBeneficio = mysqli_query($conexao, $pesquisaBeneficio)
			or die ('ERRO DE PESQUISA NA TABELA Dependente - ARQ graficoBeneficiarioDATA.php LINHA 20');
		$totalBeneficio = mysqli_num_rows($resultPesquisaBeneficio);
	
		//busca pelo total de bolsa supermercado no banco
		$pesquisaBolsaSup = "SELECT * FROM Bolsa WHERE tipoBolsa = 0";
		$resultPesquisaBolsaSup = mysqli_query($conexao, $pesquisaBolsaSup)
			or die ('ERRO DE PESQUISA NA TABELA Bolsa - ARQ graficoBeneficiarioDATA.php LINHA 25');
		$totalBolsaSup = mysqli_num_rows($resultPesquisaBolsaSup);

		//busca pelo total de bolsa farmacia no banco
		$pesquisaBolsaFarm = "SELECT * FROM Bolsa WHERE tipoBolsa = 1";
		$resultPesquisaBolsaFarm = mysqli_query($conexao, $pesquisaBolsaFarm)
			or die ('ERRO DE PESQUISA NA TABELA Bolsa - ARQ graficoBeneficiarioDATA.php LINHA 25');
		$totalBolsaFarm = mysqli_num_rows($resultPesquisaBolsaFarm);
	
	$dados = array();
	$dados['Beneficiario'] = $totalBeneficiario;
	$dados['Dependente'] = $totalDependente;
	$dados['Beneficio'] = $totalBeneficio;
	$dados['BolsaSup'] = $totalBolsaSup;
	$dados['BolsaFarm'] = $totalBolsaFarm;
		
	echo json_encode($dados);
?>

