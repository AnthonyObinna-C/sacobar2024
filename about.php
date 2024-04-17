<?php 
$pagename = "About";
$pagetitle = "About Us";
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
                                        <a href="about.php"><?=$pagename?></a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section end -->

        <!-- About Section Start-->
        <section id="about">
            <div class="container">
                <header class="section-header">
                    <h3>About Us</h3>
                </header>
                <div class="row">
                    <div class="col-md-4 about-col-1">
                        <div class="about-title">  
                            <h1>Welcome to the First Sahelian Africa Congress on Bamboo and Rattan – SACOBAR, 2024!</h1>
                            <a href="ticket.php">Buy Tickets</a>
                        </div>
                    </div>
                    <div class="col-md-8 about-col-2">
                        <div class="about-imgs">
                            <div class="about-img">
                            <img class="img-fluid" src="img/vc9.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 about-des">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-des-col">
                                    <div class="about-img">
                                        <img class="img-fluid" src="img/about-1.jpg" />
                                    </div>
                                    <p>
                                    <h2>About SACOBAR</h2>
                                        The First Sahelian Africa Congress on Bamboo and Rattan - SACOBAR for short – which is an annual flagship outreach Programme of the Sahelian Institute for Bamboo Research and Entrepreneurship Development (SIBRED) at Nnamdi Azikiwe University, Awka, Southeast Nigeria, brings stakeholders from around the world together to meet, discuss, network, collaborate, and exchange...
                                    </p>
                                    <a href="sacobar.php">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-des-col">
                                    <div class="about-img">
                                        <img class="img-fluid" src="img/about-2.jpg" />
                                    </div>
                                    <p>
                                    <h2>About SIBRED</h2>
                                        One milestone of the Project-200 policy thrust of this university’s administration of Professor Charles Okechukwu Esimone, FAS - the 6th Substantive Vice Chancellor of Nnamdi Azikiwe University (NAU), Awka in Nigeria – is the establishment of the Sahelian Institute for Bamboo Research and Entrepreneurship Development (SIBRED) as the First University–based Bamboo and Rattan Research Directorate outside the Continent of Asia.
                                    </p>
                                    <a href="sibred.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 about-col-1">
                        <div class="about-imgs">
                            <div class="about-img">
                                <a href="https://journals.unizik.edu.ng/ijbar" target="_blank"><img class="img-fluid" src="img/ijbar.jpg" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 about-col-2">
                        <div class="about-title">  
                            <h1 style="color: #D75704;"><a href="https://journals.unizik.edu.ng/ijbar" target="_blank">Check out Our Journal, an International, refereed, peer reviewed, and bi-annual Journal</a></h1>
                            <a href="https://journals.unizik.edu.ng/ijbar" target="_blank">IJBAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section end -->

        <!-- Footer Start -->
        <?php include 'inc/footer.php'; ?>