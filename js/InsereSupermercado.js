$(document).ready(function(){    
        
        $('#formSup input').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });       
    
        $('#salvarSup').click(function(){
                        
        		$.ajax({
         
          			url:'../models/insere/InsereSupermercado.php',
                    type:'post',
          			dataType:'json',
          			data:$('#formSup').serialize(),
          
          			beforeSend: function(){                   
                        
                        if ($('#nomeSup').val()=='' || $('#telSup').val()=='' ){
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
					    $('#dadosP').after("<tr><td>"+json.nomeSup+"</td>"+"<td>"+json.telSup+"</td>"+"<td>"+json.endSup+"</td><td>"+json.bairroSup+"</td><td>"+json.cnpj+"</td><td>");
                                                                        
		            },          
          
        		});
        		return false;
                    
      		}); 
        
        //define a mascara para campos predeterminados
        $(function() {
            $.mask.definitions['~'] = "[+-]";
            $("#telSup").mask("(99) 9999-9999");//campo de telefone
            //$("#dnascBenef").mask("99-99-9999");//campo de data de nascimento
            //$("#telBenef").mask("(99) 9999-9999");//campo de telefone do beneficiario
        });
});     
