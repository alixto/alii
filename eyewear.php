<!DOCTYPE html>
<html lang="en">
<?php include('config.php') ?>
<?php include('header.php') ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-based E-Clinic Management System</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/products.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <! -- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto: 300,400,500,700&display=swap">
        <! -- Bootstrap core CSS -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
            <! -- Material Design Bootstrap -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark" style="background: #778899">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="logo" width="85px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="eyewear.php">Eyewear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="book.php">
                        <i class='fas fa-calendar-alt' style='font-size:15px'></i>
                        Book an Appointment
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">

                <li class="nav-item dropdown">
                    <?php if (isset($_SESSION['login'])) { ?>
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user mr-2"></i>Account
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="/sms/admin/dashboard.php">Dashboard</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    <?php } else { ?>
                        <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>Login</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->

    <!-- header -->
    <header class="flex header-sm">
        <div class="container">
            <div class="header-title">
                <h2>Our Products</h2>
                <p>Take a look at the variety of our products.</p>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- main starts-->
    <section id="vsm" class="products p-4">
        <h3>Available Walk-in Products & Prices</h3>
        <div class="all-products">
            <div class="product">
                <img src="img/opti_puremoist.png">
                <div class="product-info">
                    <h4 class="product-title">Opti-free Puremoist <small>(300mL, 90mL)</small>
                    </h4>
                    <p class="product-price">₱200.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/opti_replenish.png">
                <div class="product-info">
                    <h4 class="product-title">Opti-free Replenish <small>(300mL)</small>
                    </h4>
                    <p class="product-price">₱200.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/macu_lmz.jpg">
                <div class="product-info">
                    <h4 class="product-title">Macu LMZ
                    </h4>
                    <p class="product-price">₱200.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/systane_complete.png">
                <div class="product-info">
                    <h4 class="product-title">Systane Complete <small>(10mL)</small>
                    </h4>
                    <p class="product-price">₱360.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/systane_hydration.png">
                <div class="product-info">
                    <h4 class="product-title">Systane Hydration <small>(10mL)</small>
                    </h4>
                    <p class="product-price">₱360.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/systane_ultra.png">
                <div class="product-info">
                    <h4 class="product-title">Systane Ultra <small>(10mL)</small>
                    </h4>
                    <p class="product-price">₱360.00</p>
                    <a class="product-btn" href="#">Viwe</a>

                </div>
            </div>
            <div class="product">
                <img src="img/aqua_gel.png">
                <div class="product-info">
                    <h4 class="product-title">I-DEW DS Aquagel <small>(10mL)</small>
                    </h4>
                    <p class="product-price">₱360.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/systane_ecopack.png">
                <div class="product-info">
                    <h4 class="product-title">Systane Ultra (eco pack) 
                    </h4>
                    <p class="product-price">₱500.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
        </div>
    </section>

    <section id="vsm" class="products p-4">        
        <div class="all-products">
            <div class="product">
                <img src="img/loc_tears.png">
                <div class="product-info">
                    <h4 class="product-title">LOC Tears <small>(10mL)</small>
                    </h4>
                    <p class="product-price">₱360.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/idew_eyedrops.png">
                <div class="product-info">
                    <h4 class="product-title">LOC Tears <small>(5mL)</small>
                    </h4>
                    <p class="product-price">₱360.00</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/lens.png">
                <div class="product-info">
                    <h4 class="product-title">Customized frames
                    </h4>
                    <p class="product-price">  ₱900.00 - up</p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/contact_lens.png">
                <div class="product-info">
                    <h4 class="product-title">Contact Lenses
                    </h4>
                    <p class="product-price">₱950.00<small>/pair</small></p>
                    <a class="product-btn" href="#">View</a>

                </div>
            </div>
            <div class="product">
                <img src="img/astigmatism.png">
                <div class="product-info">
                    <h4 class="product-title">Contact Lenses for Astigmatism
                    </h4>
                    <p class="product-price">₱1,980.00</p>
                    <a class="product-btn" href="#">Buy Now</a>

                </div>
            </div>
            <div class="product">
                <img src="img/dailies.png">
                <div class="product-info">
                    <h4 class="product-title">Dailies Contact lens
                    </h4>
                    <p class="product-price">₱1,980.00</p>
                    <a class="product-btn" href="#">Buy Now</a>

                </div>
            </div>
            <div class="product">
                <img src="https://www.eo-executiveoptical.com/product-images/57/726060000006_EYEGLASSES-CORD-274-1-LEATHER-WITH-ACETATE-GLASSES-(266)_WEBSITE_SIDE.jpg">
                <div class="product-info">
                    <h4 class="product-title">Eyeglass Cord
                    </h4>
                    <p class="product-price">₱299.00</p>
                    <a class="product-btn" href="#">Buy Now</a>

                </div>
            </div>
            <div class="product">
                <img src="https://www.eo-executiveoptical.com/product-images/339/CL-CASES-ALL_WEBSITE.jpg">
                <div class="product-info">
                    <h4 class="product-title">Simple Lens Case
                    </h4>
                    <p class="product-price">₱299.00</p>
                    <a class="product-btn" href="#">Buy Now</a>

                </div>
            </div>
        </div>
    </section>
    <!-- main ends-->

    <!-- footer section start -->
    <footer id="footer">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-4">
                    <a href="index.php"><img src="img/logo.png" alt="" class="img-fluid logo-footer"></a>
                    <div class="footer-about py-3">
                        <h5>We care for your vision.</h5>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="social-links">
                        <h2>Follow Us</h2>
                        <div class="social-icons">
                            <li><a href=""><i class="fa-brands fab fa-facebook"></i> Facebook</a></li>
                            <li><a href=""><i class="fa-brands fab fa-instagram"></i> Instagram</a></li>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="address">
                        <h2>Address</h2>
                        <div class="address-links">
                            <li class="address1"><i class="fas fa-map-marker-alt"></i> 417 Brgy. Tagapo, Sta. Rosa City,
                                Laguna, Philippines</li>
                            <li><a href=""><i class="fas fa-phone"></i> +639083595952</a></li>
                            <li><a href=""><i class="fas fa-envelope"></i> icare.optical@yahoo.com</a></li>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </footer>
    <!-- footer section end -->
    <!-- footer copy right section start -->
    <section id="copy-right">
        <div class="copy-right-sec"><i class="fas fa-copyright"></i>
            2023. I-Care Optical. All rights reserved.
        </div>

    </section>
    <!-- footer copy right section end -->

</body>

</html>

<?php include('footer.php') ?>