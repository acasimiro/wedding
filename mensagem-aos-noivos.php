<!DOCTYPE html>
<html ng-app="siteApp">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Casamento de Shallaka &amp; Neto">
		<title>Sha &amp; Neto</title>

		<!-- Pace Loader -->
		<script src="js/libs/pace.min.js"></script>
  		<link href="css/pace.css" rel="stylesheet" />

		<!-- Bootstrap -->
		<link href="css/libs/bootstrap.css" rel="stylesheet">

		<!-- Emoji -->
		<link href="emoji/emoji.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">

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
		.ng-invalid { border-color: #a94442; }
		.media > .pull-left { margin-right: 20px !important; }
		</style>
	</head>
	<body class="inner">

		<!-- ========== MENU START ========== -->

		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img src="images/logo.png" alt="" class="img-responsive" /></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/#os-noivos">Os Noivos</a></li>
						<li><a href="/#confirmar-presenca">Confirmar Presen&ccedil;a</a></li>
						<li><a href="/#onde-acontecera">Onde Acontacerá</a></li>
						<li><a href="/#nossas-fotos">Fotos</a></li>
						<li><a href="lista-de-presentes">Lista de Presentes</a></li>
						<li><a href="mensagem-aos-noivos">Mensagem aos Noivos</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- ========== MENU END ========== -->

		<!-- ========== BLOG START ========== -->

		<section ng-controller="MensagemCtrl">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 heading text-center" data-scroll-reveal>
						<h2>Mensagem aos Noivos</h2>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>
					</div>
				</div>

				<!-- POST START -->
				<div class="row">
					<div class="col-sm-12" data-scroll-reveal>
						<p data-scroll-reveal><img src="images/person1.jpg" class="img-responsive img-rounded" alt="" width="1170" height="500" /></p>
					</div>
				</div>
				<!-- POST END -->

				<!-- COMMENTS START -->
				<div class="row">
					<div class="col-sm-12">
						<h3 class="text-center">Mensagens</h3>
						<ul class="media-list">
						<?php require_once('api-mensagem-lista.php'); ?>
						</ul>
					</div>
				</div>
				<!-- COMMENTS END -->

				<!-- COMMENT FORM START -->
				<div class="row">
					<div class="col-sm-12 text-center" data-scroll-reveal>
						<hr>
						<h3>Deixe a sua mensagem</h3>
					</div>
				</div>
				<form role="form" name="mensagemForm">
					<div class="row" data-scroll-reveal>
						<div class="form-group col-sm-6">
							<input type="text" class="form-control" required ng-model="nome" id="input-name" placeholder="Nome *">
						</div>
						<div class="form-group col-sm-6">
							<input type="email" class="form-control" required ng-model="email" id="input-email" placeholder="Email *">
						</div>
					</div>
					<div class="row" data-scroll-reveal>
						<div class="form-group col-sm-12">
							<textarea class="form-control" required rows="5" ng-model="mensagem" placeholder="Mensagem *"></textarea>
						</div>
					</div>
					<div class="row" data-scroll-reveal>
						<div class="form-group col-sm-12 text-center">
							<button id="enviar" type="button" class="btn btn-lg btn-primary" ng-click="enviar()" ng-disabled="mensagemForm.$invalid && !botaoSendAtivo">Enviar <i class="glyphicon glyphicon-send" style="color:#f7f91f"></i></button>
						</div>
					</div>
				</form>
				<!-- COMMENTS FORM END -->
				
				<!-- Modal -->
				<div class="modal fade" id="modal-mensagem" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-mensagem-label" aria-hidden="true">
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
			</div>
		</section>

		<!-- ========== BLOG END ========== -->

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

		<!-- Owl Carousel Plugin -->
		<script src="js/libs/owl.carousel.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/libs/jquery.fancybox.js"></script>

		<!-- Scroll Reveal Plugin -->
		<script src="js/libs/scrollReveal.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings-inner.js"></script>

		<script src="js/libs/angular.min.js"></script>
		<script src="js/libs/angular-route.min.js"></script>
		<script src="js/libs/angular-sanitize.min.js"></script>
		<script src="js/controller-mensagem.js"></script>

		<?php include_once("analyticstracking.php") ?>
	</body>
</html>