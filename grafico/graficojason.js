 $(document).ready(function(){ 
   $("button").click(function(){
       $.ajax({
				url: "grafico.php", //URL de destino
				dataType: "json", //Tipo de Retorno
				
				success: function(json){ //Se ocorrer tudo certo
				
					var jan = json.jan;
					alert(jan);

				}
			});

	
}); 
});
