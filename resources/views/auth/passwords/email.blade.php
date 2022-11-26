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
    <title>Forgot Password - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
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
                <!-- forgot password start -->
                <section class="row flexbox-container">
                    <div class="col-xl-7 col-md-9 col-10  px-0">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- left section-forgot password -->
                                <div class="col-md-6 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2">Forgot Password?</h4>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-between align-items-center mb-2">
                                            <div class="text-left">
                                                <div class="ml-3 ml-md-2 mr-1"><a href="{{route('login')}}" class="card-link btn btn-outline-primary text-nowrap">Sign
                                                        in</a></div>
                                            </div>
                                            <div class="mr-3"><a href="{{route('register')}}" class="card-link btn btn-outline-primary text-nowrap">Sign
                                                    up</a></div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="text-muted text-center mb-2"><small>Enter the email or phone number you
                                                        used
                                                        when you joined
                                                        and we will send you temporary password</small></div>
                                                <form class="mb-2" action="POST" action="{{route('password.email')}}">
                                                    <div class="form-group mb-2">
                                                        <label class="text-bold-600" for="exampleInputEmailPhone1">Email or
                                                            Phone</label>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email or Phone" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        <!-- <input type="text" class="form-control" id="exampleInputEmailPhone1" placeholder="Email or Phone"> -->
                                                    </div>
                                                    <button type="submit" class="btn btn-primary glow position-relative w-100">SEND
                                                        PASSWORD RESET LINK<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                </form>
                                                <div class="text-center mb-2"><a href="{{route('login')}}"><small class="text-muted">I
                                                            remembered my
                                                            password</small></a></div>
                                                <div class="divider mb-2">
                                                    <div class="divider-text">Or Sign in as</div>
                                                </div>
                                                <div class="d-flex flex-md-row flex-column">
                                                    <a href="#" class="btn btn-social btn-google btn-block font-small-3 mb-1 mb-sm-1 mb-md-0 mr-md-1 text-center">
                                                        <i class="bx bxl-google font-medium-3"></i><span class="pl-1">Google</span></a>
                                                    <a href="#" class="btn btn-social btn-facebook btn-block font-small-3 text-center mt-0">
                                                        <i class="bx bxl-facebook-square font-medium-3"></i><span class="pl-1">Facebook</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- right section image -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center">
                                    <img class="img-fluid" src="/app-assets/images/pages/forgot-password.png" alt="branding logo" width="300">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- forgot password ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <script src="/app-assets/js/scripts/components.js"></script>
    <script src="/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>