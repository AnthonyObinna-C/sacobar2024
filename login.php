<?php include 'inc/header.php'?>
        <!-- Header end -->

        <!-- Banner Section Start-->
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                 <h1 class="banner-header">
                                    User Area
                                </h1>
                            </div>
                            <div class="col-md-6">
                                 <p class="banner-nav">
                                    <span class="banner-box">
                                        <a href="index.php">Home</a>
                                        <a href="login.php">User Area</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section end -->

        <!-- Login Section Start -->
        <section id="login">
            <div class="container">
                <div class="section-header">
                    <h3>User Area</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 form">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" placeholder="Your Password" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="Password" class="form-control" placeholder="Repeat Your Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember1">
                                    <label class="custom-control-label" for="remember1">Remember me</label>
                                </div>
                            </div>
                            <div><button type="submit">Sing Up</button></div>
                        </form>
                    </div>
                    
                    <div class="col-md-6 form">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password" />
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember2">
                                    <label class="custom-control-label" for="remember2">Remember me</label>
                                </div>
                            </div>
                            <div><button type="submit">Sign In</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login Section end -->

        <!-- Footer Start -->
        <?php include 'inc/footer.php'; ?>        
