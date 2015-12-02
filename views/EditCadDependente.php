<script>
$(document).ready(function(){ 
    $( "#dnascDependente" ).datepicker({
            dateFormat: "dd-mm-yy",
			changeYear: true,
			changeMonth: true,
			autoSize: true,
			nextText: 'Próximo',
			prevText: 'Anterior',
			dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        		dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
		        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
		        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
		        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
			showOptions: { direction:  "up" },
			duration: "fast",
			showAnim: "slideDown"		
		});
        //define a mascara para campos predeterminados
        $(function() {
            $.mask.definitions['~'] = "[+-]";
            //$("#cpfBenef").mask("999.999.999-99");//campo de CPF
            $("#dnascDependente").mask("99-99-9999");//campo de data de nascimento do Dependente
            
        });
        $('#formEditD input').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });  
        $('#rendaDepend').maskMoney();
 });

</script>
<div class="container-fluid" style="margin-top:6%;">
    <div class="panel">
        <div class="panel-body">
            <div class="panel-title">
                <h3 class="text-info">Atualizar Cadastro do Dependente</h3><hr>
            </div>
                <form id="formEditD" action="../models/atualiza/AtualizaDependente.php" method="post" role="form" >
											
				<div class="form-group">
						
				    <div class="row input-group-sm"><!-- abre linha 1 -->
                              <fieldset>
					       <?php 
                                include "../control/conexaoBD.php";
                                include "../classes/inverteData.php";
                                $idBenef = $_GET['idBenef'];
                                $idDepend = $_GET['idDepend'];
                                
                                $pesquisaDependSQL = "SELECT * FROM Dependente WHERE idDepend = $idDepend";                          
                                $resultPesquisaDepend = mysqli_query($conexao, $pesquisaDependSQL)
                                    or die ('ERRO DE PESQUISA NA TABELA Dependente ARQUIVO EditCadDependente.php VARIAVEL pesquisaDependSQL linha 46');
                                while ($rowPesquisaDepend = mysqli_fetch_array($resultPesquisaDepend)) {                                    
                                
                           ?>
						
						      <div class="col-md-5 input-group-sm"><!--abre div coluna 1-->
							     
							     <label class="control-label" for="nomeDepend"><b>Nome da Pessoa*:</b></label>				
                                 <input class="form-control" id="nomeDepend" name="nomeDepend" value="<?php echo $rowPesquisaDepend['nomeDepend'] ;?>" type="text" autofocus="yes" />
                                 <label class="control-label" for="dnascDependente"><b>Data Nascimento:</b></label>			
                                 <input class="form-control" id="dnascDependente" name="dnascDepend" value="<?php echo inverteDataBr($rowPesquisaDepend['dnascDepend']) ;?>" type="text"/>
                                  
                                 <label class="control-label" for="cartaoVacina"><b>Cartão de Vacina*:</b></label>				
                                 <input class="form-control" id="cartaoVacina" name="cartaoVacina" value="<?php echo $rowPesquisaDepend['cartaoVacina'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="certDepend"><b>Cert Nascimento:</b></label>			
                                 <input class="form-control" id="certDepend" name="certDepend" value="<?php echo $rowPesquisaDepend['certNascDepend'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="ecivilDepend"><b>Estado Civil:</b></label>					 
                                 <select name="ecivilDepend" id="ecivilDepend" class="form-control">
                                     <?php 
                                     if ($rowPesquisaDepend['eCivilDepend'] == 'Solteiro'){
                                        echo '<option value="Solteiro">Solteiro</option>';
                                        echo '<option value="Casado">Casado</option>';
                                     }
                                     if ($rowPesquisaDepend['eCivilDepend'] == 'Casado'){                                        
                                        echo '<option value="Casado">Casado</option>';
                                        echo '<option value="Solteiro">Solteiro</option>';
                                     }
                                     if ($rowPesquisaDepend['eCivilDepend'] == ''){                                        
                                        echo '<option value"">Escolha uma opção</option>';
                                        echo '<option value="Casado">Casado</option>';
                                        echo '<option value="Solteiro">Solteiro</option>';
                                     }
                                     ?>
                                 </select>    
                                
                                 <label class="control-label" for="sexoDepend"><b>Sexo:</b></label>					 
                                 <select name="sexoDepend" id="sexoDepend" class="form-control">
                                     <?php 
                                     if ($rowPesquisaDepend['sexo'] == 'Masculino'){
                                        echo '<option value="Masculino">Masculino</option>';
                                        echo '<option value="Feminino">Feminino</option>';				
                                     }
                                     if ($rowPesquisaDepend['sexo'] == 'Feminino'){                                        
                                        echo '<option value="Feminino">Feminino</option>';				
                                        echo '<option value="Masculino">Masculino</option>';
                                     }
                                     ?>
                                 </select>  
                                  
                              </div><!--fecha div coluna 1 -->     
                                
                              <div class="col-md-4 input-group-sm"><!--abre div coluna 2-->                        
                                  
                                 <label class="control-label" for="tituloDepend"><b>Título Eleitoral:</b></label>			
                                 <input class="form-control" id="tituloDepend" name="tituloDepend" value="<?php echo $rowPesquisaDepend['tituloDepend'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="zonaTDepend"><b>Zona Eleitoral:</b></label>			
                                 <input class="form-control" id="zonaTDepend" name="zonaTDepend" value="<?php echo $rowPesquisaDepend['zonaTDepend'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="secaoTDepend"><b>Seção Eleitoral:</b></label>			
                                 <input class="form-control" id="secaoTDepend" name="secaoTDepend" value="<?php echo $rowPesquisaDepend['secaoTDepend'] ;?>" type="text"/>
                                 
                                 <label class="control-label" for="cidadeTDepend"><b>Cidade Eleitoral:</b></label>			
                                 <input class="form-control" id="cidadeTDepend" name="cidadeTDepend" value="<?php echo $rowPesquisaDepend['cidadeTDepend'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="estadosTDepend"><b>Estado: <?php echo $rowPesquisaDepend['estadoTDepend'] ;?></b></label>
                                    <select name="estadosTDepend" id="estadosTDepend" class="form-control input-sm">
                                        <option value="<?php echo $rowPesquisaDepend['estadoTDepend'] ;?>">Escolha uma Opção</option>
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
                                 <input class="form-control" id="parentescoDepend" name="parentescoDepend" value="<?php echo $rowPesquisaDepend['parentescoDepend'] ;?>" type="text"/>     
                                 <label class="control-label" for="profissaoDepend"><b>Profissão:</b></label>	
                                 <input class="form-control" id="profissaoDepend" name="profissaoDepend" value="<?php echo $rowPesquisaDepend['profissaoDepend'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="rendaDepend"><b>Renda:</b></label>
                                 <div class="input-group">	
                                    <input class="form-control input-sm" id="rendaDepend" name="rendaDepend" value="<?php echo $rowPesquisaDepend['rendaDepend'] ;?>" type="text" data-thousands="." data-decimal=","/>
                                    <span class="input-group-addon">R$</span>
                                 </div>

                                 <label class="control-label" for="cidadeDepend"><b>Cidade*:</b></label>						
                                 <input class="form-control" id="cidadeDepend" name="cidadeDepend" value="<?php echo $rowPesquisaDepend['cidadeDepend'] ;?>" type="text"/>
                                  
                                 <label class="control-label" for="estados"><b>Estado: <?php echo $rowPesquisaDepend['estadoDepend'] ;?></b></label>
                                    <select name="estados" id="estados" class="form-control input-sm">
                                        <option value="<?php echo $rowPesquisaDepend['estadoDepend'] ;?>">Escolha uma Opção</option>
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
                                  
                                 <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                                 
                                 <input type="hidden" class="form-control" name="idBenef" value="<?php echo $idBenef;?>" />
                                  
                                 <input type="hidden" class="form-control" name="idDepend" value="<?php echo $rowPesquisaDepend['idDepend'];?>" />
								 							     																			                        </div><!--fecha div coluna 3 -->                          
                                                              
				</div><!--fecha div linha 1 --><hr>	
												
                              <input name="atualizarD" type="submit" class="btn btn-sm btn-primary" value="Atualizar Dependente" />
                              <a href="index.php?page=../models/pesquisa/VerFamilia&idBenef=<?php echo $idBenef ;?>" class="btn btn-sm btn-success">Voltar a Ver Família</a>
                              <a href="index.php?page=ViewPessoa" class="btn btn-sm btn-success">Voltar para Pesquisa de Famílias</a>
                              <?php }?>
						  </fieldset>
				</div><!--fecha div form-group-->
                </form><!-- Finaliza form do cadastro do supermercado -->
                <hr>
                
            </div><!-- fecha o panel body -->
        </div><!-- fecha o panel -->
</div><!-- fecha o container -->                    
        

        