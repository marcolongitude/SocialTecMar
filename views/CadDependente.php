<script src="../js/InsereDependente.js"></script> 
        <form id="formD" action="" method="post" role="form" >
											
						<div class="form-group" style="padding:8px;margin:0px;">
						
						  <div class="row input-group-sm" style="margin-left:8px;">
                              <fieldset>
					           
						
						      <div class="col-md-5 input-group-sm"><!--abre div coluna 1-->
							     
							     <label class="control-label" for="nomeDepend"><b>Nome da Pessoa*:</b></label>				
                                 <input class="form-control" id="nomeDepend" name="nomeDepend" value="" type="text" autofocus="yes" />
                                 <label class="control-label" for="dnascDepend"><b>Data Nascimento:</b></label>			
                                 <input class="form-control" id="dnascDepend" name="dnascDepend" value="" type="text"/>
                                  
                                 <label class="control-label" for="cartaoVacina"><b>Cartão de Vacina*:</b></label>				
                                 <input class="form-control" id="cartaoVacina" name="cartaoVacina" value="" type="text"/>
                                  
                                 <label class="control-label" for="certDepend"><b>Cert Nascimento:</b></label>			
                                 <input class="form-control" id="certDepend" name="certDepend" value="" type="text"/>
                                  
                                 <label class="control-label" for="ecivilDepend"><b>Estado Civil:</b></label>					 
                                 <select name="ecivilDepend" id="ecivilDepend" class="form-control">
                                     <option value="Solteiro">Solteiro</option>
                                     <option value="Casado">Casado</option>				
                                 </select>    
                                
                                 <label class="control-label" for="sexoDepend"><b>Sexo:</b></label>					 
                                 <select name="sexoDepend" id="sexoDepend" class="form-control">
                                     <option value="Masculino">Masculino</option>
                                     <option value="Feminino">Feminino</option>				
                                 </select>  
                                  
                              </div><!--fecha div coluna 1 -->     
                                
                              <div class="col-md-4 input-group-sm"><!--abre div coluna 2-->                        
                                  
                                 <label class="control-label" for="tituloDepend"><b>Título Eleitoral:</b></label>			
                                 <input class="form-control" id="tituloDepend" name="tituloDepend" value="" type="text"/>
                                  
                                 <label class="control-label" for="zonaTDepend"><b>Zona Eleitoral:</b></label>			
                                 <input class="form-control" id="zonaTDepend" name="zonaTDepend" value="" type="text"/>
                                  
                                 <label class="control-label" for="secaoTDepend"><b>Seção Eleitoral:</b></label>			
                                 <input class="form-control" id="secaoTDepend" name="secaoTDepend" value="" type="text"/>
                                 
                                 <label class="control-label" for="cidadeTDepend"><b>Cidade Eleitoral:</b></label>			
                                 <input class="form-control" id="cidadeTDepend" name="cidadeTDepend" value="" type="text"/>
                                  
                                 <label class="control-label" for="segundaVia"><b>Estado:</b></label>
                                    <select name="estadosTDepend" id="estadosTDepend" class="form-control input-sm">
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
                                  
                              <div class="col-md-3 input-group-sm"><!--abre div coluna 3-->
                                  
                                 <label class="control-label" for="parentescoDepend"><b>Parentesco:</b></label>	
                                 <input class="form-control" id="parentescoDepend" name="parentescoDepend" value="" type="text"/>     
                                 <label class="control-label" for="profissaoDepend"><b>Profissão:</b></label>	
                                 <input class="form-control" id="profissaoDepend" name="profissaoDepend" value="" type="text"/>
                                  
                                 <label class="control-label" for="rendaDepend"><b>Renda:</b></label>	
                                 

                                 <div class="input-group">                                    
                                    <input class="form-control" id="rendaDepend" name="rendaDepend" value="" type="text" data-thousands="." data-decimal=","/>
                                    <span class="input-group-addon">R$</span>
                                </div> 
                                  
                                 <label class="control-label" for="cidadeDepend"><b>Cidade*:</b></label>						
                                 <input class="form-control" id="cidadeDepend" name="cidadeDepend" value="" type="text"/>
                                  
                                 <?php include "../classes/Estados.php";?>
                                  
                                 <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                                 
                                 <input type="hidden" class="form-control idBenef" name="idBenef" value="" />
								 							     																			                  </div><!--fecha div coluna 3 -->                          
                                                              
						  </div><!--fecha div linha 1 --><hr>	
												
                              <button id="salvarD" name="salvar" type="button" class="btn btn-sm btn-primary" style="margin-left:22px;">Salvar Dependente <span class="glyphicon glyphicon-user"></span></button>
                          
						  </fieldset>
						</div><!--fecha div form-group-->
        </form><!-- Finaliza form do cadastro do supermercado -->
        <hr>
        <!-- Inicío tabela de dados gravados no banco -->

                    <div class="table-responsive" style="padding:8px;">
                        <table class="table table-condensed table-hover table-striped">

                            <thead>
                                <tr>                        
                                    <th>Nome do Dependente</th>
                                    <th>Data de Nascimento</th>
                                    <th>Certidão de Nascimento</th>
                                    <th>Título de Eleitor</th>
                                    <th>Cartão de Vacina</th>
                                    <th>Cidade Natural</th>
                                    <th>Estado Natural</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="dadosD"></tr>                                
                            </tbody>
                        </table> 
                    </div> <!-- Final da div table-responsive -->
        