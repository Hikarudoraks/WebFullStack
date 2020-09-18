(function($, URL, Helpers){

	var form = $('form[name="formCadastro"]');

	var submitCadastro = function(){

		$('body').on('click', '#btnSubmitCadastro', function(){

			var name = $('input[name="name"]').val();
			var email = $('input[name="email"]').val();
			var message = $('textarea[name="message"]').val();

			if(name == ''){
				swal({
					title:'Erro!',
					text: 'Preencha seu nome!',
					type: 'error'
				});
				return false;
			}
			if(email == ''){
				swal({
					title:'Erro!',
					text: 'Preencha seu email!',
					type: 'error'
				});
				return false;
			}
			if(message == ''){
				swal({
					title:'Erro!',
					text: 'Preencha o seu motivo de contato!',
					type: 'error'
				});
				return false;
			}

			$.ajax({
				url: URL + '/submitCadastro',
				type: 'POST',
				dataType: 'JSON',
				data: form.serialize(),
				complete: function(response){
					if(response.responseJSON.result){
						swal({
							title: 'Enviado!',
							text: 'Aguarde o nosso retorno',
							type: 'success'
						}).then(function(){
							window.location.reload();
							return true;
						});
					} else {
						swal({
							title: 'Erro!',
							text: 'Ocorreu um erro',
							type: 'error'
						});
						return false;
					}
				}
			});	
		});

	}

	$( document ).ready(function(){
		submitCadastro();
	});
})($, URL, Helpers)