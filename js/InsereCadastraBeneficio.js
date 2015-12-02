$(document).ready(function(){    
        
        $('form input').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });       
    
        $('#salvarCadBeneficio').click(function(){
                        
        		$.ajax({
         
          			url:'../models/insere/InsereCadBeneficio.php',
                type:'post',
          			dataType:'json',
          			data:$('#formCadBeneficios').serialize(),
          
          			beforeSend: function(){                   
                        
                        if ($('#nomeBenef').val()=='' ){
                            alert ("Preencha os campos obrigatorios  marcados com ( * )!");
                            return false;                            
                        }
                                                                            
                        var resposta = confirm('Deseja realmente salvar os dados?');                        
            			      if (resposta == false){                                                       
				                  alert("Operação CANCELADA pelo USUÁRIO!");
              			 	    return false;
            			      }                           
                },                    
          
          			success:function( json ){                         
                                     
    				        alert("Dados gravados com SUCESSO!");
    					      $('#dadosCB').after("<tr><td>"+json.nomeBenef+"</td>"+"<td>"+json.recursivoBenef+"</td>"+"<td>"+json.tempoRecursivo+"</td><td>"+json.obs+"</td><td>");
                                                                            
		            },          
          
        		});
        		return false;
                    
      		});       
        
});     
