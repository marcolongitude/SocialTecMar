<?php
    $pesquisaBeneficioSQL = "SELECT * FROM Beneficio WHERE Beneficiario_idBenef = $idBenef";
    $resultPesquisaBeneficio = mysqli_query($conexao, $pesquisaBeneficioSQL)
        or die ('ERRO DE PESQUISA NA TABELA Beneficio ARQUIVO EditCadBeneficio.php VARIAVEL pesquisaBeneficioSQL linha 3');

    while ($rowPesqBeneficio = mysqli_fetch_array($resultPesquisaBeneficio)){
?>

<form action="" method="" id="formBeneficio">
    <div class="row"><!-- Abre linha -->
        <div class="col-md-4"><!-- Abre coluna 1 -->
    
            <label class="checkbox" style="margin-left:5%;">
                <?php 
                    if ($rowPesqBeneficio['Documentos'] != '' ){
                        echo '<input type="checkbox" name="segundaViaDocumentos" id="segundaViaDocumentos" value="Segunda Via Documentos" checked />';
                    }else{
                        echo '<input type="checkbox" name="segundaViaDocumentos" id="segundaViaDocumentos" value="Segunda Via Documentos" />';
                    }
                ?>
                Segunda via de Documentos
            </label><hr>

            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['ViagemIdoso'] != '') {
                        echo '<input type="checkbox" name="viagemIdoso" id="viagemIdoso" value="Carteira de Viagem para Idosos" checked/>';
                    }else{
                        echo '<input type="checkbox" name="viagemIdoso" id="viagemIdoso" value="Carteira de Viagem para Idosos"/>';
                    }
                ?>
                Impressão de Carteira de Viagem ao Idoso
            </label><hr>

            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['PasseLDeficientes'] != '') {
                        echo '<input type="checkbox" name="passeLivre" id="passeLivre" value="Passe Livre Deficientes" checked/>';
                    }else{
                        echo '<input type="checkbox" name="passeLivre" id="passeLivre" value="Passe Livre Deficientes" />';
                    }
                ?>
                Passe Livre para Deficientes
            </label><hr>

            <label class="checkbox" style="margin-left:5%;">
                <?php 
                    if ($rowPesqBeneficio['Passagens'] != ''){
                        echo '<input type="checkbox" name="passagensOutrasCidades" id="passagensOutrasCidades" value="Passagens para outras cidades" checked/>';   
                    }else{
                        echo '<input type="checkbox" name="passagensOutrasCidades" id="passagensOutrasCidades" value="Passagens para outras cidades" />';
                    }
                ?>
                Passagens para outros Municípios
            </label><hr>
            
            <!-- Inicia coluna para diminuir tamanho do select "Procurar como dimensionar o widht " -->
            
            <label class="control-label" for="assistenciaJuridica"><b>Assistèncias Jurídica:</b></label>
                <select name="assistenciaJuridica" id="assistenciaJuridica" class="form-control input-sm">
                    <?php
                        if($rowPesqBeneficio['AssJuridica'] == ''){
                            echo '<option value="">Escolha uma opção!</option>';
                            echo '<option value="Divorcio">Divórcio</option>';
                            echo '<option value="Guarda">Guarda</option>';
                            echo '<option value="Investigacao de Parternidade">Investiga Parternidade</option>';
                            echo '<option value="Alimentos">Alimentos</option>';
                            echo '<option value="Execucao Alimentos">Execução Alimentos</option>';
                            echo '<option value="Regulamentação Visita">Regulamentação Visita</option>';
                        }
                        if($rowPesqBeneficio['AssJuridica'] == 'Divorcio'){
                            echo '<option value="Divorcio">Divórcio</option>';
                            echo '<option value="Guarda">Guarda</option>';
                            echo '<option value="Investigacao de Parternidade">Investiga Parternidade</option>';
                            echo '<option value="Alimentos">Alimentos</option>';
                            echo '<option value="Execucao Alimentos">Execução Alimentos</option>';
                            echo '<option value="Regulamentação Visita">Regulamentação Visita</option>';
                        }
                        if($rowPesqBeneficio['AssJuridica'] == 'Guarda'){
                            echo '<option value="Guarda">Guarda</option>';
                            echo '<option value="Divorcio">Divórcio</option>';                            				
                            echo '<option value="Investigacao de Parternidade">Investiga Parternidade</option>';
                            echo '<option value="Alimentos">Alimentos</option>';
                            echo '<option value="Execucao Alimentos">Execução Alimentos</option>';
                            echo '<option value="Regulamentação Visita">Regulamentação Visita</option>';
                        }
                        if($rowPesqBeneficio['AssJuridica'] == 'Investigacao de Paternidade'){
                            echo '<option value="Investigacao de Parternidade">Investiga Parternidade</option>';
                            echo '<option value="Guarda">Guarda</option>';
                            echo '<option value="Divorcio">Divórcio</option>';                        
                            echo '<option value="Alimentos">Alimentos</option>';
                            echo '<option value="Execucao Alimentos">Execução Alimentos</option>';
                            echo '<option value="Regulamentação Visita">Regulamentação Visita</option>';
                        }
                        if($rowPesqBeneficio['AssJuridica'] == 'Alimentos'){
                            echo '<option value="Alimentos">Alimentos</option>';
                            echo '<option value="Investigacao de Parternidade">Investiga Parternidade</option>';
                            echo '<option value="Guarda">Guarda</option>';
                            echo '<option value="Divorcio">Divórcio</option>';                      
                            echo '<option value="Execucao Alimentos">Execução Alimentos</option>';
                            echo '<option value="Regulamentação Visita">Regulamentação Visita</option>';
                        }
                        if($rowPesqBeneficio['AssJuridica'] == 'Execucao Alimentos'){
                            echo '<option value="Execucao Alimentos">Execução Alimentos</option>';
                            echo '<option value="Alimentos">Alimentos</option>';
                            echo '<option value="Investigacao de Parternidade">Investiga Parternidade</option>';
                            echo '<option value="Guarda">Guarda</option>';
                            echo '<option value="Divorcio">Divórcio</option>';                            
                            echo '<option value="Regulamentação Visita">Regulamentação Visita</option>';
                        }
                        if($rowPesqBeneficio['AssJuridica'] == 'Regulamentação Visita'){
                            echo '<option value="Regulamentação Visita">Regulamentação Visita</option>';
                            echo '<option value="Execucao Alimentos">Execução Alimentos</option>';
                            echo '<option value="Alimentos">Alimentos</option>';
                            echo '<option value="Investigacao de Parternidade">Investiga Parternidade</option>';
                            echo '<option value="Guarda">Guarda</option>';
                            echo '<option value="Divorcio">Divórcio</option>';                           
                        }
                        
                    ?>    
                </select><hr>           
            
        </div><!-- Fecha coluna 1> -->
        
        <div class="col-md-4"><!-- Abre coluna 2 -->
        
            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['AuxFuneral'] != ''){
                        echo '<input type="checkbox" name="auxilioFuneral" id="auxilioFuneral" value="Auxílio Funeral" checked/>';
                    }else{
                        echo '<input type="checkbox" name="auxilioFuneral" id="auxilioFuneral" value="Auxílio Funeral" />';
                    }
                ?>
                Auxílio Funeral
            </label><hr>

            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['AuxNatalidade'] != ''){
                        echo '<input type="checkbox" name="auxilioNatalidade" id="auxilioNatalidade" value="Auxílio Natalidade" checked/>';
                    }else{
                        echo '<input type="checkbox" name="auxilioNatalidade" id="auxilioNatalidade" value="Auxílio Natalidade" />';
                    }
                ?>
                Auxílio Natalidade (kit Gestante)
            </label><hr>

            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['CestaEmergencial'] != ''){
                        echo '<input type="checkbox" name="cestaEmergencial" id="cestaEmergencial" value="Cesta Emergencial" checked/>';
                    }else{
                        echo '<input type="checkbox" name="cestaEmergencial" id="cestaEmergencial" value="Cesta Emergencial" />';
                    }
                ?>
                Cesta Básica Emergencial
            </label><hr>

            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['DoaCobertores'] != ''){
                        echo '<input type="checkbox" name="cobertores" id="cobertores" value="Doação de Cobertores" checked/>';
                    }else{
                        echo '<input type="checkbox" name="cobertores" id="cobertores" value="Doação de Cobertores" />';
                    }
                ?>
                Doação de Cobertores
            </label><hr>
            
            <div class="col-md-6">
                <label class="control-label"><b>2º Via Documentos:</b></label>
                <select name="segundaVia" id="segundaVia" class="form-control input-sm">
                    <?php
                        if ($rowPesqBeneficio['Documentos'] == ''){                                                                 
                            echo '<option value="">Escolha uma Opção</option>';
                            echo '<option value="Certidao de Nascimento">Certidão de Nascimento</option>';
                            echo '<option value="Certidao de Casamento">Certidão de Casamento</option>';				
                            echo '<option value="Certidao de Obito">Certidão de Óbito</option>';
                        }
                        if ($rowPesqBeneficio['Documentos'] == 'Certidao de Nascimento'){                                               
                            echo '<option value="Certidao de Nascimento">Certidão de Nascimento</option>';
                            echo '<option value="Certidao de Casamento">Certidão de Casamento</option>';				
                            echo '<option value="Certidao de Obito">Certidão de Óbito</option>';
                        }
                        if ($rowPesqBeneficio['Documentos'] == 'Certidao de Casamento'){                                               
                            echo '<option value="Certidao de Casamento">Certidão de Casamento</option>';
                            echo '<option value="Certidao de Nascimento">Certidão de Nascimento</option>';                            		
                            echo '<option value="Certidao de Obito">Certidão de Óbito</option>';
                        }
                        if ($rowPesqBeneficio['Documentos'] == 'Certidao de Obito'){                                               
                            echo '<option value="Certidao de Obito">Certidão de Óbito</option>';
                            echo '<option value="Certidao de Casamento">Certidão de Casamento</option>';
                            echo '<option value="Certidao de Nascimento">Certidão de Nascimento</option>';                             
                        }
                    ?>
                </select><hr>
            </div>
            
            <div class="col-md-6">
            <label class="control-label" for="segundaViaOutrascidades"><b>Outras Cidades:</b></label>
                <select name="segundaViaOutrascidades" id="segundaViaOutrascidades" class="form-control input-sm">
                    <?php
                        if ($rowPesqBeneficio['Documentos'] == ''){                                                                 
                            echo '<option value="">Escolha uma Opção</option>';
                            echo '<option value="Certidao de Nascimento">Certidão de Nascimento</option>';
                            echo '<option value="Certidao de Casamento">Certidão de Casamento</option>';				
                            echo '<option value="Certidao de Obito">Certidão de Óbito</option>';
                        }
                        if ($rowPesqBeneficio['Documentos'] == 'Certidao de Nascimento'){                                               
                            echo '<option value="Certidao de Nascimento">Certidão de Nascimento</option>';
                            echo '<option value="Certidao de Casamento">Certidão de Casamento</option>';				
                            echo '<option value="Certidao de Obito">Certidão de Óbito</option>';
                        }
                        if ($rowPesqBeneficio['Documentos'] == 'Certidao de Casamento'){                                               
                            echo '<option value="Certidao de Casamento">Certidão de Casamento</option>';
                            echo '<option value="Certidao de Nascimento">Certidão de Nascimento</option>';                            		
                            echo '<option value="Certidao de Obito">Certidão de Óbito</option>';
                        }
                        if ($rowPesqBeneficio['Documentos'] == 'Certidao de Obito'){                                               
                            echo '<option value="Certidao de Obito">Certidão de Óbito</option>';
                            echo '<option value="Certidao de Casamento">Certidão de Casamento</option>';
                            echo '<option value="Certidao de Nascimento">Certidão de Nascimento</option>';                             
                        }
                    ?>
                </select><hr>
            </div>
            
        </div><!-- Fecha coluna 2 -->
        
        <div class="col-md-4"><!-- Abre coluna 3 -->
        
            <label class="checkbox" style="margin-left:5%;">
                <?php
                     if ($rowPesqBeneficio['CestaMensal'] != ''){
                        echo '<input type="checkbox" name="cestaMensal" id="cestaMensal" value="Cesta Básica Mensal" checked/>';
                     }else{
                        echo '<input type="checkbox" name="cestaMensal" id="cestaMensal" value="Cesta Básica Mensal" />';
                     }
                ?>
                Cesta Básica Mensal
            </label><hr>

            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['AluguelSocial'] != ''){
                        echo '<input type="checkbox" name="aluguelSocial" id="aluguelSocial" value="Aluguel Social" checked/>';
                    }else{
                        echo '<input type="checkbox" name="aluguelSocial" id="aluguelSocial" value="Aluguel Social" />';
                    }
                ?>
                Aluguel Social
            </label><hr>
             
            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['HortaCom'] != ''){
                        echo '<input type="checkbox" name="hortaComunitaria" id="hortaComunitaria" value="Horta Comunitária" checked/>';
                    }else{
                        echo '<input type="checkbox" name="hortaComunitaria" id="hortaComunitaria" value="Horta Comunitária" />';
                    }
                ?>
                Horta Comunitária
            </label><hr>

            <label class="checkbox" style="margin-left:5%;">
                <?php
                    if ($rowPesqBeneficio['LavouraCom'] != ''){
                        echo '<input type="checkbox" name="lavouraComunitaria" id="lavouraComunitaria" value="Lavoura Comunitária" checked/>';
                    }else{
                        echo '<input type="checkbox" name="lavouraComunitaria" id="lavouraComunitaria" value="Lavoura Comunitária" />';
                    }
                ?>
                Lavoura Comunitária
            </label><hr>
                
            <label class="control-label" for="fezCurso"><b>Fazer Curso?</b></label>
                <select name="fezCurso" id="fezCurso" class="form-control input-sm">
                    <?php
                        if ($rowPesqBeneficio['curso'] == ''){
                            echo '<option value="">Escolha uma Opção</option>';
                            echo '<option value="Trançado de Fitas">Trançado de Fitas</option>';
                            echo '<option value="PatchColagem">PatchColagem</option>';				
                            echo '<option value="Pintura">Pintura</option>';
                        }
                        if ($rowPesqBeneficio['curso'] == 'Trançado de Fitas'){                            
                            echo '<option value="Trançado de Fitas">Trançado de Fitas</option>';
                            echo '<option value="PatchColagem">PatchColagem</option>';				
                            echo '<option value="Pintura">Pintura</option>';
                        }
                        if ($rowPesqBeneficio['curso'] == 'PatchColagem'){                            
                            echo '<option value="PatchColagem">PatchColagem</option>';
                            echo '<option value="Trançado de Fitas">Trançado de Fitas</option>';                            				
                            echo '<option value="Pintura">Pintura</option>';
                        }
                        if ($rowPesqBeneficio['curso'] == 'Pintura'){                            
                            echo '<option value="Pintura">Pintura</option>';
                            echo '<option value="PatchColagem">PatchColagem</option>';
                            echo '<option value="Trançado de Fitas">Trançado de Fitas</option>';                            				                            }
                    ?>
                </select><hr>
            
        </div><!-- Fecha coluna 3 -->
        
        <button id="salvarBeneficio" name="salvar" type="button" class="btn btn-sm btn-primary" style="margin-left:22px;">Salvar Benefício <span class="glyphicon glyphicon-hdd"></span></button>
        
    </div><!-- Fecha linha-->
    
    <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                                 
    <input type="hidden" class="form-control idBenef" name="idBenef" value="" />

</form><?php }?>