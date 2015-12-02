<script src="../js/InsereBeneficio.js"></script>
<script>$(function ()
{ $("[data-toggle='popover']").popover();
});
</script>

<?php

    include "../control/conexaoBD.php";

    $pesquisaBeneficios = "SELECT * FROM CadBeneficio";
    $resultPesquisaBeneficios = mysqli_query($conexao, $pesquisaBeneficios)
        or die ("ERRO DE PESQUISA NA TABELA CadBeneficio ARQ CadBeneficio.php LINHA 8");
    $totalLinhas = mysqli_num_rows($resultPesquisaBeneficios);
    $total = $totalLinhas / 3;
    $final = (int)$total;    

?>

<div class="container-fluid" style="margin-top:7%;">
            <div class="panel" style="margin:20px;">
                <div class="panel-title">
                    <h4 class="text-info" style="margin:30px;margin-top:40px;">Adiciona Dependente</h4>
                    <hr>
                </div>

                <form action="" method="" id="formBeneficio" style="padding:20px;">
                    <div class="row"><!-- Abre linha -->

                    <?php
                        
                        $column = 1;
                        $qtdDiv = 3;
                        $i = 0;
                        $c = 0;
                        while ($rowPesquisaBenef = mysqli_fetch_array($resultPesquisaBeneficios)){
                            $idBenef = $rowPesquisaBenef['idBenef'];
                            
                            $c++;
                            if ($column == 1 && $qtdDiv == 3){
                                
                                echo '<div class="col-md-4">';
                                $i++;
                                
                                if ($i == 3){

                                    $qtdDiv++;                
                                    $final = 1000;

                                }
                            }

                        ?>      
                        
                            <label class="checkbox" style="margin-left:5%;">
                                <input type="checkbox" name="beneficio[]" class="beneficio" value="<?php echo $rowPesquisaBenef['idBenef'];?>" />
                                <h6><?php echo $rowPesquisaBenef['nomeBenef'];?></h6>                
                            </label><hr>
                            
                        <?php
                            if ($column == $final){                
                                echo '</div>';  
                            }
                            if ($c == $totalLinhas){
                                echo '</div>';
                            }
                            $column++;
                            if ($column == $final+1){
                                $column = 1;

                            }
                            
                        }
                        $idBenef = $_GET['idBenef'];
                        ?>   
                               
                        
                        
                    </div><!-- Fecha linha-->
                    
                    <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                                                 
                    <input type="hidden" class="form-control idBenef" name="idBenef" value="<?php echo $idBenef ;?>" />
                    
                    <a class="btn btn-sm btn-warning" title="Salvar Ação!" style="margin-top:30px;" 
                        data-container="body" data-toggle="popover" data-placement="top"
                        data-content="Para salvar o cadastro, verifique se está preenchendo todos os campos, quanto mais campos for preenchido, melhor será a busca pelos dados!">
                        ?
                    </a>
                    <button id="salvarBeneficio" name="salvar" type="button" class="btn btn-sm btn-primary" style="margin-top:30px;">Salvar Benefício <span class="glyphicon glyphicon-hdd"></span></button>
                    
                    <a href="index.php?page=../models/pesquisa/VerFamilia&idBenef=<?php echo $idBenef ;?>" class="btn btn-sm btn-success" style="margin-top:30px;">Voltar à Ver Família <span class="glyphicon glyphicon-arrow-left"></span></a>
                    <a class="btn btn-sm btn-warning" title="Voltar ao Cadastro!" style="margin-top:30px;" 
                        data-container="body" data-toggle="popover" data-placement="right"
                        data-content="Clique neste Botão para poder voltar a Tela de Visão Geral do Cadastro do Beneficiário!">
                        ?
                    </a>
                </form>

               <hr>
        <!-- Inicío tabela de dados gravados no banco -->

                    <div class="table-responsive" style="padding:8px;">
                        <div id="recebeDados"></div>
                        <table class="table table-condensed table-hover table-striped" id="dados">

                            <thead>
                                <tr>                        
                                    <th>Nome do Benefício</th>
                                    <th>Recursivo</th>
                                    <th>Tempo</th>
                                    <th>Data Inicial</th>                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                
                                    //include "../control/conexaoBD.php";
                                    
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
                                } ?>
                                
                            </tbody>
                        </table> 
                    </div> <!-- Final da div table-responsive -->
        </div><!-- fecha painel title -->
    </div><!-- fecha painel -->