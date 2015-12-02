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

<form action="" method="" id="formBeneficio">
    <div class="row"><!-- Abre linha -->

    <?php
        
        $column = 1;
        $qtdDiv = 3;
        $i = 0;
        $c = 0;
        while ($rowPesquisaBenef = mysqli_fetch_array($resultPesquisaBeneficios)){
            
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

        ?>   
               
        
        
    </div><!-- Fecha linha-->
    
    <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                                 
    <input type="hidden" class="form-control idBenef" name="idBenef" value="" />
    <button id="salvarBeneficio" name="salvar" type="button" class="btn btn-sm btn-primary" style="margin-left:22px;">Salvar Benefício <span class="glyphicon glyphicon-hdd"></span></button>
    <a class="btn btn-warning" title="Salvar Ação!"
        data-container="body" data-toggle="popover" data-placement="right"
        data-content="Para salvar o cadastro, verifique se está preenchendo todos os campos, quanto mais campos for preenchido, melhor será a busca pelos dados!">
        ?
    </a>
</form>