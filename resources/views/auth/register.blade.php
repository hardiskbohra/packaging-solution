<!DOCTYPE html>
    <html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Register Page - Frest - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/components.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/dark-layout.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/semi-dark-layout.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/authentication.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- register section starts -->
                    <section class="row flexbox-container">
                        <div class="col-xl-8 col-10">
                            <div class="card bg-authentication mb-0">
                                <div class="row m-0">
                                    <!-- register section left -->
                                    <div class="col-md-6 col-12 px-0">
                                        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                            <div class="card-header pb-1">
                                                <div class="card-title">
                                                    <h4 class="text-center mb-2">Sign Up</h4>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p> <small> Please enter your details to sign up and be part of our great community</small>
                                                </p>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <form  method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                        <div class="form-group mb-50">
                                                            <label class="text-bold-600" for="exampleInputUsername1">full name</label>
                                                            <!-- <input type="text" class="form-control" id="exampleInputUsername1" placeholder="full name"></div> -->
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="form-group mb-50">
                                                            <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                                                            <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address"></div> -->
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="text-bold-600" for="exampleInputPassword1">Confirm password</label>
                                                            <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary glow position-relative w-100">SIGN UP<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center"><small class="mr-25">Already have an account?</small><a href="{{route('login')}}"><small>Sign in</small> </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image section right -->
                                    <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                        <img class="img-fluid" src="./app-assets/images/pages/register.png" alt="branding logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- register section endss -->
                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Vendor JS-->
        <script src="./app-assets/vendors/js/vendors.min.js"></script>
        <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
        <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
        <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="./app-assets/js/scripts/configs/vertical-menu-light.js"></script>
        <script src="./app-assets/js/core/app-menu.js"></script>
        <script src="./app-assets/js/core/app.js"></script>
        <script src="./app-assets/js/scripts/components.js"></script>
        <script src="./app-assets/js/scripts/footer.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->

    </html>