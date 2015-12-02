<?php 

    $pesquisa = $_GET['nome'];
    $pesquisaDBenefSql = "";
    $resultPesquisaDBenef = "";
    $rowDinamica = "";
    //variaveis da paginação
    $cur_page = isset($_GET['pagi']) ? $_GET['pagi'] : 1;    
    $results_per_page = 12;    
    $skip = (($cur_page -1) * $results_per_page);
    //termino das variaveis da paginação
    include_once "../../../control/conexaoBD.php";
            
    $pesquisaDBenefSql = "SELECT * FROM Beneficiario WHERE nomeBenef LIKE '%$pesquisa%'";
    
    $resultPesquisaDBenef = mysqli_query($conexao, $pesquisaDBenefSql)
        or die ("ERRO DE PESQUISA NA TABELA Beneficiario ARQUIVO PesquisaBeneficiario.php VARIAVEL pesquisaBenefSql linha 19");
    
    $total = mysqli_num_rows($resultPesquisaDBenef);
    $num_pages = ceil($total / $results_per_page);
    
    $pesquisaDBenefSql = $pesquisaDBenefSql . " LIMIT $skip, $results_per_page";
    $result = mysqli_query($conexao, $pesquisaDBenefSql)
        or die ("ERRO DE PESQUISA NA TABELA Users ARQUIVO PesquisaUsers.php NA PAGINACAO COM LIMIT linha 21");
    include "../lib/paginacaoPesquisaDinamicaBeneficiario.php";

    $i = 0;
    while ($rowDinamica = mysqli_fetch_array($result)){
        
            if ($i == 0){
                echo '<div class="row" style="margin-top:4%;">';
            }
        ?>
        
        <div class="col-md-3" style="margin-top:10px;"><!-- Abre coluna 1 -->
            <div class="panel hvr-overline-from-center" style="width:100%;">
                <div class="panel-body">
                    <h4 class="text-primary">Beneficiário:</h4>
                    <div><img src="<?php echo "../js/uploads/".$rowDinamica['fotoBenef'].".png"  ;?>" style="width:30%;"></img></div>
                    <?php echo '<h6 class="text-success"><strong> Nome: </strong>'.$rowDinamica['nomeBenef']."</h6>" .
                               '<h6 class="text-success"><strong> CPF: </strong>'.$rowDinamica['cpfBenef']."</h6>"        
                    ;?>
                    <hr>
                    <h4 class="text-info">Dependentes:</h4>
                    <?php
                        $idBenef = $rowDinamica['idBenef'];
                        $pesquisaDependSql = "SELECT b.nomeBenef, b.cpfBenef, d.idDepend, d.nomeDepend, d.dnascDepend FROM Beneficiario b INNER JOIN Familia f INNER JOIN Dependente d WHERE (b.idBenef = f.Beneficiario_idBenef) AND (d.idDepend = f.Dependente_idDepend) and (b.idBenef = $idBenef)";
                        $resultPesquisaDepend = mysqli_query($conexao, $pesquisaDependSql)
                            or die ('ERRO DE PESQUISA NA TABELA Familia ARQUIVO PesquisaBeneficiario.php VARIAVEL pesquisaDependSql linha 25');
                        while ($rowDinamicaD = mysqli_fetch_array($resultPesquisaDepend)){ ?>
                            <h6 class="text-success"><strong> Nome: </strong><?php echo $rowDinamicaD['nomeDepend'];?></h6>
                    <?php } ?>
                    <hr>        
                <a href="index.php?<?php echo "page=../../../models/pesquisa/VerFamilia&idBenef=" . $idBenef;?>" class="btn btn-sm btn-primary">Ver <span class="glyphicon glyphicon-th-list"></span></a>
                <a href="#Modal" class="btn btn-sm btn-primary" data-toggle="modal">Editar <span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="../../../models/excluir/ExcluiBeneficiario.php?idBenef=<?php echo $rowDinamica['idBenef'];?>" class="btn btn-sm btn-danger" id="excluir">Excluir <span class="glyphicon glyphicon-remove"></span></a>
                </div>
            </div>
        </div>       
        
<?php 
        if ($i == 3){
            echo '</div>';
        }
        $i++;
        if ($i == 4){
            $i = 0;            
        }       
    }
?>