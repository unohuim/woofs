@extends ('layouts.main')

@section ( 'header' )
    @include ( 'partials._page-header' )
@stop


@section ( 'content' )
    
    <section id="page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-banner-heading">
                        <h2>@yield ( 'page_title' ) </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Home > @yield ( 'breadcrumb' )</span>
                </div>
            </div>
        </div>
    </section>

    <section id="page_content" class="section-padding-bottom">
        <div class="container">
            <div class="row section-padding">
                <div class="col-md-4 col-sm-4">
                    @yield ( 'left_image' )                     
                </div>
                <div class="col-md-8 col-sm-8">
                    @yield ( 'page_paragraph' )
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-area-info">
                        <h2>Service Area</h2>
                        <p>If you are out of our service area, please don’t hesitate to ask if we’ve recently expanded into your area. <a href="service-areas.html">Click here</a></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="call-us-about">
                        <h2>Call us <br><a href="tel:647-549-9663">647-549-9663 (WOOF)</a></h2>
                        <div class="stay-connected">
                            <p>Stay connected: </p>
                            <ul class="list-inline">
                                <li><a href="http://www.facebook.com/woofsuponawalk" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                <li><a href="http://twitter.com/woofsuponawalk" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop