@extends ('layouts.main')

@section ('content')
    <button id="c-button--push-right">
        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
    </button>

    <header id="header" class="home">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="new-dog">
                            <img src="images/purple-dog-new.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-home-bg">
            <div class="container">                        
                <div class="row">
                    <div class="col-md-12">
                        <div class="hidden-xs banner-title text-center">
                            <h2>FITNESS & ENRICHMENT FOR CANINES</h2>                                
                            <span>love‧ excellence‧ fun</span>                              
                        </div>
                        
                        <div class="visible-xs banner-title text-center">
                            <h3>FITNESS & ENRICHMENT FOR CANINES</h3>
                            <span>love‧ excellence‧ fun</span> 
                        </div>
                    </div>
                </div>
                
                <div class="row">
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="contact.html"><button class="btn btn-success btn-lg title">INQUIRE</button></a>
                        <a href="#services"><button class="btn btn-info btn-lg title">MORE</button></a>
                    </div>
                </div>
                
                

                
            </div>
        </div>
    </header>



    <section id="services" class="mind-protection section-padding">
        <div class="container">
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


    <section class="loving-dogs section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>WHAT WE HAVE LEARNED</h2>
                        <span class="hidden-xs"> ..and use every single day</span>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <?php 
                    $args = array( 'posts_per_page' => 3 );
                    $posts = get_posts( $args );

                    foreach ( $posts as $post ) : setup_postdata( $post ); 
                        if(has_post_thumbnail()){
                            $image = wp_get_attachment_url( get_post_thumbnail_id() );
                        }                            
                ?>
                <div class="col-md-4 col-sm-6">
                    <div class="dog-park">
                        <div class="dog-park-top">
                            <img class="img-responsive center-block" style="min-height:250px;" src="<?php echo $image; ?>" alt="">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="dog-park-bottom">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                <?php 
                    endforeach;
                ?>
            </div> -->
        </div>
    </section>



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

    <section class="different section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-second text-center">
                        <h2><span>Woofs</span> upon a walk is different</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="woofs-single">
                        <img src="images/house.png" alt="">
                        <h3>Dog Walking Toronto: A Family Business</h3>
                        <p>We’re a family run dog walking business in Toronto and take pride in the quality of our work. We’re well reviewed and have many clients eager to speak with prospective clients. We’ve been voted best by BlogTO. We have awesome dogs, and our groups are designed to promote activity. We won’t simply put your dog in the next available time slot, we construct our groups based on behavior.</p>
                        <p>We are dog walkers in Toronto with a real passion for what we do. Our sole focus is to create the best time of your dog’s life, each time we’re out. We’re good at that. Engagement, activity, behavioral management and mental stimulation are all important parts of the dog walking throughout our day in Toronto. Our dog walkers are amazing, and love our dogs like their own. We train our dog walkers for months before they go out on their own, and the quality control is on-going. We’re all insured, bonded and have pet first aid certifications. This is all invested by the company to ensure consistency across our dog walkers.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="woofs-single">
                        <img src="images/ring.png" alt="">
                        <h3>Dog Walkers in Toronto With a Difference</h3>
                        <p>Our aim is to provide a noticeable difference from the norm. From the onset to the day-to-day operations, the feedback we get is that interacting with us is unique. Our people are different, we recruit dog walkers in unusual places. Competency is a minimum requirement, not the sole focus. We also want our people to have personalities that shine. When hiring dog walkers in Toronto, we use a special criteria that we feel provides  us with the best people for this job. Being coachable and having a relentless positive mindset top that list. We are innovators and investors. We invest in our quality, people and our technology. We also have standards when it comes to what dog behavior is acceptable and unacceptable in a dog park. We won’t simply let “dogs be dogs” because public dog parks require more intention than that.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <form class="form-horizontal" action="/thank-you/" method="post">
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="single-footer">
                        <h4>About Woofs Upon A Walk</h4>
                        <p>We are dog walkers in Toronto with a real passion for what we do. Our sole focus is to create the best time of your dog’s life, each time we’re out.</p>
                    </div>
                </div>
                <div class="col-md-5 col-sm-4 col-xs-12">
                    <div class="single-footer footer-service">
                        <h4>Menu</h4>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About </a></li>
                            <li><a href="dog-training.html">WoofsU</a></li>
                            <li><a href="service-areas.html">Service Areas</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Inquire</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="single-footer">
                            <div class="col-md-12">
                                <div class="social-icons">
                                    <h4>Connect with us</h4>
                                    <ul>
                                        <li><a href="http://www.facebook.com/woofsuponawalk" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a></li>
                                        <li><a href="http://twitter.com/woofsuponawalk" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="copyright">
                            <span>&copy; 2016 Woofs Upon A Walk All Rights Reserved.</span>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="copyright-menu text-right">
                            <ul class="list-inline">
                                <li><a href="#header">back to top</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
