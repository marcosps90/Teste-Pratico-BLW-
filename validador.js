$(document).ready(function() {
	$('#formulario').submit(function(event) {
		var nome = $('#nome').val().trim();
		var email = $('#email').val().trim();
		var mensagem = $('#mensagem').val().trim();

		if (nome == '' || email == '' || mensagem == '') {
			alert('Os campos nome, e-mail e mensagem são obrigatórios!');
			event.preventDefault();
		}
	});
});
