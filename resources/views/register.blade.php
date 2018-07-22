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
    <style>
        .container h4, label {
            color:white;
        }
        .container {
            padding-top:20px;
        }
    </style>
</head>
<body class="bg-primary">
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
</div>
<!-- Navbar End-->
<div class="container">
    <form action="/subscription/checkout" method="POST">
        {{csrf_field() }}
        <input type="hidden" name="plan_id" value="{{$plan['plan_id']}}">
        <input type="hidden" name="plan" value="{{$plan['plan']}}">
        <input type="hidden" name="amount" value="{{$plan['amount']}}">
        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="payment_method" type="radio" class="custom-control-input" value="credit_card" checked required>
                    <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="payment_method" type="radio" class="custom-control-input" value="debit_card" required>
                    <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="payment_method" type="radio" class="custom-control-input" value="paypal" required>
                    <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" name="card_holder" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" name="card_number" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" name="expiration" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">CVV</label>
                    <input type="text" name="cvv" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" name="firstname" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" name="lastname" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                {{--<div class="mb-3">--}}
                    {{--<label for="username">Username</label>--}}
                    {{--<div class="input-group">--}}
                        {{--<div class="input-group-prepend">--}}
                            {{--<span class="input-group-text">@</span>--}}
                        {{--</div>--}}
                        {{--<input type="text" class="form-control" id="username" placeholder="Username" required>--}}
                        {{--<div class="invalid-feedback" style="width: 100%;">--}}
                            {{--Your username is required.--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="company">Company</label>
                    <input type="text" name="company" class="form-control" id="company" >
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>


                <div class="mb-3">
                    <label for="address">Address 1</label>
                    <input type="text" name="address_1" class="form-control" id="address_1" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" name="address_2" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="country">Country</label>
                        <select name="country" class="custom-select d-block w-100" id="country" required>
                            <option value="">Choose...</option>
                            <option value="US">United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="city">City</label>
                        <select name="city" class="custom-select d-block w-100" id="city" required>
                            <option value="">Choose...</option>
                            <option value="california">California</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="city">Region</label>
                        <select name="region" class="custom-select d-block w-100" id="region" required>
                            <option value="">Choose...</option>
                            <option value="calif">Calif</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid region.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="zip">Postal Code</label>
                        <input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="" required>
                        <div class="invalid-feedback">
                            postal code required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-light btn-lg" type="submit" style="border-radius:10px">Checkout</button>
        </div>
    </div>
    </form>
</div>


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

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');

                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>



