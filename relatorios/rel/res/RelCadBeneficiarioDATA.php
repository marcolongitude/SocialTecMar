
<style>
    
    .header-title{
        font-weight: bold;
    }
    td span {
        font-size: 12px;

    }
    #foto{
        float:left;
        position:relative;
        width:60px;
        margin-left:30px;
        margin-top:20px;
    }
    #img-foto-benef{
        width:60px;
        float:left;
        position:relative;
    }
    #texto-header{
        float:right;
        margin-left:220px;
        text-align:center;
        position:absolute;
        width:300px;
    }
    #logo{
        margin-left:20px;
        margin-top:20px;
        float:right;
        margin-left:600px;        
        position:absolute;
        width:200px;
    }
    #img-logo-pref{
        width:120px;
    }
    #cartao{
        margin-left:40px;
        margin-top:20px;
    }
    i{
        padding-right:5px;
    }
    hr{
        border: solid 1px;
        color:#c0c0c0;
    }
    
    fieldset{
        border: solid 0px;
        border-color:#dd9070;
        padding-left:6px;
    }
    
    strong{
        color:#000020;
    }
    label {
        float:center;
        margin-left:auto;
        margin-right:auto;
    }
    #infoGeral td{
        width: 350px;        
        border: 1px solid #c0c0c0;  
        padding-left:4px;
    }
    							
</style>
	
