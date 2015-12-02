$(document).ready(function(){    
    
        $('#aluguel').maskMoney();
        $('#combustivel').maskMoney();
        $('#energia').maskMoney();
        $('#gas').maskMoney();
        $('#prestacao').maskMoney();
        $('#alimentacao').maskMoney();
        $('#agua').maskMoney();
        $('#financiamento').maskMoney();
        $('#medicamento').maskMoney();
        $('#telefone').maskMoney();
        $('#outrasDespesas').maskMoney();
        $('#total').maskMoney();
        
            
        $('#salvarInfoGerais').click(function(){
	     	         
        		$.ajax({
         
          			url:'../models/insere/InsereInfoGerais.php',
                    type:'post',
          			dataType:'json',
          			data:$('#formInfoGerais').serialize(),
          
          			beforeSend: function(){
            				var resposta = confirm('Deseja realmente salvar os dados?');                        
            				if (resposta == false){                                                       
				                alert("Operação CANCELADA pelo USUÁRIO!");
              					return false;
            				}                           
                    },                    
          
          			success:function( json ){                         
                                     
				        alert("Dados gravados com SUCESSO!");
					                                                                           
		            },          
          
        		});
                var total = 0;   
                function floatToMoneyText(value) {
                    var text = (value < 1 ? "0" : "") + Math.floor(value * 100);                    
                    textFormat = text.substr(0, text.length - 2) + "," + text.substr(-2);
		            textFinal = textFormat.substr(0,text.length - 5) + "." + textFormat.substr(-6); 
                    return  "R$ " + textFinal;
                }
                function moneyTextToFloat(text) {
                    var cleanText = text.replace(",", ".");
                    return parseFloat(cleanText);
                }
            
                if($('#aluguel').val() == "") {$('#aluguel').val(0)};
                if($('#combustivel').val() == "") {$('#combustivel').val(0)};
                if($('#energia').val() == "") {$('#energia').val(0)};
                if($('#gas').val() == "") {$('#gas').val(0)};
                if($('#prestacao').val() == "") {$('#prestacao').val(0)};
                if($('#alimentacao').val() == "") {$('#alimentacao').val(0)};
                if($('#agua').val() == "") {$('#agua').val(0)};
                if($('#financiamento').val() == "") {$('#financiamento').val(0)};
                if($('#medicamento').val() == "") {$('#medicamento').val(0)};
                if($('#telefone').val() == "") {$('#telefone').val(0)};
                if($('#outrasDespesas').val() == "") {$('#outrasDespesas').val(0)};           
            
                total = moneyTextToFloat($('#aluguel').val()) + moneyTextToFloat($('#combustivel').val()) + moneyTextToFloat($('#energia').val()) + moneyTextToFloat($('#gas').val()) + moneyTextToFloat($('#prestacao').val()) + moneyTextToFloat($('#alimentacao').val()) + moneyTextToFloat($('#agua').val()) + moneyTextToFloat($('#financiamento').val()) + moneyTextToFloat($('#medicamento').val()) + moneyTextToFloat($('#telefone').val()) + moneyTextToFloat($('#outrasDespesas').val());
        	                   
                $('#total').html('<h4 class="text-danger">TOTAL: '+floatToMoneyText(total)+'</h4>');
                            
                return false;
                    
      		}); 
        
});




