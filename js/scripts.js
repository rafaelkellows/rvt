$(function(){ 
	(function() {
		var validateEmail = function(email){
		  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		  return re.test(email);
		}
		var validateInput = function(val){
		  var re = /^[^]+$/;
		  return re.test(val);
		};
		$('.telefone').mask('(00) 0000-0000');
		$('.celular').mask('(00) 00000-0000');
		var revitech = {
	        init: function() {
	        	//this.toTop();
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
			    this.validForm();
	        },
	        loadJson : function () {
	        	//if(!$.cookie("lang")) return;
				$.ajax({
					url : 'js/map/stores.js',
					dataType : 'json',
					success : function(json) { 
						console.log('Foi ' + json[0]);
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
 					revitech.msgInfo();
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
	        	var img, _iW, _iH, _naturalW, _naturalH;
	        	// Abrir a galeria
	        	jQuery('.carrGaleria a, .carrGallery figure span, .carrGallery figure a').click(function(){
	        		
	        		_imgSRC = $(this).find('img');
        			//Se clicar nos botões de próximo e anterior
					if( $(this).parent().hasClass('ctrl') ) return;

					//Re-set Left and Top on Window Resize 
					$(window).resize(function() {
						alignImg();
					});

	        		if( _imgSRC.length ){	
	        			// url-src: caminho para buscar outra imagem | geralmente em alta
	        			jQuery('#popUp figure').removeAttr('class');
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
			        			img = null;
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
							  	img = $(this);
							  	_naturalW = img.width();
							  	_naturalH = img.height();
							  	alignImg();
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

	        	//Mantêm a Imagem alinhada
	        	var alignImg = function(){
	        		if(!img) return;

        			var _wW = $(window).width(), _wH = $(window).height();
    					_iW = _naturalW, _iH = _naturalH;

	        		//console.log(_iW + '  ' + _iH + '  ' + _wW + '  ' + _wH);

	        		if( (_naturalW >= _wW) && (_naturalH <= _wH) ){
						img.css('width', eval( (_wW-20)) ).css('height', 'auto');
						_iW = img.width();
	        		}
	        		/*if( (_naturalW >= _wW) && (_naturalH >= _wH) ){
						img.css('height', eval( (_wH-20)) ).css('width', 'auto');
	        		}
	        		
	        		if( (_naturalH >= _wH) ){
						img.css('height', eval( (_wH-20)) ).css('width', 'auto');
						_iH = img.height();
	        		}*/

					img.css('marginLeft', eval( (_wW/2) - (img.width()/2) ) ).css('marginTop', eval( (_wH/2) - (img.height()/2) ) );
					
	        	}

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
	        validForm : function(){
	        	if( $('form').length === 0) return;
				$('form input[type=submit]').click(function(e){
					e.preventDefault();
					var email = $(this).closest('form').find('input[name=email]'), telefone = $(this).closest('form').find('input[name=telefone]'), celular = $(this).closest('form').find('input[name=celular]');

					var _vEmail = function(){
				        if(validateInput(email.val())){
		  					if (validateEmail(email.val())) {
		  						$(this).closest('form').submit();
		  					}else{
		  						alert('O E-mail inserido parece estar errado! Por favor confira novamente.');
		  					}
				        }else{
				        	alert('O campo E-mail precisa ser preenchido para entrarmos em contato.');
				        	email.focus();
				        }
					},
					_vCelular = function(){
				        if(validateInput(celular.val())){
				        	$(this).closest('form').submit();
				        }else{
				        	alert('O campo Celular precisa ser preenchido para entrarmos em contato.');
				        	celular.focus();
				        }
					};
					switch($(this).closest('form').find('input[name=contactby]:checked').val()) {
					    case 'e-mail':
					        _vEmail();
					        break;
					    case 'telefone':
					        if(validateInput(telefone.val())){
					        	$(this).closest('form').submit();
					        }else{
					        	alert('O campo Telefone precisa ser preenchido para entrarmos em contato.');
					        	telefone.focus();
					        }
					        break;
					    case 'celular':
					    	_vCelular();
					        break;
					    default:
					        null;
					}
					if(email.val().length===0){
						_vEmail();
						return;
					}
					if(celular.val().length===0){
						_vCelular();
						return;
					}
					$(this).closest('form').submit();
				})
	        },
    	}
		revitech.init();
	})();
});