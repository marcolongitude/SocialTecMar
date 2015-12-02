$(document).ready(function(){    
        
        $('form input').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });       
    
        $('#salvarFarm').click(function(){
                        
        		$.ajax({
         
          			url:'../models/insere/InsereFarmacia.php',
                    type:'post',
          			dataType:'json',
          			data:$('#formFarm').serialize(),
          
          			beforeSend: function(){                   
                        
                        if ($('#nomeFarm').val()=='' || $('#telFarm').val()=='' ){
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
					    $('#dadosF').after("<tr><td>"+json.nomeFarm+"</td>"+"<td>"+json.telFarm+"</td>"+"<td>"+json.cnpj+"</td><td>"+json.bairroFarm+"</td><td>");
                                                                        
		            },          
          
        		});
        		return false;
                    
      		}); 
        
        //define a mascara para campos predeterminados
        $(function() {
            $.mask.definitions['~'] = "[+-]";
            $("#telFarm").mask("(99) 9999-9999");//campo de telefone
            //$("#dnascBenef").mask("99-99-9999");//campo de data de nascimento
            //$("#telBenef").mask("(99) 9999-9999");//campo de telefone do beneficiario
        });
});     
