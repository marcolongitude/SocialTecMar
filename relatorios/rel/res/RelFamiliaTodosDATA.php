<style>
							
</style>
	
<?php
																
	include_once "../../control/conexaoBD.php";
	include_once "../../classes/inverteData.php";

	$pesquisaBeneficiario = "SELECT * FROM Beneficiario";
	$resultPesquisaBeneficiario = mysqli_query($conexao, $pesquisaBeneficiario)
		or die ('ERRO DE PESQUISA TABELA Beneficiario VARIAVEL $pesquisaBeneficiario LINHA 10');
		while ($rowBeneficiario = mysqli_fetch_array($resultPesquisaBeneficiario)){
			$idBenef = $rowBeneficiario['idBenef'];
			$pesquisaDependente = "SELECT * FROM Dependente WHERE Beneficiario_idBenef = $idBenef";
			$resultPesquisaDependente = mysqli_query($conexao, $pesquisaDependente)
				or die ('ERRO DE PESQUISA TABELA Dependente VARIAVEL $resultPesquisaDependente LINHA 15');
			$pesquisaBeneficioSql = "SELECT c.nomeBenef, b.dataInicial, c.recursivoBenef, c.tempoRecursivo FROM Beneficio b INNER JOIN CadBeneficio c WHERE (b.CadBeneficio_idBenef = c.idBenef) and (b.Beneficiario_idBenef = '$idBenef')";
            $resultPesquisaBeneficio = mysqli_query($conexao, $pesquisaBeneficioSql)
                or die ("ERRO DE PESQUISA NA TABELA Beneficio ARQUIVO VerFamilia.php VARIAVEL pesquisaBeneficioSql linha 18");

?>	
	
	<page backtop="25mm" backbottom="10mm" >
	    <page_header>
	    
	         <table style="width: 100%; border: solid 0px #c0c0c0; padding:7px;">
	            <tr>
	                <td style="text-align: left;    width: 31.5%"><img src="./res/logoTECMAR.png" width="180" height="70" /></td>
	                <td style="text-align: center;    width: 37%"><h5>Cadastros de Famílias</h5></td>
	                <td style="text-align: right;    width: 32%"><?php echo date('d/m/Y'); ?></td>
	            </tr>                    
	         </table>
	         
	    </page_header>	
	    <hr>

	    <h5>Beneficiario: <?php echo $rowBeneficiario['nomeBenef']. ' Cartão: '.$rowBeneficiario['cartaoBenef'];?> </h5>    	
	    <h5>CPF: <?php echo $rowBeneficiario['cpfBenef'].' Cidade onde Vota: '.$rowBeneficiario['cidadeTBenef'].'-'.$rowBeneficiario['estadoTBenef'] ;?></h5>
	    <h5>Endereço: <?php echo $rowBeneficiario['endBenef'].' bairro: '.$rowBeneficiario['bairroBenef'].' cidade: '.$rowBeneficiario['cidadeBenef'].'-'.$rowBeneficiario['estadoBenef'] ;?></h5>
	    <h5>Telefone: <?php echo $rowBeneficiario['telBenef'];?></h5> 
	    <hr>
	    <h5 class="titulo">Composição Familiar</h5>
	    <?php 
	    	while ($rowDependente = mysqli_fetch_array($resultPesquisaDependente)){
	    ?>
	    <h5>Dependente: <?php echo $rowDependente['nomeDepend']. ' - ' . $rowDependente['parentescoDepend']. ' Profissão:' .$rowDependente['profissaoDepend'] ;?></h5>   
	    

	    <?php } ?>

	    <hr>
<table>
	    <tr>
	    <td style="width:400px;">
	    <h5>Benefícios Cadastrados</h5>
	    <?php
	    	while ($rowBeneficio = mysqli_fetch_array($resultPesquisaBeneficio)){
	    		echo '<h5>Benefício: '.$rowBeneficio['nomeBenef'].' - '.$rowBeneficio['dataInicial'].'</h5>';
	    	}
	    ?>
	    </td>
	    
	    <td>
	    <h5>Informações Gerais</h5>
	    <?php

	    	$pesquisaInfoGeralSql = "SELECT * FROM InfoGeralBenef WHERE Beneficiario_idBenef = $idBenef";
                            $resultPesquisaInfoGeral = mysqli_query($conexao, $pesquisaInfoGeralSql)
                                or die ("ERRO DE PESQUISA NA TABELA InfoGeralBenef ARQUIVO VerFamilia.php VARIAVEL pesquisaInfoGeralSql linha 124");
                            while ($row = mysqli_fetch_array($resultPesquisaInfoGeral)){
                                if (!empty($row['MoradiaInfo'])){
                                    echo "<h5>Mora em Casa: ".$row['MoradiaInfo']."</h5>";
                                }
                                if (!empty($row['RemControlado'])){
                                    echo "<h5>Remédio Controlado: ".$row['RemControlado']."</h5>";
                                }
                                if (!empty($row['DescRemControlado'])){
                                    echo "<h5>Qual Remédio: ".$row['DescRemControlado']."</h5>";
                                }
                                if (!empty($row['AjudaCompraRem'])){
                                    echo "<h5>Ajuda na compra dos remédios: ".$row['AjudaCompraRem']."</h5>";
                                }
                                if (!empty($row['FarmaciaMunicipal'])){
                                    echo "<h5>Farmácia Municipal: ".$row['FarmaciaMunicipal']."</h5>";
                                }
                                if (!empty($row['RecebeBenef'])){
                                    echo "<h5>Recebe Benefício: ".$row['RecebeBenef']."</h5>";
                                }
                                if (!empty($row['DescRecebeBenef'])){
                                    echo "<h5>Descrição do Benefício: ".$row['DescRecebeBenef']."</h5>";
                                }
                                if (!empty($row['FazCurso'])){ 
                                    echo "<h5>Faz Curso: ".$row['FazCurso']."</h5>";
                                }
                                if (!empty($row['DescFazCurso'])){
                                    echo "<h5>Descrição do Curso: ".$row['DescFazCurso']."</h5>";
                                }
                                if (!empty($row['AluguelCusto'])){
                                    echo "<h5>Custo do Aluguel: ".$row['AluguelCusto']." R$</h5>";
                                }
                                if (!empty($row['CombustivelCusto'])){
                                    echo "<h5>Custo do Combustível: ".$row['CombustivelCusto']." R$</h5>";
                                }
                                if (!empty($row['EnergiaCusto'])){
                                    echo "<h5>Custo da Energia: ".$row['EnergiaCusto']." R$</h5>";
                                }
                                if (!empty($row['GasCusto'])){
                                    echo "<h5>Custo do gás: ".$row['GasCusto']." R$</h5>";
                                }
                                if (!empty($row['PrestacaoCusto'])){
                                    echo "<h5>Custo da Prestação: ".$row['PrestacaoCusto']." R$</h5>";
                                }
                                if (!empty($row['AlimentacaoCusto'])){
                                    echo "<h5>Custo da Alimentação: ".$row['AlimentacaoCusto']." R$</h5>";
                                }
                                if (!empty($row['AguaCusto'])){
                                    echo "<h5>Custo da Água: ".$row['AguaCusto']." R$</h5>";
                                }
                                if (!empty($row['FinanciamentoCusto'])){
                                    echo "<h5>Custo do Financiamento: ".$row['FinanciamentoCusto']." R$</h5>";
                                }
                                if (!empty($row['RemedioCusto'])){
                                    echo "<h5>Custo dos Remédios: ".$row['RemedioCusto']." R$</h5>";
                                }
                                if (!empty($row['TelefoneCusto'])){
                                    echo "<h5>Custo do Telefone: ".$row['TelefoneCusto']." R$</h5>";
                                }
                                if (!empty($row['OutrosCustos'])){
                                    echo "<h5>Outros Custos: ".$row['OutrosCustos']." R$</h5>";
                                }
                            }
                        
	    ?>
	    </td>
	    </tr>
</table>

	    <page_footer>
	        <table style="width: 100%; border: solid 1px black;">
	            <tr>
	                <td style="text-align: center;     width: 70%"><b>TecMar - Marco Aurélio Guimarães</b> Cel: (64)8408-3271 marcoprodata@hotmail.com<br><b>WM LAN HOUSE -- end: </b>Av Fábio Garcia S. nº 121 Centro - Em frente ao Teatro Municipal Quirinópolis-GO</td>
	                <td style="text-align: right;    width: 29%">page [[page_cu]]/[[page_nb]]</td>
	            </tr>
	        </table>
	    </page_footer>    

	</page>
<?php } ?>

