<?php
    include "../../control/conexaoBD.php";
    	
    $moradia = mysqli_real_escape_string($conexao, trim($_POST['moradia']));
	$medicamentoControlado = mysqli_real_escape_string($conexao, trim($_POST['medicamentoControlado']));
    $medicamentos = mysqli_real_escape_string($conexao, trim($_POST['medicamentos']));
    $ajudaMedicamento = mysqli_real_escape_string($conexao, trim($_POST['ajudaMedicamento']));
    $farmaciaMunicipal = mysqli_real_escape_string($conexao, trim($_POST['farmaciaMunicipal']));
    $beneficio = mysqli_real_escape_string($conexao, trim($_POST['beneficio']));
    $beneficios = mysqli_real_escape_string($conexao, trim($_POST['beneficios']));
    $curso = mysqli_real_escape_string($conexao, trim($_POST['curso']));    
    $cursos = mysqli_real_escape_string($conexao, trim($_POST['cursos']));    
    $aluguel = mysqli_real_escape_string($conexao, trim($_POST['aluguel']));    
    $combustivel = mysqli_real_escape_string($conexao, trim($_POST['combustivel']));    
    $energia = mysqli_real_escape_string($conexao, trim($_POST['energia']));
    $gas = mysqli_real_escape_string($conexao, trim($_POST['gas']));
    $prestacao = mysqli_real_escape_string($conexao, trim($_POST['prestacao']));
    $alimentacao = mysqli_real_escape_string($conexao, trim($_POST['alimentacao']));
    $agua = mysqli_real_escape_string($conexao, trim($_POST['agua']));
    $financiamento = mysqli_real_escape_string($conexao, trim($_POST['financiamento']));
    $medicamento = mysqli_real_escape_string($conexao, trim($_POST['medicamento']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
    $outrasDespesas = mysqli_real_escape_string($conexao, trim($_POST['outrasDespesas']));
    $total = mysqli_real_escape_string($conexao, trim($_POST['total']));
    $idBenef = mysqli_real_escape_string($conexao, trim($_POST['idBenef']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));    

    $insereDependSql = "INSERT INTO InfoGeralBenef VALUES('','$usuario','$idBenef','$moradia','$medicamentoControlado','$medicamentos','$ajudaMedicamento','$farmaciaMunicipal','$beneficio','$beneficios','$curso','$cursos','$aluguel','$combustivel','$energia','$gas','$prestacao','$alimentacao','$agua','$financiamento','$medicamento','$felefone','$outrasDespesas','$total')";
        
        $resultInsereDepend = mysqli_query($conexao, $insereDependSql) 
            or die ('ERRO DE INSERÇÃO NA TABELA InfoGeralBenef - ARQ InsereInoGerais.php VARIAVEL insereDependSql linha 31');
                    
		/*$pesquisaDependSql = "SELECT * FROM Beneficio WHERE idBeneficio = (SELECT MAX(idBeneficio) FROM Beneficio)";
                
        $resultPesquisaDepend = mysqli_query($conexao, $pesquisaDependSql)
              or die ('ERRO DE PESQUISA NA TABELA Beneficio - ARQ InsereDependente.php VARIAVEL pesquisaDependSql linha 39');
                $resposta = array();
                while ($row = mysqli_fetch_array($resultPesquisaDepend))
                {                                    
	                $resposta['nomeDepend'] = $row['nomeDepend'];
        	        $resposta['dnascDepend'] = inverteDataBr($row['dnascDepend']);
                    $resposta['certDepend'] = $row['certNascDepend'];
                    $resposta['tituloDepend'] = $row['tituloDepend'];                    
                    $resposta['zonaTDepend'] = $row['zonaTDepend'];
                    $resposta['secaoTDepend'] = $row['secaoTDepend'];
                    $resposta['cidadeTDepend'] = $row['cidadeTDepend'];
                    $resposta['estadoTDepend'] = $row['estadoTDepend'];
                    $resposta['cartaoVacina'] = $row['cartaoVacina'];
                    $resposta['cidadeDepend'] = $row['cidadeDepend'];
                    $resposta['estadoDepend'] = $row['estadoDepend'];
                }

        //echo json_encode($resposta);*/
        mysqli_close($conexao);
?>