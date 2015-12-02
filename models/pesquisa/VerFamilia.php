<?php 

    include_once "../control/conexaoBD.php";
    include_once "../classes/inverteData.php";
    
    $idBenef = $_GET['idBenef'];

    $pesquisaBenefSql = "SELECT * FROM Beneficiario WHERE idBenef = $idBenef";
    
    $resultPesquisaBenef = mysqli_query($conexao, $pesquisaBenefSql)
        or die ("ERRO DE PESQUISA NA TABELA Beneficiario ARQUIVO VerFamilia.php VARIAVEL pesquisaBenefSql linha 9");
    
   
    while ($row = mysqli_fetch_array($resultPesquisaBenef)){               
        ?>

    <div class="container-fluid" style="margin-top:10%;">
        <div class="panel hvr-overline-from-center" style="width:100%;">
            <div class="panel-body">
                <h2 class="text-primary text-center"><b>Prefeitura Municipal de São Simão</b></h2>
                <h3 class="text-primary text-center"><b>Secretaria de Ação Social</b></h3>
                <h4 class="text-info text-center">Detalhes do Cadastro de Família</h4>
                    <div class="row" style="margin-top:2%;">                    
                    
                        <img src="<?php echo "../js/uploads/".$row['fotoBenef'].".png";?>" class="img-rounded" style="margin-top:-13%;width:10%;margin-left:2%;"></img>
                        
                        <img src="../images/saosimao.png" style="float:right;width:16%;margin-top:-13%;margin-right:2%;"></img>                    
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-6"><!-- Abre coluna 1 -->
                        
                            <h3 class="text-danger">Beneficiário:</h3>

                            <?php echo '<h5 class="text-info"><strong> Nome: </strong>'.$row['nomeBenef']."</h5>" .
                                       '<h5 class="text-success"><strong> CPF: </strong>'.$row['cpfBenef']."</h5>" .
                                       '<h5 class="text-success"><strong> Título Eleitoral: </strong>'.$row['tituloBenef']."</h5>" .
                                       '<h5 class="text-success"><strong> Endereço: </strong>'.$row['endBenef']."</h5>" .
                                       '<h5 class="text-success"><strong> Bairro: </strong>'.$row['bairroBenef'].$row['estadoBenef']."</h5>" .
                                       '<h5 class="text-success"><strong> Estado Civil: </strong>'.$row['eCivilBenef']."</h5>"
                            ;?>
                            <a href="index.php?page=EditCadBeneficiario&idBenef=<?php echo $idBenef;?>" class="btn btn-sm btn-primary" data-toggle="modal" style="margin-top:4%;">Atualizar Beneficiário <span class="glyphicon glyphicon-refresh"></span></a>
                                                
                        </div>
                        <div class="col-md-5">
                            <h3 class="text-danger">Composição Familiar:</h3>
                            <?php

                                $pesquisaDependSql = "SELECT b.nomeBenef, b.cpfBenef, d.idDepend, d.nomeDepend, d.dnascDepend, d.cidadeTDepend, d.cartaoVacina FROM Beneficiario b INNER JOIN Familia f INNER JOIN Dependente d WHERE (b.idBenef = f.Beneficiario_idBenef) AND (d.idDepend = f.Dependente_idDepend) and (b.idBenef = $idBenef)";
                                $resultPesquisaDepend = mysqli_query($conexao, $pesquisaDependSql)
                                    or die ('ERRO DE PESQUISA NA TABELA Familia ARQUIVO VerFamilia.php VARIAVEL pesquisaDependSql linha 25');
                                while ($rowD = mysqli_fetch_array($resultPesquisaDepend)){ ?>
                                    <h5 class="text-info    "><strong> Nome: </strong><?php echo $rowD['nomeDepend'];?></h5>
                                    <h5 class="text-success"><strong> Data de Nascimento: </strong><?php echo inverteDataBr($rowD['dnascDepend']);?></h5>
                                    <h5 class="text-success"><strong> Cidade onde Vota: </strong><?php echo $rowD['cidadeTDepend'];?></h5>
                                    <h5 class="text-success"><strong> Cartão de Vacina: </strong><?php echo $rowD['cartaoVacina'];?></h5>
                                    
                                    <a href="index.php?page=EditCadDependente&idBenef=<?php echo $idBenef ;?>&idDepend=<?php echo $rowD['idDepend'] ;?>" class="btn btn-sm btn-primary" data-toggle="modal" style="margin-top:4%;">Atualizar Dependente <span class="glyphicon glyphicon-refresh"></span></a>
                                    <a href="index.php?page=AddDependente&idBenef=<?php echo $idBenef ;?>&idDepend=<?php echo $rowD['idDepend'] ;?>" class="btn btn-sm btn-success" data-toggle="modal" style="margin-top:4%;">Adicionar Dependente <span class="glyphicon glyphicon-plus-sign"></span></a>
                                    <a href="../models/excluir/ExcluiDependente.php?idDepend=<?php echo $rowD['idDepend'] ;?>&idBenef=<?php echo $idBenef ;?>" class="btn btn-sm btn-danger"  style="margin-top:4%;" >Excluir Dependente <span class="glyphicon glyphicon-remove"></span></a>
                                    <hr>
                            <?php } ?>
                        </div>
                    </div><!-- Fecha Linha 1 -->
                    <hr>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                    
                        <h3 class="text-danger">Benefícios:</h3>
                        <a href="index.php?page=AddBeneficio&idBenef=<?php echo $idBenef;?>" class="btn btn-sm btn-primary" style="margin-top:4%;">Adicionar Benefício <span class="glyphicon glyphicon-plus-sign"></span></a><br><br><br><br>
                        <?php 
                            $pesquisaBeneficioSql = "SELECT b.idBeneficio, c.nomeBenef, b.dataInicial, c.recursivoBenef, c.tempoRecursivo FROM Beneficio b INNER JOIN CadBeneficio c WHERE (b.CadBeneficio_idBenef = c.idBenef) and (b.Beneficiario_idBenef = '$idBenef')";
                            $resultPesquisaBeneficio = mysqli_query($conexao, $pesquisaBeneficioSql)
                                or die ("ERRO DE PESQUISA NA TABELA Beneficio ARQUIVO VerFamilia.php VARIAVEL pesquisaBeneficioSql linha 65");
                            
                            while ($row = mysqli_fetch_array($resultPesquisaBeneficio)){
                                
                                echo '<div class="col-md-5>"';
                                if ( $row['recursivoBenef'] == 0 ){
                                    echo '<h4>'.$row['nomeBenef'].'  <b>Data:</b> '.inverteDataBr($row['dataInicial']).'</h4><br>';
                                    echo '<p><a href="../models/excluir/ExcluiBeneficio.php?idBenef='.$idBenef.'&idBeneficio='.$row['idBeneficio'].'" class="btn btn-sm btn-danger">Excluir Benefício <span class="glyphicon glyphicon-remove"></span></a>';
                                    echo '<hr>';
                                    echo '</div>';                             
                                }
                                if ( $row['recursivoBenef'] == 1 ){
                                    $data = explode('-', $row['dataInicial']);
                                    $mes = $data[1];
                                    $ano = $data[0];
                                    $mesFinal = (int)$mes + (int)$row['tempoRecursivo'];
                                    if($mesFinal > 12){
                                        $mesSobra = $mesFinal - 12;
                                        if ($mesSobra < 10){
                                            $mesFormatado = '0'.$mesSobra;
                                        }
                                        $mesFinal = $mesFormatado;
                                        $ano = $data[0] + 1;
                                    }
                                    $dataFinal = $data[2].'-'.$mesFinal.'-'.$ano;
                                    echo '<h5>'.$row['nomeBenef'].'  <b>Início:</b> '.inverteDataBr($row['dataInicial']).'  <b>Fim:</b> '.$dataFinal.'</h5>';
                                    echo '<p><a href="../models/excluir/ExcluiBeneficio.php?idBenef='.$idBenef.'&idBeneficio='.$row['idBeneficio'].'" class="btn btn-sm btn-danger">Excluir Benefício <span class="glyphicon glyphicon-remove"></span></a>';
                                    echo '<a class="btn btn-sm btn-success">Encerrar Benefício <span class="glyphicon glyphicon-stop"></span></a></p>';
                                    echo '<hr>';
                                    echo '</div>';                             
                                }
                            }
                        ?>
                        
                    
                    </div><!-- Fecha coluna -->
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <h3 class="text-danger">Informações Gerais:</h3>
                        <?php 
                            $pesquisaInfoGeralSql = "SELECT * FROM InfoGeralBenef WHERE Beneficiario_idBenef = $idBenef";
                            $resultPesquisaInfoGeral = mysqli_query($conexao, $pesquisaInfoGeralSql)
                                or die ("ERRO DE PESQUISA NA TABELA InfoGeralBenef ARQUIVO VerFamilia.php VARIAVEL pesquisaInfoGeralSql linha 124");
                            while ($row = mysqli_fetch_array($resultPesquisaInfoGeral)){
                                if (!empty($row['MoradiaInfo'])){
                                    echo "<h5>Mora em Casa: ".$row['MoradiaInfo']."</h5>";
                                }
                                if (!empty($row['RemControlado'])){
                                    echo "<h5>Remédio Controlado: ".$row['RemControlado']."</h5>";
                                }
                                if (!empty($row['DescRemControlado'])){
                                    echo "<h5>Qual Remédio: ".$row['DescRemControlado']."</h5>";
                                }
                                if (!empty($row['AjudaCompraRem'])){
                                    echo "<h5>Ajuda na compra dos remédios: ".$row['AjudaCompraRem']."</h5>";
                                }
                                if (!empty($row['FarmaciaMunicipal'])){
                                    echo "<h5>Farmácia Municipal: ".$row['FarmaciaMunicipal']."</h5>";
                                }
                                if (!empty($row['RecebeBenef'])){
                                    echo "<h5>Recebe Benefício: ".$row['RecebeBenef']."</h5>";
                                }
                                if (!empty($row['DescRecebeBenef'])){
                                    echo "<h5>Descrição do Benefício: ".$row['DescRecebeBenef']."</h5>";
                                }
                                if (!empty($row['FazCurso'])){
                                    echo "<h5>Faz Curso: ".$row['FazCurso']."</h5>";
                                }
                                if (!empty($row['DescFazCurso'])){
                                    echo "<h5>Descrição do Curso: ".$row['DescFazCurso']."</h5>";
                                }
                                if (!empty($row['AluguelCusto'])){
                                    echo "<h5>Custo do Aluguel: ".$row['AluguelCusto']." R$</h5>";
                                }
                                if (!empty($row['CombustivelCusto'])){
                                    echo "<h5>Custo do Combustível: ".$row['CombustivelCusto']." R$</h5>";
                                }
                                if (!empty($row['EnergiaCusto'])){
                                    echo "<h5>Custo da Energia: ".$row['EnergiaCusto']." R$</h5>";
                                }
                                if (!empty($row['GasCusto'])){
                                    echo "<h5>Custo do gás: ".$row['GasCusto']." R$</h5>";
                                }
                                if (!empty($row['PrestacaoCusto'])){
                                    echo "<h5>Custo da Prestação: ".$row['PrestacaoCusto']." R$</h5>";
                                }
                                if (!empty($row['AlimentacaoCusto'])){
                                    echo "<h5>Custo da Alimentação: ".$row['AlimentacaoCusto']." R$</h5>";
                                }
                                if (!empty($row['AguaCusto'])){
                                    echo "<h5>Custo da Água: ".$row['AguaCusto']." R$</h5>";
                                }
                                if (!empty($row['FinanciamentoCusto'])){
                                    echo "<h5>Custo do Financiamento: ".$row['FinanciamentoCusto']." R$</h5>";
                                }
                                if (!empty($row['RemedioCusto'])){
                                    echo "<h5>Custo dos Remédios: ".$row['RemedioCusto']." R$</h5>";
                                }
                                if (!empty($row['TelefoneCusto'])){
                                    echo "<h5>Custo do Telefone: ".$row['TelefoneCusto']." R$</h5>";
                                }
                                if (!empty($row['OutrosCustos'])){
                                    echo "<h5>Outros Custos: ".$row['OutrosCustos']." R$</h5>";
                                }
                                if (!empty($row['Total'])){
                                    echo "<h5>Total de Custos: ".$row['Total']." R$</h5>";
                                }
                                                                

                            }
                            
                        ?>
                        <hr>
                        <a style="float:left;" href="?idBenef=<?php echo $idBenef;?>" class="btn btn-sm btn-primary" data-toggle="modal" style="margin-top:4%;" target="_blank">Atualizar Informações Gerais <span class="glyphicon glyphicon-refresh"></span></a><br><br><br><br>
                    </div>
            
                </div>
        
            <vr>
                <a href="../relatorios/rel/RelCadBeneficiario.php?idBenef=<?php echo $idBenef ;?>" class="btn btn-sm btn-primary" data-toggle="modal" style="margin-top:4%;" target="_blank">Imprimir Cadastro de Família <span class="glyphicon glyphicon-print"></span></a>
                <a href="index.php?page=ViewPessoa" class="btn btn-sm btn-success" data-toggle="modal" style="margin-top:4%;">Voltar para Cadastro de Família <span class="glyphicon glyphicon-arrow-left"></span></a>
                        </vr>
            </div>
        </div> 
    </div>    
<?php 
    }
?>