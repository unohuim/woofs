@extends ('layouts.pages')

@section ( 'page_title' )
    ABOUT US
@stop

@section ( 'breadcrumb' )
    about
@stop


@section ( 'left_image' )
    <div class="about-left-image">
        <img src="images/about-left.png" alt="" class="img-responsive center-block">
    </div>  
@stop


@section ( 'page_paragraph' )
    <div class="about-right-para">
        <p>I was born with a natural affinity and love towards animals. I would have been that little girl approaching any cat or dog she saw on the street, eager to pet them and show them some love. As a child, I was often rescuing birds, squirrels and one time even 4 raccoons who had lost their mother. We grew up taking in every stray cat we found. Looking back, I guess I became a dog walker when I was 10 years old and would walk my friends’ dogs while they were away. I did it for free and I remember a Bassett hound sniffing and leading me towards a loonie in the grass, which for a 10 year old was a great score! It took me a while to realize where my place was in this world, I went to university of Western and completed my Bachelor of Arts back in 2004 and then moved in to the corporate world. </p>
        <p>I worked as a customer services manager for an online gift company in the UK for 3 years but returned with ideas of going back to school to work with animals in some capacity. A 6 week trip touring South Africa, the nature reserves and rescue centers there sealed my fate as I was certain of what I needed to be doing with my life after that. Once I returned and was considering schools I started working for a company downtown as a dog walker and realized that this work made me feel very happy and fulfilled. I also became a foster parent for dogs until they find their forever homes. I have now been walking dogs for 2 1/2 years professionally and running my own business for 2 years of that. I am insured, bonded and licensed as a dog walker and also am certified in pet first aid (which hopefully I never have to use) and I keep my first aid kit with me when we are out.</p>
        <p>I can provide client references and I am available to meet with you and your fur family to see if we both feel I am the right fit to care for your pet. If you would like to check out some of our pack walks pictures, you can view my Facebook page. If you have further questions and would like to arrange a meeting please contact me so we can get walking!</p>
    </div>
@stop

@section( 'jquery' )
    $("#page_banner").addClass( 'page-banner-daycare' );
    $("#page_content").addClass( 'about-content' );
@stop