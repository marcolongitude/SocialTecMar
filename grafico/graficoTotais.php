<html>
<head>
<title>Grafico SOCIAL - Sistemas TECMAR</title>
<script src="jquery.js"></script>
<script type="text/javascript" src="fusioncharts-suite-xt/js/fusioncharts.js"></script>
<script type="text/javascript" src="fusioncharts-suite-xt/js.js"></script>
<script type="text/javascript" src="fusioncharts-suite-xt/js/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript" src="fusioncharts-suite-xt/js/themes/fusioncharts.theme.ocean.js"></script>
<script type="text/javascript" src="fusioncharts-suite-xt/js/themes/fusioncharts.theme.zune.js"></script>
<script type="text/javascript" src="fusioncharts-suite-xt/js/themes/fusioncharts.theme.carbon.js"></script>




<script type="text/javascript">
	
									$(document).ready(function(){
										$.ajax({
											url: "./graficoDADOS/graficoTotaisDATA.php", //URL de destino
											dataType: "json", //Tipo de Retorno
				
											success: function(json){ //Se ocorrer tudo certo
				
											var Beneficiario = json.Beneficiario;
											var Dependente = json.Dependente;
											var Beneficio = json.Beneficio;
											var BolsaSup = json.BolsaSup;
                      var BolsaFarm = json.BolsaFarm;
											


	FusionCharts.ready(function(){
	var revenueChart = new FusionCharts({
        	"type": "column3d",
        	"renderAt": "chartContainer",
        	"width": "1300",
        	"height": "600",
        	"dataFormat": "json",
        	"dataSource":  {
          	"chart": {
            	"caption": "Totais de Cadastros Realizados Nesta Unidade",
            	"subCaption": "Prefeitura Municipal de Sao Simao",
            	"xAxisName": "Tipo de Cadastros",
            	"yAxisName": "Quantidade",
            	"theme": "fint"
         },
         "data": [
            {
               "label": "Beneficiario",
               "value": Beneficiario
            },
            {
               "label": "Dependente",
               "value": Dependente
            },
            {
               "label": "Beneficio",
               "value": Beneficio
            },
            {
               "label": "Bolsa Supermercado",
               "value": BolsaSup
            },
            {
               "label": "Bolsa Farmácia",
               "value": BolsaFarm
            }
          ]
      }

  	});
	revenueChart.render();
	});
		
											

												}//final do sucess ajax
												});
												});
	
		
		
					

</script>
</head>
<body>
	<h3>Total de Cadastros realizados nesta Unidade</h3>
  <div id="chartContainer">FusionCharts XT will load here!</div>
</body>
</html>
