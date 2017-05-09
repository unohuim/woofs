@extends ('layouts.pages')

@section ( 'page_title' )
    INQUIRE
@stop

@section ( 'breadcrumb' )
    Inquire
@stop


@section ( 'left_image' )
    <div class="about-left-image">
        <img src="images/about-left.png" alt="" class="img-responsive center-block">
    </div>  
@stop


@section ( 'page_paragraph' )
    
    <div class="contact-page-form">
        <h2>Please tell us about you and your pup </h2>

        <form class="form-horizontal" action="thank-you-contact.php" method="post">
            <fieldset>

                <input type="hidden" name="page_source" value="contact" />

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="textinput">Your pet name</label>  
                    <div class="col-sm-9">
                        <input id="textinput" name="petname" type="text" placeholder="Enter your pet name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="yourname">Your name</label>  
                    <div class="col-sm-9">
                        <input id="yourname" name="name" type="text" placeholder="Your name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="intersection">Closest Intersection</label>  
                    <div class="col-sm-9">
                        <input id="intersection" name="intersection" type="text" placeholder="Intersection" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="youremail">Your email</label>  
                    <div class="col-sm-9">
                        <input id="youremail" name="email" type="email" placeholder="youremail@example.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="phone">Phone</label>  
                    <div class="col-sm-9">
                        <input id="phone" name="phone" type="text" placeholder="Your Phone" required>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="textarea">Message</label>
                    <div class="col-sm-9">                     
                        <textarea id="textarea" name="message" rows="7" placeholder="Your messages"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">     
                        <div class="g-recaptcha" data-sitekey="6LfWWSQTAAAAAM68egPOuKGsJ6NBK6XtF7cG9ep_"></div>
                    </div>
                </div>

                

                <!-- captcha -->
                <div class="form-group no-border">
                    <div class="col-sm-8 col-sm-push-3">                     
                        <button type="submit" name="submit" class="btn btn-primary">Send message</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

@stop

@section ( 'jquery' )
    $("#page_banner").addClass( 'page-banner-contact' );
    $("#page_content").addClass( 'contact-content' );
@stop