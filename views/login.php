<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>TecMAR Social Módulo Login</title>
		<meta name="description" content="">
		<meta name="author" content="Marco Aurelio Guimaraes">

		<meta name="viewport" content="width=device-width; height=device-height; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="stylesheet" href="../css/bootstrap.css">        
	    <link rel="stylesheet" href="../css/bootstrap-theme.css">        
        <link rel="stylesheet" href="../css/bootstrap.css.map">        
        <link rel="stylesheet" href="../css/hover.css"/>
        <script src="../js/jquery-1.11.2.min.js"></script>
        <script src="../js/bootstrap.js"></script>

	</head>
<?php
	$erro ="";
	if(!isset($_COOKIE['id_SOCIAL_users'])){
		if(isset($_POST['submit'])){

			include "../control/conexaoBD.php";

			$login_users = mysqli_real_escape_string($conexao,trim($_POST['usuario']));
			$senha_users = mysqli_real_escape_string($conexao,trim($_POST['senha']));

			if(!empty($login_users) && (!empty($senha_users))){
				$query = "SELECT id_Users, login_Users, tipo_Users FROM Users WHERE (login_Users = '$login_users') and (senha_Users = SHA('$senha_users'))";
				$result = mysqli_query($conexao,$query)
					or die ("ERRO DE BUSCA NA TABELA Users - ARQ Login.php VARIAVEL RESULT");

				$pesquisa = mysqli_num_rows($result);

				if($pesquisa == 1){
					$row = mysqli_fetch_array($result);
					setcookie('id_SOCIAL_users', $row['id_Users']);
					setcookie('SOCIAL_Users', $row['login_Users']);
					
					if ($row['tipo_Users'] == 1){
						header("Location: index.php");
					}else{
						header("Location: index.php");
					}
				}
				else{
					$erro = "Usuario ou Senha INVÁLIDOS!";
				}
			}else{
				$erro = "Você deve digitar seu nome e senha para entrar no sistema!";
			}
		}
	}

?>
	<body style="background: url(../images/header.jpg) 0 0 no-repeat fixed;">
		<div class="container-fluid">
             <nav class=" navbar-inverse navbar-fixed-top" role="navigation">

                <div class="navbar-header">	

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ex-navbar-collapse" style="color:white;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                          
                <a class="navbar-brand">TECMAR</a>
                </div>
                <div class="container-fluid">
                      <div class="collapse navbar-collapse" id="ex-navbar-collapse">             
                        <ul class="nav navbar-nav"> 

                              <li><a href="#" >Desenvolvido por <strong>Marco Aurélio</strong></a>
                              <li><a href="#" >Módulo Social - Secretaria de Assistência Social - Prefeitura de São Simão</a></li>

                        </ul>             	 
                      </div>              
                </div>    
            </nav><!-- Final da barra de navegação MENU DROP-DOWN  -->  	

		<?php

			if (empty($_COOKIE['id_SOCIAL_users'])){
				echo $erro;
				
		?>
        
            <div class="row" style="margin-top:8%;">
                <div class="col-md-6"><!-- Abre coluna 1 -->
                    <div class="jumbotron hvr-overline-from-center" style="margin-top:30px;width:100%; height:350px;" >
                         <h3 class="text-info">Seja bem vindo ao Módulo Social</h3><br>
                          <form class="formLogin" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <label class="control-label" id="campo"><b>Usuario: </b></label>
                            <input autofocus="yes" type="text" class="form-control" id="campo" name="usuario" size="33" REQUIRED value="<?php if(!empty($login_users)){ echo $login_users;} ?>">

                            <label class="control-label" id="campo"><b>Senha: </b></label>
                            <input type="password" class="form-control" id="campo" name="senha" size="33" REQUIRED /><br>

                            <input type="submit" name="submit" class="btn btn-info" value="TecMar Módulo Social" />

                          </form>

                          <?php }else{

                            echo "Você está logado como: " . $_COOKIE['SOCIAL_Users'];
                            header ("Location: index.php");
                          }
                          ?>
		            </div><!-- Fecha div JumboTron -->
                </div><!-- Fecha coluna 1 -->

                <!--<div class="col-md-5">
                
                    <img src="../images/saosimao.png" class="img-rounded" style="width:90%;padding-left:5%;">

                </div>-->
                
            </div><!-- Fecha linha 1 -->
                
        </div><!-- Fecha container fluid -->        
         <?php include_once "footer.php"; ?>	
	</body>
</html>
