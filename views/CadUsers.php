<script src="../js/InsereUsers.js"></script>
<script src="../js/jquery.maskedinput.js"></script>
            <div class="panel" style="width:98%;margin-left:auto;margin-right:auto; margin-top:5%;">
                <div class="panel-body">
                    <h2>Cadastro de Usuários</h2><hr>
                    <form action="" method="post" role="form" >
											
						<div class="form-group" style="margin:0px;">
						
						  <div class="row input-group-sm" style="margin-left:8px;"><!-- Abre linha 1 -->
                              					           		
						      <div class="col-md-3 input-group-sm"><!--abre div coluna 1-->
							     
							     <label class="control-label" for="nomeUsers"><b>Nome do Usuário:</b></label>				
                                 <input class="form-control" id="nomeUsers" name="nomeUsers" value="" type="text" autofocus="yes" />
                                 <label class="control-label" for="dnascUsers"><b>Data de Nascimento:</b></label>					                             <input class="form-control" id="datepicker" name="dnascUsers" value="" type="text"/>    
                                  
                              </div><!--fecha div coluna 1 -->                     
                                  
                              <div class="col-md-3 input-group-sm"><!--abre div coluna 2-->                        
                                  
                                 <label class="control-label" for="endUsers"><b>Endereço do Usuário:</b></label>					                             <input class="form-control" id="endUsers" name="endUsers" value="" type="text"/> 
                                  
                                 <label class="control-label" for="loginUsers"><b>Nome de Login:</b></label>			
                                 <input class="form-control" id="loginUsers" name="loginUsers" value="" type="text"/>  
								 							     																			                  </div><!--fecha div coluna 2 --> 
                              
                               <div class="col-md-2 input-group-sm"><!--abre div coluna 3-->
                                           
                                 <label class="control-label" for="senhaUsers"><b>Senha de Login:</b></label>			
                                 <input class="form-control" id="senhaUsers" name="senhaUsers" value="" type="password"/>
                                  
                                 <label class="control-label" for="senhaUsers1"><b>Repete Senha de Login:</b></label>			
                                 <input class="form-control" id="senhaUsers1" name="senhaUsers1" value="" type="password"/>
								 							     																			                  </div><!--fecha div coluna 3 --> 
                                  
                              <div class="col-md-3 input-group-sm"><!--abre div coluna 4 -->
                                  
                                 <label class="control-label" for="telUsers"><b>Telefone Usuário:</b></label>			
                                 <input class="form-control" id="telUsers" name="telUsers" value="" type="text"/>  
                                                                   
                                 <label class="control-label" for="tipoUsers"><b>Tipo de Usuário:</b></label>					 
                                 <select name="tipoUsers" id="tipoUsers" class="form-control">
                                     <option value="0">Usuário Comum</option>
                                     <option value="1">Administrador</option>				
                                 </select>                        
                                                             
						      </div><!--fecha div coluna 4 -->                     
                                  
						  </div><!--fecha div linha 1 --><br><br>	
												
						  <button id="salvar" name="salvar" type="button" class="btn btn-primary" style="margin-left:22px;">Salvar Usuário<span class="glyphicon glyphicon-user" style="margin-left:5%;"></span></button>                 
						  <input type="reset" name="novo" id="novo" value="Novo Cadastro" class="btn btn-success" />
                                 
						</div><!--fecha div form-group-->
                    </form><!-- Finaliza form do cadastro do supermercado -->
                    
                    <hr>
                                    
                    <!-- Inicío tabela de dados gravados no banco -->

                    <div class="table-responsive" style="padding:8px;">
                        <table class="table table-condensed table-hover table-striped">

                            <thead>
                                <tr>                        
                                    <th>Nome do Usuário</th>
                                    <th>Data de Nascimento</th>
                                    <th>Endereço Usuário</th>
                                    <th>Login do Usuário</th>
                                    <th>Telefone Usuário</th>
                                    <th>Tipo do Usuário</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="dados"></tr>
                                <?php include_once "../models/pesquisa/PesquisaUsers.php";?>
                            </tbody>
                        </table> 
                    </div> <!-- Final da div table-responsive -->
                    
                </div><!-- fecha div painel body -->
            </div><!-- fecha div panel -->        
        