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
3. google map api
4. click and hide
*/

jQuery(function ($) {

    'use strict';
    


	
	// 2. smooth scroling

	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 500);
	            return false;
	        }
	    }
	});

     // 4. click and hide 

    $("#click-and-hide").click(function(){
        $("p.click-hide").hide();
    });



});