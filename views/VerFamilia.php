<?php 

    include_once "../control/conexaoBD.php";
    include_once "../classes/inverteData.php";
    
    $idBenef = $_GET['idBenef'];

    $pesquisaBenefSql = "SELECT * FROM Beneficiario WHERE id_Pessoa = $idBenef";
    
    $resultPesquisaBenef = mysqli_query($conexao, $pesquisaBenefSql)
        or die ("ERRO DE PESQUISA NA TABELA Pessoa ARQUIVO VerFamilia.php VARIAVEL pesquisaBenefSql linha 9");
    
   
    while ($row = mysqli_fetch_array($resultPesquisaBenef)){
               
        ?>
    <div class="container-fluid" style="margin-top:5%;">
        <div class="panel hvr-overline-from-center" style="width:100%;">
            <div class="panel-body">
                <h2 class="text-primary text-center">DETALHES DO CADASTRO DE FAMÍLIA</h2>
                <div class="row" style="margin-top:2%;">
                    <div class="col-md-6"><!-- Abre coluna 1 -->
            
                        <h3 class="text-danger">Beneficiário:</h3>
                        <?php echo '<h4 class="text-info"><strong> Nome: </strong>'.$row['nomeBenef']."</h4>" .
                                   '<h4 class="text-success"><strong> CPF: </strong>'.$row['cpfBenef']."</h4>" .
                                   '<h4 class="text-success"><strong> Título Eleitoral: </strong>'.$row['tituloBenef']."</h4>" .
                                   '<h4 class="text-success"><strong> Endereço: </strong>'.$row['endBenef']."</h4>" .
                                   '<h4 class="text-success"><strong> Bairro: </strong>'.$row['bairroBenef'].$row['estadoBenef']."</h4>" .
                                   '<h4 class="text-success"><strong> Estado Civil: </strong>'.$row['eCivilBenef']."</h4>"
                        ;?>
                        <vr>
                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" style="margin-top:4%;">Imprimir Cadastro de Família</a>
                        </vr>
                        
                    </div>
                        <div class="col-md-6">
                        <h3 class="text-danger">Dependentes:</h3>
                        <?php

                            $pesquisaDependSql = "SELECT p.nomePessoa, p.cpfPessoa, d.idDependentes, d.nomeDependente, d.dnascDependente, d.cidadeTDependente, d.cartaoVacina FROM Pessoa p INNER JOIN Familia f INNER JOIN Dependentes d WHERE (p.id_Pessoa = f.Pessoa_id_Pessoa) AND (d.idDependentes = f.Dependentes_idDependentes) and (p.id_Pessoa = $idBenef)";
                            $resultPesquisaDepend = mysqli_query($conexao, $pesquisaDependSql)
                                or die ('ERRO DE PESQUISA NA TABELA Familia ARQUIVO PesquisaBeneficiario.php VARIAVEL pesquisaDependSql linha 25');
                            while ($rowD = mysqli_fetch_array($resultPesquisaDepend)){ ?>
                                <h4 class="text-info    "><strong> Nome: </strong><?php echo $rowD['nomeDependente'];?></h4>
                                <h4 class="text-success"><strong> Data de Nascimento: </strong><?php echo inverteDataBr($rowD['dnascDependente']);?></h4>
                                <h4 class="text-success"><strong> Cidade onde Vota: </strong><?php echo $rowD['cidadeTDependente'];?></h4>
                                <h4 class="text-success"><strong> Cartão de Vacina: </strong><?php echo $rowD['cartaoVacina'];?></h4>
                
                                <hr>
                        <?php } ?>
                    </div>
                </div> 
            </div>
        </div> 
    </div>    
<?php 
    }
?>