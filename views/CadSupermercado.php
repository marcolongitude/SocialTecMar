<script src="../js/InsereSupermercado.js"></script>
<script>$(function ()
{ $("[data-toggle='popover']").popover();
});
</script>
<div class="container-fluid" style="margin-top:7%;">
    <div class="panel panel-info">

        <div class="panel-title">

            <h3 class="text-primary" style="margin-left:3%;">Cadastro de Supermercado</h3>    

        </div><!-- fecha panel title -->

        <div class="panel-body">

            <form role="form" id="formSup" action="" method="post">
            
                <div class="row">
                    <div class="col-md-4"><!-- abre coluna 1 -->
                        <label class="control-label" for="nomeSup">Supermercado:<sup>*</sup></label>
                        <input type="text" name="nomeSup" id="nomeSup" value="" class="form-control input-sm" />

                        <label class="control-label" for="telSup">Telefone:<sup>*</sup></label>
                        <input type="text" name="telSup" id="telSup" value="" class="form-control input-sm " />
                        
                        <label class="control-label" for="endSup">Endereço:<sup>*</sup></label>
                        <input type="text" name="endSup" id="endSup" value="" class="form-control input-sm " />
                        
                        <label class="control-label" for="bairroSup">Bairro:<sup>*</sup></label>
                        <input type="text" name="bairroSup" id="bairroSup" value="" class="form-control input-sm " />
                                    
                    </div><!-- fecha coluna 1 -->
                    
                    <div class="col-md-4"><!-- abre coluna 2 -->
                    
                        <label class="control-label" for="cnpjSup">CNPJ:<sup>*</sup></label>
                        <input type="text" name="cnpjSup" id="cnpjSup" value="" class="form-control input-sm " />
                        
                        <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                    
                    </div><!-- fecha coluna 2 -->
                </div><!-- fecha linha 1 -->
                <hr>
                
                <button class="btn btn-sm btn-primary" id="salvarSup" >Salvar Supermercado <span class="glyphicon glyphicon-hdd"></button>
                <a class="btn btn-warning" title="Salvar Ação!"
                    data-container="body" data-toggle="popover" data-placement="right"
                    data-content="Para salvar o cadastro, verifique se está preenchendo todos os campos, quanto mais campos for preenchido, melhor será a busca pelos dados!">
                    ?
                </a>
            </form>
            
            <hr>
        <!-- Inicío tabela de dados gravados no banco -->

                    <div class="table-responsive" style="padding:8px;">
                        <table class="table table-condensed table-hover table-striped">

                            <thead>
                                <tr>                        
                                    <th>Nome do Supermercado</th>
                                    <th>Telefone</th>
                                    <th>CNPJ</th>
                                    <th>Bairro</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="dadosP"></tr> 
                                <?php 
                                
                                    include "../control/conexaoBD.php";
                                    
                                    $pesquisaSupSQL = "SELECT * FROM Supermercado ORDER BY idSup DESC";
                                    $resultPesquisaSup = mysqli_query($conexao, $pesquisaSupSQL)
                                        or die ('ERRO DE PESQUISA NA TABELA Supermercado ARQUIVO CadSupermercado.php LINHA 64');
                                    
                                    while ($rowPesqSup = mysqli_fetch_array($resultPesquisaSup)){
                                                                        
                                ?>
                                    <tr>
                                        <td><?php echo $rowPesqSup['nomeSup'] ;?></td>
                                        <td><?php echo $rowPesqSup['telSup'] ;?></td>
                                        <td><?php echo $rowPesqSup['cnpjSup'] ;?></td>
                                        <td><?php echo $rowPesqSup['bairroSup'] ;?></td>                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table> 
                    </div> <!-- Final da div table-responsive -->

        </div><!-- fecha panel body -->

    </div><!-- fecha panel -->
</div><!-- fecha container -->