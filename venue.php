<?php 
$pagename = "Venue";
$pagetitle = "Event Venue";
include 'inc/header.php'?>
        <!-- Header end -->

        <!-- Banner Section Start-->
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                 <h1 class="banner-header">
                                    <?=$pagetitle?>
                                </h1>
                            </div>
                            <div class="col-md-6">
                                 <p class="banner-nav">
                                    <span class="banner-box">
                                        <a href="index.php"><?=INDEX?></a>
                                        <a href="venue.php"><?=$pagename?></a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section end -->

        <!-- Venue Section Start -->
        <section id="venue">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-col">
                            <img class="img-fluid" src="img/asuu-800-800.webp">
                        </div>
                    </div>
                    <div class="col-md-6 des-cols">
                        <div class="des-col">
                            <h2>Our Venue</h2>
                            <h5>ASUU Secretariat, Nnamdi Azikiwe University, Awka, Anambra State</h5>
                            <p>
                                UNIZIK is easily accessible by inter-state road taxis and from Anambra Airport (known officially as Chinua Achebe International Airport at Umueri in Anambra State) for domestic flights which can only be boarded from any of the following International Airports in Nigeria, viz: Abuja, Lagos Port Harcourt or Kano Airports using either <a href="https://www.flyairpeace.com">Air Peace</a> or <a href="https://flyunitednigeria.com">United Nigeria</a> airliners. The Local Organizing Committee (LOC) will arrange airport pick-up. Travel from the Chinua Achebe International Cargo Passenger Airport, Umuleri at Ivite, Umuleri 432104, Anambra to Nnamdi Azikiwe University (NAU) - ASUU Secretariat is a 45-minute taxi ride (see Google map below).
                            </p><br>
                            <h5>
                                For More Inquiry, Call:
                            </h5>
                            <p>
                                <a href="tel:+2349099853404"><i class="fa fa-mobile" style='font-size:24px; color:white'></i>   +2349099853404</a> <br> <a href="tel:+2348061166773"><i class="fa fa-mobile" style='font-size:24px; color:white'></i>   +2348061166773</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Venue Section End --><!-- Contact Section Start -->
        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>
                <div class="row">
                    <div class="col-md-7 g-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1146617325926!2d7.1187520747508!3d6.248618493739794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104379887b56726d%3A0x75cae1588021ecca!2sNnamdi%20Azikiwe%20University%20(NAU)%20ASUU%20Secretariat!5e0!3m2!1sen!2sng!4v1708226594344!5m2!1sen!2sng" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                    <div class="col-md-5 form">
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section end -->

        <!-- Footer Start -->
        <?php include 'inc/footer.php'; ?>        
