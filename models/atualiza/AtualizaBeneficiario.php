<?php 
	include_once "../../control/conexaoBD.php";
    include_once "../../classes/inverteData.php";

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
    $idBenef = mysqli_real_escape_string($conexao, trim($_POST['idBenef']));

    $dnasc = inverteDataEng($dnascBenef);

    $atualizaBeneficiario = "UPDATE Beneficiario SET Users_id_Users = '$usuario', nomeBenef = '$nomeBenef', dnascBenef = '$dnasc', cpfBenef = '$cpfBenef', eCivilBenef = '$ecivilBenef', sexoBenef = '$sexoBenef', tituloBenef = '$tituloBenef', zonaTBenef = '$zonaBenef', secaoTBenef = '$secaoBenef', cidadeTBenef = '$cidadeTBenef', estadoTBenef = '$estadosT', escolaBenef = '$escolaridadeBenef', trabBenef = '$profissionalBenef', cargoBenef = '$cargoBenef', empresaBenef = '$empresaBenef', tempoBenef = '$tempoBenef', endBenef = '$endBenef', bairroBenef = '$bairroBenef', cidadeBenef = '$cidadeBenef', estadoBenef = '$estadosBenef', rendaBenef = '$rendaBenef' WHERE idBenef = '$idBenef' ";
    
    $resultAtualizaBeneficiario = mysqli_query($conexao, $atualizaBeneficiario)
    	or die ('ERRO DE ATUALIZAÇÃO TABELA Beneficiario ARQ AtualizaBeneficiario.php LINHA 34 ');
    	echo "atualização realizada com sucesso";
    header ('Location: ../../views/index.php?page=EditCadBeneficiario&idBenef='.$idBenef);
?>