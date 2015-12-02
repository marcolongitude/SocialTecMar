<?php
    
    include_once "../../control/conexaoBD.php";
    include_once "../../classes/inverteData.php";

    $users = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $idBenef = mysqli_real_escape_string($conexao, trim($_POST['idBenef']));
    $tipoBolsa = mysqli_real_escape_string($conexao, trim($_POST['opcao']));
    $idSup = mysqli_real_escape_string($conexao, trim($_POST['supermercado']));
    $idFarm = mysqli_real_escape_string($conexao, trim($_POST['farmacia']));
    $validadeSup = mysqli_real_escape_string($conexao, trim($_POST['validadeSup']));
    $validadeFarm = mysqli_real_escape_string($conexao, trim($_POST['validadeFarm']));
    
    $dataSup = inverteDataEng($validadeSup);
    $dataFarm = inverteDataEng($validadeFarm);
    
    $insereBolsa = "INSERT INTO Bolsa VALUES ( '','$users', '$idBenef', '$tipoBolsa', '$idSup', '$dataSup', '$idFarm', '$dataFarm' )";
    $resultBolsa = mysqli_query($conexao, $insereBolsa)
        or die ('ERRO DE INSERÇÃO DE DADOS NA TABELA Bolsa ARQ InsereBolsa.php LINHA 11');
    
    if ($tipoBolsa == 0){

        $pesquisaBolsa = "SELECT s.nomeSup,b.tipoBolsa FROM Supermercado s INNER JOIN Bolsa b WHERE (s.idSup = b.Supermercado_idSup) AND (b.Beneficiario_idBenef = $idBenef)";

        $resultPesquisaBolsa = mysqli_query($conexao, $pesquisaBolsa)
            or die ('ERRO DE PESQUISA NA TABELA Bolsa VARIAVEL pesquisaBolsa ARQUIVO InsereBolsa.php linha 21');

        $resposta = array();
                    while ($row = mysqli_fetch_array($resultPesquisaBolsa))
                    {                                    
                        $resposta['nomeSup'] = $row['nomeSup'];
                        $resposta['tipoBolsa'] = $row['tipoBolsa'];
                    }

        echo json_encode($resposta);
        mysqli_close($conexao);
    }//fecha if do tipo de bolsa supermercado
    if ($tipoBolsa == 1){

        $pesquisaBolsa = "SELECT f.nomeFarm, b.tipoBolsa FROM Farmacia f INNER JOIN Bolsa b WHERE (f.idFarm = b.Farmacia_idFarm) AND (b.Beneficiario_idBenef = $idBenef)";

        $resultPesquisaBolsa = mysqli_query($conexao, $pesquisaBolsa)
            or die ('ERRO DE PESQUISA NA TABELA Bolsa VARIAVEL pesquisaBolsa ARQUIVO InsereBolsa.php linha 40');

        $resposta = array();
                    while ($row = mysqli_fetch_array($resultPesquisaBolsa))
                    {                                    
                        $resposta['nomeFarm'] = $row['nomeFarm'];
                        $resposta['tipoBolsa'] = $row['tipoBolsa'];
                    }

        echo json_encode($resposta);
        mysqli_close($conexao);
    }//fecha if do tipo de bolsa farmacia

?>