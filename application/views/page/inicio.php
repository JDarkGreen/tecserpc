
<!-- Seccion Contenedora -->
<section class="sectionWrapper">
	
	<!-- Seccion de Logeo y buscador -->
	<section class="sectionPage__section-one">
		<div class="container">
			<div class="row">
				<!-- Seccion Buscador -->
				<div class="col-xs-12 col-md-9">
					<!-- Buscador de Google -->
					<section class="sectionPage__search">
						<div class="row">
							<div class="col-xs-12 col-md-9 text-center">
								<!-- Logo google -->
								<a href="" class="logo__google">
									<img src="<?= IMAGES ?>/logos/google.png" alt="" class="img-responsive" />
								</a>
								<!-- Formulario -->
								<form id="form_google" method="GET" action="http://www.google.com/search">
									<section class="tabs-google text-capitalize">
										<a data-option="search" plus="" class="btn_google" href="">web</a>
										<a data-option="images"plus="" class="btn_google" href="">imágenes</a>
										<a data-option="search" plus="&tbm=vid" class="btn_google" href="">videos</a>
										<a data-option="search" plus="&tbm=nws" class="btn_google" href="">noticias</a>
									</section> <!-- ./tabs -->

										<input type="hidden" name="cref" value="" />
										<input type="hidden" name="ie" value="utf-8" />
										<input type="hidden" name="hl" value="" />

									<div class="relative">
										<input id="input_google" name="q" type="text" class="input-google" />
										<button name="btnG" type="submit" class="btn__search">Buscar</button>
									</div> <!-- /.relative -->

								</form> <!-- /.form -->
							</div><!-- /.col-xs-9 -->
						</div><!-- /.row  -->
					</section> <!-- /.sectionPage__search -->
				</div><!-- /.col-xs-9 -->

				<!-- Seccion Logeo -->
				<div class="col-md-3 hidden-xs">
					<section class="sectionPage__login">
						<form method="POST" action="#">
							<h2 class="text-uppercase text-center">área usuario</h2>
							<!-- Campos -->
							<div class="content">
								<label for="username">Usuario:</label>
								<input type="text" name="username" />

								<label for="password">Password:</label>
								<input type="password" name="password" />

								<button type="submit" class="submit pull-right">Ingresar</button>

								<!-- Limpiar floats --> <div class="clearfix"></div>
								<!-- Links -->
								<a href="#" class="form-link">¿Olvidaste tu contraseña?</a>
								<a href="#" class="form-link">Si no eres uno ! afíliate ! </a>
							</div><!-- /.content -->
						</form><!-- /.form -->
					</section><!-- /.sectionPage__login -->
				</div><!-- /.col-xs-3 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.sectionPage -->

	<!-- Sección de banners -->
	<section class="sectionPage__banners">
		
		<div class="container">
			<div class="row">
				<!-- Banner1 -->
				<div class="col-xs-12 col-md-4">
					<section id='slider-home-1' class="nivoSlider sectionPage__banner">
						<img src="<?= IMAGES ?>/banners/banner1_4.jpg" alt="" class="img-responsive" />
						<img src="<?= IMAGES ?>/banners/banner1_5.jpg" alt="" class="img-responsive" />
					</section> <!-- /.sectionPage__banner1 -->
				</div><!-- /.col-xs-4 -->			

				<!-- Banner2 -->
				<div class="col-xs-12 col-md-8">
					<section id='slider-home-2' class="carousel slide sectionPage__banner" data-ride="carousel">

						<div class="carousel-inner" role="listbox">
	    					<div class="item active">
								<img src="<?= IMAGES ?>/banners/banner2_1.jpg" alt="" class="img-responsive" />
							</div> <!-- /.item -->    					
							<div class="item">
								<img src="<?= IMAGES ?>/banners/banner2_2.jpg" alt="" class="img-responsive" />
							</div> <!-- /.item -->    					
							<div class="item">
								<img src="<?= IMAGES ?>/banners/banner2_3.jpg" alt="" class="img-responsive" />
							</div> <!-- /.item -->
						</div> <!-- /.carousel-inner -->

						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#slider-home-2" data-slide-to="0" class="active"></li>
						    <li data-target="#slider-home-2" data-slide-to="1"></li>
						    <li data-target="#slider-home-2" data-slide-to="2"></li>
						</ol> <!-- /.carousel-indicators -->

					</section> <!-- /.sectionPage__banner1 -->
				</div><!-- /.col-xs-8 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
		
	</section> <!-- /.sectionPage__banners -->

	<!-- Sección de Accesos Directos -->
	<section class="sectionPage__access text-center">
		<div class="container">
			<!-- Contenedor  -->
			<div class="sectionPage__access__content">

				<h2 class="sectionCommon__title inline-block text-uppercase">accesos directos</h2>
				<!-- Lista -->
				<ul class="sectionPage__access__list">

					<li><a target="_blank" href="https://www.facebook.com/"><img src="<?= IMAGES ?>/accesos/acceso_2.jpg" alt="" class="img-responsive" /></a></li>	

					<li><a target="_blank" href="https://twitter.com/?lang=es"><img src="<?= IMAGES ?>/accesos/acceso_4.jpg" alt="" class="img-responsive" /></a></li>		

					<li><a target="_blank" href="https://www.youtube.com/"><img src="<?= IMAGES ?>/accesos/acceso_5.jpg" alt="" class="img-responsive" /></a></li>	

					<li><a target="_blank" href="https://www.microsoft.com/es-es/outlook-com/"><img src="<?= IMAGES ?>/accesos/acceso_6.jpg" alt="" class="img-responsive" /></a></li>		
						
					<li><a target="_blank" href="https://espanol.yahoo.com/"><img src="<?= IMAGES ?>/accesos/acceso_7.jpg" alt="" class="img-responsive" /></a></li>

					<li><a target="_blank" href="https://mail.google.com/"><img src="<?= IMAGES ?>/accesos/acceso_8.jpg" alt="" class="img-responsive" /></a></li>

					<li><a target="_blank" href="http://www.sunat.gob.pe/"><img src="<?= IMAGES ?>/accesos/acceso_1.jpg" alt="" class="img-responsive" /></a></li>		

					<li><a target="_blank" href="https://www.sunarp.gob.pe/"><img src="<?= IMAGES ?>/accesos/acceso_3.jpg" alt="" class="img-responsive" /></a></li>			

				</ul><!-- /.sectionPage__access__list -->

			</div> <!-- /.sectionPage__access__content -->
		</div><!-- /.container -->
	</section><!-- /.sectionPage__access -->

	<!-- Seccion de Programación tv -->
	<section id="seccion-tv" class="sectionPage__programas">
		<div class="container">
		
			<!-- Contenedor  -->
			<section class="sectionPage__programas__content">


				<h2 class="sectionCommon__title text-uppercase"> Disfruta de la mejor programación en vivo solo en "centrolima"</h2>
				
				<!-- Seccion contenedora relativa -->
				<div class="relative">
					
					<!-- Contenedor de canales -->
					<section id="sectionPage__programas__content" class="sliderProgramas">
						<div class="item">
							<a href="http://192.168.10.2/centrolima/tv16.php" target="_blank"><img src="<?= IMAGES ?>/canales/canal1.jpg" alt="" class="img-responsive" />
								<span data-canal="http://192.168.10.2/centrolima/tv16.php"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://192.168.10.2/centrolima/tv4.php" target="_blank"><img src="<?= IMAGES ?>/canales/canal2.jpg" alt="" class="img-responsive" />
								<span data-canal="http://192.168.10.2/centrolima/tv4.php"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://192.168.10.2/centrolima/tv9.php" target="_blank"><img src="<?= IMAGES ?>/canales/canal3.jpg" alt="" class="img-responsive" />
								<span data-canal="http://192.168.10.2/centrolima/tv9.php"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://192.168.10.2/centrolima/tv3.php" target="_blank"><img src="<?= IMAGES ?>/canales/canal4.jpg" alt="" class="img-responsive"/>
								<span data-canal="http://192.168.10.2/centrolima/tv3.php"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://192.168.10.2/centrolima/tv52.php" target="_blank"><img src="<?= IMAGES ?>/canales/canal5.jpg" alt="" class="img-responsive" />
								<span data-canal="http://192.168.10.2/centrolima/tv52.php"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://192.168.10.2/centrolima/tv50.php" target="_blank"><img src="<?= IMAGES ?>/canales/canal6.jpg" alt="" class="img-responsive" />
								<span data-canal="http://192.168.10.2/centrolima/tv50.php"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://vercanalestv.com/tv/peru/global-tv.html" target="_blank"><img src="<?= IMAGES ?>/canales/canal7.jpg" alt="" class="img-responsive" />
								<span data-canal="http://vercanalestv.com/tv/peru/global-tv.html"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://vercanalestv.com/tv/deportes/goltv.html" target="_blank"><img src="<?= IMAGES ?>/canales/canal8.jpg" alt="" class="img-responsive" />
								<span data-canal="http://vercanalestv.com/tv/deportes/goltv.html"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://192.168.10.2/centrolima/tv2.php" target="_blank"><img src="<?= IMAGES ?>/canales/canal9.jpg" alt="" class="img-responsive" />
								<span data-canal="http://192.168.10.2/centrolima/tv2.php"></span>
							</a>
						</div><!-- /.item -->
						<div class="item">
							<a href="http://tvpor-internet.com/tlnovelas-en-vivo.html" target="_blank"><img src="<?= IMAGES ?>/canales/canal10.jpg" alt="" class="img-responsive" />
								<span data-canal="http://tvpor-internet.com/tlnovelas-en-vivo.html"></span>
							</a>
						</div><!-- /.item -->
					</section><!-- /.sectionPage__programas__content -->

					<!-- Flechas -->
					<a href="#" id="arrow-prev-programas" class="arrowProgramas arrowProgramas--prev"></a>
					<a href="#" id="arrow-next-programas" class="arrowProgramas arrowProgramas--next"></a>

				</div><!-- /.relative -->
				
			</section> <!-- /.sectionPage__programas__content -->

		</div> <!-- /.container -->
	</section><!-- /.sectionPage__programas -->
	
	<!-- Seccion lo que buscabas -->
	<section id="seccion-publicidad" class="sectionPage__common">
		<div class="container">
			<!-- Titulo -->
			<h2 class="sectionCommon__title text-uppercase"> lo que buscabas </h2>

			<!-- Contenedor de Promociones  -->
			<section class="sectionPage__common__promotions">
		
				<div class="row relative">
					<div class="col-xs-12 col-md-3">
						<figure class="item__promo">
							<img src="<?= IMAGES ?>/buscabas/buscabas_1.jpg" alt="" class="img-responsive" />
						</figure> <!-- /.item__promo -->
					</div> <!-- /.col-xs-12 col-md-3 -->

					<div class="col-xs-12 col-md-3">
						<figure class="item__promo">
							<img src="<?= IMAGES ?>/buscabas/buscabas_2.jpg" alt="" class="img-responsive" />
						</figure> <!-- /.item__promo -->
					</div> <!-- /.col-xs-12 col-md-3 -->						

					<div class="col-xs-12 col-md-3">
						<figure class="item__promo">
							<img src="<?= IMAGES ?>/buscabas/buscabas_2.jpg" alt="" class="img-responsive" />
						</figure> <!-- /.item__promo -->
					</div> <!-- /.col-xs-12 col-md-3 -->						

					<div class="col-xs-12 col-md-3">
						<figure class="item__promo">
							<img src="<?= IMAGES ?>/buscabas/buscabas_2.jpg" alt="" class="img-responsive" />
						</figure> <!-- /.item__promo -->
					</div> <!-- /.col-xs-12 col-md-3 -->			

				</div><!-- /.row -->
				
			</section><!-- /.sectionPage__common__promotions -->

		</div><!-- /.container -->
	</section><!-- /.sectionPage__common -->

	<!-- Banner consultanos -->
	<section class="sectionPage__common sectionPage__common__banner">
		<div class="container">
			<section class="section__content text-uppercase">
				<p>más información en </p>
				<p> <img src="<?= IMAGES ?>/iconos_contacto_rpm.png" alt="" class="inline-block" /> 993-608-012</p>
			</section><!-- /.sectionPage__common__banner -->
		</div><!-- /.container -->
	</section><!-- /.sectionPage__common -->

	<!-- Seccion promociones y facebook -->
	<section id="seccion-promo" class="sectionPage__miscelaneo">
		<div class="container">
			<div class="row">
				<!-- Seccion de promociones -->
				<div class="col-xs-12 col-md-9">
					<section class="sectionPage__miscelaneo__our-promotions">
						<!-- Titulo -->
						<h2 class="sectionCommon__title text-uppercase"> nuestras promociones </h2>
						
						<!-- Promociones -->
						<article class="col-xs-12 col-md-6">
							<figure>
								<img src="<?= IMAGES ?>/promociones/promo_2.jpg" alt="" class="img-responsive" />
							</figure>
						</article> <!-- /.col-xs-12 col-md-6 -->
						<article class="col-xs-12 col-md-6">
							<figure>
								<img src="<?= IMAGES ?>/promociones/promo_2.jpg" alt="" class="img-responsive" />
							</figure>
						</article> <!-- /.col-xs-12 col-md-6 -->
						<article class="col-xs-12 col-md-6">
							<figure>
								<img src="<?= IMAGES ?>/promociones/promo_2.jpg" alt="" class="img-responsive" />
							</figure>
						</article> <!-- /.col-xs-12 col-md-6 -->
						<article class="col-xs-12 col-md-6">
							<figure>
								<img src="<?= IMAGES ?>/promociones/promo_2.jpg" alt="" class="img-responsive" />
							</figure>
						</article> <!-- /.col-xs-12 col-md-6 -->

					</section><!-- /.sectionPage__miscelaneo__our-promotions -->
				</div><!-- /.col-xs-9 -->

				<!-- Seccion facebook -->
				<div class="col-xs-12 col-md-3">

					<section class="sectionPage__miscelaneo__fb">
						<!-- Titulo -->
						<h2 class="sectionCommon__title text-uppercase">facebook </h2>

						<div class="content">
							<div id="fb-root"></div>

							<!-- Script -->
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>

							<div class="fb-page" data-href="https://www.facebook.com/Tecserpc-273564962981759/" data-tabs="timeline" data-small-header="false"  data-adapt-container-width="true" data-height="500" data-hide-cover="false" data-show-facepile="true">
								<div class="fb-xfbml-parse-ignore">
									<blockquote cite="https://www.facebook.com/Tecserpc-273564962981759/">
										<a href="https://www.facebook.com/Tecserpc-273564962981759/"></a>
									</blockquote>
								</div>
							</div>

						</div><!-- /.content -->
					</section><!-- /.sectionPage__miscelaneo__fb --> 

				</div> <!-- /.col-xs-3 -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.sectionPage__miscelaneo -->

	<!-- Sección Utilitario -->
	<div class="container">
		<section id="seccion-utilitarios" class="sectionPage__utilitario">
			<!-- Titulo -->
			<h2 class="sectionCommon__title text-uppercase"> descarga utilitario </h2>	
			
			<!-- Contenedor -->
			<section class="sectionPage__utilitario__content">
				<div class="row">
					<div class="col-xs-12 col-md-3 flex-wrap-center ">
						<article>
							<a target="_blank" href="#">Descargar Winrar</a>
							<a target="_blank" href="#">Descargar Winzip</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
						</article> <!-- /article -->
					</div><!-- /. col-xs-12 col-md-3 flex-wrap-center -->
					<div class="col-xs-12 col-md-3 flex-wrap-center">
						<article>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
						</article> <!-- /article -->
					</div><!-- /. col-xs-12 col-md-3 flex-wrap-center -->
					<div class="col-xs-12 col-md-3 flex-wrap-center">
						<article>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
						</article> <!-- /article -->
					</div><!-- /. col-xs-12 col-md-3 flex-wrap-center -->
					<div class="col-xs-12 col-md-3 flex-wrap-center">
						<article>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
							<a target="_blank" href="#">Mas descargas Pronto</a>
						</article> <!-- /article -->
					</div><!-- /. col-xs-12 col-md-3 flex-wrap-center -->
				</div><!-- /.row -->
			</section><!-- /.sectionPage__utilitario__content -->

		</section><!-- /.sectionPage__utilitario -->
	</div><!-- /.container -->


</section> <!-- /.sectionWrapper -->

