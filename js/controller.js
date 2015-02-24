var siteApp = angular.module('siteApp', ['ng','ngSanitize']);

siteApp.controller('ConfirmarPresencaCtrl', function ($scope, $http) {
  $scope.convidados = [];
  for(i=1; i <= 10; i++) {
  	var l = i + ' convidado' + ( (i>1) ? 's' : '' );
  	$scope.convidados.push({ value: i, label: l });
  }

  $scope.$watch('convidadosSelecionado', function(newVal) {
  	var convidados = [];

  	if(newVal) {
	  	for(i=0; i <= newVal.value; i++) {
	  		var l = 'Nenhum convidado';
	  		if(i > 0) {
	  			var l = i + ' convidada' + ( (i>1) ? 's' : '' );
	  		}
	  		convidados.push({ value: i, label: l });
	  	}
  	}
	$scope.convidadosMulheresSelecionado = null;
	$scope.convidadosMulheres = convidados;
  });

  $scope.$watch('convidadosMulheresSelecionado', function(newVal) {
  	if(!newVal) {
  		return;
  	}
	var convidados = [];
	for(i=0; i < newVal.value; i++) {
		convidados.push({ tamanho: '' });
	}
	$scope.convidadosMulheresPes = convidados;
  });

  $scope.limpaFormulario = function(euVou) {
  	$scope.botaoSendAtivo = false;
	$scope.nomeNoConvite = null;
	$scope.email = null;
	$scope.convidadosSelecionado = null;
	$scope.convidadosMulheresSelecionado = null;
	$scope.convidadosMulheresPes = [];
	$scope.enviando = false;
	$scope.euVou = euVou;
	$('#enviarPresenca').html('Enviar <i class="glyphicon glyphicon-send" style="color:#f7f91f"></i>');
  };
  $scope.limpaFormulario();

  $scope.enviarPresenca = function() {
  	if($scope.confirmarPresencaForm.$invalid) {
  		return;
  	}

  	if($scope.euVou) {
	  	var pes = '';
	  	for(i=0; i<$scope.convidadosMulheresPes.length; i++) {
	  		if(i!=0) {
	  			pes +=' - ';
	  		}
	  		pes += $scope.convidadosMulheresPes[i].tamanho;
	  	}

	  	var obj = {
	  		nome: $scope.nomeNoConvite.toUpperCase(),
	  		email: $scope.email.toUpperCase().toLowerCase(),
	  		convidados: $scope.convidadosSelecionado.value,
	  		mulheres: $scope.convidadosMulheresSelecionado.value,
	  		pes: pes,
	  		euVou: 'sim'
	  	};
		
		var csv = obj.nome + ',' +
		            obj.email + ',' +
		            obj.convidados + ',' +
		            obj.mulheres + ',' +
		            obj.pes + ',' +
		            obj.euVou;
	} else {

		var obj = {
	  		nome: $scope.nomeNoConvite.toUpperCase(),
	  		email: $scope.email.toUpperCase().toLowerCase(),
	  		euVou: 'não'
	  	};
		
		var csv = obj.nome + ',' +
		            obj.email + ',,,,' +
		            obj.euVou;

	}
	var json = encodeURIComponent(JSON.stringify(obj));
	var csv  = encodeURIComponent(csv);

	$scope.botaoSendAtivo = false;

	$scope.botaoSendValue = $('#enviarPresenca').html();
	$('#enviarPresenca').html('Aguarde... <img src="images/ajax-loader.gif" width="16" height="11" />');

	if ($scope.enviando) {
		return false;
	}
	$scope.enviando = true;

	$http.post('/api-confirmacao', { json: json, csv: csv }).
	success(function(data, status, headers, config) {

		$('#modal-confirmacao').modal('hide');

		if($scope.euVou) {
			$('#modal-mensagem div.modal-body').html('<p><i style="color: green"; class="glyphicon glyphicon-thumbs-up"></i> Sua mensagem foi enviada com sucesso!</p><p>Estamos muito felizes de você compartilhar esse momento conosco! :)</p><p>Nos vemos dia 23 de Dezembro de 2014.</p>');
		} else {
			$('#modal-mensagem div.modal-body').html('<p><i style="color: green"; class="glyphicon glyphicon-thumbs-up"></i> Sua mensagem foi enviada com sucesso!</p><p>Que pena que você não irá ao nosso casamento, sentiremos sua falta.</p>');
		}

		$('#modal-mensagem').modal();

		setTimeout(function() { $('#modal-mensagem').modal('hide'); }, 15500);

		$scope.botaoSendAtivo = true;
		$scope.enviando = false;

		$('#enviarPresenca').html($scope.botaoSendValue);

		$scope.limpaFormulario();
	}).
	error(function(data, status, headers, config) {
		
		$('#modal-mensagem div.modal-body').html('<p><i style="color: red"; class="glyphicon glyphicon-thumbs-down"></i> Falha ao tentar enviar sua confirmação de presença, por favor tente novamente!</p>');

		$('#modal-mensagem').modal();

		setTimeout(function() { $('#modal-mensagem').modal('hide'); }, 15500);

		$scope.botaoSendAtivo = true;
		$scope.enviando = false;

		$('#enviarPresenca').html($scope.botaoSendValue);
	});
  }
});