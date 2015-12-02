<?php

    include "../control/conexaoBD.php";
    include "../classes/inverteData.php";
    $idBenef = mysqli_real_escape_string($conexao, trim($_GET['idBenef']));

    $pesquisaBeneficiario = "SELECT * FROM Beneficiario WHERE idBenef = $idBenef";
    $resultPesquisaBeneficiario = mysqli_query($conexao, $pesquisaBeneficiario)
        or die ('ERRO DE PESQUISA TABELA Beneficiario ARQ EditCadBeneficiario.php LINHA 7');
    while ($rowPesquisaBenef = mysqli_fetch_array($resultPesquisaBeneficiario)){

?>
    
    <form id="formBenef" action="../models/atualiza/AtualizaBeneficiario.php" method="post" role="form" >
				<div class="panel" style="margin-top:7%;">
                    <div class="panel-header">
                        <h3 style="margin-left:2%;">Atualiza Cadastro de Beneficiário</h3><hr>
                    </div>        
						<div class="form-group">
						
						  <div class="row input-group-sm" id="cadBenef">
                              <fieldset>
					           		
						      <div class="col-md-3 input-group-sm"><!--abre div coluna 1-->
							     
							     <label class="control-label" for="nomeBenef"><b>Beneficiario*:</b></label>				
                                 <input class="form-control" id="nomeBenef" name="nomeBenef" value="<?php echo $rowPesquisaBenef['nomeBenef'] ;?>" type="text" autofocus="yes" />
                                 <label class="control-label" for="dnascBenef"><b>Data Nascimento:</b></label>			
                                 <input class="form-control" id="dnascBenef" name="dnascBenef" value="<?php echo inverteDataBr($rowPesquisaBenef['dnascBenef']) ;?>" type="text"/>
                                  
                                 <label class="control-label" for="cpfBenef"><b>CPF:</b></label>			
                                 <input class="form-control" id="cpfBenef" name="cpfBenef" value="<?php echo $rowPesquisaBenef['cpfBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="ecivilBenef"><b>Estado Civil:</b></label>					                       
                                 <select name="ecivilBenef" id="ecivilBenef" class="form-control">
                                     <?php
                                            if($rowPesquisaBenef['eCivilBenef'] == 'solteiro' ){
                                                echo '<option value="solteiro">Solteiro</option>';
                                                echo '<option value="Casado">Casado</option>';				
                                            }
                                            if($rowPesquisaBenef['eCivilBenef'] == 'Casado' ){
                                                echo '<option value="Casado">Casado</option>';              
                                                echo '<option value="solteiro">Solteiro</option>';                                                
                                            }
                                     ?>
                                 </select>    
                                 
                                 <label class="control-label" for="sexoBenef"><b>Sexo:</b></label>					 
                                <select name="sexoBenef" id="sexoBenef" class="form-control">
                                    <?php
                                        if ($rowPesquisaBenef['sexoBenef'] == 'masculino' ){
                                            echo '<option value="masculino">Masculino</option>';
                                            echo '<option value="feminino">Feminino</option>';				
                                        }
                                        if ($rowPesquisaBenef['sexoBenef'] == 'feminino' ){
                                            echo '<option value="feminino">Feminino</option>';              
                                            echo '<option value="masculino">Masculino</option>';                                            
                                        }
                                    ?>
                                </select>       
                                  
                              </div><!--fecha div coluna 1 -->     
                                
                              <div class="col-md-2 input-group-sm"><!--abre div coluna 2-->
                                                              
                                 <label class="control-label" for="tituloBenef"><b>Título Eleitoral:</b></label>			
                                 <input class="form-control" id="tituloBenef" name="tituloBenef" value="<?php echo $rowPesquisaBenef['tituloBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="zonaBenef"><b>Zona Eleitoral:</b></label>			
                                 <input class="form-control" id="zonaBenef" name="zonaBenef" value="<?php echo $rowPesquisaBenef['zonaTBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="secaoBenef"><b>Seção Eleitoral:</b></label>			
                                 <input class="form-control" id="secaoBenef" name="secaoBenef" value="<?php echo $rowPesquisaBenef['secaoTBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="cidadeTBenef"><b>Cidade Eleitoral:</b></label>			
                                 <input class="form-control" id="cidadeTBenef" name="cidadeTBenef" value="<?php echo $rowPesquisaBenef['cidadeTBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="segundaVia"><b>Estado: <?php echo $rowPesquisaBenef['estadoTBenef'] ;?></b></label>
                                        <select name="estadosTBenef" id="estadosTBenef" class="form-control input-sm">
                                            <option value="<?php echo $rowPesquisaBenef['estadoTBenef'] ;?>">Escolha uma Opção</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MG">Minas Gerais</option>				
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                                                                                                                                                </div><!--fecha div coluna 2 --> 
                                  
                              <div class="col-md-2 input-group-sm"><!--abre div coluna 3-->
                                  
                                 <label class="control-label" for="escolaridadeBenef"><b>Escolaridade:</b></label>				 
                                 <select name="escolaridadeBenef" id="escolaridadeBenef" class="form-control">
                                    <?php
                                        if ($rowPesquisaBenef['escolaBenef'] == ''){
                                            echo '<option value="">Escolha uma opção</option>';                                            
                                            echo '<option value="Analfabeto">Analfabeto</option>';
                                            echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                            echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                            echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                            echo '<option value="Ensino Médio">Ensino Médio</option>';
                                            echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                            echo '<option value="Curso Superior">Curso Superior</option>';
                                        }
                                        if ($rowPesquisaBenef['escolaBenef'] == 'Analfabeto'){                                            
                                            echo '<option value="Analfabeto">Analfabeto</option>';
                                            echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                            echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                            echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>'; 
                                            echo '<option value="Ensino Médio">Ensino Médio</option>';
                                            echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                            echo '<option value="Curso Superior">Curso Superior</option>';
                                        }
                                        if ($rowPesquisaBenef['escolaBenef'] == 'Ensino Fundamental Incompleto'){                                            
                                            echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                            echo '<option value="Analfabeto">Analfabeto</option>';
                                            echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                            echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';                                            
                                            echo '<option value="Ensino Médio">Ensino Médio</option>';
                                            echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                            echo '<option value="Curso Superior">Curso Superior</option>';
                                        }
                                        if ($rowPesquisaBenef['escolaBenef'] == 'Ensino Fundamental'){                                            
                                            echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                            echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                            echo '<option value="Analfabeto">Analfabeto</option>';                                            
                                            echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';                                            
                                            echo '<option value="Ensino Médio">Ensino Médio</option>';
                                            echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                            echo '<option value="Curso Superior">Curso Superior</option>';
                                        }
                                        if ($rowPesquisaBenef['escolaBenef'] == 'Ensino Médio Incompleto'){                                            
                                            echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                            echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                            echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                            echo '<option value="Analfabeto">Analfabeto</option>';                                                                                        
                                            echo '<option value="Ensino Médio">Ensino Médio</option>';
                                            echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                            echo '<option value="Curso Superior">Curso Superior</option>';
                                        }
                                        if ($rowPesquisaBenef['escolaBenef'] == 'Ensino Médio'){                                            
                                            echo '<option value="Ensino Médio">Ensino Médio</option>';
                                            echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                            echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                            echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                            echo '<option value="Analfabeto">Analfabeto</option>';                                 
                                            echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                            echo '<option value="Curso Superior">Curso Superior</option>';
                                        }
                                        if ($rowPesquisaBenef['escolaBenef'] == 'Profissionalizante'){                                            
                                            echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                            echo '<option value="Ensino Médio">Ensino Médio</option>';
                                            echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                            echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                            echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                            echo '<option value="Analfabeto">Analfabeto</option>';                                    
                                            echo '<option value="Curso Superior">Curso Superior</option>';
                                        }
                                        if ($rowPesquisaBenef['escolaBenef'] == 'Curso Superior'){                                            
                                            echo '<option value="Curso Superior">Curso Superior</option>';
                                            echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                            echo '<option value="Ensino Médio">Ensino Médio</option>';
                                            echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                            echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                            echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                            echo '<option value="Analfabeto">Analfabeto</option>';                                        
                                        }    
                                     ?>
                                 </select>
                                  
                                 <label class="control-label" for="profissionalBenef"><b>Trabalhando?</b></label>
                                 <select name="profissionalBenef" id="profissionalBenef" class="form-control">
                                    <?php
                                        if($rowPesquisaBenef['trabBenef'] == ''){
                                            echo '<option value="">Escolha uma opção</option>';   
                                            echo '<option value="Desempregado">Desempregado</option>';
                                            echo '<option value="Empregado">Empregado</option>';	
                                            echo '<option value="Mercado Informal">Mercado Informal</option>';                                  
                                        }
                                        if($rowPesquisaBenef['trabBenef'] == 'Desempregado'){                                               
                                            echo '<option value="Desempregado">Desempregado</option>';
                                            echo '<option value="Empregado">Empregado</option>';    
                                            echo '<option value="Mercado Informal">Mercado Informal</option>';                                  
                                        }
                                        if($rowPesquisaBenef['trabBenef'] == 'Empregado'){
                                            echo '<option value="Empregado">Empregado</option>';                                            
                                            echo '<option value="Desempregado">Desempregado</option>';                                                
                                            echo '<option value="Mercado Informal">Mercado Informal</option>';                                  
                                        }
                                        if($rowPesquisaBenef['trabBenef'] == 'Mercado Informal'){                                               
                                            echo '<option value="Mercado Informal">Mercado Informal</option>';
                                            echo '<option value="Desempregado">Desempregado</option>';
                                            echo '<option value="Empregado">Empregado</option>';                                                                             
                                        }
                                    ?>
                                 </select>
                                  
                                 <label class="control-label" for="cargoBenef"><b>Cargo:</b></label>						
                                 <input class="form-control" id="cargoBenef" name="cargoBenef" value="<?php echo $rowPesquisaBenef['cargoBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="empresaBenef"><b>Empresa:</b></label>						
                                 <input class="form-control" id="empresaBenef" name="empresaBenef" value="<?php echo $rowPesquisaBenef['empresaBenef'] ;?>" type="text"/>
                                                                
                                 <label class="control-label" for="tempoBenef"><b>Tempo na Cidade:</b></label>				
                                 <input class="form-control" id="tempoBenef" name="tempoBenef" value="<?php echo $rowPesquisaBenef['tempoBenef'] ;?>" type="text"/>
								 							     																			                  </div><!--fecha div coluna 3 -->                          
                                  
                              <div class="col-md-3 input-group-sm"><!--abre div coluna 2-->
                                 
                                 <label class="control-label" for="endBenef"><b>Endereço*:</b></label>						
                                 <input class="form-control" id="endBenef" name="endBenef" value="<?php echo $rowPesquisaBenef['endBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="bairroBenef"><b>Bairro:</b></label>					
                                 <input class="form-control" id="bairroBenef" name="bairroBenef" value="<?php echo $rowPesquisaBenef['bairroBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="cidadeBenef"><b>Cidade*:</b></label>						
                                 <input class="form-control" id="cidadeBenef" name="cidadeBenef" value="<?php echo $rowPesquisaBenef['cidadeBenef'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="segundaVia"><b>Estado: <?php echo $rowPesquisaBenef['estadoBenef'] ;?></b></label>
                                        <select name="estadosBenef" id="estadosBenef" class="form-control input-sm">
                                            <option value="<?php echo $rowPesquisaBenef['estadoBenef'] ;?>">Escolha uma Opção</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MG">Minas Gerais</option>				
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                  
                                 <label class="control-label" for="telBenef"><b>Telefone:</b></label>					
                                 <input class="form-control" id="telBenef" name="telBenef" value="<?php echo $rowPesquisaBenef['telBenef'] ;?>" type="text"/>                  
                                                             
						      </div><!--fecha div coluna 2 -->
                                  
                              <div class="col-md-2 input-group-sm"><!--abre div coluna 2-->
                                  
                                  
                                 <label class="control-label" for="rendaBenef"><b>Renda:</b></label>					
                                 <input class="form-control" id="rendaBenef" name="rendaBenef" value="<?php echo $rowPesquisaBenef['rendaBenef'] ;?>" type="text"/>
                                 <br><br>                                 
                                
						         <input id="file_upload" name="file_upload" value="" type="file" />
                                 <div id="queue"></div>
                                 <script type="text/javascript">
                                      <?php $timestamp = time();?>
                                      $(function() {
                                          $('#file_upload').uploadify({
                                              'formData'     : {
                                                  'timestamp' : '<?php echo $timestamp;?>',
                                                  'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                                               },
                                              'swf'      : '../js/uploadify/uploadify.swf',
                                              'uploader' : '../js/uploadify/uploadify.php'
                                          });
                                      });
	                             </script>
	                                  <!-- FIM SCRIPT QUE MOSTRA O BOTÃO DE UPLOAD -->
                                  
                                 <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                                 <input type="hidden" name="idBenef" value="<?php echo $idBenef ;?>">                       
                              </div><!--fecha div coluna 2 -->      
                                  
						  </div><!--fecha div linha 1 --><hr>
												
                              <input name="atualizaB" type="submit" class="btn btn-sm btn-primary" style="margin-left:22px; " onclick="return validar();" value="Atualizar Beneficiario">                           
                          
						  </fieldset>
						</div><!--fecha div form-group-->
                </div><!-- fecha form panel -->
        </form><!-- Finaliza form do cadastro do supermercado -->
        
        <?php } ?>
        