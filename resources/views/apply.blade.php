@extends ('layouts.pages')

@section ( 'page_title' )
    APPLY
@stop

@section ( 'breadcrumb' )
    Apply
@stop


@section ( 'left_image' )
    <div class="about-left-image">
        <img src="images/about-left.png" alt="" class="img-responsive center-block">
    </div>  
@stop


@section ( 'page_paragraph' )
    <div class="about-right-para">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc_38NeaGmnxBkKDV4DBzHDF4ZFmFMCtQxmMyP1k0D1VmQ4Cw/viewform?usp=sf_link" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...
        </iframe>
    </div>
@stop

@section( 'jquery' )
    $("#page_banner").addClass( 'page-banner-daycare' );
    $("#page_content").addClass( 'about-content' );
@stop


