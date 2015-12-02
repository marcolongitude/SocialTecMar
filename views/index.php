<?php include_once "../classes/verificaLogin.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">        		
        <meta name="viewport" content="width=device-width">
        <title>TecMar Ordem Serviços</title>        

	      <link rel="stylesheet" href="../css/bootstrap.css">        
	      <link rel="stylesheet" href="../css/bootstrap-theme.css">        
        <link rel="stylesheet" href="../css/bootstrap.css.map">
        <link rel="stylesheet" href="../css/jquery-ui.css" />
		    <link rel="stylesheet" href="../css/jquery-ui.theme.css" />
		    <link rel="stylesheet" href="../css/jquery-ui.structure.css"/>
        <link rel="stylesheet" href="../css/hover.css"/>
        <link rel="stylesheet" href="../js/uploadify/uploadify.css" />
        <link rel="stylesheet" href="../css/geral.css" /> 
               
        <script src="../js/jquery-1.11.2.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/jquery-ui.js"></script>
	      <script src="../js/jquery-validate.js"></script>
        <script src="../js/jquery.maskedinput.js"></script> 
        <script src="../js/jquery.cpf-min.js"></script>
        <script src="../js/jquery.maskMoney.js"></script>
        <script src="ckeditor.js"></script>
        <script src="../js/InsereBeneficiario.js"></script>
        <!--<script src="../js/jquery.cpf-validate.1.0.min.js"></script>-->
        <script src="../js/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
        
    </head>
    <body>
        <!-- Início da barra de navegação MENU DROP-DOWN -->
        <nav class="navbar navbar-default navbar-fixed-top">
		      <div class="container-fluid">
            <div class="navbar-header">	
		
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ex-navbar-collapse" style="color:white;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                          
                <a class="navbar-brand">TECMAR SOCIAL</a>
	          </div><!-- Fim do navbar-header -->

            		
            		      <div class="collapse navbar-collapse" id="ex-navbar-collapse">             
                              <ul class="nav navbar-nav">	    
                                  <p class="navbar-text navbar-right">Cliente: <strong>PREFEITURA DE SÃO SIMÃO</strong></p>
                                  <li><a href="index.php" title="Página inicial">Home</a></li>		      
                                  
                                  <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                          <li role="presentation" class="dropdown-header"><b class="text-info">Cadastro de Família</b><span class="caret"></span></li>
                                          <li><a href="index.php?<?php echo "page=ViewPessoa";?>"><span class="glyphicon glyphicon-user"></span> Cadastro de Pessoas</a></li>                   
                                          <li><a href="index.php?<?php echo "page=CadUsers";?>"><span class="glyphicon glyphicon-asterisk"></span> Cadastro de Usuários</a></li> 
                                          <li><a href="index.php?<?php echo "page=CadastraBeneficio";?>"><span class="glyphicon glyphicon-asterisk"></span> Cadastro de Benefícios</a></li> 
                                          <li class="divider"></li>
                                          <li role="presentation" class="dropdown-header"><b class="text-info">Cadastros Gerais</b><span class="caret"></span></li>
                                          <li><a href="index.php?<?php echo "page=TermoUso";?>"><span class="glyphicon glyphicon-pencil"></span> Cadastro Termo de Uso</a></li>
                                          <li><a href="index.php?<?php echo "page=RegraUso";?>"><span class="glyphicon glyphicon-pencil"></span> Cadastro Regra de Uso</a></li>
                                          <li><a href="index.php?<?php echo "page=CadSupermercado";?>"><span class="glyphicon glyphicon-pencil"></span> Cadastro de Supermercado</a></li>
                                          <li><a href="index.php?<?php echo "page=CadFarmacia";?>"><span class="glyphicon glyphicon-pencil"></span> Cadastro de Farmácia</a></li>
                                      </ul>                       
                                  </li>                  
                                  
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatórios <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                              <li role="presentation" class="dropdown-header"><b class="text-info">  Totais de Cadastros</b><span class="caret"></span></li>
                                              <li><a href="../relatorios/rel/RelFamiliaTodos.php" target="_blank"><span class="glyphicon glyphicon-print"></span> Todas Famílias</a></li>
                                              <li><a href="../relatorios/rel/RelBolsaSupTodos.php" target="_blank"><span class="glyphicon glyphicon-print"></span> Todas Bolsas Supermercado</a></li>
                                              <li><a href="../relatorios/rel/RelBolsaFarmTodos.php" target="_blank"><span class="glyphicon glyphicon-print"></span> Todas Bolsas Farmácia</a></li>
                                              <li class="divider"></li>
                                    </ul>  
                                </li>
                                  
                                    

                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gráficos<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="../grafico/graficoTotais.php" target="_blank">Gráfico de Totais</a></li>                            
                                    </ul>                        
                                </li>
                                  
                                <li><a href="index.php?<?php echo "page=contato";?>">Contato</a></li>
                                <li><a href="#"> Usuario: <?php echo $_COOKIE['SOCIAL_Users']; ?></a></li>
                                <li><a href="sair.php">Sair</a></li>
                            </ul>
                         	 
            		</div>              
            </div>    
        </nav><!-- Final da barra de navegação MENU DROP-DOWN  -->    
       
        <div id="conteudo">
	       <?php 
		      if(!isset($_GET['page'])) {
			     require_once("ViewPessoa.php");
		      }else{
			     require_once($_GET['page'].".php");
		      }
	       ?>
        </div>               
        <?php include_once "footer.php"; ?>
    </body>

</html>
