<html>
<head>
<title>Grafico Maudi - Sistemas TECMAR</title>
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
											url: "./graficoDADOS/graficoValorPlanosDATA.php", //URL de destino
											dataType: "json", //Tipo de Retorno
				
											success: function(json){ //Se ocorrer tudo certo
				
											var jan = json.jan;
											var fev = json.fev;
											var mar = json.mar;
											var abr = json.abr;
											var mai = json.mai;
											var jun = json.jun;
											var jul = json.jul;
											var ago = json.ago;
											var set = json.set;
											var out = json.out;
											var nov = json.nov;
											var dez = json.dez;						
				



	FusionCharts.ready(function(){
	var revenueChart = new FusionCharts({
        	"type": "column3d",
		"animation": "false",
        	"renderAt": "chartContainer",
        	"width": "1300",
        	"height": "600",
        	"dataFormat": "json",
		
        	"dataSource":  {
		
          	"chart": {
		
	 	"numberPrefix": "R$ - ",
		"labelDisplay":"auto",
            	"caption": "Planos por Mẽs - Priscilla",
            	"subCaption": "Priscilla Calloci",
            	"xAxisName": "Mês",
            	"yAxisName": "Quantidade",
            	"theme": "fint"
         },
         "data": [
            {
               "label": "Jan",
               "value": jan
            },
            {
               "label": "Fev",
               "value": fev
            },
            {
               "label": "Mar",
               "value": mar
            },
            {
               "label": "Abr",
               "value": abr
            },
            {
               "label": "Mai",
               "value": mai
            },
            {
               "label": "Jun",
               "value": jun
            },
            {
               "label": "Jul",
               "value": jul
            },
            {
               "label": "Ago",
               "value": ago
            },
            {
               "label": "Set",
               "value": set
            },
            {
               "label": "Out",
               "value": out
            },
            {
               "label": "Nov",
               "value": nov
            },
            {
               "label": "Dez",
               "value": dez
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
	<h3>Planos referente ao Ano de  <?php $ano = date(Y); echo $ano;?></h3>
  <div id="chartContainer">FusionCharts XT will load here!</div>
</body>
</html>
