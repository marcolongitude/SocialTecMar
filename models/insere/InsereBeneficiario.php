<?php
    include "../../control/conexaoBD.php";
    include "../../classes/inverteData.php";

	$nomeBenef = mysqli_real_escape_string($conexao, trim($_POST['nomeBenef']));
    $dnascBenef = mysqli_real_escape_string($conexao, trim($_POST['dnascBenef']));
	$cpfBenef = mysqli_real_escape_string($conexao, trim($_POST['cpfBenef']));
    $ecivilBenef = mysqli_real_escape_string($conexao, trim($_POST['ecivilBenef']));
    $sexoBenef = mysqli_real_escape_string($conexao, trim($_POST['sexoBenef']));
    $tituloBenef = mysqli_real_escape_string($conexao, trim($_POST['tituloBenef']));
    $zonaBenef = mysqli_real_escape_string($conexao, trim($_POST['zonaBenef']));
    $secaoBenef = mysqli_real_escape_string($conexao, trim($_POST['secaoBenef']));
    $cidadeTBenef = mysqli_real_escape_string($conexao, trim($_POST['cidadeTBenef']));
    $estadosT = mysqli_real_escape_string($conexao, trim($_POST['estadosTBenef']));
    $escolaridadeBenef = mysqli_real_escape_string($conexao, trim($_POST['escolaridadeBenef']));
    $profissionalBenef = mysqli_real_escape_string($conexao, trim($_POST['profissionalBenef']));
    $cargoBenef = mysqli_real_escape_string($conexao, trim($_POST['cargoBenef']));
    $empresaBenef = mysqli_real_escape_string($conexao, trim($_POST['empresaBenef']));
    $tempoBenef = mysqli_real_escape_string($conexao, trim($_POST['tempoBenef']));
    $endBenef = mysqli_real_escape_string($conexao, trim($_POST['endBenef']));
    $bairroBenef = mysqli_real_escape_string($conexao, trim($_POST['bairroBenef']));
    $cidadeBenef = mysqli_real_escape_string($conexao, trim($_POST['cidadeBenef']));
    $estadosBenef = mysqli_real_escape_string($conexao, trim($_POST['estadosBenef']));
    $telBenef = mysqli_real_escape_string($conexao, trim($_POST['telBenef']));
    $rendaBenef = mysqli_real_escape_string($conexao, trim($_POST['rendaBenef']));    
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));

    $pesquisaBeneficiario = "SELECT cpfBenef FROM Beneficiario WHERE cpfBenef = '$cpfBenef'";
    $resultPesquisaBeneficiario = mysqli_query($conexao, $pesquisaBeneficiario) or die ("ERRO DE PESQUISA LINHA 28");

    $NUMpesquisa = mysqli_num_rows($resultPesquisaBeneficiario);

    if ($NUMpesquisa == ''){

    $ano = date('Y');
    $mes = date('m');
    $dia = date('d');
    $numRandom = rand(1000,9999);
    $digRandom = rand(10,99);

    $cartao = $ano.".".$mes.$dia.".".$numRandom."-".$digRandom;
        
    if ($nomeBenef && $dnascBenef && $cpfBenef){
        
        $dataNasc = inverteDataEng($dnascBenef);
        
        $insereBenefSql = "INSERT INTO Beneficiario VALUES('','$usuario','$cartao','$nomeBenef','$dataNasc','$cpfBenef','$ecivilBenef','$sexoBenef','$tituloBenef','$zonaBenef','$secaoBenef','$cidadeTBenef','$estadosT','$escolaridadeBenef','$profissionalBenef','$cargoBenef','$empresaBenef','$tempoBenef','$endBenef','$bairroBenef','$cidadeBenef','$estadosBenef','$telBenef','$rendaBenef','$cpfBenef')";
        
        $resultinsereBenef = mysqli_query($conexao, $insereBenefSql) 
            or die ('ERRO DE INSERÇÃO NA TABELA Beneficiario - ARQ InsereBeneficiario.php VARIAVEL insereBenefSql linha 32');
       
	}else {
		echo "<h2 style=\"color:red\" align=\"center\">"."Favor, Preencha os campos obrigatórios do formulário!!"."<h2/>";
	}   
                    
		$pesquisaBenefSql = "SELECT * FROM Beneficiario WHERE idBenef = (SELECT MAX(idBenef) FROM Beneficiario)";
                
        $resultPesquisaBenef = mysqli_query($conexao, $pesquisaBenefSql)
              or die ('ERRO DE PESQUISA NA TABELA Beneficiario - ARQ InsereBeneficiario.php VARIAVEL pesquisaBenefSql linha 32');
                $resposta = array();
                while ($row = mysqli_fetch_array($resultPesquisaBenef))
                { 
                    $resposta['tipoResposta'] = 'insere';                            	
                    $resposta['idBenef'] = $row['idBenef'];
	                $resposta['nomeBenef'] = $row['nomeBenef'];
        	        $resposta['dnascBenef'] = inverteDataBr($row['dnascBenef']);
                    $resposta['cpfBenef'] = $row['cpfBenef'];
                    $resposta['tituloBenef'] = $row['tituloBenef'];                    
                    $resposta['endBenef'] = $row['endBenef'];
                    $resposta['cidadeBenef'] = $row['cidadeBenef'];
                    $resposta['estadoBenef'] = $row['estadoBenef'];
                    $resposta['cartaoBenef'] = $row['cartaoBenef'];
                }
    }else{
        $resposta = array();
        $resposta['tipoResposta'] = 'existe';
    }
        echo json_encode($resposta);
        mysqli_close($conexao);
?>