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
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
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
                    <li><a href="{{route('user.list')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="List">List</span></a>
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
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <div class="users-list-filter px-1">
                        <form>
                            <div class="row border rounded py-2 mb-2">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-verified">Verified</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-verified">
                                            <option value="">Any</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-role">Role</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-role">
                                            <option value="">Any</option>
                                            <option value="User">User</option>
                                            <option value="Staff">Staff</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-status">Status</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-status">
                                            <option value="">Any</option>
                                            <option value="Active">Active</option>
                                            <option value="Close">Close</option>
                                            <option value="Banned">Banned</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                    <button type="reset" class="btn btn-primary btn-block glow users-list-clear mb-0">Clear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- datatable start -->
                                    <div class="table-responsive">
                                        <table id="users-list-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>username</th>
                                                    <th>name</th>
                                                    <th>last activity</th>
                                                    <th>verified</th>
                                                    <th>role</th>
                                                    <th>status</th>
                                                    <th>edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{dd($data)}}
                                                <tr>
                                                    <td>300</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">dean3004</a>
                                                    </td>
                                                    <td>Dean Stanley</td>
                                                    <td>30/04/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>301</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">zena0604</a>
                                                    </td>
                                                    <td>Zena Buckley</td>
                                                    <td>06/04/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>302</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">delilah0301</a>
                                                    </td>
                                                    <td>Delilah Moon</td>
                                                    <td>03/01/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>303</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">hillary1807</a>
                                                    </td>
                                                    <td>Hillary Rasmussen</td>
                                                    <td>18/07/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>304</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">herman2003</a>
                                                    </td>
                                                    <td>Herman Tate</td>
                                                    <td>20/03/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>305</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">kuame3008</a>
                                                    </td>
                                                    <td>Kuame Ford</td>
                                                    <td>30/08/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>306</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">fulton2009</a>
                                                    </td>
                                                    <td>Fulton Stafford</td>
                                                    <td>20/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>307</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">piper0508</a>
                                                    </td>
                                                    <td>Piper Jordan</td>
                                                    <td>05/08/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>308</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">neil1002</a>
                                                    </td>
                                                    <td>Neil Sosa</td>
                                                    <td>10/02/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>309</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">caldwell2402</a>
                                                    </td>
                                                    <td>Caldwell Chapman</td>
                                                    <td>24/02/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>310</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">wesley0508</a>
                                                    </td>
                                                    <td>Wesley Oneil</td>
                                                    <td>05/08/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>311</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">tallulah2009</a>
                                                    </td>
                                                    <td>Tallulah Fleming</td>
                                                    <td>20/09/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>312</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">iris2505</a>
                                                    </td>
                                                    <td>Iris Maddox</td>
                                                    <td>25/05/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>313</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">caleb1504</a>
                                                    </td>
                                                    <td>Caleb Bradley</td>
                                                    <td>15/04/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>314</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">illiana0410</a>
                                                    </td>
                                                    <td>Illiana Grimes</td>
                                                    <td>04/10/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>315</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">chester0902</a>
                                                    </td>
                                                    <td>Chester Estes</td>
                                                    <td>09/02/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>316</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">gregory2309</a>
                                                    </td>
                                                    <td>Gregory Hayden</td>
                                                    <td>23/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>317</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">jescie1802</a>
                                                    </td>
                                                    <td>Jescie Parker</td>
                                                    <td>18/02/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>318</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">sydney3101</a>
                                                    </td>
                                                    <td>Sydney Cabrera</td>
                                                    <td>31/01/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>319</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">gray2702</a>
                                                    </td>
                                                    <td>Gray Valenzuela</td>
                                                    <td>27/02/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-warning">Close</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>320</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">hoyt0305</a>
                                                    </td>
                                                    <td>Hoyt Ellison</td>
                                                    <td>03/05/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>321</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">damon0209</a>
                                                    </td>
                                                    <td>Damon Berry</td>
                                                    <td>02/09/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>322</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">kelsie0511</a>
                                                    </td>
                                                    <td>Kelsie Dunlap</td>
                                                    <td>05/11/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-warning">Close</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>323</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">abel1606</a>
                                                    </td>
                                                    <td>Abel Dunn</td>
                                                    <td>16/06/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>324</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">nina2208</a>
                                                    </td>
                                                    <td>Nina Byers</td>
                                                    <td>22/08/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-warning">Close</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>325</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">erasmus1809</a>
                                                    </td>
                                                    <td>Erasmus Walter</td>
                                                    <td>18/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>326</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">yael2612</a>
                                                    </td>
                                                    <td>Yael Marshall</td>
                                                    <td>26/12/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-warning">Close</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>327</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">thomas2012</a>
                                                    </td>
                                                    <td>Thomas Dudley</td>
                                                    <td>20/12/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>328</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">althea2810</a>
                                                    </td>
                                                    <td>Althea Turner</td>
                                                    <td>28/10/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>329</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">jena2206</a>
                                                    </td>
                                                    <td>Jena Schroeder</td>
                                                    <td>22/06/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>330</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">hyacinth2201</a>
                                                    </td>
                                                    <td>Hyacinth Maxwell</td>
                                                    <td>22/01/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>331</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">madeson1907</a>
                                                    </td>
                                                    <td>Madeson Byers</td>
                                                    <td>19/07/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>332</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">elmo0707</a>
                                                    </td>
                                                    <td>Elmo Tran</td>
                                                    <td>07/07/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>333</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">shelley0309</a>
                                                    </td>
                                                    <td>Shelley Eaton</td>
                                                    <td>03/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>334</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">graham0301</a>
                                                    </td>
                                                    <td>Graham Flores</td>
                                                    <td>03/01/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-light-danger">Banned</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>335</td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-view.html">erasmus2110</a>
                                                    </td>
                                                    <td>Erasmus Mclaughlin</td>
                                                    <td>21/10/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-light-success">Active</span></td>
                                                    <td><a href="./html/ltr/vertical-menu-template/page-users-edit.html"><i class="bx bx-edit-alt"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- datatable ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
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
                                <img src="./app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
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
    <script src="./app-assets/vendors/js/vendors.min.js"></script>
    <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="./app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="./app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="./app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="./app-assets/js/core/app-menu.js"></script>
    <script src="./app-assets/js/core/app.js"></script>
    <script src="./app-assets/js/scripts/components.js"></script>
    <script src="./app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="./app-assets/js/scripts/pages/page-users.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>