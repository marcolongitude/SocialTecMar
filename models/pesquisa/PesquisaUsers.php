<?php

    include_once "../control/conexaoBD.php";
    include_once "../classes/inverteData.php";
    
    $cur_page = isset($_GET['pagi']) ? $_GET['pagi'] : 1;    
    $results_per_page = 2;    
    $skip = (($cur_page -1) * $results_per_page);
        
    $pesquisaUsersSql = "SELECT * FROM Users ORDER BY id_Users DESC";

    $resultPesquisaUsersSql = mysqli_query($conexao, $pesquisaUsersSql)
        or die ("ERRO DE PESQUISA NA TABELA Users ARQUIVO PesquisaUsers.php VARIAVEL resultPesquisaUsersSql");

    $total = mysqli_num_rows($resultPesquisaUsersSql);
    $num_pages = ceil($total / $results_per_page);
             
    $pesquisaUsersSql = $pesquisaUsersSql . " LIMIT $skip, $results_per_page";
             
    $result = mysqli_query($conexao, $pesquisaUsersSql)
        or die ("ERRO DE PESQUISA NA TABELA Users ARQUIVO PesquisaUsers.php NA PAGINACAO COM LIMIT linha 21");
             
    while ($row = mysqli_fetch_array($result)){
        if ($row['tipo_Users'] == 0){
            $tipo_Users = "Usuário Comum";   
        }else if ($row['tipo_Users'] == 1){
            $tipo_Users = "Administrador";   
        }
?>
        <tr>
            <td><?php echo $row['nome_Users'] ;?></td>
            <td><?php echo inverteDataBr($row['data_nasc_Users']) ;?></td>
            <td><?php echo $row['end_Users'] ;?></td>
            <td><?php echo $row['login_Users'] ;?></td>
            <td><?php echo $row['tel_Users'] ;?></td>
            <td><?php echo $tipo_Users ;?></td>
        </tr>
<?php            
    }
    
    include_once "paginacao.php";

    mysqli_close($conexao);

?>