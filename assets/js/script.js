var j = jQuery.noConflict();

(function($){

	j(document).on('ready',function(){

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
			controlNavThumbs: true,
		});
	});

})(jQuery);