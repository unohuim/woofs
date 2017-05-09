@extends ('layouts.pages')

@section ( 'page_title' )
    SERVICE AREA
@stop

@section ( 'breadcrumb' )
    Service Area
@stop


@section ( 'left_image' )
    <div class="about-left-image">
        <img src="images/about-left.png" alt="" class="img-responsive center-block">
    </div>  
@stop


@section ( 'page_paragraph' )
    <div class="services-description">
        <p class="click-hide">If you are out of our service area, please don’t hesitate to ask if we’ve recently expanded into your area. <i id="click-and-hide" class="fa fa-times" aria-hidden="true"></i></p>
        <p></p>
        <p>We’re a family run dog walking business in Toronto and take pride in the quality of our work. We’re well reviewed and have many clients eager to speak with prospective clients. We’ve been voted best by BlogTO. We have awesome dogs, and our groups are designed to promote activity. We won’t simply put your dog in the next available time slot, we construct our groups based on behavior.</p>
        <a class="btn btn-primary" href="inquire">CONTACT US</a>
    </div>
@stop

@section( 'jquery' )
    $("#page_banner").addClass( 'page-banner-service-areas' );
    $("#page_content").addClass( 'service-areas' );
@stop