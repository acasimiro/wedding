<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Casamento de Shallaka &amp; Neto">
		<title>Sha &amp; Neto</title>

		<!-- Pace Loader -->
		<script src="js/pace.min.js"></script>
  		<link href="css/pace.css" rel="stylesheet" />

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Emoji -->
		<link href="emoji/emoji.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Owl Carousel stylesheet -->
		<link href="css/owl.carousel.css" rel="stylesheet">

		<!-- Owl Carousel Default Theme -->
		<link href="css/owl.theme.css" rel="stylesheet">

		<!-- Fancybox -->
		<link href="css/jquery.fancybox.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Serif%7CEngagement%7COpen+Sans:800" rel="stylesheet">

		<!-- Font Awesome Icons -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

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

		<!-- ========== GALLERY START ========== -->

		<a id="nossas-fotos"></a>
		<section id="gallery">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12 heading" data-scroll-reveal>
						<h2>Use a Hashtag <strong class="btn btn-primary">#<i style="color:orange">ShaeNeto</i></strong> no instagram</h2>
						<p><span></span><i class="fa fa-heart"></i><span></span></p>
					</div>
				</div>
				<div class="row" data-scroll-reveal>
					<div class="gallery">
						<?php include('instagram.php'); ?>
					</div>
				</div>
				<p><a href="javascript:window.history.back();" class="btn btn-primary">&#8592; Voltar</a></p>
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
		<script src="js/modernizr.custom.97074.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="js/retina-1.1.0.min.js"></script>

		<!-- Owl Carousel Plugin -->
		<script src="js/owl.carousel.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/jquery.fancybox.js"></script>

		<!-- Scroll Reveal Plugin -->
		<script src="js/scrollReveal.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings-inner.js"></script>

		<?php include_once("analyticstracking.php") ?>
	</body>
</html>