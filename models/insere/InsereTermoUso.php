<?php

    include_once "../../control/conexaoBD.php";
    
    $termo = $_POST['editor1'];
    
    $insereTermoSql = "UPDATE termoUso set textoTermo = '$termo'";

    $resultInsereTermo = mysqli_query($conexao, $insereTermoSql)
        or die ('ERRO AO INSERIR DADOS TABELA termoUso VARIAVEL resultInsereTermo linha 9');

    echo "Dados inseridos com sucesso!";

?>