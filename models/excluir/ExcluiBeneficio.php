<?php

    include_once "../../control/conexaoBD.php";

    $idDepend = mysqli_real_escape_string($conexao, trim($_GET['idDepend']));
    $idBenef = mysqli_real_escape_string($conexao, trim($_GET['idBenef']));
    $idBeneficio = mysqli_real_escape_string($conexao, trim($_GET['idBeneficio']));

    $excluiBeneficioSql = "DELETE FROM Beneficio WHERE idBeneficio = '$idBeneficio'";

    $resultBeneficioDepend = mysqli_query($conexao, $excluiBeneficioSql)
        or die ("ERRO DE EXCLUSÃO NA TABELA Dependente - ARQUIVO ExcluiDependente.php linha 9");   

    header ('Location: ../../views/index.php?page=../models/pesquisa/VerFamilia&idBenef='.$idBenef);

?>