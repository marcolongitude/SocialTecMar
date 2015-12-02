$(document).ready(function(){
    
        $('.excluir').click(function(){        	
            var resposta = confirm('Deseja realmente excluir os dados?');                        
            if (resposta == false){                                                       
			     alert("Operação CANCELADA pelo USUÁRIO!");
              	 return false;
            }      
        });
		
		$('#pesquisaCartao').keyup(function(){
										
				$.ajax({
				    //url:"../models/pesquisa/SQL/PesquisaDinamicaBeneficiarioSQL.php?nome="+$('#pesquisaCartao').val(),
                    url:"../models/pesquisa/PesquisaBeneficiario.php?nome="+$('#pesquisaCartao').val(),
					type:'GET',
					//data:$('.nome').serialize(),

					 beforeSend: function(){        

           				$('#CarregaBenef').hide();
            
          			},
									
					success:function( data ){
											
						$('#recebeDados').html(data);

					},					
					
				});

			return false;
		});
     

});