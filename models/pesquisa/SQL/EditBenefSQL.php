<?php
    
    include_once "../control/conexaoBD.php";

    $idBenef = $_GET['idBenef'];

    //pesquisa os dados do Beneficiario
    
    $pesquisaBenefSQL = "SELECT * FROM Beneficiario WHERE idBenef = $idBenef";

    $resultPesquisaBenef = mysqli_query($conexao, $pesquisaBenefSQL)
        or die ('ERRO DE PESQUISA NA TABELA Beneficiario ARQUIVO EditBenefSQL.php VARIAVEL pesquisaBenefSQL linha 9');

?>