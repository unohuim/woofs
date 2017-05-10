<?php 
    //require_once 'blog/wp-load.php';    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('layouts.meta')
        
        <link rel="shortcut icon" href="images/favicon.png">

        @include ('layouts.fonts')

        @include ('layouts.css')


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>
        <div id="o-wrapper" class="o-wrapper">

            <button id="c-button--push-right">
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </button>

            @yield ( 'header' )

    	    @yield ('content')

            @include ( 'partials._footer' )

        </div>



        <nav id="c-menu--push-right" class="c-menu c-menu--push-right">
		  <button class="c-menu__close"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button>
		  <ul class="c-menu__items">
		    <li class="c-menu__item"><a href="home" class="c-menu__link">Home</a></li>
		    <li class="c-menu__item"><a href="about" class="c-menu__link">About</a></li>
		    <li class="c-menu__item"><a href="dog-training" class="c-menu__link">WoofsU</a></li>
		    <li class="c-menu__item"><a href="service-areas" class="c-menu__link">Service Areas</a></li>
		    <li class="c-menu__item"><a href="gallery" class="c-menu__link">Gallery</a></li>
		    <li class="c-menu__item"><a href="blog" class="c-menu__link">Blog</a></li>
		    <li class="c-menu__item"><a href="inquire" class="c-menu__link">Inquire</a></li>
		    <li class="c-menu__item">Call us 416-889-7265</li>
		  </ul>
		</nav><!-- /c-menu push-right -->

		<div id="c-mask" class="c-mask"></div><!-- /c-mask -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-61868860-1', 'auto');
            ga('send', 'pageview');

        </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/menu.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/scripts2.js"></script>
        <script src="js/scripts3.js"></script>

        <script>
            $(document).ready(function () {
                @yield ( 'jquery' )
                
                var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
                if (window.location.hash && isChrome) {
                    setTimeout(function () {
                        var hash = window.location.hash;
                        window.location.hash = "";
                        window.location.hash = hash;
                    }, 300);
                }
            });
        </script>
    </body>
</html>