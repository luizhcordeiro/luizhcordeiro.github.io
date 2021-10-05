const aside = document.getElementById("left");
const topAside = aside.offsetTop;

window.onscroll = function(){
   if( window.pageYOffset >= topAside) {
		aside.classList.add("fixed");
	}else{
   		aside.classList.remove("fixed");
   }
}