<?php 
$pagename = "Contact";
$pagetitle = "Contact Us";
include 'inc/header.php';?>
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
                                        <a href="contact.php"><?=$pagename?></a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section end -->
    <style type="text/css">
      h1 {
      margin: 0 0 20px;
      font-weight: 400;
      color: #1c87c9;
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #1c87c9;
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #f5f5f5; 
      }
      .fa {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      .fa-envelope {
      transform: rotate(-20deg);
      }
      .fa-at , .fa-paper-plane-o{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;
      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }
      }
    </style>

        <!-- Contact Section Start -->
        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>
                <div class="row">
                    <div class="main-block">
                        <div class="left-part">
                            <i class="fa fa-envelope"></i>
                            <i class="fa fa-folder-open-o"></i>
                            <i class="fa fa-at"></i>
                            <i class="fa fa-paper-plane-o"></i>
                        </div>
                        <form action="">
                            <h1>Contact Us</h1>
                            <div class="info">
                            <input class="fname" type="text" name="name" placeholder="Full name">
                            <input type="text" name="name" placeholder="Email">
                            <input type="text" name="name" placeholder="Phone number">
                            <input type="text" name="name" placeholder="Website">
                            </div>
                            <p>Message</p>
                            <div>
                            <textarea rows="4"></textarea>
                            </div>
                            <button type="submit" href="#">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section end -->

        <section id="venue">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 des-cols">
                        <div class="des-col">
                            <h3 style="color:#fff;">For Inquiries, Contact:</h3>
                            <p><a href="https://wa.me/qr/UTZEZ5DWS5G4O1">Whatsapp </a>John Agbo Ogbodo</p>
                            <p>
                                SIBRED Director and LOC Chair
                            </p><br>
                            <p>
                                <a href="mailto:sacobar@sibred.unizik.edu.ng"><i class="fa fa-envelope" style='font-size:14px; color:white'></i>   sacobar@sibred.unizik.edu.ng</a> <br> <a href="mailto:sibred@dir.unizik.edu.ng"><i class="fa fa-envelope" style='font-size:14px; color:white'></i>   sibred@dir.unizik.edu.ng</a>
                            </p><br>
                            <h3 style="color: #fff;">Event Planning Consultant</h3>
                            <h5>Tonia-Royale Decor & Rentals, Awka</h5>
                            <p>
                                    Facebook: <a href="https://web.facebook.com/nkymeso">https://web.facebook.com/nkymeso</a>
                            </p><br>
                        </div>
                    </div>
                    <div class="col-md-6 des-cols">
                        <div class="des-col">
                            
                            <h3 style="color: #fff;">Live Streaming and Televising Consultant</h3>
                            <h5>Codee Solutions, Awka</h5>
                            <p>
                                    Website: <a href="https://www.codeeltd.com/">https://www.codeeltd.com/</a>
                            </p><br>
                            <h3 style="color: #fff;">International Media Consultant for SACOBAR 2024</h3>
                            <h5>Bambu Batu</h5>
                            <p>Websit: <a href="https://bambubatu.com/">https://bambubatu.com/</a></p><br><u></u>
                            <h3 style="color: #fff;">Consultant, Photography and Public Address System</h3>
                            <h5>Public Relations Unit, Office of the Vice Chancellor, UNIZIK</h5>
                        </div>
                    </div>
                    <h3 style="text-align:center;">Event Address: ASUU Secretariat, Nnamdi Azikiwe University, Awka, Anambra state, Nigeria</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1354116728767!2d7.117319074750784!3d6.245880193742509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104378edb8d8e37d%3A0x9f32c5103b825233!2sNnamdi%20Azikiwe%20University!5e0!3m2!1sen!2sng!4v1708115744998!5m2!1sen!2sng" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <!-- Footer Start -->
<?php include 'inc/footer.php'; ?>        
