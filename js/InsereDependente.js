$(document).ready(function(){    
        
        $('#formD input').keyup(function() {
            this.value = this.value.toString().toUpperCase();
        });  

        $('#rendaDepend').maskMoney();
    
        $('#salvarD').click(function(){
	     	         
        		$.ajax({
         
          			url:'../models/insere/InsereDependente.php',
                    type:'post',
          			dataType:'json',
          			data:$('#formD').serialize(),
          
          			beforeSend: function(){
                            if ($('#nomeDepend').val()=='' || $('#dnascDepend').val()==''){
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
					    $('#dadosD').after("<tr>"+"<td>"+json.nomeDepend+"</td>"+"<td>"+json.dnascDepend+"</td>"+"<td>"+json.certDepend+"</td><td>"+json.tituloDepend+" Zona "+json.zonaTDepend+" Seção "+json.secaoTDepend+" Cidade "+json.cidadeTDepend+" Estado "+json.estadoTDepend+"</td>"+"<td>"+json.cartaoVacina+"</td>"+"<td>"+json.cidadeDepend+"</td>"+"<td>"+json.estadoDepend+"</td>"+"</tr>");
                                                                       
		            },          
          
        		});
        		return false;
                    
      		}); 
        //define o datepicker, calendario no campo de datas
        $( "#dnascDepend" ).datepicker({
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
            //$("#cpfBenef").mask("999.999.999-99");//campo de CPF
            $("#dnascDepend").mask("99-99-9999");//campo de data de nascimento do Dependente
            
        });
});



function validar()
	{		
		//var html = "";
		if($('#cpfCliente').validateCPF())
		{
			//html += "<br/>O 1º CPF é válido.";
			//$("#r").fadeOut();
		}
		else
		{
			//html += "<br/>O 1º CPF é <b style='color: #990000;'>inválido</b>.";
			$("#cpfBenef").val('CPF INVÁLIDO');
			//$("#r").fadeOut(10004);
			return false;
		}	
		//html = "<p>" + html + "</p>";
		//$('#r').html(html).position('center');
			
	}
     
