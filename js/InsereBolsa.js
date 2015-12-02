$(document).ready(function(){    
        
        $('form:input').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });       
    
        $('#salvarBolsa').click(function(){
                        
        		$.ajax({
         
          			url:'../models/insere/InsereBolsa.php',
                    type:'post',
          			dataType:'json',
          			data:$('#formBolsa').serialize(),
          
          			beforeSend: function(){                   
                                                                                                    
                        var resposta = confirm('Deseja realmente salvar os dados?');                        
            			if (resposta == false){                                                       
				             alert("Operação CANCELADA pelo USUÁRIO!");
              			 	 return false;
            			}                           
                    },                    
          
          			success:function( json ){                         
                                     
				        alert("Dados gravados com SUCESSO!");
                        if (json.tipoBolsa == 0){
                            $('#bolsaInfo').html('<i class="text-info"> -- Bolsa :'+json.nomeSup+"</i>");
                        }
                        if (json.tipoBolsa == 1){
                            $('#bolsaInfo').html('<i class="text-info"> -- Bolsa :'+json.nomeFarm+"</i>");
                        }
					                                                    
		            },          
          
        		});
        		return false;
                    
      		}); 
        
        $( ".validade" ).datepicker({
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
    
    
        //define a mascara para campos predeterminados
        $(function() {
            $.mask.definitions['~'] = "[+-]";
            $(".validade").mask("99-99-9999");//campo de data de validade
            //$("#dnascBenef").mask("99-99-9999");//campo de data de nascimento
            //$("#telBenef").mask("(99) 9999-9999");//campo de telefone do beneficiario
        });
});     
