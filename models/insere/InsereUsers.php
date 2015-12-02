<?php
    include "../../control/conexaoBD.php";
    include "../../classes/inverteData.php";

	$nomeUsers = mysqli_real_escape_string($conexao, trim($_POST['nomeUsers']));
    $dnascUsers = mysqli_real_escape_string($conexao, trim($_POST['dnascUsers']));
	$endUsers = mysqli_real_escape_string($conexao, trim($_POST['endUsers']));
    $loginUsers = mysqli_real_escape_string($conexao, trim($_POST['loginUsers']));
    $senhaUsers = mysqli_real_escape_string($conexao, trim($_POST['senhaUsers']));
    $telUsers = mysqli_real_escape_string($conexao, trim($_POST['telUsers']));
    $tipoUsers = mysqli_real_escape_string($conexao, trim($_POST['tipoUsers']));

    if ($nomeUsers && $loginUsers){
        $dataNasc = inverteDataEng($dnascUsers);
        $insereUsersSql = "INSERT INTO Users VALUES ( '','$nomeUsers','$loginUsers',SHA('$senhaUsers'),'$endUsers','$dataNasc',NOW(),'$telUsers','$tipoUsers' )";                                  
        $resultinsereUsers = mysqli_query($conexao, $insereUsersSql) 
            or die ('ERRO DE INSERÇÃO NA TABELA Users - ARQ InsereUsers.php VARIAVEL insereUsersSql 01');
       
	}else {
		echo "<h2 style=\"color:red\" align=\"center\">"."Favor, Preencha os campos obrigatórios do formulário!!"."<h2/>";
	}   
                    
		$pesquisaUsersSql = "SELECT * FROM Users WHERE id_Users = (SELECT MAX(id_Users) FROM Users)";
                
        $resultPesquisaUsers = mysqli_query($conexao, $pesquisaUsersSql)
              or die ('ERRO DE PESQUISA NA TABELA Users - ARQ FechaOS.php VARIAVEL pesquisaUsersSql');
                $resposta = array();
                while ($row = mysqli_fetch_array($resultPesquisaUsers))
                {                             	
	                $resposta['nomeUsers'] = $row['nome_Users'];
        	        $resposta['dnascUsers'] = inverteDataBr($row['data_nasc_Users']);
                    $resposta['endUsers'] = $row['end_Users'];
                    $resposta['loginUsers'] = $row['login_Users'];                    
                    $resposta['telUsers'] = $row['tel_Users'];
                    $resposta['tipoUsers'] = $row['tipo_Users'];
                }

        echo json_encode($resposta);
        mysqli_close($conexao);
?>