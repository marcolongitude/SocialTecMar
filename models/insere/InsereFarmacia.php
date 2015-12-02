<?php

    include_once "../../control/conexaoBD.php";

    $nomeFarm = mysqli_real_escape_string($conexao, trim($_POST['nomeFarm']));
    $telFarm = mysqli_real_escape_string($conexao, trim($_POST['telFarm']));
    $endFarm = mysqli_real_escape_string($conexao, trim($_POST['endFarm']));
    $bairroFarm = mysqli_real_escape_string($conexao, trim($_POST['bairroFarm']));
    $cnpj = mysqli_real_escape_string($conexao, trim($_POST['cnpjFarm']));
    $users = mysqli_real_escape_string($conexao, trim($_POST['usuario']));

    $insereFarmSQL = "INSERT INTO Farmacia VALUES ( '', '$users', '$nomeFarm', '$telFarm', '$endFarm', '$bairroFarm', '$cnpj' )";
    $resultInsereFarm = mysqli_query($conexao, $insereFarmSQL)
        or die ('ERRO DE INSERÇÃO DE DADOS NA TABELA Farmacia LINHA 12');

    $pesquisaFarmSQL = "SELECT * FROM Farmacia WHERE idFarm = (SELECT MAX(idFarm) FROM Farmacia)";
    $resultPesquisaFarm = mysqli_query($conexao, $pesquisaFarmSQL)
        or die ('ERRO DE PESQUISA NA TABELA Farmacia VARIAVEL pesquisaFarmSQL ARQUIVO InsereFarmacia linha 17');

    $resposta = array();
                while ($row = mysqli_fetch_array($resultPesquisaFarm))
                {                                    
	                $resposta['nomeFarm'] = $row['nomeFarm'];
        	        $resposta['telFarm'] = $row['telFarm'];
                    $resposta['endFarm'] = $row['endFarm'];
                    $resposta['bairroFarm'] = $row['bairroFarm'];                    
                    $resposta['cnpj'] = $row['cnpjFarm'];                    
                }

        echo json_encode($resposta);
        mysqli_close($conexao);

?>