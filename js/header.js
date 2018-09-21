$(document).ready(function(){
	/*Gebruikt om de code mooier te maken*/
	$win = $(window);
	$body = $('body')
	$nav = $('#navbar');
	$footer = $('#footerbar');
	$footend = $('#footerend');

	/*Variabele navY is gelijk aan de hoogte van #navbar*/
	var navY = $nav.offset().top;
	var footY = $footer.offset().top;
	var wpos, space;
	/*Als de gescrolde afstand groter is dan navY voeg .fixednav class toe anders verwijder .fixednav class*/
	$win.bind('scroll', function() { 
	wpos = $win.scrollTop();
		if (wpos > navY) {  
			$nav.addClass('fixednav');  
		} 
		else {  
			$nav.removeClass('fixednav');    
		} 
	});
	
	function h(e) {
    wpos = $win.scrollTop();
    space = $win.height() - $footer.height() + 40;
		if (wpos + space < footY) {
			$footer.addClass('fixedfooter');
		} else {
			$footer.removeClass('fixedfooter');
		}
	}
// this triggers the repositioning of the bar on all relevant events
$win.ready(h).resize(h).scroll(h);
});