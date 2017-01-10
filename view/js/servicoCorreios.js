

$(document).ready(function() { // INICIA BIBLIOTECA JQUERY
	
	$("#cpCep").bind('blur', function() {
		
		var cep = $(this).val().replace(/\D/);
		
		if(cep != '') {
			
			var validaCep = /^[0-9]{8}$/;
			
			if(validaCep.test(cep)) {
				
				UTIL.loading();
				
				$.getJSON('https://viacep.com.br/ws/' + cep + '/json/?callback=?', function(returnDados) { 
					
					if(!('erro' in returnDados)) {
						
					$('#cpRua').val(returnDados.logradouro);
					$('#cpBairro').val(returnDados.bairro);
					$('#cpCidade').val(returnDados.localidade);
					$('#cpUf').val(returnDados.uf);
					
					} else {
						
						window.alert('O cep informado não pode ser encontrado !');
						UTIL.toClear();
					}
				});
				
			} else {
				
				UTIL.toClear();
				window.alert('O formato de cep informado não é válido !');
			}
			
		}
	});
})