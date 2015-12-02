$(document).ready(function(){    
        
        $('#nomeUsers').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });
        
        $('#endUsers').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });
    
        $('#salvar').click(function(){
	     		
        		$.ajax({
         
          			url:'../models/insere/InsereUsers.php',
                    type:'post',
          			dataType:'json',
          			data:$('form').serialize(),
          
          			beforeSend: function(){
            				var resposta = confirm('Deseja realmente salvar os dados?');                        
            				if (resposta == false){                                                       
				                alert("Operação CANCELADA pelo USUÁRIO!");
              					return false;
            				}else {                                                            
                                if ($('#senhaUsers').val() != $('#senhaUsers1').val()){
                                    alert("Senhas diferentes!");
                                    return false;   
                                }                     
                            } 			
                            
                    },                    
          
          			success:function( json ){                         
                        if (json.tipoUsers == 0){
                            var tipoUsers = "Usuário Comum";
                        }else if (json.tipoUsers == 1){
                            var tipoUsers = "Administrador";
                        }                    
				        alert("Dados gravados com SUCESSO!");
					    $('#dados').after("<tr><td>"+json.nomeUsers+"</td>"+"<td>"+json.dnascUsers+"</td>"+"<td>"+json.endUsers+"</td><td>"+json.loginUsers+"</td><td>"+json.telUsers+"</td><td>"+tipoUsers+"</td></tr>");
                       
		            },          
          
        		});
        		return false;
      		}); 
    
        $( "#datepicker" ).datepicker({
            dateFormat: "dd-mm-yy",
			changeYear: true,
			changeMonth: true,
			autoSize: true,
			nextText: 'Próximo',
			prevText: 'Anterior',
			dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        		dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
		        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
		        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
		        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
			showOptions: { direction:  "up" },
			duration: "fast",
			showAnim: "slideDown"		
		});
});

$(function() {
    $.mask.definitions['~'] = "[+-]";
    $("#telUsers").mask("(99) 9999-9999");				
});
     
