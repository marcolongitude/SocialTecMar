<style>
			.tabelaDados {
				border-spacing:0px;
				border-collapse: collapse;
			}

			.tabelaDados td {
				border: 1px solid #000000;
				padding-left: 4px;					
			}

			.tabelaDados th {
				border: 1px solid #000000;
				background-color: silver;
				text-align: center;
				color: #ffffff;
				height: 20px;
			}
			
			.tabelaDados .dados {	
				background-color: #ffffff;				
				font-size: 11px;
				font-family: helvetica;
			}

			.tabelaDados .dados td {			
				height: 14px;
			}
						
</style>
	
<?php
																
	include_once "../../control/conexaoBD.php";
	include_once "../../classes/inverteData.php";

	$pesquisaBolsaFarm = "SELECT b.nomeBenef, f.nomeFarm, a.validadeFarm FROM Bolsa a INNER JOIN Beneficiario b INNER JOIN Farmacia f WHERE (a.Beneficiario_idBenef = b.idBenef) AND (a.Farmacia_idFarm = f.idFarm)";
	$resultPesquisaBolsaFarm = mysqli_query($conexao, $pesquisaBolsaFarm)
		or die ('ERRO DE PESQUISA DE FARMACIA TABELA Bolsa LINHA 10');
	$total = mysqli_num_rows($resultPesquisaBolsaFarm);

?>	
	
	<page backtop="25mm" backbottom="10mm" >
	    <page_header>
	    
	         <table style="width: 100%; border: solid 0px #c0c0c0; padding:7px;">
	            <tr>
	                <td style="text-align: left;    width: 31.5%"><img src="./res/logoTECMAR.png" width="180" height="70" /></td>
	                <td style="text-align: center;    width: 37%"><h5>Bolsa Farmácia</h5></td>
	                <td style="text-align: right;    width: 32%"><?php echo date('d/m/Y'); ?></td>
	            </tr>                    
	         </table>
	         
	    </page_header>	
	    
	    <table class="tabelaDados">

            <thead>
                <tr>                        
                    <th style="width:350px;">Nome do Beneficiário</th>
                    <th style="width:270px;">Nome da Farmácia</th>
                    <th style="width:100px;">Validade</th>                    
                </tr>
            </thead>

            <tbody>
                
                	<?php
                	while ($rowFarm = mysqli_fetch_array($resultPesquisaBolsaFarm)){
                		echo '<tr class="dados" style="font-size:10px;">';
	                		echo '<td style="width:350px;">'.$rowFarm['nomeBenef'].'</td>';
	                		echo '<td style="width:270px;">'.$rowFarm['nomeFarm'].'</td>';
	                		echo '<td style="width:100px;">'.$rowFarm['validadeFarm'].'</td>';
                		echo '</tr>';
                	}
                	?>
                                 
            </tbody>
        
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


