<?php 
$pagename = "Discussions";
$pagetitle = "Panel Discussions";
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
                                        <a href="discussions.php"><?=$pagename?></a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section end -->
<section id="SIBRED">
    <div class="container">
        <header class="section-header">
            <h3>Bamboo Agrosilvopastoral Innovation  - A Panacea For  Farmers - Herders Crisis in ECOWAS subregion.</h3>
        </header>
            <!-- <h4>Lead Discussants:</h4>
        <ul>
            <li>Distinguished Senator  Patrick Abba Moro  - Senate Minority Leader,  Federal Republic of Nigeria.</li><br>
            <li>Dr. Muralidharan Enarth Maviton (India)  - Chair of INBAR Taskforce on Sustainable Bamboo management</li><br>
            <li>Ms. Diana Daheny (USA) - Founding Member, SIBRED'S Advisory Board.</li><br>
            <li>Mrs. Hajara Sami Umar   - Federal Director Of Forestry, Federal Ministry of Environment, Abuja</li><br>
            <li>Dr. Yigardu Mulatu - Ethiopian Environment and Forest Research Institute, Addis Ababa, Ethiopia.</li> -->
        </ul><br>
        <h4>Panelists:</h4>
        <ul>
            <!-- <li>Alfred Ajayi - Federal Radio Corporation of  Nigeria</li> -->
        </ul>
</section>

<style>
    
    /*** Spinner ***/
.spinner {
    width: 40px;
    height: 40px;
    background: var(--success);
    margin: 100px auto;
    -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
    animation: sk-rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes sk-rotateplane {
    0% {
        -webkit-transform: perspective(120px)
    }
    50% {
        -webkit-transform: perspective(120px) rotateY(180deg)
    }
    100% {
        -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg)
    }
}

@keyframes sk-rotateplane {
    0% {
        transform: perspective(120px) rotateX(0deg) rotateY(0deg);
        -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
    }
    50% {
        transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
        -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
    }
    100% {
        transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
        -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    }
}

#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/
.btn {
    font-family: 'Nunito', sans-serif;
    font-weight: 600;
    transition: .5s;
}

.btn-success,
.btn-secondary {
    color: #225F8A;
    box-shadow: inset 0 0 0 50px transparent;
}

.btn-success:hover {
    box-shadow: inset 0 0 0 0 var(--success);
}

.btn-secondary:hover {
    box-shadow: inset 0 0 0 0 var(--secondary);
}

.btn-square {
    width: 36px;
    height: 36px;
}

.btn-sm-square {
    width: 30px;
    height: 30px;
}

.btn-lg-square {
    width: 38px;
    height: 38px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding-left: 0;
    padding-right: 0;
    text-align: center;
}
    .team-item {
    transition: .5s;
}

.team-social {
    position: absolute;
    width: 40%;
    height: 25%;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .5s;
}

.team-social a.btn {
    position: relative;
    margin: 0 3px;
    margin-top: 100px;
    opacity: 0;
}

.team-item:hover {
    box-shadow: 0 0 30px #04d71d;
}

.team-item:hover .team-social {
    background: rgba(9, 30, 62, .7);
}

.team-item:hover .team-social a.btn:first-child {
    opacity: 1;
    margin-top: 0;
    transition: .3s 0s;
}

.team-item:hover .team-social a.btn:nth-child(2) {
    opacity: 1;
    margin-top: 0;
    transition: .3s .05s;
}

.team-item:hover .team-social a.btn:nth-child(3) {
    opacity: 1;
    margin-top: 0;
    transition: .3s .1s;
}

.team-item:hover .team-social a.btn:nth-child(4) {
    opacity: 1;
    margin-top: 0;
    transition: .3s .15s;
}

.team-item .team-img img,
.blog-item .blog-img img  {
    transition: .5s;
}

.team-item:hover .team-img img,
.blog-item:hover .blog-img img {
    transform: scale(1.15);
}
</style>

<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <!-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-info text-uppercase">Panelists</h5>
                <h1 class="mb-0">Bamboo Agrosilvopastoral Innovation  - A Panacea For  Farmers - Herders Crisis in ECOWAS subregion.</h1>
            </div> -->
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/ajayi2.jpg" alt="">
                            <div class="team-social">
                                <!-- <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a> -->
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://web.facebook.com/nkiruka.nzedinma"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.instagram.com/nkirukaokafor_rn/"><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.linkedin.com/in/nkirukaokafor/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h3 class="">Alfred Ajayi</h3>
                            <h5 style="color:#225F8A;">Controller News <br> Federal Radio Corporation of Nigeria (FRCN)</h5>
                            <h5 class="">Moderator</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/moro.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="">Distinguished Senator  Patrick Abba Moro</h4>
                            <h5 style="color:#225F8A;">Senate Minority Leader,  Federal Republic of Nigeria.</h5>
                            <h5 class="">Panelist</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/IPC/hajara2.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="">Dr. Hajara Sami Umar</h4>
                            <h5 style="color:#225F8A;">Federal Director Of Forestry, FME, Abuja</p>
                            <h5 class="">Panelist</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/moviton.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="">Dr. Muralidharan Enarth Maviton</h4>
                            <h5 style="color:#225F8A;">Chair of INBAR Taskforce on Sustainable Bamboo management</h5>
                            <h5 class="">Panelist</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/IPC/Picture7.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="">Ms. Diana Daheny</h4>
                            <h5 style="color:#225F8A;">Founding Member, SIBRED'S Advisory Board</h5>
                            <h5 class="">Panelist</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/IPC/mengasha.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="">Dr. Yigardu Mulatu</h4>
                            <h5 style="color:#225F8A;">Ethiopian Environment and Forest Research Institute, Addis Ababa, Ethiopia.</h5>
                            <h5 class="">Panelist</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

<?php include 'inc/footer.php'; ?>        