$(function(){ 
	(function() {
		var revitech = {
	        init: function() {
            	this.carrossel();
            	this.nicescroll();
	            this.loading();
            	this.menu();
            	this.rszWindow();
				$(document).ready(function(){
			      if( $('.parallax').length ){
			      	$('.parallax').parallax();
			      }
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
					revitech.gallery();
 					//revitech.msgInfo();
 					$('#popUp').fadeOut();
	        	});
	        },
	        msgInfo : function(){
	        	jQuery('#popUp:not(.gallery)').fadeIn(function(){
	        		jQuery('#popUp').find('a').click(function(){
		        		jQuery('#popUp').fadeOut();
		        	});
	        	});
	        	$('.msgInfo').each(function(){
	        		$(this).parent().hover( 
	        			function(){
	        				$(this).find('.msgInfo').addClass('active');
	        			}, 
	        			function(){
	        				$(this).find('.msgInfo').removeClass('active');
	        			} 
	        		);
	        	});
	        },
	        menu: function() {
        		var _opnd, _c;
	        	$('main:not(.comingsoon) > header nav.menu').hover(
	        		function(){	        			
	        			if( $(window).width() > 1023 ){
		        			clearInterval(_c);
	        				$(this).addClass('active');
        				}else{
        					$(this).find('>*').unbind('click');
        				}
	        		},
	        		function(){
	        			if( $(window).width() > 1023 ){
		        			_c = setInterval(function(){
				        		$('main:not(.comingsoon).home > header nav.menu').removeClass('active');
		        			}, 1000);
	        			}
	        		}
	        	).click(function(e){
	        		clearInterval(_c);
	        		if( !$(this).hasClass('active') ){
						$(this).addClass('active');
					}else{
						$(this).removeClass('active');
					}
	        	});
				if ($(window).width() > 1023){
		        	$('main:not(.comingsoon):not(.home) > header nav.menu').addClass('active');
				}
	        },
	        gallery : function(){
	        	// Abrir a galeria
	        	jQuery('.carrGaleria a, .carrGallery figure span, .carrGallery figure a').click(function(){
	        		_wW = $(window).width(), _wH = $(window).height();
	        		_imgSRC = $(this).find('img');
        			//_imgSRC = _imgSRC.attr('src');
        			//Se clicar nos botões de próximo e anterior
					if( $(this).parent().hasClass('ctrl') ) return;

	        		if( _imgSRC.length ){	
	        			// url-src: caminho para buscar outra imagem | geralmente em alta
	        			if( _imgSRC.attr('url-src') ){
	        				jQuery('#popUp figure').html(_imgSRC.clone().attr('src',_imgSRC.attr('url-src')));
		        		}else{
	        				jQuery('#popUp figure').html(_imgSRC.clone());
		        		}
		        		// title: Exibir o título da imagem se houver o atributo title
	        			if( _imgSRC.attr('title') ){
	        				jQuery('#popUp figure').prepend('<figcaption>'+_imgSRC.attr('title')+'</figcaption>');
	        			}
	        		}

	        		//Open and Close #popUp
		        	jQuery('#popUp').addClass('gallery').fadeIn(function(){
		        		$(this).find('a').click(function(){
			        		jQuery('#popUp').fadeOut(function(){
			        			$('#popUp .cssload-thecube').show();
			        		});

			        		$('#popUp > section').removeClass('active');
			        	});

			        	//Verifica se o conteúdo da SECTION foi carregado
						var _loaded = false, _s;
						_s = setInterval(function(){ 
							$("#popUp img").one("load", function() {
							  // do stuff
							}).each(function() {
							  if(this.complete){
							  	clearInterval(_s);
							  	$('#popUp .cssload-thecube').fadeOut(
							  		function(){
							  			$('#popUp > section').addClass('active');
							  		}
							  	);
							  }
							});
						},1000);
		        	});
	        	})

	        	//Rola a Galeria Horizontalmente
	        	$('.carrGaleria .cntr').each(function(){
	        		if( $(this).attr('cg-ctrl') ){
	        			itens = $(this).find( $(this).attr('cg-ctrl') );
	        			cntrWidth=0; itemWidth=0;
	        			for (var i = 0; i <= itens.length; i++) {
	        				cntrWidth += itens.eq(i).outerWidth(true);
	        				if(itens.eq(i).outerWidth(true)>itemWidth){
	        					itemWidth = itens.eq(i).outerWidth(true)+5;
	        				}
	        			}
	        			itens.parent().css('width',cntrWidth+15).css('left',0);
	        			_unbind = false;
	        			$(this).parent().find('.ctrl a').click(function(e){
	        				
	        				if(_unbind){ return; }
	        				_unbind = true;
	        				if(!$(this).index()){
	        					if( parseInt(itens.parent().css('left')) < 0){
	        						itens.parent().css('left',( parseInt(itens.parent().css('left'))+itemWidth));
	        						setTimeout(function(){_unbind = false;},500);
	        					}else{
	        						_unbind = false;
	        					}
	        				}else{
	        					calc = parseInt(itens.parent().css('width'))-(-parseInt(itens.parent().css('left')));
	        					if( calc >= $(this).closest('.carrGaleria').width() ){
		        					itens.parent().css('left',( parseInt(itens.parent().css('left'))-itemWidth));
									setTimeout(function(){_unbind = false;},500);
								}else{
	        						_unbind = false;
	        					}
	        				}
	        			})
	        		}
	        	});
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
				if(owl.find('dl').length<=1) return;
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
	        },
	        nicescroll : function(){
	        	$('#map path').first().click();
			    var _el = $("main:not(.comingsoon).ondeencontrar #map aside div");
		    	if(_el.length > 0 && $(window).width() > 1024){
				    _el.niceScroll({
				      styler:"fb", 
				      cursorwidth: "3px",
				      cursorcolor:"#4c5246",
				      cursorborderradius: "0px",
				      background: "#c8c1b9",
				      scrollspeed: 100
				    });
				}
	        },
	        rszWindow : function () {
				$(window).resize(function() {
					if ($(window).width() < 1023){
			        	$('main:not(.comingsoon):not(.home) > header nav.menu').removeClass('active');
					}else{
			        	$('main:not(.comingsoon):not(.home) > header nav.menu').addClass('active');
					}
				});
	        },
    	}
		revitech.init();
	})();
});