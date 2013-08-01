$(document).ready(function(){
	$('.cont_comic').mouseenter(function(){
		$('.cont_comic a').css('background-image','url(img/cont_comic2.png)');
	});
	$('.cont_comic').mouseleave(function(){
		$('.cont_comic a').css('background-image','url(img/cont_comic.png)');
	});

	$('#simple-menu, #simple-menu2').sidr();

	$("#ticker").tweet({
		username: "toddy_cl",
		page: 2,
		avatar_size: 40,
		count: 20,
		loading_text: "cargando ..."
	}).bind("loaded", function() {
		var ul = $(this).find(".tweet_list");
		var ticker = function() {
		setTimeout(function() {
			var top = ul.position().top;
			var h = ul.height();
			var incr = (h / ul.children().length);
			var newTop = top - incr;
			if (h + newTop <= 0) newTop = 0;
			ul.animate( {top: newTop}, 500 );
			ticker();
		}, 5000);
		};
	ticker();
	});
	
});
//LOADING
$(window).load(function(){

	$('.load').delay(800).fadeOut(1000, function(){

		$('#wrap, footer').fadeIn(200);
	
	});
});