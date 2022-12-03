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
    <title>Users List - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/datatables.min.css">
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
    <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/page-users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                                    <ul class="search-list"></ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                                <div class="search-input-close"><i class="bx bx-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="./app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="./app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center py-0">
                                            <div class="media-left pr-0"><img class="mr-1" src="./app-assets/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Updates Available</span></h6><small class="notification-text">Sketch 50.2 is currently newly added</small>
                                            </div>
                                            <div class="media-right pl-0">
                                                <div class="row border-left text-center">
                                                    <div class="col-12 px-50 py-75 border-bottom">
                                                        <h6 class="media-heading text-bold-500 mb-0">Update</h6>
                                                    </div>
                                                    <div class="col-12 px-50 py-75">
                                                        <h6 class="media-heading mb-0">Close</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New customer</span> is registered</h6><small class="notification-text">1 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cursor-pointer">
                                        <div class="media d-flex align-items-center justify-content-between">
                                            <div class="media-left pr-0">
                                                <div class="media-body">
                                                    <h6 class="media-heading">New Offers</h6>
                                                </div>
                                            </div>
                                            <div class="media-right">
                                                <div class="custom-control custom-switch">
                                                    <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                                                    <label class="custom-control-label" for="notificationSwtich"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Application</span> has been approved</h6><small class="notification-text">6 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="./app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New file</span> has been uploaded</h6><small class="notification-text">4 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                                                    <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Finance report</span> has been generated</h6><small class="notification-text">25 hrs ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center border-0">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="./app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">John Doe</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="./app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="{{route('logout')}}"><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


   <!-- BEGIN: Main Menu-->
   <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/html/ltr/vertical-menu-template/index.html">
                    <div class="brand-logo"><img class="logo" src="/app-assets/images/logo/logo.png" /></div>
                    <h2 class="brand-text mb-0">Frest</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class=" nav-item"><a href="/html/ltr/vertical-menu-template/index.html"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span></a>
                <ul class="menu-content">
                    <li><a href="dashboard-ecommerce.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                    <li class="active"><a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>User Management</span>
            </li>
           
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="User">User</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('users.index')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="List">List</span></a>
                    </li>
                    <li><a href="page-users-view.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="View">View</span></a>
                    </li>
                    <li><a href="page-users-edit.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="unlink"></i><span class="menu-title" data-i18n="Starter kit">Starter kit</span></a>
                <ul class="menu-content">
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-1-column.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="1 column">1 column</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-2-columns.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="2 columns">2 columns</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-fixed-navbar.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Fixed navbar">Fixed navbar</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-floating-navbar.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Floating navbar">Floating navbar</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-fixed.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Fixed layout">Fixed layout</span></a>
                    </li>
                    <li><a href="/starter-kit/ltr/vertical-menu-template/sk-layout-static.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Static layout">Static layout</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="unlock"></i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                <ul class="menu-content">
                    <li><a href="auth-login.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Login">Login</span></a>
                    </li>
                    <li><a href="auth-register.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Register">Register</span></a>
                    </li>
                    <li><a href="auth-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Forgot Password">Forgot Password</span></a>
                    </li>
                    <li><a href="auth-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Reset Password">Reset Password</span></a>
                    </li>
                    <li><a href="auth-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Lock Screen">Lock Screen</span></a>
                    </li>
                </ul>
            </li>
           
          
            <li class="disabled nav-item"><a href="#"><i class="menu-livicon" data-icon="morph-preview"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
            </li>
            <li class=" navigation-header"><span>Support</span>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation" target="_blank"><i class="menu-livicon" data-icon="morph-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.ticksy.com/" target="_blank"><i class="menu-livicon" data-icon="help"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
            </li>
        </ul>
    </div>
   </div>
   <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <!-- Website Analytics Starts-->
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Website Analytics</h4>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pb-1">
                                        <div class="d-flex justify-content-around align-items-center flex-wrap">
                                            <div class="user-analytics">
                                                <i class="bx bx-user mr-25 align-middle"></i>
                                                <span class="align-middle text-muted">Users</span>
                                                <div class="d-flex">
                                                    <div id="radial-success-chart"></div>
                                                    <h3 class="mt-1 ml-50">61K</h3>
                                                </div>
                                            </div>
                                            <div class="sessions-analytics">
                                                <i class="bx bx-trending-up align-middle mr-25"></i>
                                                <span class="align-middle text-muted">Sessions</span>
                                                <div class="d-flex">
                                                    <div id="radial-warning-chart"></div>
                                                    <h3 class="mt-1 ml-50">92K</h3>
                                                </div>
                                            </div>
                                            <div class="bounce-rate-analytics">
                                                <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                                <span class="align-middle text-muted">Bounce Rate</span>
                                                <div class="d-flex">
                                                    <div id="radial-danger-chart"></div>
                                                    <h3 class="mt-1 ml-50">72.6%</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="analytics-bar-chart"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 dashboard-referral-impression">
                            <div class="row">
                                <!-- Referral Chart Starts-->
                                <div class="col-xl-12 col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body text-center pb-0">
                                                <h2>$32,690</h2>
                                                <span class="text-muted">Referral</span> 40%
                                                <div id="success-line-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Impression Radial Chart Starts-->
                                <div class="col-xl-12 col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body donut-chart-wrapper">
                                                <div id="donut-chart" class="d-flex justify-content-center"></div>
                                                <ul class="list-inline d-flex justify-content-around mb-0">
                                                    <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>Search</li>
                                                    <li> <span class="bullet bullet-xs bullet-info mr-50"></span>Email</li>
                                                    <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>Social</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12 col-sm-12">
                            <div class="row">
                                <!-- Conversion Chart Starts-->
                                <div class="col-xl-12 col-md-6 col-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
                                            <div class="conversion-title">
                                                <h4 class="card-title">Conversion</h4>
                                                <p>60%
                                                    <i class="bx bx-trending-up text-success font-size-small align-middle mr-25"></i>
                                                </p>
                                            </div>
                                            <div class="conversion-rate">
                                                <h2>89k</h2>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body text-center">
                                                <div id="bar-negative-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-user text-primary font-medium-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="total-amount">
                                                            <h5 class="mb-0">$38,566</h5>
                                                            <small class="text-muted">Conversion</small>
                                                        </div>
                                                    </div>
                                                    <div id="primary-line-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-rgba-warning m-0 p-25 mr-75 mr-xl-2">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-dollar text-warning font-medium-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="total-amount">
                                                            <h5 class="mb-0">$53,659</h5>
                                                            <small class="text-muted">Income</small>
                                                        </div>
                                                    </div>
                                                    <div id="warning-line-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Activity Card Starts-->
                        <div class="col-xl-3 col-md-6 col-12 activity-card">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Activity</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-1">
                                        <div class="d-flex activity-content">
                                            <div class="avatar bg-rgba-primary m-0 mr-75">
                                                <div class="avatar-content">
                                                    <i class="bx bx-bar-chart-alt-2 text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="activity-progress flex-grow-1">
                                                <small class="text-muted d-inline-block mb-50">Total Sales</small>
                                                <small class="float-right">$8,125</small>
                                                <div class="progress progress-bar-primary progress-sm">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" style="width:50%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex activity-content">
                                            <div class="avatar bg-rgba-success m-0 mr-75">
                                                <div class="avatar-content">
                                                    <i class="bx bx-dollar text-success"></i>
                                                </div>
                                            </div>
                                            <div class="activity-progress flex-grow-1">
                                                <small class="text-muted d-inline-block mb-50">Income Amount</small>
                                                <small class="float-right">$18,963</small>
                                                <div class="progress progress-bar-success progress-sm">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" style="width:80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex activity-content">
                                            <div class="avatar bg-rgba-warning m-0 mr-75">
                                                <div class="avatar-content">
                                                    <i class="bx bx-stats text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="activity-progress flex-grow-1">
                                                <small class="text-muted d-inline-block mb-50">Total Budget</small>
                                                <small class="float-right">$14,150</small>
                                                <div class="progress progress-bar-warning progress-sm">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" style="width:60%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-75">
                                            <div class="avatar bg-rgba-danger m-0 mr-75">
                                                <div class="avatar-content">
                                                    <i class="bx bx-check text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="activity-progress flex-grow-1">
                                                <small class="text-muted d-inline-block mb-50">Completed Tasks</small>
                                                <small class="float-right">106</small>
                                                <div class="progress progress-bar-danger progress-sm">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" style="width:30%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profit Report Card Starts-->
                        <div class="col-xl-3 col-md-6 col-12 profit-report-card">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="card-title">Profit Report</h4>
                                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pb-0 d-flex justify-content-around">
                                                <div class="d-inline-flex mr-xl-2">
                                                    <div id="profit-primary-chart"></div>
                                                    <div class="profit-content ml-50 mt-50">
                                                        <h5 class="mb-0">$12k</h5>
                                                        <small class="text-muted">2019</small>
                                                    </div>
                                                </div>
                                                <div class="d-inline-flex">
                                                    <div id="profit-info-chart"></div>
                                                    <div class="profit-content ml-50 mt-50">
                                                        <h5 class="mb-0">$64k</h5>
                                                        <small class="text-muted">2019</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Registrations</h4>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="d-flex align-items-end justify-content-around">
                                                    <div class="registration-content mr-xl-2">
                                                        <h4 class="mb-0">56.3k</h4>
                                                        <i class="bx bx-trending-up success align-middle"></i>
                                                        <span class="text-success">12.8%</span>
                                                    </div>
                                                    <div id="registration-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sales Chart Starts-->
                        <div class="col-xl-3 col-md-6 col-12 sales-card">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div class="card-title-content">
                                        <h4 class="card-title">Sales</h4>
                                        <small class="text-muted">Calculated in last 7 days</small>
                                    </div>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="sales-chart" class="mb-2"></div>
                                        <div class="d-flex justify-content-between my-1">
                                            <div class="sales-info d-flex align-items-center">
                                                <i class='bx bx-up-arrow-circle text-primary font-medium-5 mr-50'></i>
                                                <div class="sales-info-content">
                                                    <h6 class="mb-0">Best Selling</h6>
                                                    <small class="text-muted">Sunday</small>
                                                </div>
                                            </div>
                                            <h6 class="mb-0">28.6k</h6>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <div class="sales-info d-flex align-items-center">
                                                <i class='bx bx-down-arrow-circle icon-light font-medium-5 mr-50'></i>
                                                <div class="sales-info-content">
                                                    <h6 class="mb-0">Lowest Selling</h6>
                                                    <small class="text-muted">Thursday</small>
                                                </div>
                                            </div>
                                            <h6 class="mb-0">986k</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Growth Chart Starts-->
                        <div class="col-xl-3 col-md-6 col-12 growth-card">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            2019
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                                            <a class="dropdown-item" href="#">2019</a>
                                            <a class="dropdown-item" href="#">2018</a>
                                            <a class="dropdown-item" href="#">2017</a>
                                        </div>
                                    </div>
                                    <div id="growth-Chart"></div>
                                    <h6 class="mb-0"> 62% Company Growth in 2019</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Task Card Starts -->
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card widget-todo">
                                        <div class="card-header border-bottom d-flex justify-content-between align-items-center flex-wrap">
                                            <h4 class="card-title d-flex mb-25 mb-sm-0">
                                                <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Tasks
                                            </h4>
                                            <ul class="list-inline d-flex mb-25 mb-sm-0">
                                                <li class="d-flex align-items-center">
                                                    <i class='bx bx-check-circle font-medium-3 mr-50'></i>
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle mr-1 cursor-pointer" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                                        </div>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Option 1</a>
                                                            <a class="dropdown-item" href="#">Option 2</a>
                                                            <a class="dropdown-item" href="#">Option 3</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <i class='bx bx-sort mr-50 font-medium-3'></i>
                                                    <div class="dropdown">
                                                        <div class="dropdown-toggle cursor-pointer" role="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task</div>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                            <a class="dropdown-item" href="#">Option 1</a>
                                                            <a class="dropdown-item" href="#">Option 2</a>
                                                            <a class="dropdown-item" href="#">Option 3</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body px-0 py-1">
                                            <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                                                <li class="widget-todo-item">
                                                    <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                        <div class="widget-todo-title-area d-flex align-items-center">
                                                            <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                                            <div class="checkbox checkbox-shadow">
                                                                <input type="checkbox" class="checkbox__input" id="checkbox1">
                                                                <label for="checkbox1"></label>
                                                            </div>
                                                            <span class="widget-todo-title ml-50">Add SCSS and JS files if required</span>
                                                        </div>
                                                        <div class="widget-todo-item-action d-flex align-items-center">
                                                            <div class="badge badge-pill badge-light-success mr-1">frontend</div>
                                                            <div class="avatar bg-rgba-primary m-0 mr-50">
                                                                <div class="avatar-content">
                                                                    <span class="font-size-base text-primary">RA</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer icon-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="widget-todo-item">
                                                    <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                        <div class="widget-todo-title-area d-flex align-items-center">
                                                            <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                                            <div class="checkbox checkbox-shadow">
                                                                <input type="checkbox" class="checkbox__input" id="checkbox2">
                                                                <label for="checkbox2"></label>
                                                            </div>
                                                            <span class="widget-todo-title ml-50">Check your changes, before commiting</span>
                                                        </div>
                                                        <div class="widget-todo-item-action d-flex align-items-center">
                                                            <div class="badge badge-pill badge-light-danger mr-1">backend</div>
                                                            <div class="avatar m-0 mr-50">
                                                                <img src="/app-assets/images/profile/user-uploads/social-2.jpg" alt="img placeholder" height="32" width="32">
                                                            </div>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer icon-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="widget-todo-item completed">
                                                    <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                        <div class="widget-todo-title-area d-flex align-items-center">
                                                            <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                                            <div class="checkbox checkbox-shadow">
                                                                <input type="checkbox" class="checkbox__input" id="checkbox3" checked>
                                                                <label for="checkbox3"></label>
                                                            </div>
                                                            <span class="widget-todo-title ml-50">Dribble, Behance, UpLabs & Pinterest Post</span>
                                                        </div>
                                                        <div class="widget-todo-item-action d-flex align-items-center">
                                                            <div class="badge badge-pill badge-light-primary mr-1">UI/UX</div>
                                                            <div class="avatar bg-rgba-primary m-0 mr-50">
                                                                <div class="avatar-content">
                                                                    <span class="font-size-base text-primary">JP</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer icon-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="widget-todo-item">
                                                    <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                        <div class="widget-todo-title-area d-flex align-items-center">
                                                            <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                                            <div class="checkbox checkbox-shadow">
                                                                <input type="checkbox" class="checkbox__input" id="checkbox4">
                                                                <label for="checkbox4"></label>
                                                            </div>
                                                            <span class="widget-todo-title ml-50">Fresh Design Web & Responsive Miracle</span>
                                                        </div>
                                                        <div class="widget-todo-item-action d-flex align-items-center">
                                                            <div class="badge badge-pill badge-light-info mr-1">Design</div>
                                                            <div class="avatar m-0 mr-50">
                                                                <img src="/app-assets/images/profile/user-uploads/user-05.jpg" alt="img placeholder" height="32" width="32">
                                                            </div>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer icon-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="widget-todo-item">
                                                    <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                        <div class="widget-todo-title-area d-flex align-items-center">
                                                            <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                                            <div class="checkbox checkbox-shadow">
                                                                <input type="checkbox" class="checkbox__input" id="checkbox5">
                                                                <label for="checkbox5"></label>
                                                            </div>
                                                            <span class="widget-todo-title ml-50">Add Calendar page, source, credit page in
                                                                documentation</span>
                                                        </div>
                                                        <div class="widget-todo-item-action d-flex align-items-center">
                                                            <div class="badge badge-pill badge-light-warning mr-1">Javascript</div>
                                                            <div class="avatar bg-rgba-primary m-0 mr-50">
                                                                <div class="avatar-content">
                                                                    <span class="font-size-base text-primary">AK</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer icon-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="widget-todo-item">
                                                    <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                        <div class="widget-todo-title-area d-flex align-items-center">
                                                            <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                                            <div class="checkbox checkbox-shadow">
                                                                <input type="checkbox" class="checkbox__input" id="checkbox6">
                                                                <label for="checkbox6"></label>
                                                            </div>
                                                            <span class="widget-todo-title ml-50">Add Angular Starter-kit</span>
                                                        </div>
                                                        <div class="widget-todo-item-action d-flex align-items-center">
                                                            <div class="badge badge-pill badge-light-primary mr-1">UI/UX</div>
                                                            <div class="avatar m-0 mr-50">
                                                                <img src="/app-assets/images/profile/user-uploads/user-05.jpg" alt="img placeholder" height="32" width="32">
                                                            </div>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer icon-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Daily Financials Card Starts -->
                        <div class="col-lg-5">
                            <div class="card ">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Order Timeline
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-primary active">
                                                <div class="timeline-time">September, 16</div>
                                                <h6 class="timeline-title">1983, orders, $4220</h6>
                                                <p class="timeline-text">2 hours ago</p>
                                                <div class="timeline-content">
                                                    <img src="/app-assets/images/icon/pdf.png" alt="document" height="23" width="19" class="mr-50">New Order.pdf
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-primary active">
                                                <div class="timeline-time">September, 17</div>
                                                <h6 class="timeline-title">12 Invoices have been paid</h6>
                                                <p class="timeline-text">25 minutes ago</p>
                                                <div class="timeline-content">
                                                    <img src="/app-assets/images/icon/pdf.png" alt="document" height="23" width="19" class="mr-50">Invoices.pdf
                                                </div>
                                            </li>
                                            <li class="timeline-items timeline-icon-primary active pb-0">
                                                <div class="timeline-time">September, 18</div>
                                                <h6 class="timeline-title">Order #37745 from September</h6>
                                                <p class="timeline-text">4 minutes ago</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="/app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="/app-assets/vendors/js/extensions/dragula.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <script src="/app-assets/js/scripts/components.js"></script>
    <script src="/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>