<script src="../js/InsereInfoGerais.js"></script>
<form action="" method="post" id="formInfoGerais" role="form">
    <div class="row" style="margin-top:40px;">
        
        <div class="col-md-6">
           
            <b class="text-info">Moradia:</b>
            <div class="radio-inline">                
                <label>
                    <input type="radio" name="moradia" id="moradiaAlugada" value="Alugada" />Alugada
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="moradia" id="moradiaPropria" value="Própria" checked/>Própria
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="moradia" id="moradiaCedida" value="Cedida" />Cedida
                </label>
            </div>            
            <hr>
            <b class="text-info">Medicamento Controlado:</b>
            <div class="radio-inline">                
                <label>
                    <input type="radio" name="medicamentoControlado" value="Sim" />Sim
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="medicamentoControlado" value="Não" checked />Não
                </label>
            </div>
            <div class="radio-inline">
                    <input type="text" name="medicamentos" class="form-control input-sm"  value="" placeholder="Quais medicamentos?" />                           
            </div>
            
            <hr>
            <b class="text-info">Ajuda adquirir Medicamnetos:</b>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="ajudaMedicamento" value="Sim" />Sim                    
                </label>
            </div>
            
            <div class="radio-inline">
                <label>
                    <input type="radio" name="ajudaMedicamento" value="Não" checked />Não                    
                </label>
            </div>
            
            <hr>
            <b class="text-info">Farmácia Pública Municipal:</b>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="farmaciaMunicipal" value="Sim" />Sim                    
                </label>
            </div>
            
            <div class="radio-inline">
                <label>
                    <input type="radio" name="farmaciaMunicipal" value="Não" checked />Não                    
                </label>
            </div>
            
            <div class="radio-inline">
                <label>
                    <input type="radio" name="farmaciaMunicipal" value="Outros" />Outros
                </label>
            </div>
            
            <hr>
            <b class="text-info">Recebe Benefício:</b>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="beneficio" value="Sim" />Sim                    
                </label>
            </div>
            
            <div class="radio-inline">
                <label>
                    <input type="radio" name="beneficio" value="Não" checked />Não                    
                </label>
            </div>
            
            <div class="radio-inline">                
                    <input type="text" class="" ="form-control input-sm" placeholder="Quais Beneficios?" name="beneficios" value="" /> 
            </div>
            
            <hr>
            <b class="text-info">Fez algum Curso:</b>
            <div class="radio-inline">
                <label>
                    <input type="radio" name="curso" value="Sim" />Sim                    
                </label>
            </div>
            
            <div class="radio-inline">
                <label>
                    <input type="radio" name="curso" value="Não" checked />Não                    
                </label>
            </div>
            
            <div class="radio-inline">                
                    <input type="text" class="form-control input-sm" placeholder="Quais Cursos?" name="cursos" value="" /> 
            </div>
        </div>
            
            <div class="col-md-6">
                <div class="col-md-6">
            
                    <label class="control-label">Aluguel:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="aluguel" data-thousands="." data-decimal="," name="aluguel" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Combustível:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="combustivel" data-thousands="." data-decimal="," name="combustivel" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Energia:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="energia" data-thousands="." data-decimal="," name="energia" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Gás:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="gas" data-thousands="." data-decimal="," name="gas" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Prestação:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="prestacao" data-thousands="." data-decimal="," name="prestacao" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Alimentação:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="alimentacao" data-thousands="." data-decimal="," name="alimentacao" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>
                </div>
                <div class="col-md-6">
                
                    <label class="control-label">Água:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="agua" data-thousands="." data-decimal="," name="agua" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Financiamento:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="financiamento" data-thousands="." data-decimal="," name="financiamento" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Medicamento:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="medicamento" data-thousands="." data-decimal="," name="medicamento" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Telefone:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="telefone" data-thousands="." data-decimal="," name="telefone" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>

                    <label class="control-label">Outras Despesas:</label>
                    <div class="input-group">
                        <input class="form-control input-sm" id="outrasDespesas" data-thousands="." data-decimal="," name="outrasDespesas" value="" />
                        <span class="input-group-addon">R$</span>
                    </div>
                    <h3 id="total">Total:</h3>
                    
                    
                    
                </div>               
            
            </div>
    </div>
    <input type="hidden" class="form-control" name="usuario" value="<?php echo $_COOKIE['id_SOCIAL_users'] ;?>" />
                                 
    <input type="hidden" class="form-control idBenef" name="idBenef" value="" />
    <br><hr>
    <button id="salvarInfoGerais" name="salvar" type="button" class="btn btn-sm btn-primary" style="margin-left:22px;">Salvar Informações Gerais <span class="glyphicon glyphicon-tags"></span></button>
</form>