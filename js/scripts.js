(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		console.log("I'm ready");

		// touchscreen friendly behavior (must be included script doubletaptogo.js  more on https://osvaldas.info/drop-down-navigation-responsive-and-touch-friendly )
		$( '#nav li:has(ul)' ).doubleTapToGo();

		// Mobile navigation icon
		$('#hamurger_icon').click(function(){ /* https://codepen.io/anon/pen/GGwOVZ */
			$(this).toggleClass('open');
			$('#mobile-navigation .navigation-main').slideToggle('fast')
		});

		
	});


	
})(jQuery, this);

/* DEFINE FUNCTIONS BELLOW */

function myFunction() {
	var w = window.innerWidth;
	var h = window.innerHeight;
	document.getElementById("demo").innerHTML = "Width: " + w + "px";
}
