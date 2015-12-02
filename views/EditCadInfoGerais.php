<?php
    $pesquisaInfoGeraisSQL = "SELECT * FROM InfoGeralBenef WHERE Beneficiario_idBenef = $idBenef";
    $resultPesquisaInfoGerais = mysqli_query($conexao, $pesquisaInfoGeraisSQL)
        or die ('ERRO DE PESQUISA NA TABELA InfoGeralBenef ARQUIVO EditCadInfoGerais.php VARIAVEL pesquisaInfoGeraisSQL linha 3');
    while ($rowPesqInfoGerais = mysqli_fetch_array($resultPesquisaInfoGerais)){
?>
<form action="" method="post" id="formInfoGerais" role="form">
    <div class="row" style="margin-top:40px;">
        
        <div class="col-md-6">
           
            <b class="text-info">Moradia:</b>
            <?php
                if ($rowPesqInfoGerais['MoradiaInfo'] == 'Alugada') {
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaAlugada" value="Alugada" checked/>Alugada</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaPropria" value="Própria" />Própria</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaCedida" value="Cedida" />Cedida</label>';
                    echo '</div>';
                }
                if ($rowPesqInfoGerais['MoradiaInfo'] == 'Própria') {
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaAlugada" value="Alugada" />Alugada</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaPropria" value="Própria" checked/>Própria</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaCedida" value="Cedida" />Cedida</label>';
                    echo '</div>';
                }
                if ($rowPesqInfoGerais['MoradiaInfo'] == 'Cedida') {
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaAlugada" value="Alugada" />Alugada</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaPropria" value="Própria" />Própria</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="moradia" id="moradiaCedida" value="Cedida" checked/>Cedida</label>';
                    echo '</div>';
                }
            ?>
            <hr>
            <b class="text-info">Medicamento Controlado:</b>
            <?php
                if ($rowPesqInfoGerais['RemControlado'] == 'Sim'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="medicamentoControlado" value="Sim" checked/>Sim</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="medicamentoControlado" value="Não" />Não</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<input type="text" name="medicamentos" class="form-control input-sm"  value='.$rowPesqInfoGerais['DescRemControlado'].' placeholder="Quais medicamentos?" />';                           
                    echo '</div>';
                }
                if ($rowPesqInfoGerais['RemControlado'] == 'Não'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="medicamentoControlado" value="Sim" />Sim</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="medicamentoControlado" value="Não" checked/>Não</label>';
                    echo '</div>';
                    echo '<div class="radio-inline">';
                        echo '<input type="text" name="medicamentos" class="form-control input-sm"  value="'.$rowPesqInfoGerais['DescRemControlado'].'" placeholder="Quais medicamentos?" />';                           
                    echo '</div>';
                }
            ?>
            <hr>
            <b class="text-info">Ajuda adquirir Medicamnetos:</b>
            <?php
                if ($rowPesqInfoGerais['AjudaCompraRem'] == 'Sim'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="ajudaMedicamento" value="Sim" checked />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="ajudaMedicamento" value="Não" />Não</label>';
                    echo '</div>';
                }
                if ($rowPesqInfoGerais['AjudaCompraRem'] == 'Não'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="ajudaMedicamento" value="Sim" />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="ajudaMedicamento" value="Não" checked />Não</label>';
                    echo '</div>';
                }
            ?>
            <hr>
            <b class="text-info">Farmácia Pública Municipal:</b>
            <?php
                if ($rowPesqInfoGerais['FarmaciaMunicipal'] == 'Sim'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Sim" checked />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Não" />Não</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Outros" />Outros</label>';
                    echo '</div>';
                }
                if ($rowPesqInfoGerais['FarmaciaMunicipal'] == 'Não'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Sim" />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Não" checked />Não</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Outros" />Outros</label>';
                    echo '</div>';
                }
                if ($rowPesqInfoGerais['FarmaciaMunicipal'] == 'Outros'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Sim" />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Não" />Não</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="farmaciaMunicipal" value="Outros" checked />Outros</label>';
                    echo '</div>';
                }
            ?>
            <hr>
            <b class="text-info">Recebe Benefício:</b>
            <?php
                if ($rowPesqInfoGerais['RecebeBenef'] == 'Sim'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="beneficio" value="Sim" checked />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="beneficio" value="Não" />Não</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                            echo '<input type="text" class="form-control input-sm" placeholder="Quais Beneficios?" name="beneficios" value="'.$rowPesqInfoGerais['DescRecebeBenef'].'" />'; 
                    echo '</div>';
                }
                if ($rowPesqInfoGerais['RecebeBenef'] == 'Não'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="beneficio" value="Sim" />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="beneficio" value="Não" checked />Não</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                            echo '<input type="text" class="form-control input-sm" placeholder="Quais Beneficios?" name="beneficios" value="'.$rowPesqInfoGerais['DescRecebeBenef'].'" />'; 
                    echo '</div>';
                }
            ?>
            <hr>
            <b class="text-info">Fez algum Curso:</b>
            <?php
                if ($rowPesqInfoGerais['FazCurso'] == 'Sim'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="curso" value="Sim" checked />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="curso" value="Não" />Não</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                            echo '<input type="text" class="form-control input-sm" placeholder="Quais Cursos?" name="cursos" value="'.$rowPesqInfoGerais['DescFazCurso'].'" />'; 
                    echo '</div>';
                }
                if ($rowPesqInfoGerais['FazCurso'] == 'Não'){
                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="curso" value="Sim" />Sim</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                        echo '<label><input type="radio" name="curso" value="Não" checked />Não</label>';
                    echo '</div>';

                    echo '<div class="radio-inline">';
                            echo '<input type="text" class="form-control input-sm" placeholder="Quais Cursos?" name="cursos" value="'.$rowPesqInfoGerais['DescFazCurso'].'" />'; 
                    echo '</div>';
                }
            ?>
        </div>
            
            <div class="col-md-6">
                <div class="col-md-6">
            
                    <label class="control-label">Aluguel:</label>
                    <input class="form-control input-sm" id="aluguel" data-thousands="." data-decimal="," name="aluguel" value="<?php echo $rowPesqInfoGerais['AluguelCusto'] ;?>" />

                    <label class="control-label">Combustível:</label>
                    <input class="form-control input-sm" id="combustivel" data-thousands="." data-decimal="," name="combustivel" value="<?php echo $rowPesqInfoGerais['CombustivelCusto'];?>" />

                    <label class="control-label">Energia:</label>
                    <input class="form-control input-sm" id="energia" data-thousands="." data-decimal="," name="energia" value="<?php echo $rowPesqInfoGerais['EnergiaCusto'] ;?>" />

                    <label class="control-label">Gás:</label>
                    <input class="form-control input-sm" id="gas" data-thousands="." data-decimal="," name="gas" value="<?php echo $rowPesqInfoGerais['GasCusto'] ;?>" />

                    <label class="control-label">Prestação:</label>
                    <input class="form-control input-sm" id="prestacao" data-thousands="." data-decimal="," name="prestacao" value="<?php echo $rowPesqInfoGerais['PrestacaoCusto'] ;?>" />

                    <label class="control-label">Alimentação:</label>
                    <input class="form-control input-sm" id="alimentacao" data-thousands="." data-decimal="," name="alimentacao" value="<?php echo $rowPesqInfoGerais['AlimentacaoCusto'] ;?>" />
                
                </div>
                <div class="col-md-6">
                
                    <label class="control-label">Água:</label>
                    <input class="form-control input-sm" id="agua" data-thousands="." data-decimal="," name="agua" value="<?php echo $rowPesqInfoGerais['AguaCusto'] ;?>" />

                    <label class="control-label">Financiamento:</label>
                    <input class="form-control input-sm" id="financiamento" data-thousands="." data-decimal="," name="financiamento" value="<?php echo $rowPesqInfoGerais['FinanciamentoCusto'] ;?>" />

                    <label class="control-label">Medicamento:</label>
                    <input class="form-control input-sm" id="medicamento" data-thousands="." data-decimal="," name="medicamento" value="<?php  echo $rowPesqInfoGerais['RemedioCusto'];?>" />

                    <label class="control-label">Telefone:</label>
                    <input class="form-control input-sm" id="telefone" data-thousands="." data-decimal="," name="telefone" value="<?php echo $rowPesqInfoGerais['TelefoneCusto'] ;?>" />

                    <label class="control-label">Outras Despesas:</label>
                    <input class="form-control input-sm" id="outrasDespesas" data-thousands="." data-decimal="," name="outrasDespesas" value="<?php echo $rowPesqInfoGerais['OutrosCustos'] ;?>" />
                    <h3 id="total">Total: </h3>
                    
                    
                    
                </div>               
            <?php }?>
            </div>
    </div>
    <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                                 
    <input type="hidden" class="form-control idBenef" name="idBenef" value="" />
    <br><hr>
    <button id="salvarInfoGerais" name="salvar" type="button" class="btn btn-sm btn-primary" style="margin-left:22px;">Salvar Informações Gerais <span class="glyphicon glyphicon-tags"></span></button>
</form>