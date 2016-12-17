/**
 * 
 */

	document.getElementById('btnEnviar').onclick = function () {
		
		var Errors = [],
			msg = '';
		
		function valida (campo, mensagem) {
			
			(returnId(campo) == '' || returnId(campo) == 0) ? Errors.push(mensagem) : false;
		}
		
		function returnId(Nids) {
			
			var id = document.getElementById(Nids);
			return id.value;
		}
		
		valida('cpNome','Preencha o campo nome !');
		valida('cpEmail','Preencha o campo email !');
		valida('cpCep','Preencha o campo cep !');
		valida('cpRua','Preencha o campo rua !');
		valida('cpBairro','Preencha o campo bairro !');
		valida('cpCidade','Preencha o campo cidade !');
		valida('cpUf','Preencha o campo estado !');
		valida('cpTelefone','Preencha o campo telefone !');
	
		
		
		for( var i=0; i < Errors.length; i++) {
			
			msg += '\n' + Errors[i];
		}
		
		if(msg != '') {
			
			window.alert(msg);
			return false;
			
		} else {
			
			window.alert('Formulário enviado com sucesso !');
		}
		
	}