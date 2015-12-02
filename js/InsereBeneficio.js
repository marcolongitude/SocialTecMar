$(document).ready(function(){    
            
        $('#salvarBeneficio').click(function(){
	     	         
        		$.ajax({
         
          			url:'../models/insere/InsereBeneficio.php',
                type:'post',          			
          			data:$('#formBeneficio').serialize(),
          
          			beforeSend: function(){
            				var resposta = confirm('Deseja realmente salvar os dados?');                        
            				if (resposta == false){                                                       
				                alert("Operação CANCELADA pelo USUÁRIO!");
              					return false;
            				}                           
                    },                    
          
          			success:function( data ){                         
                                     
    				        alert("Dados gravados com SUCESSO!");
                    $('#dados').hide();
                    $('#recebeDados').html(data);                                      
					                                                                           
		            },          
          
        		});
        		return false;
                    
      		}); 
        
});




