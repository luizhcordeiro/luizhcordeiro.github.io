				/*	Menu responsivo	*/

function menuResp(){
		var scre = $("body").width();
		if( scre <= 770 ) {
			$(".submenu span").addClass("seta-baixo").removeClass("seta-direita");

			function teste(){
				$("#menuRes span").click(function(){
					var pai = $(this).closest("li");
					
					$(this).toggleClass("seta-cima seta-baixo");
					
					pai.children("ul").slideToggle().css("display:block !important");
					
				});
			}
			teste();
				/*$(param2).slideToggle($(param2).css("display:block !import;"));*/
			
		}else{
			$(".submenu span").addClass("seta-direita").removeClass("seta-baixo seta-cima");
		}
	}
$(window).resize(function() {
   menuResp();   
});
$(window).load(function() {
   menuResp();   
});




							/*   Slide    */
function slide(){
	function carregaSlide(){
	   $("#slide a:first-child").addClass("ativo");
	}
	
	function proximaImg(){
	   var ativo = $(".ativo");
	   
	    if(ativo.is(':last-child')){
		   ativo.removeClass("ativo");
		   carregaSlide();
	   }else{
		   ativo.next("a").addClass("ativo");
		   ativo.removeClass("ativo");
	   }
	}
	
	function anteriorImg(){
	   var ativo = $(".ativo");
	   clearInterval(intervalo);
	   if(ativo.is(':first-child')){
		   ativo.removeClass("ativo");
		   $("#slide a:last-child").addClass("ativo");
	   } else{
		   ativo.prev("a").addClass("ativo");
		   ativo.removeClass("ativo");
	   }
	   intervalo = setInterval(proximaImg,5000);
	}
	
	carregaSlide();
	intervalo = setInterval(proximaImg,5000);
	
	$(".prev").click(anteriorImg);
	
	$(".next").click(function(){
		clearInterval(intervalo);
		proximaImg();
		intervalo = setInterval(proximaImg,5000);
	});

}
   slide();