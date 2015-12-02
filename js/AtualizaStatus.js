$(document).ready(function(){
        $('#status').click(function(){
	     		
        		$.ajax({
         
          			url:'../models/atualiza/AtualizaStatus.php',
                    type:'post',          			
          			data:$('form').serialize(),
          
          			beforeSend: function(){
            				var resposta = confirm('Deseja realmente salvar os dados?');                        
            				if (resposta == false){                                                       
				                alert("Operação CANCELADA pelo USUÁRIO!");
              					return false;
            				}                            
          			},
          
          			success:function( data ){                         
                        	        alert("Atendimento do Srª: "+data+" realizado com sucesso!");
					    
		            },          
          
        		});
        		return false;
      		}); 	  	  
});

