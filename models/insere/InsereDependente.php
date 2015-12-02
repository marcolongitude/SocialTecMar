<?php
    include "../../control/conexaoBD.php";
    include "../../classes/inverteData.php";

	$nomeDepend = mysqli_real_escape_string($conexao, trim($_POST['nomeDepend']));
    $dnascDepend = mysqli_real_escape_string($conexao, trim($_POST['dnascDepend']));
	$cartaoVacina = mysqli_real_escape_string($conexao, trim($_POST['cartaoVacina']));
    $certDepend = mysqli_real_escape_string($conexao, trim($_POST['certDepend']));
    $ecivilDepend = mysqli_real_escape_string($conexao, trim($_POST['ecivilDepend']));
    $sexoDepend = mysqli_real_escape_string($conexao, trim($_POST['sexoDepend']));
    $tituloDepend = mysqli_real_escape_string($conexao, trim($_POST['tituloDepend']));
    $zonaTDepend = mysqli_real_escape_string($conexao, trim($_POST['zonaTDepend']));
    $secaoTDepend = mysqli_real_escape_string($conexao, trim($_POST['secaoTDepend']));
    $cidadeTDepend = mysqli_real_escape_string($conexao, trim($_POST['cidadeTDepend']));
    $estadosT = mysqli_real_escape_string($conexao, trim($_POST['estadosTDepend']));    
    $parentescoDepend = mysqli_real_escape_string($conexao, trim($_POST['parentescoDepend']));
    $profissaoDepend = mysqli_real_escape_string($conexao, trim($_POST['profissaoDepend']));
    $rendaDepend = mysqli_real_escape_string($conexao, trim($_POST['rendaDepend']));
    $cidadeDepend = mysqli_real_escape_string($conexao, trim($_POST['cidadeDepend']));
    $estados = mysqli_real_escape_string($conexao, trim($_POST['estados']));
    $idBenef = mysqli_real_escape_string($conexao, trim($_POST['idBenef']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    
    if ($nomeDepend && $dnascDepend){
        
        $dataNasc = inverteDataEng($dnascDepend);
        
        $insereDependSql = "INSERT INTO Dependente VALUES('','$usuario','$idBenef','$nomeDepend','$dataNasc','$cartaoVacina','$certDepend','$ecivilDepend','$sexoDepend','$tituloDepend','$zonaTDepend','$secaoTDepend','$cidadeTDepend','$estadosT','$parentescoDepend','$profissaoDepend','$rendaDepend','$cidadeDepend','$estados')";
        
        $resultInsereDepend = mysqli_query($conexao, $insereDependSql) 
            or die ('ERRO DE INSERÇÃO NA TABELA Dependente - ARQ InsereDependente.php VARIAVEL insereDependSql linha 26');
       
	}else {
		echo "<h2 style=\"color:red\" align=\"center\">"."Favor, Preencha os campos obrigatórios do formulário!!"."<h2/>";
	}   
                    
		$pesquisaDependSql = "SELECT * FROM Dependente WHERE idDepend = (SELECT MAX(idDepend) FROM Dependente)";
                
        $resultPesquisaDepend = mysqli_query($conexao, $pesquisaDependSql)
              or die ('ERRO DE PESQUISA NA TABELA Dependente - ARQ InsereDependente.php VARIAVEL pesquisaDependSql linha 35');
                $resposta = array();
                while ($row = mysqli_fetch_array($resultPesquisaDepend))
                {
                    $idDepend = $row['idDepend'];
                    
                    
                    $insereFamiliaSql = "INSERT INTO Familia VALUES ('','$usuario','$idBenef','$idDepend')";
                    $resultInsereFamilia = mysqli_query($conexao, $insereFamiliaSql)
                        or die ("ERRO DE INSERÇÃO NA TABELA Familia - ARQ InsereDependente.php VARIAVEL insereFamiliaSql linha 48");
                    
	                $resposta['nomeDepend'] = $row['nomeDepend'];
        	        $resposta['dnascDepend'] = inverteDataBr($row['dnascDepend']);
                    $resposta['certDepend'] = $row['certNascDepend'];
                    $resposta['tituloDepend'] = $row['tituloDepend'];                    
                    $resposta['zonaTDepend'] = $row['zonaTDepend'];
                    $resposta['secaoTDepend'] = $row['secaoTDepend'];
                    $resposta['cidadeTDepend'] = $row['cidadeTDepend'];
                    $resposta['estadoTDepend'] = $row['estadoTDepend'];
                    $resposta['cartaoVacina'] = $row['cartaoVacina'];
                    $resposta['cidadeDepend'] = $row['cidadeDepend'];
                    $resposta['estadoDepend'] = $row['estadoDepend'];
                }

        echo json_encode($resposta);
        mysqli_close($conexao);
?>