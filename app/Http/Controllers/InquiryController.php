<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InquiryMail;
use App\User;
use App\Inquiry;

class InquiryController extends Controller
{
    //user visits the inquire page
    public function inquire()
    {
        return view('inquiry.inquire_caninex');
    	//return view( 'inquiry.inquire' );
    }


    public function inquireThankyou()
    {
    	// if( empty( request( 'g-recaptcha-response' ) ) ) return Redirect::back();


    	// $inquiry = new Inquiry;

     //    $inquiry->subject = "Doggie Inquiry";
     //    $inquiry->referer = $_SERVER['HTTP_REFERER'];
     //    $inquiry->ip = $_SERVER['REMOTE_ADDR'];
     //    $inquiry->date = date('d/m/Y');
     //    $inquiry->time = date('H:i:s');
     //    $inquiry->petname = request( 'petname' );
     //    $inquiry->name = request( 'name' );
     //    $inquiry->intersection = request( 'intersection' );
     //    $inquiry->page_source = request( 'page_source' );
     //    $inquiry->email = request( 'email' );
     //    $inquiry->phone = request( 'phone' );
     //    $inquiry->message = request( 'message' );
          
     //    $user = new User( [ 'name' => 'Woofs Inquiry', 'email' => 'robert@woofs.ca' ] );


     //    \Mail::to( $user )->send( new InquiryMail( $inquiry ) );

    	return view( 'inquiry.inquire_thankyou' );
    }
}
