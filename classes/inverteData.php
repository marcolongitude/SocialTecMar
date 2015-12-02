<?php
	//inverte data do padrao Brasileiro para o padrao Americano
	function inverteDataEng($dataPadraoEng) { 
		$data = explode('-', $dataPadraoEng);
		$diad = $data[0];
		$mesd = $data[1];
		$anod = $data[2];
		$dataf = ""; $dataf = $anod."-".$mesd."-".$diad;
		return $dataf;
	}
	//inverte data do padrao Americano para o padrao Brasileiro
	function inverteDataBr($dataPadraoBr) { 
		$data = explode('-', $dataPadraoBr);
		$anod = $data[0];
		$mesd = $data[1];
		$diad = $data[2];
		$dataf = ""; $dataf = $diad."-".$mesd."-".$anod;
		return $dataf;
	}
	
?>
