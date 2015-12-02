<script src="../js/InsereFarmacia.js"></script>
<script>$(function ()
{ $("[data-toggle='popover']").popover();
});
</script>
<div class="container-fluid" style="margin-top:7%;">
    <div class="panel panel-info">

        <div class="panel-title">

            <h3 class="text-primary" style="margin-left:3%;">Cadastro de Farmácia</h3>    

        </div><!-- fecha panel title -->

        <div class="panel-body">

            <form role="form" id="formFarm" action="" method="post">
            
                <div class="row">
                    <div class="col-md-4"><!- abre coluna 1 -->
                        <label class="control-label" for="nomeFarm">Farmácia:<sup>*</sup></label>
                        <input type="text" name="nomeFarm" id="nomeFarm" value="" class="form-control input-sm" />

                        <label class="control-label" for="telFarm">Telefone:<sup>*</sup></label>
                        <input type="text" name="telFarm" id="telFarm" value="" class="form-control input-sm " />
                        
                        <label class="control-label" for="endFarm">Endereço:<sup>*</sup></label>
                        <input type="text" name="endFarm" id="endFarm" value="" class="form-control input-sm " />
                        
                        <label class="control-label" for="bairroFarm">Bairro:<sup>*</sup></label>
                        <input type="text" name="bairroFarm" id="bairroFarm" value="" class="form-control input-sm " />
                                    
                    </div><!-- fecha coluna 1 -->
                    
                    <div class="col-md-4"><!-- abre coluna 2 -->
                    
                        <label class="control-label" for="cnpjFarm">CNPJ:<sup>*</sup></label>
                        <input type="text" name="cnpjFarm" id="cnpjFarm" value="" class="form-control input-sm " />
                        
                        <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                    
                    </div><!-- fecha coluna 2 -->
                </div><!-- fecha linha 1 -->
                <hr>
                <button class="btn btn-sm btn-primary" id="salvarFarm">Salvar Farmácia <span class="glyphicon glyphicon-hdd"></button>
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
                                    <th>Nome da Farmácia</th>
                                    <th>Telefone</th>
                                    <th>CNPJ</th>
                                    <th>Bairro</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="dadosF"></tr> 
                                <?php 
                                
                                    include "../control/conexaoBD.php";
                                    
                                    $pesquisaFarmSQL = "SELECT * FROM Farmacia ORDER BY idFarm DESC";
                                    $resultPesquisaFarm = mysqli_query($conexao, $pesquisaFarmSQL)
                                        or die ('ERRO DE PESQUISA NA TABELA Farmacia ARQUIVO CadFarmacia.php LINHA 64');
                                    
                                    while ($rowPesqFarm = mysqli_fetch_array($resultPesquisaFarm)){
                                                                        
                                ?>
                                    <tr>
                                        <td><?php echo $rowPesqFarm['nomeFarm'] ;?></td>
                                        <td><?php echo $rowPesqFarm['telFarm'] ;?></td>
                                        <td><?php echo $rowPesqFarm['cnpjFarm'] ;?></td>
                                        <td><?php echo $rowPesqFarm['bairroFarm'] ;?></td>                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table> 
                    </div> <!-- Final da div table-responsive -->

        </div><!-- fecha panel body -->

    </div><!-- fecha panel -->
</div><!-- fecha container -->