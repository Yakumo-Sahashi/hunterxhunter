$(document).ready(function(){

	var altura= $('.menu').offset().top;

	$(window).on('scroll',function(){
		if ($(window).scrollTop() > altura) {
			$('.menu').addClass('menu-fixed');
		}else{
			$('.menu').removeClass('menu-fixed');
		}
	});

});

window.onload = () => {
    var carga = document.getElementById('contenedor');

    carga.style.visibility = 'hidden';
    carga.style.opacity = '0';
}


