<?php
    include_once "../../control/conexaoBD.php";
    include_once "../../classes/inverteData.php";

    $nomeDepend = mysqli_real_escape_string($conexao, trim($_POST['nomeDepend']));
    $dnascDepend = mysqli_real_escape_string($conexao, trim($_POST['dnascDepend']));
    $cartaoVacina = mysqli_real_escape_string($conexao, trim($_POST['cartaoVacina']));
    $certDepend = mysqli_real_escape_string($conexao, trim($_POST['certDepend']));
    $eCivilDepend = mysqli_real_escape_string($conexao, trim($_POST['ecivilDepend']));
    $sexoDepend = mysqli_real_escape_string($conexao, trim($_POST['sexoDepend']));
    $tituloDepend = mysqli_real_escape_string($conexao, trim($_POST['tituloDepend']));
    $zonaTDepend = mysqli_real_escape_string($conexao, trim($_POST['zonaTDepend']));
    $secaoTDepend = mysqli_real_escape_string($conexao, trim($_POST['secaoTDepend']));
    $cidadeTDepend = mysqli_real_escape_string($conexao, trim($_POST['cidadeTDepend']));
    $estadosTDepend = mysqli_real_escape_string($conexao, trim($_POST['estadosTDepend']));
    $parentescoDepend = mysqli_real_escape_string($conexao, trim($_POST['parentescoDepend']));
    $profissaoDepend = mysqli_real_escape_string($conexao, trim($_POST['profissaoDepend']));
    $rendaDepend = mysqli_real_escape_string($conexao, trim($_POST['rendaDepend']));
    $cidadeDepend = mysqli_real_escape_string($conexao, trim($_POST['cidadeDepend']));
    $estados = mysqli_real_escape_string($conexao, trim($_POST['estados']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $idBenef = mysqli_real_escape_string($conexao, trim($_POST['idBenef']));
    $idDepend = mysqli_real_escape_string($conexao, trim($_POST['idDepend']));
    
    $dnascD = inverteDataBr($dnascDepend);

    $atualizarDependSQL = "UPDATE Dependente set Users_id_User = '$usuario', nomeDepend = '$nomeDepend', dnascDepend = '$dnascD', cartaoVacina = '$cartaoVacina', certNascDepend = '$certDepend', eCivilDepend = '$eCivilDepend', sexo = '$sexoDepend', tituloDepend = '$tituloDepend', zonaTDepend = '$zonaTDepend', secaoTDepend = '$secaoTDepend', cidadeTDepend = '$cidadeTDepend', estadoTDepend = '$cidadeTDepend', estadoTDepend = '$estadosTDepend', parentescoDepend = '$parentescoDepend', profissaoDepend = '$profissaoDepend', rendaDepend = '$rendaDepend', cidadeDepend = '$cidadeDepend', estadoDepend = '$estados' WHERE idDepend = '$idDepend' ";
    
    $resultAtualizarDepend = mysqli_query($conexao, $atualizarDependSQL)
        or die ('ERRO DE ATUALIZAÇÃO NA TABELA Dependente ARQUIVO AtualizaDependente.php VARIAVEL atualizarDependSQL linha 24');

    header ('Location: ../../views/index.php?page=EditCadDependente&idDepend='.$idDepend);
    
?>