$(function(){
	$('.detectar').on('click', detectarIdioma);
	function detectarIdioma(){
		var idiomaNavegador = new String;
		  if (navigator.language){
		     idiomaNavegador = navigator.language;
		  } else {
		     idiomaNavegador = navigator.browserLanguage;
		  }
		  $('h1').html(idiomaNavegador);
		  $('h1').html("No se detecto lenguaje");
	}
});