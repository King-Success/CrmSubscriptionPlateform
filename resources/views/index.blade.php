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
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css') }}">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/apple-touch-icon-152x152.png') }}">
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
            <div class="container"><a href="index.html" class="navbar-brand home"><img src="{{asset('img/logo.png')}}" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
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

    <section class="no-mb relative-positioned">
        <!--
        *** JUMBOTRON ***
        _________________________________________________________
        -->
        <div style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;" class="jumbotron relative-positioned color-white text-md-center">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
                <div class="row mb-small">
                    <div class="col-md-12 text-center">
                        <h1 class="text-uppercase">Universal is great</h1>
                        <h2 class="text-uppercase">Last week more than 100 companies signed up to help them in their projects.</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-small"><img src="{{asset('img/template-mac.png')}}" alt="..." class="img-fluid"></div>
                    <div class="col-md-6 text-center-sm">
                        <p class="text-uppercase text-bold">Business. Corporate. Agency.<br>Portfolio. Blog. E-commerce.<br>We have covered everything.</p>
                        <p class="no-letter-spacing">See our current packages comparison<br>to choose the right one for you.</p>
                        <p><a href="#packages" class="scroll-to btn btn-template-outlined-white">See packages</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- *** JUMBOTRON END ***-->
    </section>
    <section class="bar bg-gray no-mb padding-big text-md-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-uppercase">Everything you need</h2>
                    <p class="lead mb-small">40+ prepared HTML templates</p>
                    <p class="mb-small">We have prepared literally <strong>everything you would possibly need building corporate, e-commerce or portfolio website. If you still miss something, let us know and we will try to include it in theme's future updates.</strong></p>
                    <p><a href="#" class="btn btn-template-main">Read more</a></p>
                </div>
                <div class="col-md-6 text-center"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
    <section class="bar no-mb color-white padding-big text-md-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center"><img src="img/template-easy-code.png" alt="" class="img-fluid"></div>
                <div class="col-md-6">
                    <h2 class="text-uppercase">Clean, valid and documented code & support</h2>
                    <p class="lead mb-small">We made our best to help you</p>
                    <p class="mb-small">Everything in this template is properly named and categorized. In case you don't find in the documentation answer to your question, our support is here to help!</p>
                    <p><a href="#" class="btn btn-template-outlined-white">Read more</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="bar bg-gray no-mb padding-big text-center-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-uppercase">Easy to customize</h2>
                    <p class="mb-small">We have made this template with focus on future client customization. You get <strong>40+ prepared HTML templates</strong>, many <strong>reusable components</strong> and <strong>LESS files</strong> for even easier template customization.</p>
                    <p><a href="#" class="btn btn-template-main">Read more</a></p>
                </div>
                <div class="col-md-6 text-center"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
    <section id="packages" class="bar no-mb">
        <div data-animate="fadeInUp" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Packages we offer</h2>
                    </div>
                    <div class="text-center">
                        <i class="btn btn-danger btn-lg" style="border-radius: 10px;">Free Trial</i>
                    </div>
                    <!-- Packages Start-->
                    <div class="row packages">
                        <div class="col-md-3">
                            <div class="package">
                                <div class="package-header light-gray">
                                    <h5>Basic</h5>
                                </div>
                                <div class="price">
                                    <div class="price-container d-flex align-items-end justify-content-center">
                                        <h4 class="h1"><span class="currency">$</span>12</h4><span class="period">/ month</span>
                                    </div>
                                </div>
                                <form action="/subscription/subscribe" method="POST">
                                    {{csrf_field() }}
                                    <input type="hidden" name="plan_id" value="4">
                                    <input type="hidden" name="plan" value="basic">
                                    <input type="hidden" name="amount" value="12">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Per user/month billed annually</li>
                                        <li><i class="fa fa-times"></i>Plus tax, as applicable</li>
                                        <li><i class="fa fa-times"></i>lorem</li>
                                        <li><i class="fa fa-times"></i>lorem</li>
                                    </ul>
                                    <input type="submit" class="btn btn-template-outlined" value="Subscribe">
                                </form>
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
                                        <h4 class="h1"><span class="currency">$</span>25</h4><span class="period">/ month</span>
                                    </div>
                                </div>
                                <form action="/subscription/subscribe" method="POST">
                                    {{csrf_field() }}
                                    <input type="hidden" name="plan_id" value="3">
                                    <input type="hidden" name="plan" value="standard">
                                    <input type="hidden" name="amount" value="25">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Per user/month billed annually</li>
                                        <li><i class="fa fa-times"></i>Plus tax, as applicable</li>
                                        <li><i class="fa fa-times"></i>lorem</li>
                                        <li><i class="fa fa-times"></i>lorem</li>
                                    </ul>
                                    <input type="submit" class="btn btn-template-outlined" value="Subscribe">
                                </form>
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
                                    <h4 class="h1"><span class="currency">$</span>50</h4><span class="period">/ month</span>
                                </div>
                                <form action="/subscription/subscribe" method="POST">
                                    {{csrf_field() }}
                                    <input type="hidden" name="plan_id" value="2">
                                    <input type="hidden" name="plan" value="premium">
                                    <input type="hidden" name="amount" value="50">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Per user/month billed annually</li>
                                        <li><i class="fa fa-times"></i>Plus tax, as applicable</li>
                                        <li><i class="fa fa-times"></i>lorem</li>
                                        <li><i class="fa fa-times"></i>lorem</li>
                                    </ul>
                                    <input type="submit" class="btn btn-template-outlined" value="Subscribe">
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="package">
                                <div class="package-header light-gray">
                                    <h5>Ultimate</h5>
                                </div>
                                <div class="price-container d-flex align-items-end justify-content-center">
                                    <h4 class="h1"><span class="currency">$</span>100</h4><span class="period">/ month</span>
                                </div>
                                <form action="/subscription/subscribe" method="POST">
                                    {{csrf_field() }}
                                    <input type="hidden" name="plan_id" value="1">
                                    <input type="hidden" name="plan" value="ultimate">
                                    <input type="hidden" name="amount" value="100">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i>Per user/month billed annually</li>
                                        <li><i class="fa fa-times"></i>Plus tax, as applicable</li>
                                        <li><i class="fa fa-times"></i>lorem</li>
                                        <li><i class="fa fa-times"></i>lorem</li>
                                    </ul>
                                    <input type="submit" class="btn btn-template-outlined" value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Packages End-->
                </div>
            </div>
        </div>
    </section>
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
<!-- Javascript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
<script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="js/front.js"></script>
</body>
</html>