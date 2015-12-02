<script src="../js/PesquisaDinamicaBeneficiario.js"></script>
<div class="container-fluid" id="cadFamilia"><!-- abre container -->            
    
            <div class="row"><!-- Abre linha 1 -->
                <div class="col-md-6">
                    <h2 style="color:white;margin-left:2%;">Cadastro de Beneficiário</h2><hr>
                </div>
                    <div class="col-md-6" id="pesquisa">
                        <div class="input-group input-group-sm">
                            <span class="input-group-btn">
                                <a href="#Modal-add-familia" class="btn btn-sm btn-success" data-toggle="modal">Adiciona Família <span class="glyphicon glyphicon-user"></span></a>
                            </span>
                            <input class="form-control" id="pesquisaCartao" name="pesquisaCartao" value="" type="text" placeholder="Pesquisa o Cartão Social"/>
                        </div>                     
                    </div>
                                        
            </div><!-- Fecha linha 1 --> 
    
    
             <div id="Modal-add-familia" class="modal fade">
                <div class="modal-dialog" style="width:90%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="BenefD">Cadastro de Beneficiário : <span id="benefInfo"></span><span id="bolsaInfo"></span></h4>
                        </div><!--Fecha modal-header-->
                        <div class="modal-body">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Cadastra Beneficiário</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Adiciona Dependentes</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Adiciona Benefícios</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Informações Gerais</a></li>
                                    <li><a href="#tab5" data-toggle="tab">Bolsa São Simão</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <p><?php include_once "CadPessoa.php";?></p>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <p><?php include_once "CadDependente.php";?></p>
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <p><?php include_once "CadBeneficio.php";?></p>
                                    </div>
                                    <div class="tab-pane fade" id="tab4">
                                        <p><?php include_once "CadInfoGerais.php";?></p>                                                                                           </div>
                                    <div class="tab-pane fade" id="tab5">
                                        <p><?php include_once "CadBolsa.php";?></p>                                                                                           </div>
                                </div>
                            </div>
                                                    
                        </div><!--Fecha modal-body-->
                        <div class="modal-footer">
                            <h5 class="text-left"><cite>Editado por <strong>Marco Aurélio Guimarães - TecMar</strong></cite></h5>
                            <button type="button" id="finalizaCadastro" class="btn btn-danger" data-dismiss="modal">Finaliza Cadastro</button>                
                        </div><!--Fecha modal-footer-->
                    </div><!--Fecha modal-content-->
                </div><!--Fecha modal-dialog-->
            </div><!--Fecha modal 1 mais recente--> 
    
            <div><!-- Mostra Resultados da pesquisa dinamica --><span id="recebeDados"></span></div>
    
            <div id="CarregaBenef"><!-- Carrega todos os resultados cadastrados paginados -->
                <?php include "../models/pesquisa/PesquisaBeneficiario.php" ;?>    
            </div>            
    
           
        
             
</div><!-- fecha container fluid -->