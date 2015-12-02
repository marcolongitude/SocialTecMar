<?php
    include "../../control/conexaoBD.php";	    

	$id_os = mysqli_real_escape_string($conexao, trim($_POST['id_os']));
    $serv = mysqli_real_escape_string($conexao, trim($_POST['serv']));
	$valor = mysqli_real_escape_string($conexao, trim($_POST['valor']));
    $det_saida = mysqli_real_escape_string($conexao, trim($_POST['det_saida']));
     
    $sql = "UPDATE os set status = 1 WHERE id_os = $id_os";
        $result = mysqli_query($conexao, $sql)
			or die ('ERRO DE ATUALIZAÇÃO NA TABELA servico - ARQ FechaOs.php VARIAVEL RESULT03');	

	$sql = "SELECT o.id_os, c.nome_cliente, o.tipoAp, o.data_entrada, o.det_entrada FROM cliente c INNER JOIN os o WHERE  (c.id_cliente = o.id_cliente) AND (o.id_os = '$id_os') LIMIT 1";
                
        $result = mysqli_query($conexao, $sql)
              or die ('ERRO DE PESQUISA NA TABELA fecha - ARQ FechaOS.php VARIAVEL RESULT');
               
                while ($row = mysqli_fetch_array($result))
                {
			echo $row['nome_cliente'];      
		}
mysqli_close($conexao);

?>    
