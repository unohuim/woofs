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

       
       <form action="https://caninex.com/leads/5/store?signature=3f071b83a1e0814db1c71e27630579f3c5050a3b47439bd8fdfa2a5566cc92e3" method="post"><div class="join-form-field"><label for="client_name" class="join-form-field-label">Your Name</label> <input type="text" id="client_name" name="client_name" placeholder="Your Name" required="required" class="join-form-field-control"></div> <div class="join-form-field"><label for="client_email" class="join-form-field-label">Your Email</label> <input type="text" id="client_email" name="client_email" placeholder="Your Email" required="required" class="join-form-field-control"></div> <div class="join-form-field"><label for="client_phone" class="join-form-field-label">Your Phone</label> <input type="text" id="client_phone" name="client_phone" placeholder="Your Phone" required="required" class="join-form-field-control"></div> <div class="join-form-field"><label for="pet_name" class="join-form-field-label">Pet Name</label> <input type="text" id="pet_name" name="pet_name" placeholder="Pet Name" required="required" class="join-form-field-control"></div> <div class="join-form-field"><label for="client_message" class="join-form-field-label">Please provide any other details</label> <input type="text" id="client_message" name="client_message" placeholder="Please provide any other details" required="required" class="join-form-field-control"></div> <div class="join-form-field"><label for="client_source" class="join-form-field-label">How did you hear about us?</label> <input type="text" id="client_source" name="client_source" placeholder="How did you hear about us?" required="required" class="join-form-field-control"></div> <div class="join-form-field"><label for="major_intersection" class="join-form-field-label">Major Intersection</label> <input type="text" id="major_intersection" name="major_intersection" placeholder="Major Intersection" class="join-form-field-control"></div> <div class="join-form-field"><label for="client_phone_2" class="join-form-field-label">2nd Phone (optional)</label> <input type="text" id="client_phone_2" name="client_phone_2" placeholder="2nd Phone (optional)" class="join-form-field-control"></div> <div><button class="join-form-submit">Send request</button></div></form>


    </div>

@stop

@section ( 'jquery' )
    $("#page_banner").addClass( 'page-banner-contact' );
    $("#page_content").addClass( 'contact-content' );
@stop