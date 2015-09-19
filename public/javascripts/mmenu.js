// JavaScript Document
	
			$(function() {
				$('nav#menu').mmenu({
					extensions	: [ 'effect-slide', 'pageshadow' ],
					header		: true,
					searchfield	: true,
					counters	: true,
					footer		: {
						add			: true,
						content		: '<div id="follow"> FOLLOW US <a href="https://www.facebook.com/OCSPORTARG" target="_blank"> <img src="images/ico-facebook.png" /></a> <a href="https://twitter.com/OCSPORT_ARG" target="_blank"><img src="images/ico-twitter.png" /></a></li> </div>'
					}
				});
			});
		