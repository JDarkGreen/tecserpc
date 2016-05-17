<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tecser Centro Lima </title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
	<!-- sliderbar -->
	<link rel="stylesheet" href="<?= base_url('assets/css/slidebars.min.css');  ?>" />
	<!-- Estilos -->
	<link rel="stylesheet" href="<?= base_url('assets/css/master.css');  ?>" />

	<!-- Cargar zoomit -->
	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?3ubzF8uIDAn1dS9yM4wA45QJvPMdgtTM";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->	

</head>
<body>

<!-- Main Header -->
<header class="sb-slide mainHeader">
	<div class="container">
		<div class="mainHeader__content">

			<!-- Icono de abrir contenedor de navegacion solo en mobile -->
			<div id="icon-menu-mobile" class="mainHeader__icon-menu visible-xs-inline-block">
				<span class="glyphicon glyphicon-list"></span>
			</div>

			<!-- lOGO -->
			<h1 class="logo">
				<a href="<?= base_url(); ?>"><img src="<?= IMAGES ?>/logo1.png" alt="logo-tecser" class="img-responsive" /></a>
			</h1><!-- /.logo -->

			<!-- Navegación -->
			<nav class="mainNavigation hidden-xs">
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
			<figure class="mainHeader__image hidden-xs">
				<img src="<?= IMAGES ?>/logo2.png" alt="logo-2" class="img-responsive" />
			</figure><!-- /.mainHeader__image -->
			
		</div><!-- /.mainHeader__content -->

	</div><!-- /.container -->
</header> <!-- /.mainHeader -->

<!-- Modal que contiene el frame -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">

				<!-- IFrame Canal -->
				<iframe id="frame-canal" src="" frameborder="0" scrolling="No" style="height: 400px; max-width: 100%; width:100%;"></iframe>

				<!-- Mensaje o alerta -->

			</div> <!-- /modalbody -->
		</div> <!-- /modal content -->
	</div> <!-- /modal dialog -->
</div> <!-- modal fade -->

<!-- ASIDE BAR DE NAVEGACION SOLO EN VERSION MOBILE -->
<div class="sb-slidebar sb-left">
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
</div> <!-- /.nav -->

<!-- Aside Links -->
<aside class="sectionPage__common__sidebar-links">
	<!-- Facebook -->
	<a target="_blank" href="https://www.facebook.com/" class="">
		<img src="<?= IMAGES ?>/links/facebook.jpg"  alt="" class="img-responsive" />
	</a> <!-- /. -->
	<!-- Youtube -->
	<a target="_blank" href="https://www.youtube.com/" class="">
		<img src="<?= IMAGES ?>/links/youtube.jpg" alt="" class="img-responsive" />
	</a> <!-- /. -->
	<!-- Sunat -->
	<a target="_blank" href="http://www.sunat.gob.pe/" class="">
		<img src="<?= IMAGES ?>/links/sunat.jpg" alt="" class="img-responsive" />
	</a> <!-- /. -->
	<!-- Sunarp -->
	<a target="_blank" href="https://www.sunarp.gob.pe/" class="">
		<img src="<?= IMAGES ?>/links/sunarp.jpg" alt="" class="img-responsive" />
	</a> <!-- /. -->
</aside> <!-- /.sectionPage__common__sidebar-links -->

<!-- Elemento Modal de Inicio -->
<a id="open-welcome-modal" href="#welcome-modal" class="hidden-xs"></a>

<section id="welcome-modal" class="welcome-modal text-center">
	<a class="modal_close" href="#">x</a>
	<figure>
		<img src="<?= IMAGES ?>/modal/solucion-definitivo-corelx7.jpg" alt="solucion-definitivo-corelx7" class="img-responsive center-block" />
	</figure>
</section> <!-- /.welcome-modal -->

<!-- Contenedor para mobile -->
<div id="sb-site">
