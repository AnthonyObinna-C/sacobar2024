<?php 
$pagename = "Countries";
$pagetitle = "Member Countries";
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
                                    <a href="member-countries.php"><?=$pagename?></a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>><br>
<!-- Banner Section end -->
<style>
div.gallery {
  border: 1px solid #fff;
}

div.gallery:hover {
  border: 1px solid #225F8A;
}

.gallery img {
  width: 100%;
  height: 200;
}

div.desc {
  padding: 15px;
  text-align: center;
  text: #fff;
}

* {
  box-sizing: border-box;
}
.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix {
  content: "";
  display: table;
  clear: both;
}
</style>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture8.png" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc" style="color: white;"><h5>Burkina Faso</h5></div>
</div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture4.png" alt="Forest" width="600" height="400">
    </a>
    <div class="desc"><h5>Cameroon</h5></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture1.png" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc"><h5>Chad</h5></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture2.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Gambia</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture3.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Guinea</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture5.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Mauritania</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture6.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Mali</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture7.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Niger</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="">
      <img src="img/flags/picture8.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Nigeria</h5></div>
    </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture9.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Senegal</h5></div>
    </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture10.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Benin Republic</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture11.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Ghana</h5></div>
    </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture12.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Côte d'Ivoire</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture13.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Liberia</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture14.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Sierra Leone</h5></div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="#">
      <img src="img/flags/picture15.png" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><h5>Togo</h5></div>
  </div>
</div>

<div class="clearfix"></div>
<?php include 'inc/footer.php'; ?>