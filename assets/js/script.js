var j = jQuery.noConflict();

(function($){

	j(document).on('ready',function(){

		/* ---------  IR AL PRINCIPIO DE LA PÁGINA ---------*/
		j(".js-to-link-up").on('click',function(e){
			e.preventDefault();
			j('html,body').animate({
				scrollTop: 0
			}, 700);
		});


		/* ---------  REDIRECCION ANIMACION DE MENU ---------*/

		//altura del header
		var header   = j(".mainHeader");
		var h_header = header.outerHeight(); 

		j(".mainNavigation ul li a.to-link").on('click',function(e){
			e.preventDefault();
			//obtener id de destino
			var seccion = j("#"+j(this).attr('data-to') ); console.log(seccion); 

			if( j(seccion).length ){

				//borrar actual item activo
				j(".mainNavigation a").removeClass('active');

				//animacion hacia la seccion
				j('html,body').animate({
					scrollTop : j(seccion).offset().top - h_header - 20
				}, 700 );

				//colocar item activo
				j(this).addClass('active');
			}

		});


		/* ---------------- FORMULARIO GOOGLE --------------*/

		var form_google = j("#form_google");

		j("a.btn_google").on('click',function(e){
			e.preventDefault();
			//cambiar action de formulario
			var option = j(this).attr('data-option'); //alert(option);
			var plus   = j(this).attr('plus');
			var input  = j("#input_google").val();

			//form
			var location = "http://www.google.com/"+option+"?q="+encodeURIComponent(input)+plus;

			//form_google.attr('action','http://www.google.com/'+option);
			//submit
			//form_google.submit();
			window.location = location ;
		});

		/* ---------------- CARGAR LIBRERIA OWL CAROUSEL --------------*/
		//Seccion programas
		var owl_programas = j("#sectionPage__programas__content");
		owl_programas.owlCarousel({
			loop  : true,
			margin: 70,
			nav   : false,
			items : 7,
		});

		//eventos de flechas
		j(".arrowProgramas").on('click',function(e){e.preventDefault(); });
		//prev carousel
		j("#arrow-prev-programas").on('click',function(){
			owl_programas.trigger('prev.owl.carousel', [500]);
		});		
		//next carousel
		j("#arrow-next-programas").on('click',function(){
			owl_programas.trigger('next.owl.carousel', [500]);
		});


	});

	j(window).on('load',function(){
		
		/* ---------------- CARGAR LIBRERIA NIVO SLIDER --------------*/
		j("#slider-home-1").nivoSlider({
			directionNav    : false,
			controlNav      : true,
		});
	});

})(jQuery);