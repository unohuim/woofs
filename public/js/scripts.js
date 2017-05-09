/* 
Template Name: Woofs
Author: Shariful i. (msi)
Author url: http://msiapurno.com
*/

/* 
Table of Content
--------------------------------------------

1. header height
2. smooth scroling
3. Pussing menu
*/

jQuery(function ($) {

    'use strict';
    
	
	// 1. header height
	
	(function () {
		$("header.home").height($(window).height());

        $(window).resize(function(){
            $("header").height($(window).height());
        });
	}());
	
	(function () {
		$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }
	});
	}());


	(function () {
			  var pushRight = new Menu({
	    wrapper: '#o-wrapper',
	    type: 'push-right',
	    menuOpenerClass: '.c-button',
	    maskId: '#c-mask'
	  });

	  var pushRightBtn = document.querySelector('#c-button--push-right');
	  
	  pushRightBtn.addEventListener('click', function(e) {
	    e.preventDefault;
	    pushRight.open();
	  });
	}());





});