@extends ('layouts.pages')

@section ( 'page_title' )
    THANK YOU
@stop

@section ( 'breadcrumb' )
    Thank You
@stop


@section ( 'left_image' )
    <div class="about-left-image">
        <img src="images/about-left.png" alt="" class="img-responsive center-block">
    </div>  
@stop


@section ( 'page_paragraph' )
    
    <div class="thank-you text-center">
        <h2>Thank you for contacting us. We will contact you soon.</h2>
        <div class="contact-php" style="display:none;">
            <?php 
                
            ?>

        </div>
    </div>
    
@stop

@section ( 'jquery' )
    $("#page_banner").addClass( 'page-banner-thankyou' );
    $("#page_content").addClass( 'thanks' );
@stop