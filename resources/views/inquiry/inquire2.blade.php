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

        <form class="form-horizontal" action="https://caninex.com/leads/5/store?signature=3f071b83a1e0814db1c71e27630579f3c5050a3b47439bd8fdfa2a5566cc92e3" method="post">

            <fieldset>
                

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="pet_name">Your pet name</label>  
                    <div class="col-sm-9">
                        <input id="pet_name" name="pet_name" type="text" placeholder="Enter your pet name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="client_name">Your name</label>  
                    <div class="col-sm-9">
                        <input id="client_name" name="client_name" type="text" placeholder="Your name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="major_intersection">Closest Intersection</label>  
                    <div class="col-sm-9">
                        <input id="major_intersection" name="major_intersection" type="text" placeholder="Intersection" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="client_email">Your email</label>  
                    <div class="col-sm-9">
                        <input id="client_email" name="client_email" type="email" placeholder="youremail@example.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="client_phone">Phone</label>  
                    <div class="col-sm-9">
                        <input id="client_phone" name="client_phone" type="text" placeholder="Your Phone" required>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="client_message">Message</label>
                    <div class="col-sm-9">                     
                        <textarea id="client_message" name="client_message" rows="7" placeholder="Your messages"></textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-3 control-label" for="client_source">How did you find us?</label>  
                    <div class="col-sm-9">
                        <input id="client_source" name="client_source" type="text" placeholder="" required>
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