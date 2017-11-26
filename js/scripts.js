$(function(){ 
	(function() {
		var revitech = {
	        init: function() {
            	//this.carrossel();
	            //	this.toTop();
	            this.loading();
	            
				$(document).ready(function(){
			      if( $('.parallax').length ){
			      	$('.parallax').parallax();
			      }
			      
			      revitech.toTop();

			    });
	        },
	        loadJson : function () {
	        	//if(!$.cookie("lang")) return;
				$.ajax({
					url : '../js/....js',
					dataType : 'json',
					success : function(json) { 
						console.log('Foi ' + json[0].home.highlight);
						revitech.loadJsonContent();
					},
					error : function(r) { 
						console.log('Deu Erro');
					}
				});
	        },
	        loadJsonContent : function (argument) {
	        	
	        },
	        loading : function(){
	        	$(window).load(function(){
					//$('.loading').removeClass('active');
					revitech.msgInfo();
	        	});
	        },
	        msgInfo : function(){
	        	jQuery('#popUp').fadeIn(function(){
	        		jQuery('#popUp').find('a').click(function(){
		        		jQuery('#popUp').fadeOut();
		        	});
	        	})
	        },
	        toTop : function(elem){
		        var offset = 1;
		        var duration = 500;
		        jQuery(window).scroll(function() {
					if( !$('body main').attr('id') ){ //&& $(window).width() > 1024 
						if (jQuery(this).scrollTop() > offset) {
							$('body main').addClass('internal');
						} else {
							$('body main').removeClass('internal');
						}
					};
					jQuery('#CS').html( jQuery(this).scrollTop() );
					//console.log( jQuery(this).scrollTop() );
				});
				jQuery('html, body').animate({scrollTop: 0}, duration);
	        },
	        carrossel: function() {
				var owl = $("section.carrossel > div"); 
				if(!owl.length) return;
				owl.owlCarousel({
					autoplay:true,
					smartSpeed: 600,
				    loop:true,
				    margin:0,
				    nav:false,
				    responsive:{
				        0:{
				            items:1
				        },
				        600:{
				            items:1
				        },
				        1000:{
				            items:1
				        }
				    },
					paginationSpeed : 1000,
					singleItem:true,
					autoPlay:8000
				}); 
	        }
    	}
		revitech.init();
	})();
});