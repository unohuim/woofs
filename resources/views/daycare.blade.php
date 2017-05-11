@extends ('layouts.pages')

@section ( 'page_title' )
    DOGGIE DAYCARE
@stop

@section ( 'breadcrumb' )
    Doggie Daycare
@stop


@section ( 'left_image' )
    <div class="about-left-image">
        <img src="images/about-left.png" alt="" class="img-responsive center-block">
    </div>  
@stop


@section ( 'page_paragraph' )
    <div class="about-right-para">
        <h4>Dog Experiences Come First</h4>
        <p>The first thing clients ask when they walk in is “why aren’t the dogs barking?”</p>
        <p>Woofs Upon a Walk is a Toronto Dog Services Company who welcomes innovation, and strives to evolve into being the best dog experience possible.</p>
        <p>You can expect a few differences with our daycare service than what you’re probably used to.  The biggest being that we don’t let clients directly drop-off their dogs.  Instead, we do the pick-ups and drop-offs.  Clients are welcome to come visit and check out our facility, but before any dog steps foot into our facility they are taken-out for a group run with a Professional Dog Walker first.  This ensures a few things.  Firstly, all the dogs are fully exercised.  As we know, a well behaved pup is a tired pup.  The morning run improves the overall behavior.  It also reduces stress, mess, and the overall noise levels.  The environment improves because of that morning run.</p>

        <h4>Balance</h4>
        <p>We believe that the best dog experience is a balanced experience.  We put equal focus on social & mental stimulation as we do physical.  We know that it can be frustrating to have your dog go from being tired after 30 min to not even remotely close to tired after 3 hrs.  Focusing solely on physical can quickly increase your dog’s stamina.  Balance is key.  We put a lot of energy into creating the right social dynamics.  We spend a lot of time working on mentally stimulating activities and games.  These activities can wipe a dog out and not impact stamina.</p>
        
        <h4>The Facility</h4>
        <p>Physical is still very important.  We believe that a daycare service should not rely 100% on its facility for physical exercise.  Only outside in big spaces can dogs run full-out and be free.  Outside is a dog’s canvas, where they fully express themselves with wicked dance moves.  They prance, chase, wrestle and tackle.  Nothing can replace the physical experience of a well-managed group run at the dog park.</p>
        <p>Our core service is Professional Dog Walking.  We’ve been walking dogs (moreso running) since 2010.  We’re experts at physically tiring-out dogs and providing mental stimulation in the dog parks safely.  We’re excellent at matching-up dogs so that the group dynamics is optimal for social learning.  Professional Dog Walkers know that preventing aggressive behavior is a proactive process that involves managing energy, not just behavior.</p>
        <p>Before any dog steps foot into our facility, they’ve already gone for a group run at a dog park managed by a Professional Dog Walker.</p>

        <h4>The Experience</h4>
        <p>The dogs get back from their morning run between 11:30am and 12:30pm.  For the first two hours after being drop-off, the dogs sleep - they’re so wiped-out from their group run.  After that they start to walk around, pick-up a ball or rope toy.  Eventually, some will engage in light play.  Some dogs are still laying down, some are still sleeping.  By 2:30pm, all the dogs are up and some are actively playing with others.  This is when we’ll begin engaging them with command work or controlled play.  By around 3:30pm we’ll take them out again for a leash walk and bathroom break.</p>
        <p>The morning run is so key to the rest of the day.  You won’t see any aggressive behavior, or dominant behavior because the dogs are so tired.  They’re more chill than usual, and their stress levels are low.</p>
        <p>You also don’t see poos or pees on a regular basis.  Accidents do happen, but they’re rare rather than being a daily expectation.  Our own personal dog, Brume, gets very stressed-out if she has to poo indoors.  We know she isn’t alone.  The fact that she can do her bathroom breaks outside, means that her stress levels are low and that impacts her behavior throughout the day.</p>
        <p>All this comes together to create an unsual dog daycare experience where there aren’t really a lot of noises made.  A quick “no thanks, Teddy” will always quiet a barker.</p>
        <p>And when clients do come in for a  visit, we’re only too happy to explain why the dogs aren’t barking.</p>
    </div>
@stop

@section( 'jquery' )
    $("#page_banner").addClass( 'page-banner-daycare' );
    $("#page_content").addClass( 'about-content' );
@stop