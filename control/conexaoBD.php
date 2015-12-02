<?php

	$local = "localhost";
	$usuario = "root";
	$senha = "admin";
	$banco = "SOCIAL";

	$conexao = mysqli_connect("$local","$usuario","$senha","$banco")
		or die ("ERRO DE CONEXAO COM O BANCO DE DADOS - ARQUIVO conexaoBD.php");

?>