<?php																
	include_once "../../control/conexaoBD.php";
	include_once "../../classes/inverteData.php";

    $pesquisaBenefSql = "SELECT * FROM Beneficiario WHERE idBenef = '$idBenef'";
    $resultPesquisaBenef = mysqli_query($conexao, $pesquisaBenefSql)
        or die ('ERRO DE PESQUISA NA TABELA Beneficiario VARIAVEL pesquisaBenefSql linha 27');

    $pesquisaBeneficioSql = "SELECT c.nomeBenef, b.dataInicial, c.recursivoBenef, c.tempoRecursivo FROM Beneficio b INNER JOIN CadBeneficio c WHERE (b.CadBeneficio_idBenef = c.idBenef) and (b.Beneficiario_idBenef = '$idBenef')";
    $resultPesquisaBeneficio = mysqli_query($conexao, $pesquisaBeneficioSql)
        or die ('ERRO DE PESQUISA NA TABELA Beneficio VARIAVEL pesquisaBeneficioSql linha 63');

    $pesquisaTermoSql = "SELECT * FROM termoUso";
    $resultPesquisaTermo = mysqli_query($conexao, $pesquisaTermoSql)
        or die ('ERRO DE PESQUISA NA TABELA termoUso');

    $pesquisaInfoGeralSql = "SELECT * FROM InfoGeralBenef WHERE Beneficiario_idBenef = '$idBenef'";
    $resultPesquisaInfoGeral = mysqli_query($conexao, $pesquisaInfoGeralSql)
        or die ('ERRO DE PESQUSIA NA TABELA InfoGeralBenef VARIAVEL pesquisaInfoGeralSql linha 68');

    $pesquisaBolsa = "SELECT tipoBolsa FROM Bolsa WHERE Beneficiario_idBenef = '$idBenef'";
    $resultBolsa = mysqli_query($conexao, $pesquisaBolsa)
        or die ('ERRO DE PESQUISA NA TABELA BOLSA variavel PESQUISA BOLSA LINHA 84');

    $pesquisaSupSQL = "SELECT s.nomeSup, b.tipoBolsa FROM Supermercado s INNER JOIN Bolsa b WHERE (s.idSup = b.Supermercado_idSup) AND (b.Beneficiario_idBenef = '$idBenef')";
    $resultPesquisaSup = mysqli_query($conexao, $pesquisaSupSQL)
        or die ('ERRO DE PESQUISA NA TABELA Bolsa VARIAVEL pesquisaBolsaSQL LINHA 85');

    $pesquisaFarmSQL = "SELECT f.nomeFarm, b.tipoBolsa FROM Farmacia f INNER JOIN Bolsa b WHERE (f.idFarm = b.Farmacia_idFarm) AND (b.Beneficiario_idBenef = '$idBenef')";
    $resultPesquisaFarm = mysqli_query($conexao, $pesquisaFarmSQL)
        or die ('ERRO DE PESQUISA NA TABELA Bolsa VARIAVEL pesquisaFarmSQL LINHA 89');

    $pesquisaDependSql = "SELECT b.nomeBenef, b.fotoBenef, b.cartaoBenef, d.nomeDepend, d.parentescoDepend, d.profissaoDepend FROM Familia f INNER JOIN Beneficiario b INNER JOIN Dependente d WHERE (b.idBenef = f.Beneficiario_idBenef) AND (d.idDepend = f.Dependente_idDepend) AND idBenef = '$idBenef'";
    $resultPesquisaDepend = mysqli_query($conexao, $pesquisaDependSql)
        or die ('ERRO DE PESQUISA NA TABELA Beneficiario VARIAVEL pesquisaBenefSql linha 27');
    while ($rowBenef = mysqli_fetch_array($resultPesquisaBenef)){
    
?>	
	
	<page backtop="3mm" backbottom="6mm" backleft="2mm" backright="2mm" >
    
        <div id="foto">
            <img id="img-foto-benef" src="../../js/uploads/<?php echo $rowBenef['fotoBenef'] ;?>.png"</img>
        </div>
        <div id="texto-header">
            <span class="header-title">Prefeitura Municipal de São Simão</span>
            <span class="header-title">Secretaria Municipal do Desenvolvimento Social</span>
            <h5>Beneficiário: <?php echo $rowBenef['nomeBenef'] ;?></h5>
            <!--<h5>Dia: <?php echo date('d/m/Y'); ?></h5>-->
        </div>
        <div id="logo">
            <img id="img-logo-pref" src="./res/saosimao.png"/>            
        </div>
        <div id="cartao">
            <h4>Número do Cartão Social: <strong><?php echo $rowBenef['cartaoBenef'] ;?></strong></h4>
            <?php
                
                while ($rowBolsa = mysqli_fetch_array($resultBolsa)){                            
                    
                    if ($rowBolsa['tipoBolsa'] == 0){
                        while ($rowSup = mysqli_fetch_array($resultPesquisaSup)){
                            echo "<h5>Crédito no estabelecimento : ".$rowSup['nomeSup']."</h5>";   
                        }
                    }
                    if ($rowBolsa['tipoBolsa'] == 1){
                        while ($rowFarm = mysqli_fetch_array($resultPesquisaFarm)){
                            echo "<h5>Crédito no estabelecimento : ".$rowFarm['nomeFarm']."</h5>";
                        }
                    }
                }
            ?>
        </div>
        <hr>  
         
    
        
        
    
        
        <label for="familia">Composição Familiar</label><br>
        <fieldset id="familia">
            <?php while ($rowDepend = mysqli_fetch_array($resultPesquisaDepend)){ ;?>
            <table>
                <tr>
                    <td style="width:300px;"><h6>Nome: <?php echo $rowDepend['nomeDepend'];?></h6></td>
                    <td style="width:130px;"><h6>Parentesco: <?php echo $rowDepend['parentescoDepend'];?></h6></td>
                    <td style="width:270px;"><h6><?php echo $rowDepend['profissaoDepend'];?></h6></td>
                </tr>

            </table>
            <?php } ?>
        </fieldset><br>
        <hr>
        
        <label for="beneficio">Benefícios</label><br>
        <fieldset id="beneficio">
            
            <?php while ($rowBeneficio = mysqli_fetch_array($resultPesquisaBeneficio)){ 
            
                        if ( $rowBeneficio['recursivoBenef'] == 0 ){
                                    echo '<h6>'.$rowBeneficio['nomeBenef'].'  <b>Data:</b> '.inverteDataBr($rowBeneficio['dataInicial']).'</h6>';
                                    echo '<hr>';                                    
                                }
                                if ( $rowBeneficio['recursivoBenef'] == 1 ){
                                    $data = explode('-', $rowBeneficio['dataInicial']);
                                    $mes = $data[1];
                                    $ano = $data[0];
                                    $mesFinal = (int)$mes + (int)$rowBeneficio['tempoRecursivo'];
                                    if($mesFinal > 12){
                                        $mesSobra = $mesFinal - 12;
                                        if ($mesSobra < 10){
                                            $mesFormatado = '0'.$mesSobra;
                                        }
                                        $mesFinal = $mesFormatado;
                                        $ano = $data[0] + 1;
                                    }
                                    $dataFinal = $data[2].'-'.$mesFinal.'-'.$ano;
                                    echo '<h6>'.$rowBeneficio['nomeBenef'].'  <b>Início:</b> '.inverteDataBr($rowBeneficio['dataInicial']).'  <b>Fim:</b> '.$dataFinal.'</h6>';                                    
                                    echo '<hr>';                                    
                                }
                
            
             } ?>
            
        </fieldset><br>
        
        <label for="infoGeral">Informações Gerais</label><br><br><br>
            <table id="infoGeral">
            <?php while ($rowInfoGeral = mysqli_fetch_array($resultPesquisaInfoGeral)){ 
                            echo '<tr><td>';
                                if (!empty($rowInfoGeral['MoradiaInfo'])){
                                    echo '<span>Mora em Casa: ' .$rowInfoGeral['MoradiaInfo']."</span><br>";
                                }
                                
                                if (!empty($rowInfoGeral['RemControlado'])){
                                    echo '<span>Remédio Controlado: ' .$rowInfoGeral['RemControlado']."</span><br>";
                                }
                                
                                if (!empty($rowInfoGeral['DescRemControlado'])){
                                    echo '<span>Qual Remédio: ' .$rowInfoGeral['DescRemControlado']."</span><br>";
                                }
                                if (!empty($rowInfoGeral['AjudaCompraRem'])){
                                    echo '<span>Ajuda na compra dos remédios: ' .$rowInfoGeral['AjudaCompraRem']."</span><br>";
                                }
                                if (!empty($rowInfoGeral['FarmaciaMunicipal'])){
                                    echo '<span>Farmácia Municipal: ' .$rowInfoGeral['FarmaciaMunicipal']."</span><br>";
                                }
                                if (!empty($rowInfoGeral['RecebeBenef'])){
                                    echo '<span>Recebe Benefício: ' .$rowInfoGeral['RecebeBenef']."</span><br>";
                                }
                                if (!empty($rowInfoGeral['DescRecebeBenef'])){
                                    echo '<span>Descrição do Benefício:' .$rowInfoGeral['DescRecebeBenef']."</span><br>";
                                }
                                if (!empty($rowInfoGeral['FazCurso'])){
                                    echo '<span>Faz Curso: ' .$rowInfoGeral['FazCurso']."</span><br>";
                                }
                                if (!empty($rowInfoGeral['DescFazCurso'])){
                                    echo '<span>Descrição do Curso: ' .$rowInfoGeral['DescFazCurso']."</span><br>";
                                }
                            echo '</td>';
                            echo '<td>';
                                if (!empty($rowInfoGeral['AluguelCusto'])){
                                    $totalCusto = $rowInfoGeral['AluguelCusto'];
                                    echo '<span>Custo do Aluguel: ' .$rowInfoGeral['AluguelCusto']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['CombustivelCusto'])){
                                    $totalCusto += $rowInfoGeral['CombustivelCusto'];
                                    echo '<span>Custo do Combustível: ' .$rowInfoGeral['CombustivelCusto']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['EnergiaCusto'])){
                                    $totalCusto += $rowInfoGeral['EnergiaCusto'];
                                    echo '<span>Custo da Energia: ' .$rowInfoGeral['EnergiaCusto']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['GasCusto'])){
                                    $totalCusto += $rowInfoGeral['GasCusto'];
                                    echo '<span>Custo do gás: ' .$rowInfoGeral['GasCusto']."</span><br>";
                                }
                                if (!empty($rowInfoGeral['PrestacaoCusto'])){
                                    $totalCusto += $rowInfoGeral['PrestacaoCusto'];
                                    echo '<span>Custo da Prestação: ' .$rowInfoGeral['PrestacaoCusto']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['AlimentacaoCusto'])){
                                    $totalCusto += $rowInfoGeral['AlimentacaoCusto'];
                                    echo '<span>Custo da Alimentação: ' .$rowInfoGeral['AlimentacaoCusto']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['AguaCusto'])){
                                    $totalCusto += $rowInfoGeral['AguaCusto'];
                                    echo '<span>Custo da Água: ' .$rowInfoGeral['AguaCusto']."</span><br>";
                                }
                                if (!empty($rowInfoGeral['FinanciamentoCusto'])){
                                    $totalCusto += $rowInfoGeral['FinanciamentoCusto'];
                                    echo '<span>Custo do Financiamento: ' .$rowInfoGeral['FinanciamentoCusto']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['RemedioCusto'])){
                                    $totalCusto += $rowInfoGeral['RemedioCusto'];
                                    echo '<span>Custo dos Remédios: ' .$rowInfoGeral['RemedioCusto']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['TelefoneCusto'])){
                                    $totalCusto += $rowInfoGeral['TelefoneCusto'];
                                    echo '<span>Custo do Telefone: ' .$rowInfoGeral['TelefoneCusto']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['OutrosCustos'])){
                                    $totalCusto += $rowInfoGeral['OutrosCustos'];
                                    echo '<span>Outros Custos: ' .$rowInfoGeral['OutrosCustos']." R$</span><br>";
                                }
                                if (!empty($rowInfoGeral['Total'])){
                                    $totalCusto += $rowInfoGeral['Total'];
                                    echo '<span>Total de Custos: ' .$rowInfoGeral['Total']." R$</span><br>";
                                }
                                echo '<h5>Total da relação de Custos: '.$totalCusto.' R$</h5>  ';
                            echo '</td></tr>';
                
            
             } 
            
         } 
         
        ?>
        </table>
         
          
        
        
        <!--<div style="width:600px;margin-left:20px;margin-right:auto;">
        
                <?php while ($rowTermo = mysqli_fetch_array($resultPesquisaTermo)){ ?>
                            <i  style="margin-right:5px;"><?php echo $rowTermo['textoTermo'];?></i>              
                        <?php } ?>                       
       </div>-->
        
        
        
    
        
    <page_footer>
        <table style="width: 100%; border: solid 1px #c0c0c0;">
            <tr>
                <td style="text-align: center; width: 70%;"><b>Prefeitura Municipal de São Simão - </b>Secretaria Municipal do Desenvolvimento Social</td>
                <td style="text-align: right; width: 29%;">page [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer>   

</page>

