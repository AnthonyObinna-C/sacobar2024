<?php 
$pagename = "LOC";
$pagetitle = "Local Organizing Committee";
include 'inc/header.php'; ?>

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
                              <a href="loc.php"><?=$pagename?></a>
                          </span>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
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
                      <img class="img-fluid w-100" src="img/loc/edited/agbo.png" alt="Picture of John Agbo Ogbod">
                      <div class="team-social">
                          <!-- <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a> -->
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://web.facebook.com/nkiruka.nzedinma"><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.instagram.com/nkirukaokafor_rn/"><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.linkedin.com/in/nkirukaokafor/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h3 class="">Ir. John Agbo Ogbodo</h3>
                      <h5 style="color:#225F8A;">Founding Director, SIBRED <br>Chair, SACOBAR 2024 Local Organizing Committee (LOC)</h5>
                      
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture4.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Adaeze ACHUGBU</h4>
                      <h5 style="color:#225F8A;">Deputy Director of SIBRED, UNIZIK <br> Convener, SACOBAR 2024 (LOC on Hotel Accommodation and Airport Pickups Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture1.jpg" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dara Chijioke OKECHUKWU</h4>
                      <h5 style="color:#225F8A;">Chairman, Southeast Heads of Federal Establishments, <br>Nigeria Convener, SACOBAR 2024 (LOC on Partnerships, Fundraising and Sponsorships)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture2.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Chioma Doris OKAFOR</h4>
                      <h5 style="color:#225F8A;">Personal Assistant to the Federal Director of Forestry, Federal Ministry of Environment, Abuja <br>Member, SACOBAR 2024 (LOC on Abuja Airport Logistics and VIP Invitation Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture3.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Hon. Sebastine Terhemen GWABO</h4>
                      <h5 style="color:#225F8A;">Secretary to Guma Local Govt. Council, Benue State <br>Member, SACOBAR 2024 (LOC  - Northcentral Nigeria Mobilization)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture5.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Sylvia Ifeoma OFOEDU</h4>
                      <h5 style="color:#225F8A;">Faculty of Agriculture Chukwuemeka Odumegwu Ojukwu University (COOU), Igbariam <br>Member, LOC SACOBAR 2024</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture6.png" alt="Picture of John Agbo Ogbod">
                      <div class="team-social">
                          <!-- <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a> -->
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://web.facebook.com/nkiruka.nzedinma"><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.instagram.com/nkirukaokafor_rn/"><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.linkedin.com/in/nkirukaokafor/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h3 class="">Ebuka Augustine UGWU</h3>
                      <h5 style="color:#225F8A;">SIBRED, UNIZIK <br>Member, SACOBAR 2024 (LOC on Venue and Utilities)</h5>
                      
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture7.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Chief Engr. John A. OGWU</h4>
                      <h5 style="color:#225F8A;">President, Bamboo Farmers Association of Nigeria <br>Member, SACOBAR 2024 (LOC on Exhibition and Bamboo Food Vendors mobilization)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture8.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Prof. Nkiru Theresa Meludu</h4>
                      <h5 style="color:#225F8A;">Chairperson, Anambra State Chapter of National Bamboo Farmers, Processors and Marketers Association of Nigeria (NBFPMAN) <br>Convener, SACOBAR 2024 (LOC on Exhibition and Bamboo Food Vendors mobilization Subcommittee)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture9.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Chisom Finian IROKA</h4>
                      <h5 style="color:#225F8A;">Faculty of Biosciences, UNIZIK <br><p></p> Convener, SACOBAR 2024 (LOC on Bamboo and Rattan Farm Plantation Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture10.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Samuel Anarah</h4>
                      <h5 style="color:#225F8A;">Deputy Convener, SACOBAR 2024 <br><p></p>(LOC on Hotel Accommodation and Airport Pickups Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture11.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Akudo Ogechukwu ONUNWA</h4>
                      <h5 style="color:#225F8A;">Faculty of Agriculture, UNIZIK <p></p> Convener, SACOBAR 2024 (LOC on Scientific Sessions and Book of Proceedings Drafting Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture12.png" alt="Picture of John Agbo Ogbod">
                      <div class="team-social">
                          <!-- <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a> -->
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://web.facebook.com/nkiruka.nzedinma"><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.instagram.com/nkirukaokafor_rn/"><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.linkedin.com/in/nkirukaokafor/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h3 class="">Alfred AJAYI</h3>
                      <h5 style="color:#225F8A;">Federal Radio Corporation of Nigeria (FRCN) <br> Convener, SACOBAR 2024 (LOC on  Media,  Press and Master of Ceremony Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture13.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Christopher Uche OKOLIE</h4>
                      <h5 style="color:#225F8A;">Faculty of Biosciences, UNIZIK <br>Member Convener, SACOBAR 2024 (LOC on Scientific Sessions and Book of Proceedings Drafting Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture14.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Paschal Oshen Odey</h4>
                      <h5 style="color:#225F8A;">SIBRED, UNIZIK <p><br></p>Convener, SACOBAR 2024 (LOC on Security and Protocols)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture15.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Mrs. Temple Nneamaka Nwankwo</h4>
                      <h5 style="color:#225F8A;">SIBRED, UNIZIK <br>Convener, SACOBAR 2024 (LOC on Refreshments Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture16.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Prof. Ejeatuluchukwu Obi</h4>
                      <h5 style="color:#225F8A;">Co- Initiator, SIBRED UNIZIK <br> Convener, SACOBAR 2024 (Guided Tour Arrangement and Traditional Ruler Visitations)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture17.jpg" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Mrs. Alaba ADZANDEH</h4>
                      <h5 style="color:#225F8A;">Convener, SACOBAR 2024 <p></p>(LOC on Abuja Airport Logistics Sport for International Members and VIP Invitation Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture18.png" alt="Picture of John Agbo Ogbod">
                      <div class="team-social">
                          <!-- <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a> -->
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://web.facebook.com/nkiruka.nzedinma"><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.instagram.com/nkirukaokafor_rn/"><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.linkedin.com/in/nkirukaokafor/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h3 class="">Justin ALIGAMHE</h3>
                      <h5 style="color:#225F8A;">Federal Department of Forestry, Federal Ministry of Environment, Abuja <br> Member, SACOBAR 2024 (LOC on Abuja Airport Logistics and VIP Invitation Subcommittee)</h5>
                      
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture19.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Mrs. Uwemedimo CLEMENT</h4>
                      <h5 style="color:#225F8A;">National Environmental Standards and Regulations Enforcement Agency (NESREA), Abuja <br>Member, SACOBAR 2024 (LOC on Abuja Airport Logistics Sport for International Members and VIP Invitation Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture20.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Matthew Adoga AGAMA</h4>
                      <h5 style="color:#225F8A;">Department of Entrepreneurship, Federal College of Education (Technical) Umunze. <br>Deputy Convener, SACOBAR 2024 (LOC on  Skills Acquisition/Trainings Workshop)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture21.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Peter Jatau GODWIN</h4>
                      <h5 style="color:#225F8A;">Federal University Dutsin-Ma, Katsina State, Nigeria <br>Member, SACOBAR 2024 (LOC, Northwest, Nigeria)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture22.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Precious Chibueze CHILAKA</h4>
                      <h5 style="color:#225F8A;">Faculty of Agriculture, Nnamdi Azikiwe University, Awka <br> Deputy Convener, SACOBAR 2024 (LOC Social Media,  ICT and Projectors)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture23.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Mr. Emmanuel Hussaini</h4>
                      <h5 style="color:#225F8A;">Coordinator, Standards Organization of Nigeria (S.O.N) Awka Office <br> Convener, (LOC on Advertisement and Vendors Mobilisation Subcommittee) <br> SACOBAR 2024</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture24.png" alt="Picture of John Agbo Ogbod">
                      <div class="team-social">
                          <!-- <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a> -->
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://web.facebook.com/nkiruka.nzedinma"><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.instagram.com/nkirukaokafor_rn/"><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href="https://www.linkedin.com/in/nkirukaokafor/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h3 class="">Mrs. Chizoba Quinette IGWILO</h3>
                      <h5 style="color:#225F8A;">SIBRED UNIZIK <br>Convener, SACOBAR 2024 (LOC Ushering and Regsitration Desk)</h5>
                      
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture25.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Mrs. Nkem C. OKAFOR</h4>
                      <h5 style="color:#225F8A;">SIBRED UNIZIK <p></p>Deputy Convener, SACOBAR 2024 (LOC on Refreshments Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture26.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Ngozi Blessing OGAMBA</h4>
                      <h5 style="color:#225F8A;">SIBRED UNIZIK <br>Member, SACOBAR 2024 (LOC Financial Secretary)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture27.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Roseline Nzube IKEH-UNEKWE</h4>
                      <h5 style="color:#225F8A;">SIBRED UNIZIK <br> LOC Secretary of SACOBAR 2024 (Convener, Rapporteuring and Communique Drafting Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture28.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Christopher I. AGAH</h4>
                      <h5 style="color:#225F8A;">SIBRED UNIZIK <br>Member, SACOBAR 2024 (LOC on Bamboo and Rattan Farm Plantation Subcommittee)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture29.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Nma Okechukwu OKOROJI</h4>
                      <h5 style="color:#225F8A;">Cocoa Farmers Association of Nigeria (CFAN) <p></p>Member, SACOBAR 2024 (LOC on Scientific Sessions Subcommittee)  and Madam of Ceremony (MC)</h5>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture30.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Abraham ENEFU</h4>
                      <h5 style="color:#225F8A;">Modern European Languages Department, UNIZIK <br>Member, SACOBAR 2024 (Master of Ceremony (Franch language))</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture31.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Alice NKANU</h4>
                      <h5 style="color:#225F8A;">National Agency for the Great Green Wall, Abuja <p></p>Member, SACOBAR 2024 (LOC on Abuja Airport Logistics and VIP Invitation Subcommittee)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/nwokoye1.jpg" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Prof. Nkechinyere A. Nwokoye</h4>
                      <h5 style="color:#225F8A;">Department of IGBO, AFRICAN AND ASIAN STUDIES, NAU. <p></p>Member, LOC SACOBAR 2024 </p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/metu.jpg" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Amaka Metu</h4>
                      <h5 style="color:#225F8A;">READER in ECONOMICS Department, Faculty Of Social Sciences in Nnamdi Azikiwe University <p></p>Member, SACOBAR 2024 (LOC on Venue Subcommittee)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture32.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Taiwo Olabisi Abdulahi</h4>
                      <h5 style="color:#225F8A;">Department of Cooperatives Economics, UNIZIK <br>Deputy Convener, SACOBAR 2024 (LOC on  Skills Acquisition/Trainings Workshop)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture33.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Mrs. Joy P. I. Ogbodo</h4>
                      <h5 style="color:#225F8A;">Program Director, <br> STEi Foundation <br>Member, SACOBAR 2024 (LOC on Refreshments Subcommittee)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture34.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Anselm E. EGWUNATUM</h4>
                      <h5 style="color:#225F8A;">Faculty of Agriculture <p></p> Deputy Convener, SACOBAR 2024 (LOC on Scientific Sessions and Book of Proceedings Drafting Subcommittee)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture35.png" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Mrs. Nkiru Roberta ANWAEGBU, CLN</h4>
                      <h5 style="color:#225F8A;">Faculty of Agriculture Library, <br>SACOBAR 2024 (LOC on Scientific Sessions and Book of Proceedings Drafting Subcommittee)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture36.jpg" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Kingsley K. A. Amadi</h4>
                      <h5 style="color:#225F8A;">Faculty of Agriculture, Nnamdi Azikiwe University, Awka <br>(LOC on Bamboo and Rattan Farm Plantation Subcommittee)</p>
                  </div>
              </div>
          </div>
          
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture37.jpg" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. Henry OKOLIE</h4>
                      <h5 style="color:#225F8A;">Faculty of Agriculture, Nnamdi Azikiwe University, Awka <br> (LOC on Bamboo and Rattan Farm Plantation Subcommittee)</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
              <div class="team-item bg-light rounded overflow-hidden">
                  <div class="team-img position-relative overflow-hidden">
                      <img class="img-fluid w-100" src="img/loc/edited/picture38.jpg" alt="">
                      <div class="team-social">
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                          <a class="btn btn-lg btn-success btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                      </div>
                  </div>
                  <div class="text-center py-4">
                      <h4 class="">Dr. IJI EMMANUEL PRECIOUS, FCAI</h4>
                      <h5 style="color:#225F8A;">Managing Consultant, GreenPasture Consult</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

    <!-- Team End -->
<?php include 'inc/footer.php'; ?>