<?php

    include_once "../../control/conexaoBD.php";

    $idDepend = mysqli_real_escape_string($conexao, trim($_GET['idDepend']));
    $idBenef = mysqli_real_escape_string($conexao, trim($_GET['idBenef']));

    $excluiDependSql = "DELETE FROM Dependente WHERE idDepend = '$idDepend'";

    $resultExcluiDepend = mysqli_query($conexao, $excluiDependSql)
        or die ("ERRO DE EXCLUSÃO NA TABELA Dependente - ARQUIVO ExcluiDependente.php linha 7");

   

    header ('Location: ../../views/index.php?page=../models/pesquisa/VerFamilia&idBenef='.$idBenef);

?>