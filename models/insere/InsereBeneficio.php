<?php
    include "../../control/conexaoBD.php";
   
    $beneficio = $_POST['beneficio'];
    $idBenef = mysqli_real_escape_string($conexao, trim($_POST['idBenef']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    
    foreach ($beneficio as $insereBeneficio ) {
        
        $insereBeneficioSql = "INSERT INTO Beneficio VALUES('','$usuario','$idBenef','$insereBeneficio', NOW())";
        $resultInsereBeneficio = mysqli_query($conexao, $insereBeneficioSql) 
            or die ('ERRO DE INSERÇÃO NA TABELA Beneficio - ARQ InsereBeneficio.php VARIAVEL insereBeneficioSql linha 12');
        
    }           
         


        echo '<table class="table table-condensed table-hover table-striped" id="dados">';

            echo '<thead>';
                echo '<tr>';
                    echo '<th>Nome do Benefício</th>';
                    echo '<th>Recursivo</th>';
                    echo '<th>Tempo</th>';
                    echo '<th>Data Inicial</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
	                            
        $pesquisaBeneficioSQL = "SELECT c.nomeBenef, c.recursivoBenef, c.tempoRecursivo, b.dataInicial FROM Beneficio b INNER JOIN CadBeneficio c WHERE (b.CadBeneficio_idBenef = c.idBenef) AND Beneficiario_idBenef = $idBenef";
                                    
        $resultPesquisaBeneficio = mysqli_query($conexao, $pesquisaBeneficioSQL)
            or die ('ERRO DE PESQUISA NA TABELA Beneficio ARQUIVO AddBeneficio.php LINHA 113');
                                    
        while ($rowPesqBeneficio = mysqli_fetch_array($resultPesquisaBeneficio)){
                                                                        
            echo '<tr>';
                echo '<td>'.$rowPesqBeneficio['nomeBenef'].'</td>';
                if ($rowPesqBeneficio['recursivoBenef'] == 0){
                    echo '<td>'.'Não'.'</td>';
                }else{
                    echo '<td>'.'Sim'.'</td>';
                }
                if ($rowPesqBeneficio['tempoRecursivo'] == 0){
                    echo '<td>'.'Não Controlado'.'</td>';
                }else{
                    echo '<td>'.$rowPesqBeneficio['tempoRecursivo'].' Meses</td>';
                }
                    echo '<td>'.$rowPesqBeneficio['dataInicial'].'</td>';                                        
                    echo '</tr>';
        }

        echo '</tbody>';
    echo '</table>';

        mysqli_close($conexao);
?>