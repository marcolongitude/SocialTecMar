    <?php 
        include_once "../models/pesquisa/SQL/EditBenefSQL.php";
        include "../classes/inverteData.php";
    ?>

    <div class="container-fluid" style="margin-top:100px;">
            
        <div class="panel hvr-overline-from-center" style="width:100%;">
            <div class="panel-body">
                <?php
                     while ($rowPesquisaBenef = mysqli_fetch_array($resultPesquisaBenef)) {
                ?>
                <span style="font-size:1.4em;">Editar Cadastro Beneficiario</span> <b style="font-size:1.6em;" class="text-danger text-center"> Cartão - <?php echo $rowPesquisaBenef['cartaoBenef'] ;?></b>
                
                
                <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Atualiza Beneficiário</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Atualiza Dependentes</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Adiciona Benefícios</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Informações Gerais</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">                           
                

            <form id="formEditBenef" action="" method="post" role="form" style="padding-top:20px;">
											
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
                                     <?php if ($rowPesquisaBenef['eCivilBenef'] == 'solteiro'){ ;?>
                                     <option value="solteiro">Solteiro</option>
                                     <option value="Casado">Casado</option>
                                     <?php }
                                     if ($rowPesquisaBenef['eCivilBenef'] == 'Casado'){ ;?>
                                     <option value="Casado">Casado</option>
                                     <option value="solteiro">Solteiro</option>
                                     <?php }?>
                                 </select>    
                                
                                 <label class="control-label" for="sexoBenef"><b>Sexo:</b></label>					 
                                 <select name="sexoBenef" id="sexoBenef" class="form-control">
                                     <?php if ($rowPesquisaBenef['sexoBenef'] == 'masculino' ){ ?>
                                     <option value="masculino">Masculino</option>
                                     <option value="feminino">Feminino</option>
                                     <?php } 
                                         if($rowPesquisaBenef['sexoBenef'] == 'feminino' ){ ?>
                                     <option value="feminino">Feminino</option>
                                     <option value="masculino">Masculino</option>
                                     <?php } ?>
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
                                            <option value="">Escolha uma Opção</option>
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
                                     <?php if($rowPesquisaBenef['escolaBenef'] == 'Analfabeto' ) { 
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
                                             echo '<option value="Analfabeto">Analfabeto</option>';
                                             echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';    
                                             echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                             echo '<option value="Ensino Médio">Ensino Médio</option>';
                                             echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                             echo '<option value="Curso Superior">Curso Superior</option>';
                                         }
                                         if ($rowPesquisaBenef['Ensino Médio Incompleto']){
                                             echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                             echo '<option value="Analfabeto">Analfabeto</option>';
                                             echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                             echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';                      
                                             echo '<option value="Ensino Médio">Ensino Médio</option>';
                                             echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                             echo '<option value="Curso Superior">Curso Superior</option>';
                                         }
                                         if ($rowPesquisaBenef['escolaBenef'] == 'Ensino Médio'){
                                             echo '<option value="Ensino Médio">Ensino Médio</option>';
                                             echo '<option value="Analfabeto">Analfabeto</option>';
                                             echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                             echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                             echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                             echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                             echo '<option value="Curso Superior">Curso Superior</option>';
                                         }
                                         if ($rowPesquisaBenef['escolaBenef'] == 'Curso Profissionalizante'){
                                             echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                             echo '<option value="Analfabeto">Analfabeto</option>';
                                             echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                             echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                             echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                             echo '<option value="Ensino Médio">Ensino Médio</option>';                                  
                                             echo '<option value="Curso Superior">Curso Superior</option>';
                                         }
                                         if ($rowPesquisaBenef['escolaBenef'] == 'Curso Superior'){
                                             echo '<option value="Curso Superior">Curso Superior</option>';
                                             echo '<option value="Analfabeto">Analfabeto</option>';
                                             echo '<option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>';
                                             echo '<option value="Ensino Fundamental">Ensino Fundamental</option>';
                                             echo '<option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>';
                                             echo '<option value="Ensino Médio">Ensino Médio</option>';
                                             echo '<option value="Curso Profissionalizante">Curso Profissionalizante</option>';
                                         }
                                     ?>
                                 </select>
                                  
                                 <label class="control-label" for="profissionalBenef"><b>Trabalhando?</b></label>
                                 <select name="profissionalBenef" id="profissionalBenef" class="form-control">
                                     <?php 
                                         if ($rowPesquisaBenef['trabBenef'] == 'Desempregado'){
                                            echo '<option value="Desempregado">Desempregado</option>';
                                            echo '<option value="Empregado">Empregado</option>';	
                                            echo '<option value="Mercado Informal">Mercado Informal</option>';
                                         }
                                         if ($rowPesquisaBenef['trabBenef'] == 'Empregado') {
                                            echo '<option value="Empregado">Empregado</option>';
                                            echo '<option value="Desempregado">Desempregado</option>';
                                            echo '<option value="Mercado Informal">Mercado Informal</option>';
                                         }
                                         if ($rowPesquisaBenef['trabBenef'] == 'Mercado Informal') {
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
                                 <input class="form-control" id="tempoBenef" name="tempoBenef" value="<?php echo $rowPesquisaBenef['tempoBenef'];?>" type="text"/>
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
                                            <option value="">Escolha uma Opção</option>
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
                                
						         <input id="file_uploaded" name="file_upload" value="" type="file" />
                                 <div id="queue"></div>
                                 <script type="text/javascript">
                                      <?php $timestamp = time();?>
                                      $(function() {
                                          $('#file_uploaded').uploadify({
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
                              </div><!--fecha div coluna 2 -->      
                                  
						  </div><!--fecha div linha 1 --><hr>
                              <?php } ?>					
                              <button id="salvarB" name="salvarB" type="button" class="teste btn btn-sm btn-primary" style="margin-left:22px; " onclick="return validar();">Salvar Representante <span class="glyphicon glyphicon-user"></span></button>                          
                          
						  </fieldset>
						</div><!--fecha div form-group-->
        </form><!-- Finaliza form do cadastro do Beneficiario -->
                                        
                                        
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <p><?php include_once "EditCadDependente.php";?></p>
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <p><?php include_once "EditCadBeneficio.php";?></p>
                                    </div>
                                    <div class="tab-pane fade" id="tab4">
                                        <p><?php include_once "EditCadInfoGerais.php";?></p>                                                                                           </div>
                                </div>
                            </div>
                                        
                                        
        <hr>
            
        <!-- Inicío tabela de dados gravados no banco -->

                    <div class="table-responsive" style="padding:8px;">
                        <table class="table table-condensed table-hover table-striped">

                            <thead>
                                <tr>                        
                                    <th>Nome do Beneficiario</th>
                                    <th>Data de Nascimento</th>
                                    <th>CPF Beneficiario</th>
                                    <th>Título de Eleitor</th>
                                    <th>Endereço</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="dados"></tr>                                
                            </tbody>
                        </table> 
                    </div> <!-- Final da div table-responsive -->
            
            </div>
            </div>
        </div>
       