<?php

    include_once "../../control/conexaoBD.php";

    $idBenef = mysqli_real_escape_string($conexao, trim($_GET['idBenef']));

    $excluiBeneficio = "DELETE FROM Beneficio WHERE Beneficiario_idBenef = '$idBenef'";

    $resultExcluiBeneficio = mysqli_query($conexao, $excluiBeneficio)
        or die ('ERRO DE EXCLUSÃO DE CADASTRO DE BENEFICIO - ARQUIVO ExcluiBeneficiario.php VARIAVEL resultExcluiBeneficio linha 9');

    $excluiFamiliaSql = "DELETE FROM Familia WHERE Beneficiario_idBenef = '$idBenef'";

    $resultExcluiFamilia = mysqli_query($conexao, $excluiFamiliaSql)
        or die ("ERRO DE EXCLUSÃO DE CADASTRO FAMILIA - ARQUIVO ExcluiBeneficiario.php VARIAVEL resultExcluiFamilia linha 10");

    $excluiDependentesSql = "DELETE FROM Dependente WHERE Beneficiario_idBenef = '$idBenef'";

    $resultExcluiDependentes = mysqli_query($conexao, $excluiDependentesSql)
        or die ("ERRO DE EXCLUSÃO DE CADASTRO Dependentes - ARQUIVO ExcluiBeneficiario.php VARIAVEL resultExcluiDependentes linha 14");

    $excluiBeneficiarioSql = "DELETE FROM Beneficiario WHERE idBenef = '$idBenef'";

    $resultExcluiBeneficiario = mysqli_query($conexao, $excluiBeneficiarioSql)
        or die ("ERRO DE EXCLUSAO DE CADASTRO Beneficiario - ARQUIVO ExcluiBeneficiario.php VARIAVEL resultExcluiBeneficiario linha 19");

    mysqli_close($conexao);

    header ('Location: ../../views/index.php?page=ViewPessoa');

?>