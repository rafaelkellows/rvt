$(function(){ 
	(function() {
		var revitech = {
	        init: function() {
	            this.toTop();
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
					$('.loading').removeClass('active');
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
					}
				});
		        jQuery(elem).click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
		        })
	        }
    	}
		revitech.init();
	})();
});