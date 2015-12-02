<?php

    include_once "../../control/conexaoBD.php";

    $nomeBenef = mysqli_real_escape_string($conexao, trim($_POST['nomeBenef']));
    $recursivo = mysqli_real_escape_string($conexao, trim($_POST['recursivo']));
    $tempoRecursivo = mysqli_real_escape_string($conexao, trim($_POST['tempoRecursivo']));
    $obs = mysqli_real_escape_string($conexao, trim($_POST['obs']));    
    $users = mysqli_real_escape_string($conexao, trim($_POST['usuario']));

    $insereCadBenefSQL = "INSERT INTO CadBeneficio VALUES ( '', '$users', '$nomeBenef', '$obs', '$recursivo', '$tempoRecursivo' )";
    $resultInsereCadBenef = mysqli_query($conexao, $insereCadBenefSQL)
        or die ('ERRO DE INSERÇÃO DE DADOS NA TABELA CadBeneficio LINHA 12');

    $pesquisaCadBenefSQL = "SELECT * FROM CadBeneficio WHERE idBenef = (SELECT MAX(idBenef) FROM CadBeneficio)";
    $resultPesquisaCadBenef = mysqli_query($conexao, $pesquisaCadBenefSQL)
        or die ('ERRO DE PESQUISA NA TABELA CadBeneficio VARIAVEL pesquisaCadBenefSQL ARQUIVO InsereCadBeneficio linha 15');

    $resposta = array();
                while ($row = mysqli_fetch_array($resultPesquisaCadBenef))
                {                                    
	                $resposta['nomeBenef'] = $row['nomeBenef'];
                    if ($row['recursivoBenef'] == 0){
        	            $resposta['recursivoBenef'] = 'Não';
                    }else if ($row['recursivoBenef'] == 1){
                        $resposta['recursivoBenef'] = 'Sim';
                    }
                    if ($row['tempoRecursivo'] == 0){
                        $resposta['tempoRecursivo'] = 'Não Controlado';
                    }else{
                        $resposta['tempoRecursivo'] = $row['tempoRecursivo'].' Mêses';
                    }
                    $resposta['obs'] = $row['descBenef'];                                        
                }

        echo json_encode($resposta);
        mysqli_close($conexao);

?>