$(document).ready(function(){    
        
        $('#formBenef input').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });  
    
        $('#finalizaCadastro').click(function(){
            location.reload();        
            $('#formBenef').each(function(){
                this.reset();
            });
                     
        });
    
        $('#rendaBenef').maskMoney();    
        
    
        $('#salvarB').click(function(){
                        
        		$.ajax({
         
          			url:'../models/insere/InsereBeneficiario.php',
                    type:'post',
          			dataType:'json',
          			data:$('#formBenef').serialize(),
          
          			beforeSend: function(){                   
                        
                        if ($('#nomeBenef').val()=='' || $('#dnascBenef').val()=='' || $('#cpfBenef').val()==''){
                            alert ("Preencha os campos obrigatorios  marcados com ( * )!");
                            return false;                            
                        }
                        
                        if($('#cpfBenef').validateCPF()){
                            			
		                }else{			
                            alert ("CPF INVALIDO");
			                return false;
		                }	
                            
                        var resposta = confirm('Deseja realmente salvar os dados?');                        
            			if (resposta == false){                                                       
				             alert("Operação CANCELADA pelo USUÁRIO!");
              			 	 return false;
            			}                           
                    },                    
          
          			success:function( json ){                         
                        if (json.tipoResposta == 'insere'){            
    				        alert("Dados gravados com SUCESSO!");
    					    $('#dados').after("<tr><td>"+json.nomeBenef+"</td>"+"<td>"+json.dnascBenef+"</td>"+"<td>"+json.cpfBenef+"</td><td>"+json.tituloBenef+"</td><td>"+json.endBenef+json.cidadeBenef+json.estadoBenef+"</td><td>");
                            $('#benefInfo').html('<b class="text-primary">' + json.nomeBenef + "</b>" + "<strong> Cartao:  " + json.cartaoBenef + "</strong>");
                            $(".idBenef").val(json.idBenef);
                            $('#addDependente').removeClass('disabled');
                            $('#salvarB').addClass('disabled');
                        }else if (json.tipoResposta == 'existe'){
                            alert("Este CPF já está cadastrado como Beneficiario!");
                        }
                        
		            },          
          
        		});
        		return false;
                    
      		}); 
        //define o datepicker, calendario no campo de datas
        $( "#dnascBenef" ).datepicker({
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
            $("#cpfBenef").mask("999.999.999-99");//campo de CPF
            $("#dnascBenef").mask("99-99-9999");//campo de data de nascimento
            $("#telBenef").mask("(99) 9999-9999");//campo de telefone do beneficiario
        });
});     
