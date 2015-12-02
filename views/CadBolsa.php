<script>
    $(document).ready(function() {
        $('.opcaoSup[data-toggle]').on('click', function() {
            var $target = $($(this).attr('data-toggle'));
            $($target).css('display','block');
            $('#farmBolsa').css('display','none');
            $('#validadeFarm').val('');
        });
        $('.opcaoFarm[data-toggle]').on('click', function() {            
            var $target = $($(this).attr('data-toggle'));
            //$target.toggle();
            $($target).css('display', 'block');
            $('#supBolsa').css('display','none');
            $('#validadeSup').val('');     
        });
    });
</script>
<script src="../js/InsereBolsa.js"></script>

<div class="row">

    <div class="col-md-3"><!-- abre coluna 1 -->
        <h4 class="text-warning text-left">Escolha uma opção de Bolsa:</h4>                    
        
        <form role="form" action="" method="post" id="formBolsa">
            <input type="radio" name="opcao" value="0" class="opcaoSup" data-toggle="#supBolsa">Supermercado?
            <input type="radio" name="opcao" value="1" class="opcaoFarm" data-toggle="#farmBolsa">Farmácia?
        
        <div id="supBolsa" style="display: none;margin-top:14px;">
        
            <div class="form-group">
                <label class="label-control" for="supermercado"><b>Supermercado:</b></label>					 
                <select name="supermercado" id="supermercado" class="form-control">
                    <option value="" id="supPadrao">Escolha uma opção</option>
                    <?php
                        include "../control/conexaoBD.php";
                        $pesquisaSup = "SELECT * FROM Supermercado";
                        $resultPesquisaSup = mysqli_query($conexao, $pesquisaSup)
                            or die ('ERRO DE PESQUISA NA TABELA Supermercado ARQ CadBolsa.php LINHA 24');
                        while ($rowSup = mysqli_fetch_array($resultPesquisaSup)){                                            
                            echo '<option value="'.$rowSup['idSup'].'">'.$rowSup['nomeSup'].'</option>';
                        }
                    ?>
                </select>
                            
            </div>

            <div class="form-group">
                <label class="control-label" for="validadeSup">Validade:<sup>*</sup></label>                            
                    <input type="text" class="form-control validade" name="validadeSup" id="validadeSup" value="" />                            
            </div>
        </div>
        
        <div id="farmBolsa" style="display: none;margin-top:14px;">
            <div class="form-group">
                <label class="control-label" for="farmacia"><b>Farmácia:</b></label>					 
                <select name="farmacia" id="farmacia" class="form-control">
                    <option value="">Escolha uma opção</option>
                    <?php                      
                        $pesquisaFarm = "SELECT * FROM Farmacia ORDER BY idFarm DESC";
                        $resultPesquisaFarm = mysqli_query($conexao, $pesquisaFarm)
                            or die ('ERRO DE PESQUISA NA TABELA Farmacia ARQ CadBolsa.php LINHA 47');
                        while ($rowFarm = mysqli_fetch_array($resultPesquisaFarm)){                                                     
                            echo '<option value="'.$rowFarm['idFarm'].'">'.$rowFarm['nomeFarm'].'</option>';
                        }
                    ?>				
                </select>
                            
            </div>

            <div class="form-group">
                <label class="control-label">Validade:<sup>*</sup></label>                            
                    <input type="text" class="form-control validade" name="validadeFarm" id="validadeFarm" value="" />                                 
            </div>
        </div>
        
    
    </div><!-- fecha coluna 1 -->
    
    <div class="col-md-2"><!-- abre coluna 2 -->       
        <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
        <input type="hidden" class="form-control idBenef" name="idBenef" value="" />
    </div><!-- fecha coluna 2 -->
        
          
    <div class="col-md-7"><!-- abre coluna 3 -->
    
        <h3 class="text-primary text-center">Regras para Cadastro da bolsa</h3>
        
        <?php
            include "../control/conexaoBD.php";
            $pesquisaRegraSQL = "SELECT * FROM regraUso";
            $resultPesquisaRegra = mysqli_query($conexao, $pesquisaRegraSQL)
                or die ('ERRO DE PESQUISA NA TABELA regraUso ARQUIVO CadBolsa.php LINHA 63');
            $row[] = mysqli_fetch_array($resultPesquisaRegra);
            echo $row[0][1];
        ?>
        
    </div><!-- fecha coluna 3 -->

</div><!-- fecha linha 1 -->
     <button style="margin-top:20px;" id="salvarBolsa" class="btn btn-sm btn-info">Salvar Bolsa Compras</button>
        
    </form>

    <hr>

    