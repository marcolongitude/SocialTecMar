<?php

    include_once "../../control/conexaoBD.php";

    $nomeSup = mysqli_real_escape_string($conexao, trim($_POST['nomeSup']));
    $telSup = mysqli_real_escape_string($conexao, trim($_POST['telSup']));
    $endSup = mysqli_real_escape_string($conexao, trim($_POST['endSup']));
    $bairroSup = mysqli_real_escape_string($conexao, trim($_POST['bairroSup']));
    $cnpj = mysqli_real_escape_string($conexao, trim($_POST['cnjpSup']));
    $users = mysqli_real_escape_string($conexao, trim($_POST['usuario']));

    $insereSupSQL = "INSERT INTO Supermercado VALUES ( '', '$users', '$nomeSup', '$telSup', '$endSup', '$bairroSup', '$cnpj' )";
    $resultInsereSup = mysqli_query($conexao, $insereSupSQL)
        or die ('ERRO DE INSERÇÃO DE DADOS NA TABELA Supermercado LINHA 12');

    $pesquisaSupSQL = "SELECT * FROM Supermercado WHERE idSup = (SELECT MAX(idSup) FROM Supermercado)";
    $resultPesquisaSup = mysqli_query($conexao, $pesquisaSupSQL)
        or die ('ERRO DE PESQUISA NA TABELA Supermercado VARIAVEL pesquisaSupSQL ARQUIVO InsereSupermercado linha 17');

    $resposta = array();
                while ($row = mysqli_fetch_array($resultPesquisaSup))
                {                                    
	                $resposta['nomeSup'] = $row['nomeSup'];
        	        $resposta['telSup'] = $row['telSup'];
                    $resposta['endSup'] = $row['endSup'];
                    $resposta['bairroSup'] = $row['bairroSup'];                    
                    $resposta['cnpj'] = $row['cnpjSup'];                    
                }

        echo json_encode($resposta);
        mysqli_close($conexao);

?>