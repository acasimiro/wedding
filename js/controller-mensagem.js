var siteApp = angular.module('siteApp', ['ng','ngSanitize']);

siteApp.controller('MensagemCtrl', function ($scope, $http, $sce) {
	$scope.limpaFormulario = function() {
		$scope.nome = '';
		$scope.email = '';
		$scope.mensagem = '';
	}
	$scope.limpaFormulario();
  	

	$scope.enviar = function() {
	  	if($scope.mensagemForm.$invalid) {
	  		return;
	  	}

		$scope.botaoSendAtivo = false;
		$scope.botaoSendValue = $('#enviar').html();
		$('#enviar').html('Aguarde... <img src="images/ajax-loader.gif" width="16" height="11" />');

		if ($scope.enviando) {
			return false;
		}
		$scope.enviando = true;

	  	var json = {
			nome: encodeURIComponent($scope.nome.toUpperCase()),
			email: encodeURIComponent($scope.email.toUpperCase().toLowerCase()),
			mensagem: encodeURIComponent($scope.mensagem)
		};

		$http.post('/api-mensagem', { json: json }).
		success(function(data, status, headers, config) {

			$scope.limpaFormulario();
			window.location.href = window.location.href;
		}).
		error(function(data, status, headers, config) {
			
			$('#modal-mensagem div.modal-body').html('<p><i style="color: red"; class="glyphicon glyphicon-thumbs-down"></i> Falha ao tentar enviar a mensagem aos noivos, por favor tente novamente!</p>');
			$('#modal-mensagem').modal();

			setTimeout(function() { $('#modal-mensagem').modal('hide'); }, 15500);

			$scope.botaoSendAtivo = true;
			$scope.enviando = false;

			$('#enviar').html($scope.botaoSendValue);
		});
  }
});