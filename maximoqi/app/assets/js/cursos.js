window.onscroll = function(){
   var top = window.pageYOffset || document.documentElement.scrollTop;
   var infAuto = document.getElementById("informacao");
   if((top > 280)&&(window.innerWidth > 820)) {
	   infAuto.style.top="0";
       infAuto.style.position="fixed";
	   infAuto.style.marginTop="38px";
   }
  /* else if((top > 280)&&(window.innerWidth < 820)) {
	   infAuto.style.botton="0";
       infAuto.style.position="fixed";
	   infAuto.style.marginTop="0";
   }*/
   else{
	   infAuto.style.position="static";
	   infAuto.style.marginTop="2%";
   }
}
	
$(document).ready(function(){
  $('.slider4').bxSlider({
	auto: true,
    slideWidth: 300,
    minSlides: 1,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 10
  });
});