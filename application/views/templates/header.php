<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tecser Centro Lima </title>

	<!-- Cargar librerias -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');  ?>" />	
	<!-- NivoSlider -->
	<link rel="stylesheet" href="<?= base_url('assets/css/nivo-slider.css');  ?>" />	
	<!-- 0wl carousel -->
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css');  ?>" />	
	<!-- font awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css');  ?>" />	
	<!-- fsnvcybox -->
	<link rel="stylesheet" href="<?= base_url('assets/css/fancybox/jquery.fancybox.css');  ?>" />
	<!-- Estilos -->
	<link rel="stylesheet" href="<?= base_url('assets/css/master.css');  ?>" />

</head>
<body>

<!-- Main Header -->
<header class="mainHeader">
	<div class="container">
		<div class="mainHeader__content">

			<!-- lOGO -->
			<h1 class="logo">
				<a href="<?= base_url(); ?>"><img src="<?= IMAGES ?>/logo1.png" alt="logo-tecser" class="img-responsive" /></a>
			</h1><!-- /.logo -->

			<!-- Navegación -->
			<nav class="mainNavigation">
				<ul class="text-uppercase">
					<li><a class="active" href="<?= base_url(); ?>">inicio</a></li>
					<li><a class="to-link" data-to="seccion-tv" href="">tv</a></li>
					<li><a class="to-link" data-to="seccion-promo" href="">promociones</a></li>
					<li><a class="to-link" data-to="seccion-publicidad" href="">publicidad</a></li>
					<li><a class="to-link" data-to="seccion-nosotros" href="">nosotros</a></li>
					<li><a class="to-link" data-to="seccion-utilitarios" href="">utilitarios</a></li>
				</ul>
			</nav><!-- /. -->

			<!-- Segunda Imagen -->
			<figure class="mainHeader__image">
				<img src="<?= IMAGES ?>/logo2.png" alt="logo-2" class="img-responsive" />
			</figure><!-- /.mainHeader__image -->
			
		</div><!-- /.mainHeader__content -->

	</div><!-- /.container -->
</header> <!-- /.mainHeader -->