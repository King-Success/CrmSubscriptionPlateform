<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div id="all">
    <!-- Top bar-->
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 d-md-block d-none">
                    <p>Contact us on +420 777 555 333 or hello@universal.com.</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-md-end justify-content-between">
                        <ul class="list-inline contact-info d-block d-md-none">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                        <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a><a href="customer-register.html" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a></div>
                        <ul class="social-custom list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar end-->
    <!-- Login Modal-->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="get">
                        <div class="form-group">
                            <input id="email_modal" type="text" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password_modal" type="password" placeholder="password" class="form-control">
                        </div>
                        <p class="text-center">
                            <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>
                    </form>
                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Login modal end-->
    <!-- Navbar Start-->
    <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
            <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
                <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                <div id="navigation" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown active"><a href="index.html" >Home</a></li>
                        <li class="nav-item dropdown menu-large"><a href="#">Features</a></li>
                        <li class="nav-item dropdown menu-large"><a href="#" >Portfolio</a></li>
                        <li class="nav-item dropdown menu-large"><a href="#">All Pages</a></li>
                        <li class="nav-item dropdown"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div id="search" class="collapse clearfix">
                    <form role="search" class="navbar-form">
                        <div class="input-group">
                            <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar End-->
    <section id="packages" class="bar no-mb">
        <div data-animate="fadeInUp" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Packages we offer</h2>
                    </div>
                    <!--
                                  <div class="text-center">
                                      <i class="btn btn-danger btn-lg" style="border-radius: 10px;">Free Trial</i>
                                  </div>
                    -->
                    <!-- Packages Start-->
                    <div class="row packages">
                        <div class="col-md-3">
                            <div class="package">
                                <div class="package-header light-gray">
                                    <h5>Basic</h5>
                                </div>
                                <div class="price">
                                    <div class="price-container d-flex align-items-end justify-content-center">
                                        <h4 class="h1"><span class="currency">$</span>7</h4><span class="period">/ month</span>
                                    </div>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-check"></i>100GB Storage</li>
                                    <li><i class="fa fa-check"></i>Own config file</li>
                                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                                    <li><i class="fa fa-times"></i>Auto Backup</li>
                                    <li><i class="fa fa-times"></i>Extended Security</li>
                                </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                            </div>
                        </div>
                        <!-- / END FIRST PACKAGE-->
                        <div class="col-md-3">
                            <div class="package">
                                <div class="package-header light-gray">
                                    <h5>Standard</h5>
                                </div>
                                <div class="price">
                                    <div class="price-container d-flex align-items-end justify-content-center">
                                        <h4 class="h1"><span class="currency">$</span>21</h4><span class="period">/ month</span>
                                    </div>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-check"></i>100GB Storage</li>
                                    <li><i class="fa fa-check"></i>Own config file</li>
                                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                                    <li><i class="fa fa-times"></i>Auto Backup</li>
                                    <li><i class="fa fa-times"></i>Extended Security</li>
                                </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="package">
                                <div class="package-header bg-primary color-white">
                                    <div class="content">
                                        <h5>Premium</h5>
                                        <div class="meta-text">Best Value</div>
                                    </div>
                                </div>
                                <div class="price-container d-flex align-items-end justify-content-center">
                                    <h4 class="h1"><span class="currency">$</span>53</h4><span class="period">/ month</span>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-check"></i>100GB Storage</li>
                                    <li><i class="fa fa-check"></i>Own config file</li>
                                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                                    <li><i class="fa fa-times"></i>Auto Backup</li>
                                    <li><i class="fa fa-times"></i>Extended Security</li>
                                </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="package">
                                <div class="package-header light-gray">
                                    <h5>Ultimate</h5>
                                </div>
                                <div class="price-container d-flex align-items-end justify-content-center">
                                    <h4 class="h1"><span class="currency">$</span>99</h4><span class="period">/ month</span>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-check"></i>100GB Storage</li>
                                    <li><i class="fa fa-check"></i>Own config file</li>
                                    <li><i class="fa fa-times"></i>Sharing Tools</li>
                                    <li><i class="fa fa-times"></i>Auto Backup</li>
                                    <li><i class="fa fa-times"></i>Extended Security</li>
                                </ul><a href="#" class="btn btn-template-outlined">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GET IT-->

    <!-- Packages End-->
    <!-- FOOTER -->
    <footer class="main-footer">
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-center-md">
                        <p>&copy; 2018. Your company / name goes here</p>
                    </div>
                    <div class="col-lg-8 text-right text-center-md">
                        <p>Template design by <a href="https://bootstrapious.com/free-templates">Bootstrapious Templates </a></p>
                        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>