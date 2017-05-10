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
                if(isset($_POST['submit'])){
                // if(empty($_POST['g-recaptcha-response'])){
                //   echo "Captcha doesn't match";
                // }
                else{
                    $to = "robert@woofs.ca";
                    $subject = "Doggie Inquiry";
                  
                    $ref = $_SERVER['HTTP_REFERER'];
                    $ipaddress = $_SERVER['REMOTE_ADDR'];
                    $date = date('d/m/Y');
                    $time = date('H:i:s');

                    $petname = $_POST['petname'];
                    $name = $_POST['name'];
                    $intersection = $_POST['intersection'];
                    $page_source = $_POST['page_source'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];
                      
                    $headers = "From: WUAW <info@woofsuponawalk.com>" . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    
                    $emailbody = "<p>Message received from Contact form from " . $page_source . ".</p>

                    <h3>Information</h3>

                    <p><strong>Pet Name: </strong> {$petname} </p>
                    <p><strong>Name: </strong> {$name} </p>
                    <p><strong>Closest Intersection: </strong> {$intersection} </p>
                    <p><strong>Email Address: </strong> {$email} </p>
                    <p><strong>Phone No: </strong> {$phone} </p>
                    <p><strong>Message: </strong> {$message} </p>
                  
                    <hr />
                    <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time} & form located at {$ref}</p>";
                    
                    echo $emailbody;
                    // $mail = mail($to, $subject, $emailbody, $headers);

                    // if($mail){
                    //   header("Location: $ref");
                    //}     
                }  
                }
            ?>
        </div>
    </div>
    
@stop

@section ( 'jquery' )
    <!-- $("#page_banner").addClass( 'page-banner-contact' ); -->
    $("#page_content").addClass( 'thanks' );
@stop