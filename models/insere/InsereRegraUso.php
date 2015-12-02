<?php

    include_once "../../control/conexaoBD.php";
    
    $regra = $_POST['editor1'];
    
    $insereRegraSql = "INSERT INTO regraUso VALUES ('','$regra')";

    $resultInsereRegra = mysqli_query($conexao, $insereRegraSql)
        or die ('ERRO AO INSERIR DADOS TABELA regraUso VARIAVEL resultInsereRegra linha 7');

    echo "Dados inseridos com sucesso!";

?>