@extends ('layouts.main')

@section ('content')

    @section ( 'header' )
        @include ( 'partials._home-header' )
    @stop


    <!-- OUR SERVICES -->
    <section id="services" class="mind-protection section-padding">
        <div id="ourservices" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2 class="hidden-xs">WHAT WE'RE UP TO</h2>
                        <h2 class="visible-xs">SERVICES</h2>
                        <span class="hidden-xs"> We're obsessed with making a dog's day</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-protection">
                        <div class="single-pro-inner">
                            <h3>DOG WALKING</h3>
                            <ul>
                                <li> highly active, highly social </li>
                                <li> park integration process </li>
                                <li> well architected groups </li>
                                <li> long-term focused </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-protection">
                        <div class="single-pro-inner">
                            <h3>DAYCARE</h3>
                            <ul>
                                <li> lots of outdoor exercise </li>
                                <li> indoor games & programs </li>
                                <li> pick-up & drop-off included </li>
                                
                                <div class="view-all-image pull-right">
                                    <a href="daycare.php">
                                        learn more..
                                        <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-protection">
                        <div class="single-pro-inner">
                            <h3>WOOFS UNIVERSITY</h3>
                            <ul>
                                <li> obedience 101 </li>
                                <li> obedience 201 </li>
                                <li> canine good neighbour 101 </li>
                                <div class="view-all-image pull-right">
                                    <a href="dog-training.html">
                                        learn more.. 
                                        <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                                    </a>
                                </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- LETS TALK -->
    <section class="lets-talk section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="woofs">
                        <img class="img-responsive center-block" src="images/woofs.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="talk-content">
                        <h2>Let's Talk</h2>
                        <p>Whether you're getting a new puppy or moving across town, we'd love to hear from you. We can set up a meet n greet, or perhaps you only have questions at this point. Wherever you are in the process is perfectly fine with us - we love talking about animals!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="inquiries">
                        <a href="contact.html">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TESTIMONIALS -->
    <section class="testimonials section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-second text-center">
                        <h2 class="hidden-xs"><span>Woofs</span> Upon A Walk will treat your dog like family</h2>
                        <h2 class="visible-xs"><span>Family</span> values</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="row">
                                          <div class="col-xs-2">
                                              <div class="client-image">
                                                  <img class="img-responsive center-block" src="images/carolyne.png" alt="">
                                                  <span>Carolyn</span>
                                              </div>
                                          </div>
                                          <div class="col-xs-10">
                                              <blockquote>
                                                  <p>Can I tell you that Haroula is magic? She has charmed Murray and they have forged a bond I haven’t seen him have with anyone outside of my family. She has a special call for him when she comes in and he runs to the door–runs(!) to greet her. He can’t wait to go out with her. He left yesterday petrified of the thunder, and Haroula just held him and calmed him. Clearly he got over it and had a great time in the park. Thank you for hiring such wonderful people.</p>
                                              </blockquote>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="row">
                                          <div class="col-xs-2">
                                              <div class="client-image">
                                                  <img class="img-responsive center-block" src="images/rachel.png" alt="">
                                                  <span>Rachel</span>
                                              </div>
                                          </div>
                                          <div class="col-xs-10">
                                              <blockquote>
                                                  <p>Rob and crew have been amazing with our dog Lucy. She waits excitedly for their arrival in the morning, perking up at each promising sound outside, and she comes home happy and completely exhausted. This is a very professional operation- from the intake, to the amazing regular communication (daily notes, email updates, accounting messages), to the way they handle unexpected challenges. I have been impressed every step of the way. And a big bonus is how much they clearly love our dog- it warms my heart to see the interaction between Lucy and her walker, Haroula. Knowing they will keep her safe, exercise her, AND love her is way more than I expected from a dog walking service. I have recommended this company to several others, and wouldn’t hesitate to do so again.
    </p>
                                              </blockquote>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
    </section>



    <!-- CONTACT US -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-heading">
                        <h2>CONTACT US</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="contact-left">
                        <p>Whether you’re getting a new puppy or moving across town, we’d love to hear from you. We can set up a meet n greet, or perhaps you only have questions at this point. Wherever you are in the process is perfectly fine with us – we love talking about animals! We can offer you advice and put your mind at ease that you are dealing with exceptional dog walkers in Toronto! Let us do the hard work for you when you’re too busy with work to walk your dog. We know you love your dog and some days it can be hard to get all your other work done and walk your dog at the same time. We can help you on days like this so you can relax knowing your dog is being walked by people you can trust.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact-right">
                        <form class="form-horizontal" action="{{ url( 'inquire_thankyou' ) }}" method="post">
                        <fieldset>

                            <input type="hidden" name="page_source" value="home" />

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">PET'S NAME</label>  
                                <div class="col-md-8">
                                    <input id="textinput" name="petname" type="text" placeholder="Enter your pet's name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="yourname">YOUR FULL  NAME</label>  
                                <div class="col-md-8">
                                    <input id="yourname" name="name" type="text" placeholder="Your name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="youremail">YOUR EMAIL</label>  
                                <div class="col-md-8">
                                    <input id="youremail" name="email" type="email" placeholder="youremail@example.com" required>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-md-4 control-label" for="phone">Phone</label>  
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="Your Phone" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="yourintersection">INTERSECTION</label>  
                                <div class="col-md-8">
                                    <input id="yourintersection" name="intersection" type="text" placeholder="closest intersection" required>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textarea">Message</label>
                                <div class="col-md-8">                     
                                    <textarea id="textarea" name="message" rows="3" placeholder="Your messages"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">     
                                    <div class="g-recaptcha" data-sitekey="6LfWWSQTAAAAAM68egPOuKGsJ6NBK6XtF7cG9ep_"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">                     
                                    <button type="submit" name="submit" class="con-btn">INQUIRE</button>
                                </div>
                            </div>

                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop