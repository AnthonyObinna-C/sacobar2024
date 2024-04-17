<?php 
$pagename = "Tickets";
$pagetitle = "Tickets";
include 'inc/header.php'?>
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
                                    <a href="ticket.php"><?=$pagename?></a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Banner Section end -->

        <!-- Ticket Section Start -->
        <section id="ticket">
            <div class="container">
                <header class="section-header">
                    <h3>Tickets</h3>
                </header>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-ticket">
                            <h2>$80</h2>
                            <h4>Silver</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                            <a href="#">Buy Ticket</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-ticket">
                            <h2>$140</h2>
                            <h4>Gold</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                            <a href="#">Buy Ticket</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-ticket">
                            <h2>$200</h2>
                            <h4>Platinum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium.</p>
                            <a href="#">Buy Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ticket Section End -->
        
        <!-- Cart Section Start -->
        <section id="cart">
            <div class="container">
                <header class="section-header">
                    <h3>Cart</h3>
                </header>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive-sm">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Tickets</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Checkout</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Platinum</th>
                                        <td>$200</td>
                                        <td><div class="quantity"><input type="text" value="1"></div></td>
                                        <td>$200</td>
                                        <td><a href="">Checkout</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gold</th>
                                        <td>$140</td>
                                        <td><div class="quantity"><input type="text" value="2"></div></td>
                                        <td>$280</td>
                                        <td><a href="">Checkout</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Silver</th>
                                        <td>$80</td>
                                        <td><div class="quantity"><input type="text" value="3"></div></td>
                                        <td>$240</td>
                                        <td><a href="">Checkout</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart Section End -->
        
        <!-- Checkout Section Start -->
        <section id="checkout">
            <div class="container">
                <header class="section-header">
                    <h3>Checkout</h3>
                </header>
                <div class="row form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" />
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="State" />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Zip" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cards">
                            <p>We Accept:</p>
                            <img src="img/credit-cards.png" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name on Card" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Credit card number" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Exp Month" />
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Exp Year" />
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="CVV" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Checkout Section End -->

        <!-- Footer Start -->
        <?php include 'inc/footer.php'; ?>        
