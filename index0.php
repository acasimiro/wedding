<!DOCTYPE html>
<html ng-app="siteApp">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Casamento de Diana &amp; Andr&eacute;">
		<title>Diana &amp; Andr&eacute;</title>

		<!-- Pace Loader -->
		<script src="js/libs/pace.min.js"></script>
  		<link href="css/pace.css" rel="stylesheet" />

		<!-- Bootstrap -->
		<link href="css/libs/bootstrap.css" rel="stylesheet">

		<!-- Emoji -->
		<link href="emoji/emoji.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Superslides CSS -->
		<link href="css/superslides.css" rel="stylesheet">

		<!-- Countdown CSS -->
		<link href="css/countdown.css" rel="stylesheet">

		<!-- Owl Carousel stylesheet -->
		<link href="css/libs/owl.carousel.css" rel="stylesheet">

		<!-- Owl Carousel Default Theme -->
		<link href="css/libs/owl.theme.css" rel="stylesheet">

		<!-- Fancybox -->
		<link href="css/libs/jquery.fancybox.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Serif%7CEngagement%7COpen+Sans:800" rel="stylesheet">

		<!-- Font Awesome Icons -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
		.col-sm-2-1 { float: left; margin-top: 5px; margin-bottom: 10px; width: 20%; }
		.col-sm-2-1 input { width: 70px; }
		.ng-invalid { border-color: #a94442; }
		</style>
	</head>
	<body >

		<a id="home"></a>

		<!-- ========== BANNER START ========== -->

		<div id="slides">
			<div class="slides-container">
				<img src="images/banner1.jpg" alt="" />
				<img src="images/banner2.jpg" alt="" />
				<img src="images/banner3.jpg" alt="" />
				<img src="images/banner4.jpg" alt="" />
			</div>
			<div class="tint">
				<div class="welcome text-center" data-scroll-reveal="enter from the top after 2s">
					<h1>Diana &amp; Andr&eacute;</h1>
					<p>n&oacute;s vamos nos casar</p>
					<p><span></span><i class="fa fa-heart"></i><span></span></p>
					<p>29 de outubro de 2015</p>
				</div>
			</div>
			<div class="countdown" data-scroll-reveal="enter from the bottom after 2.5s"></div>
		</div>

		<!-- ========== BANNER END ========== -->

		<!-- ========== MENU START ========== -->

		<div class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index"><img src="images/logo.png" alt="" class="img-responsive" /></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#os-noivos">Os Noivos</a></li>
						<li><a href="#confirmar-presenca">Confirmar Presen&ccedil;a</a></li>
						<li><a href="#onde-acontecera">Local</a></li>
						<li><a href="#nossas-fotos">Fotos</a></li>
						<li><a href="lista-de-presentes">Lista de Presentes</a></li>
						<li><a href="mensagem-aos-noivos">Mensagem aos Noivos</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- ========== MENU END ========== -->

		<!-- ========== ABOUT US START ========== -->

		<a id="os-noivos"></a>
		<section id="about">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12 heading" data-scroll-reveal>
						<h2>Ele &amp; Ela</h2>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6" data-scroll-reveal="enter from the left">
						<img src="images/about1.jpg" class="img-responsive img-circle" alt="" width="270" height="270" />
						<h5>Andr&eacute; Casimiro</h5>
						<p>A tampa</p>
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/ah.casimiro" target="_blank"><i class="fa fa-facebook"></i></a></li>
						</ul>
						<div class="mobile-divider"><span></span><i class="fa fa-heart"></i><span></span></div>
					</div>
					<div class="col-sm-6" data-scroll-reveal="enter from the right after 0.5s">
						<img src="images/about2.jpg" class="img-responsive img-circle" alt="" width="270" height="270" />
						<h5>Diana Yamashiro</h5>
						<p>e a panela</p>
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/diana.yamashiro" target="_blank"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== ABOUT US END ========== -->


		<!-- ========== LOCATION START ========== -->

		<a id="confirmar-presenca"></a>
		<section id="location">

			<!-- Google Map Script -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoRMxiPsqJ9SUuaK1KsCAjd3gqnecjlBw"></script>
			<script type="text/javascript">

				function initialize() {

					// Create an array of styles.
					var styles = [
					  {
					    "stylers": []
					  },{
					    "featureType": "water",
					    "stylers": [
					      { "lightness": -12 }
					    ]
					  }
					];

					// Create a new StyledMapType object, passing it the array of styles,
					// as well as the name to be displayed on the map type control.
					var styledMap = new google.maps.StyledMapType(styles,
					{name: "Styled Map"});


								var mapOptions = {
									scrollwheel: false,
									zoom: 12,
									center: new google.maps.LatLng(-3.7280045, -38.4404012),
					mapTypeControlOptions: {
					  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
					}
					}
					var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

					//Associate the styled map with the MapTypeId and set it to display.
					map.mapTypes.set('map_style', styledMap);
					map.setMapTypeId('map_style');

					setMarkers(map, places);
				}

				var contentIgreja = '<div class="content-map">'+
				      '<div>'+
				      '</div>'+
				      '<h1>Cerim&ocirc;nia Religiosa</h1>'+
				      '<div>'+
				      '<p><strong>Local:</strong> Santu&aacute;rio Nossa Senhora do L&iacute;bano</p>'+
				      '<p><strong>Endere&ccedil;o:</strong> R. Rep&uacute;blica do L&iacute;bano, 15 - Meireles, Fortaleza - CE, 60160-140</p>'+
				      '<p><strong>Hor&aacute;rio:</strong> 20:00</p>'+
				      '</div>'+
				      '</div>';
				var infowindowIgreja = new google.maps.InfoWindow({ content: contentIgreja });

				var contentBuffet = '<div class="content-map">'+
				      '<div>'+
				      '</div>'+
				      '<h1>Festa</h1>'+
				      '<div>'+
				      '<p><strong>Local:</strong> Luana\'s Buffet</p>'+
				      '<p><strong>Endereço:</strong> Rua General Piragibe, 838 - Parquel&acirc;ndia, Fortaleza - CE, 60450-250</p>'+
				      '</div>'+
				      '</div>';
				var infowindowBuffet = new google.maps.InfoWindow({ content: contentBuffet });

				var places = [
					['Cerim'+String.fromCharCode(527)+'nia Religiosa', -3.7300045, -38.5004012, 1, infowindowIgreja, 'images/church-map-marker.png'],
					['Festa'                                         , -3.742001 , -38.55712  , 1, infowindowBuffet, 'images/party-map-marker.png' ]
				];

				function setMarkers(map, locations) {
					// Add markers to the map
					for (var i = 0; i < locations.length; i++) {
						var image = {
							url: locations[i][5],
							// This marker is 40 pixels wide by 42 pixels tall.
							size: new google.maps.Size(62, 58),
							// The origin for this image is 0,0.
							origin: new google.maps.Point(0,0),
							// The anchor for this image is the base of the pin at 20,42.
							anchor: new google.maps.Point(20, 58)
						};

						addMarker(map, image, locations[i]);
					}
				}

				function addMarker(map, image, place) {
					var myLatLng = new google.maps.LatLng(place[1], place[2]);
					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						icon: image,
						title: place[0],
						zIndex: place[3],
						animation: google.maps.Animation.DROP
					});

					google.maps.event.addListener(marker, "click", function() {
						places.forEach(function(e) { e[4].close(); });
						place[4].open(map, marker);
					});
				}

				google.maps.event.addDomListener(window, 'load', initialize);
			</script>

			<div id="map-canvas"></div>

			<!-- ========== LOCATION END ========== -->

			<!-- ========== RSVP START ========== -->
			<span ng-controller="ConfirmarPresencaCtrl">

			<div id="rsvp" class="text-center" data-scroll-reveal>
				<div class="heading" style="padding-bottom:2px;margin-top:-25px">
					<h2 style="color:#fff">Confirme sua presença</h2>
					<p><span></span><i class="fa fa-heart"></i><span></span></p>
					<p style="color:#f7f7f7">Recebeu o convite e gostaria de confirmar sua presença? Por favor, preencha os campos abaixo.</p>
				</div>
				<div class="row button-inline">
					<button type="button" class="btn btn-lg btn-block btn-default" data-toggle="modal" data-target="#modal-confirmacao" ng-click="limpaFormulario(true);"><i class="glyphicon glyphicon-thumbs-up" style="color: #5cee22"></i> EU VOU</button>
					<button type="button" class="btn btn-lg btn-block btn-default" data-toggle="modal" data-target="#modal-confirmacao" ng-click="limpaFormulario(false);"><i class="glyphicon glyphicon-thumbs-down" style="color: #b4082c"></i> NÃO PODEREI IR</button>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="modal-confirmacao" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-confirmacao-label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="modal-confirmacao-label">Confirmar presença</h4>
						</div>
						<div class="modal-body">
							<p ng-hide="!euVou">Olá, convidado. Confirme abaixo sua presença. <br>Todos os campos são obrigatórios.</p>
							<p ng-hide="euVou">Olá, convidado. Que pena que você não irá ao nosso casamento, sentiremos sua falta. <br>Todos os campos são obrigatórios.</p>
							<form role="form" name="confirmarPresencaForm" novalidate>
								<div class="row">
									<div class="form-group col-xs-12">
										<label>Nome</label>
										<input required type="text" ng-model="nomeNoConvite" name="nomeNoConvite" class="form-control" id="input-name" placeholder="Nome no convite">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-xs-12">
										<label>Email</label>
										<input required type="email" ng-model="email" name="email" class="form-control" id="input-email" placeholder="exemplo@exemplo.com.br">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-xs-6" ng-hide="!euVou">
										<label>Número de Convidados</label>
										<select ng-required="euVou" ng-model="convidadosSelecionado" name="convidadosSelecionado" class="form-control" ng-options="c.label for c in convidados">
											<option value="">Selecione</option>
										</select>
									</div>
									<div class="form-group col-xs-6" ng-hide="!euVou || !convidadosSelecionado">
										<label>Quantos são mulheres?</label>
										<select ng-required="euVou" ng-model="convidadosMulheresSelecionado" name="convidadosMulheresSelecionado" class="form-control" ng-options="c.label for c in convidadosMulheres">
											<option value="">Selecione</option>
										</select>
									</div>
									<div class="form-group col-xs-12" ng-hide="!euVou || (!convidadosMulheresSelecionado || !convidadosMulheresSelecionado.value)">
										<label>Informe o tamanho do pé de cada convidada</label>
										<div class="col-xs-12">
											<div class="col-sm-2-1" ng-repeat="pe in convidadosMulheresPes">
												<input ng-required="euVou" type="text" ng-model="pe.tamanho" ng-pattern="/^[0-9]{2}$/" maxlength="2" class="form-control" id="input-name" placeholder="Ex: 35">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							<button id="enviarPresenca" type="button" class="btn btn-primary" ng-click="enviarPresenca()" ng-disabled="confirmarPresencaForm.$invalid && !botaoSendAtivo">Enviar <i class="glyphicon glyphicon-send" style="color:#f7f91f"></i></button>
						</div>
					</div>
				</div>
			</div>


			<!-- Modal -->
			<div class="modal fade" id="modal-mensagem" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-mensagem-label" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="modal-confirmacao-label">Mensagem</h4>
						</div>
						<div class="modal-body">
							
						</div>
					</div>
				</div>
			</div>

			</span>

			<!-- ========== RSVP END ========== -->

		</section>

		<!-- ========== WHERE START ========== -->

		<a id="onde-acontecera"></a>
		<section id="story" style="background: #f5f4ec;">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12 heading" data-scroll-reveal>
						<h2>Onde acontecerá</h2>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>
					</div>
				</div>
				<div class="row row-margin">
					<div class="col-sm-6" data-scroll-reveal="enter from the left after 0.5s">
						<h5 style="margin-top:0;">Cerim&ocirc;nia Religiosa</h5>
						<h6><img src="images/church-map-marker.png" width="62" height="58"></h6>
						<p><strong>Local:</strong> Santu&aacute;rio Nossa Senhora do L&iacute;bano</p>
				        <p><strong>Endere&ccedil;o:</strong> R. Rep&uacute;blica do L&iacute;bano, 15</p>
				        <p>Meireles, Fortaleza - CE, 60160-140</p>
				        <p><strong>Hor&aacute;rio:</strong> 20:00</p>
						<div class="mobile-divider"><span></span><i class="fa fa-heart"></i><span></span></div>
					</div>
					<div class="col-sm-6" data-scroll-reveal="enter from the right after 0.5s">
						<h5 style="margin-top:0;">Festa</h5>
						<h6><img src="images/party-map-marker.png" width="62" height="58"></h6>
						<p><strong>Local:</strong> Luana's Buffet</p>
				        <p><strong>Endereço:</strong> Rua General Piragibe, 838</p>
				        <p>Parquel&acirc;ndia, Fortaleza - CE, 60450-250</p>
						<div class="mobile-divider"><span></span><i class="fa fa-heart"></i><span></span></div>
					</div>
					<div class="col-sm-12" data-scroll-reveal="enter from the top after 0.5s">
						<p><strong>Traje:</strong> Passeio Completo</p>
					</div>
				</div>
		</section>

		<!-- ========== WHERE END ========== -->

		<!-- ========== GALLERY START ========== -->

		<a id="nossas-fotos"></a>
		<section id="gallery">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12 heading" data-scroll-reveal>
						<h2>Use a Hashtag <a href="hashtag-instagram-shaeneto"><strong class="btn btn-primary">#<i style="color:orange">ShaeNeto</i></strong></a> no instagram</h2>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>
					</div>
				</div>
				<div class="row" data-scroll-reveal>
					<div class="gallery">
						<?php $photo_limit = 12; include('instagram.php'); ?>
					</div>
					<p><a href="hashtag-instagram-shaeneto" class="btn btn-primary">Ver todas as fotos <i style="color:orange"><span class="glyphicon glyphicon-camera"></span></i></a></p>
				</div>
			</div>
		</section>

		<!-- ========== GALLERY END ========== -->

		<!-- ========== FOOTER START ========== -->

		<footer>
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12" data-scroll-reveal>
						Sha & Neto - 23 DE DEZEMBRO DE 2014. <br>Não se esqueça de utilizar a Hashtag <strong style="color:#819AB0">#ShaeNeto</strong> quando for postar suas fotos.︎
					</div>
				</div>
			</div>
		</footer>

		<!-- ========== FOOTER END ========== -->

		<!-- Modernizr Plugin -->
		<script src="js/libs/modernizr.custom.97074.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/libs/jquery-1.10.2.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="js/libs/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="js/libs/retina-1.1.0.min.js"></script>

		<!-- Superslides Plugin -->
		<script src="js/libs/jquery.easing.1.3.js"></script>
		<script src="js/libs/jquery.animate-enhanced.min.js"></script>
		<script src="js/libs/jquery.superslides.js"></script>

		<!-- Countdown Plugin -->
		<script src="js/libs/jquery.plugin.min.js"></script>
		<script src="js/libs/jquery.countdown.min.js"></script>

		<!-- Scrolly Plugin -->
		<script src="js/libs/jquery.scrolly.js"></script>

		<!-- CountTo Plugin -->
		<script src="js/jquery.countTo.js"></script>

		<!-- Owl Carousel Plugin -->
		<script src="js/libs/owl.carousel.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/libs/jquery.fancybox.js"></script>

		<!-- Scroll Reveal Plugin -->
		<script src="js/libs/scrollReveal.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>

		<script src="js/libs/angular.min.js"></script>
		<script src="js/libs/angular-route.min.js"></script>
		<script src="js/libs/angular-sanitize.min.js"></script>
		<script src="js/controller.js"></script>

	</body>
</html>