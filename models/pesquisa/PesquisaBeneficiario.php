<?php 
    $pesquisa = $_GET['nome'];
    
    //variaveis da paginação
    $cur_page = isset($_GET['pagi']) ? $_GET['pagi'] : 1;    
    $results_per_page = 8;    
    $skip = (($cur_page -1) * $results_per_page);
    //termino das variaveis da paginação

    if ((isset($pesquisa)) && (!empty($pesquisa))){
        $local = "localhost";
	    $usuario = "root";
	    $senha = "admin";
	    $banco = "SOCIAL";

	    $conexao = mysqli_connect("$local","$usuario","$senha","$banco")
		  or die ("ERRO DE CONEXAO COM O BANCO DE DADOS - ARQUIVO conexaoBD.php");
        
        $pesquisaBenefSql = "SELECT * FROM Beneficiario WHERE nomeBenef LIKE '%$pesquisa%'";
        
        $resultPesquisaBenef = mysqli_query($conexao, $pesquisaBenefSql)
        or die ("ERRO DE PESQUISA NA TABELA Beneficiario ARQUIVO PesquisaBeneficiario.php VARIAVEL pesquisaBenefSql linha 11");
        
        $total = mysqli_num_rows($resultPesquisaBenef);
    $num_pages = ceil($total / $results_per_page);

    $pesquisaBenefSql = $pesquisaBenefSql . " LIMIT $skip, $results_per_page";
    $result = mysqli_query($conexao, $pesquisaBenefSql)
        or die ("ERRO DE PESQUISA NA TABELA Users ARQUIVO PesquisaUsers.php NA PAGINACAO COM LIMIT linha 21");
    

    
    echo '<ul class="pagination pagination-sm">';
    if ( $cur_page > 1 ) {
        $page_links = '<li><a href="index.php?page=ViewPessoa&pagi=' . ( $cur_page - 1 ) . '">Anterior</a></li>';
    }else {
        $page_links = '<li><a class="disabled">Primeira</a></li>';
    }

    for ($i = 1; $i <= $num_pages; $i++){    
        if ($cur_page == $i){
            $page_links .= ' ' . '<li class="active"><a class="disabled">' . $i . '</a></li>'; 
        }elseif($i < 4 ){
            $page_links .= '<li><a href="index.php?page=ViewPessoa&pagi=' . $i .'"> ' . $i . '</a></li>' ;
        }        
    }

    if ( $cur_page < $num_pages ){
        $page_links .= '<li><a href="index.php?page=ViewPessoa&pagi=' . ( $cur_page + 1 ) . '">Próxima</a></li>';
    }else {
        $page_links .= '<li><a>Última</a></li>';
    }
    
    echo $page_links."</ul>";

        
        
    }else{
        $local = "localhost";
	    $usuario = "root";
	    $senha = "admin";
	    $banco = "SOCIAL";

	    $conexao = mysqli_connect("$local","$usuario","$senha","$banco")
		  or die ("ERRO DE CONEXAO COM O BANCO DE DADOS - ARQUIVO conexaoBD.php");
        
        $pesquisaBenefSql = "SELECT * FROM Beneficiario ORDER BY idBenef DESC";
    
        $resultPesquisaBenef = mysqli_query($conexao, $pesquisaBenefSql)
        or die ("ERRO DE PESQUISA NA TABELA Beneficiario ARQUIVO PesquisaBeneficiario.php VARIAVEL pesquisaBenefSql linha 17");
        
        $total = mysqli_num_rows($resultPesquisaBenef);
    $num_pages = ceil($total / $results_per_page);

    $pesquisaBenefSql = $pesquisaBenefSql . " LIMIT $skip, $results_per_page";
    $result = mysqli_query($conexao, $pesquisaBenefSql)
        or die ("ERRO DE PESQUISA NA TABELA Users ARQUIVO PesquisaUsers.php NA PAGINACAO COM LIMIT linha 21");
    

    
    echo '<ul class="pagination pagination-sm">';
    if ( $cur_page > 1 ) {
        $page_links = '<li><a href="index.php?page=ViewPessoa&pagi=' . ( $cur_page - 1 ) . '">Anterior</a></li>';
    }else {
        $page_links = '<li><a class="disabled">Primeira</a></li>';
    }

    for ($i = 1; $i <= $num_pages; $i++){    
        if ($cur_page == $i){
            $page_links .= ' ' . '<li class="active"><a class="disabled">' . $i . '</a></li>'; 
        }elseif($i < 4 ){
            $page_links .= '<li><a href="index.php?page=ViewPessoa&pagi=' . $i .'"> ' . $i . '</a></li>' ;
        }        
    }

    if ( $cur_page < $num_pages ){
        $page_links .= '<li><a href="index.php?page=ViewPessoa&pagi=' . ( $cur_page + 1 ) . '">Próxima</a></li>';
    }else {
        $page_links .= '<li><a>Última</a></li>';
    }
    
    echo $page_links."</ul>";

        
    }
    
    
    $i = 0;
    while ($row = mysqli_fetch_array($result)){
        
            if ($i == 0){
                echo '<div class="row" style="margin-top:4%;">';
            }
        ?>
        
        <div class="col-md-3"><!-- Abre coluna 1 -->
            <div class="panel hvr-overline-from-center" style="width:100%;">
                <div class="panel-body">
                    <h4 class="text-primary">Beneficiário:</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo "../js/uploads/".$row['fotoBenef'].".png"  ;?>" style="width:90%;"></img>
                        </div>
                        <div class="col-md-8">
                            <strong class="text-info">Cartão: </strong><h4 class="text-danger"><?php echo $row['cartaoBenef'];?></h4>
                        </div>
                    </div>
                    <?php echo '<h6 class="text-success"><strong> Nome: </strong>'.$row['nomeBenef']."</h6>" .
                               '<h6 class="text-success"><strong> CPF: </strong>'.$row['cpfBenef']."</h6>"        
                    ;?>
                    <hr>
                        <h4 class="text-info">Dependentes: </h4>
                        <?php
                            $idBenef = $row['idBenef'];
                            $pesquisaDependSql = "SELECT b.nomeBenef, b.cpfBenef, d.idDepend, d.nomeDepend, d.dnascDepend FROM Beneficiario b INNER JOIN Familia f INNER JOIN Dependente d WHERE (b.idBenef = f.Beneficiario_idBenef) AND (d.idDepend = f.Dependente_idDepend) and (b.idBenef = $idBenef)";
                            $resultPesquisaDepend = mysqli_query($conexao, $pesquisaDependSql)
                                or die ('ERRO DE PESQUISA NA TABELA Familia ARQUIVO PesquisaBeneficiario.php VARIAVEL pesquisaDependSql linha 25');
                            while ($rowD = mysqli_fetch_array($resultPesquisaDepend)){ ?>
                                <h6 class="text-success"><strong> Nome: </strong><?php echo $rowD['nomeDepend'];?></h6>                                
                        <?php } ?>
                    
                    <hr>                                            
                    <a href="index.php?<?php echo "page=../models/pesquisa/VerFamilia&idBenef=" . $idBenef;?>" class="btn btn-sm btn-primary">Ver <span class="glyphicon glyphicon-eye-open"></span></a>
                    <a href="../relatorios/rel/RelCadBeneficiario.php?idBenef=<?php echo $idBenef;?>" class="btn btn-sm btn-primary" target="_blank">Imprime <span class="glyphicon glyphicon-print"></span></a>
                    <a href="../models/excluir/ExcluiBeneficiario.php?idBenef=<?php echo $row['idBenef'];?>" class="btn btn-sm btn-danger excluir">Excluir <span class="glyphicon glyphicon-remove"></span></a>
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