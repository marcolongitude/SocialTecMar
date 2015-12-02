<script src="../js/InsereCadastraBeneficio.js"></script>
<script>
    $(document).ready(function() {
        $('#recursivo[data-toggle]').on('click', function() {
            var $target = $($(this).attr('data-toggle'));
            $target.toggle();
        });
        $("[data-toggle='popover']").popover();
    });
</script>
<div class="container-fluid" style="margin-top:7%;">
    <div class="panel panel-info">

        <div class="panel-title">

            <h3 class="text-primary" style="margin-left:3%;">Cadastro de Benefícios</h3>    

        </div><!-- fecha panel title -->

        <div class="panel-body">

            <form role="form" id="formCadBeneficios" action="" method="post">
            
                <div class="row">
                    <div class="col-md-4"><!-- abre coluna 1 -->
                        <label class="control-label" for="nomeBenef">Benefício:<sup>*</sup></label>
                        <input type="text" name="nomeBenef" id="nomeBenef" value="" class="form-control input-sm" />

                        <label class="checkbox" style="margin-left:5%;">
                            <input type="checkbox" name="recursivo" id="recursivo" value="1" data-toggle="#AbreRecursivo" />
                            Benefício Recursivo?
                        </label>
                        
                        <div id="AbreRecursivo" style="display: none;margin-top:14px;">
                
                            <div class="form-group">
                                <label class="label-control" for="tempoRecursivo"><b>Quantidade de Meses:</b></label>                     
                                <select name="tempoRecursivo" id="tempoRecursivo" class="form-control">
                                    <option value="">Escolha uma opção</option>
                                    <option value="1">1 Mês</option>
                                    <option value="2">2 Mêses</option>
                                    <option value="3">3 Mêses</option>
                                    <option value="4">4 Mêses</option>
                                    <option value="5">5 Mêses</option>
                                    <option value="6">6 Mêses</option>
                                    <option value="7">7 Mêses</option>
                                    <option value="8">8 Mêses</option>
                                    <option value="9">9 Mêses</option>
                                    <option value="10">10 Mêses</option>
                                    <option value="11">11 Mêses</option>
                                    <option value="12">12 Mêses</option>                              
                                </select>
                                            
                            </div><!-- fecha form group -->

                        </div><!-- fecha div id AbreRecursivo -->


                    </div><!-- fecha coluna 1 -->
                    <div class="col-md-8"><!-- abre coluna 2 -->
                        <label class="control-label" for="obs">Observação:
                        <textarea id="obs" name="obs" type="textarea" rows="5" cols="120" class="form-control"> </textarea>

                    </div><!-- fecha coluna 2 --> 
                            
                </div><!-- fecha linha 1 -->
                <hr>
                <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                    
                <button class="btn btn-sm btn-primary" id="salvarCadBeneficio">Salvar Benefício <span class="glyphicon glyphicon-hdd"></span></button>
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
                                    <th>Nome do Benefício</th>
                                    <th>Recursivo</th>
                                    <th>Tempo</th>
                                    <th>Descrição</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="dadosCB"></tr> 
                                <?php 
                                
                                    include "../control/conexaoBD.php";
                                    
                                    $pesquisaCadBenefSQL = "SELECT * FROM CadBeneficio ORDER BY idBenef DESC";
                                    $resultPesquisaCadBenef = mysqli_query($conexao, $pesquisaCadBenefSQL)
                                        or die ('ERRO DE PESQUISA NA TABELA CAdBeneficio ARQUIVO CAdBeneficio.php LINHA 93');
                                    
                                    while ($rowPesqCadBenef = mysqli_fetch_array($resultPesquisaCadBenef)){
                                                                        
                                
                                    echo '<tr>';
                                        echo '<td>'.$rowPesqCadBenef['nomeBenef'].'</td>';
                                        if ($rowPesqCadBenef['recursivoBenef'] == 0){
                                            echo '<td>'.'Não'.'</td>';
                                        }else{
                                            echo '<td>'.'Sim'.'</td>';
                                        }
                                        if ($rowPesqCadBenef['tempoRecursivo'] == 0){
                                            echo '<td>'.'Não Controlado'.'</td>';
                                        }else{
                                            echo '<td>'.$rowPesqCadBenef['tempoRecursivo'].' Meses</td>';
                                        }
                                        echo '<td>'.$rowPesqCadBenef['descBenef'].'</td>';                                        
                                    echo '</tr>';
                                } ?>
                            </tbody>
                        </table> 
                    </div> <!-- Final da div table-responsive -->

        </div><!-- fecha panel body -->

    </div><!-- fecha panel -->
</div><!-- fecha container -->