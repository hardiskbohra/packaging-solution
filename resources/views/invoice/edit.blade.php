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
    <title>Invoice Edit - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/pickers/pickadate/pickadate.css">
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
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/app-invoice.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
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
                                                <div class="avatar mr-1 m-0"><img src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="/app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between cursor-pointer">
                                        <div class="media d-flex align-items-center py-0">
                                            <div class="media-left pr-0"><img class="mr-1" src="/app-assets/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
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
                                                <div class="avatar mr-1 m-0"><img src="/app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
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
                                                <div class="avatar mr-1 m-0"><img src="/app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
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
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">John Doe</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
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
                        <li><a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class=" nav-item"><a href="app-email.html"><i class="menu-livicon" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Email</span></a>
                </li>
                <li class=" nav-item"><a href="app-chat.html"><i class="menu-livicon" data-icon="comments"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
                </li>
                <li class=" nav-item"><a href="app-todo.html"><i class="menu-livicon" data-icon="check-alt"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a href="app-calendar.html"><i class="menu-livicon" data-icon="calendar"></i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
                </li>
                <li class=" nav-item"><a href="app-kanban.html"><i class="menu-livicon" data-icon="grid"></i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a href="app-invoice-list.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Invoice List</span></a>
                        </li>
                        <li><a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice">Invoice</span></a>
                        </li>
                        <li class="active"><a href="app-invoice-edit.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Invoice Edit</span></a>
                        </li>
                        <li><a href="app-invoice-add.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">Invoice Add</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="app-file-manager.html"><i class="menu-livicon" data-icon="save"></i><span class="menu-title" data-i18n="File Manager">File Manager</span></a>
                </li>
                <li class=" navigation-header"><span>UI Elements</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="retweet"></i><span class="menu-title" data-i18n="Content">Content</span></a>
                    <ul class="menu-content">
                        <li><a href="content-grid.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Grid">Grid</span></a>
                        </li>
                        <li><a href="content-typography.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Typography">Typography</span></a>
                        </li>
                        <li><a href="content-text-utilities.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Text Utilities">Text Utilities</span></a>
                        </li>
                        <li><a href="content-syntax-highlighter.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Syntax Highlighter">Syntax Highlighter</span></a>
                        </li>
                        <li><a href="content-helper-classes.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Helper Classes">Helper Classes</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="colors.html"><i class="menu-livicon" data-icon="drop"></i><span class="menu-title" data-i18n="Colors">Colors</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="bulb"></i><span class="menu-title" data-i18n="Icons">Icons</span></a>
                    <ul class="menu-content">
                        <li><a href="icons-livicons.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="LivIcons">LivIcons</span></a>
                        </li>
                        <li><a href="icons-boxicons.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="BoxIcons">BoxIcons</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="square"></i><span class="menu-title" data-i18n="Card">Card</span></a>
                    <ul class="menu-content">
                        <li><a href="card-basic.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a href="card-actions.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="widgets.html"><i class="menu-livicon" data-icon="thumbnails-small"></i><span class="menu-title" data-i18n="Widgets">Widgets</span><span class="badge badge-light-primary badge-pill badge-round float-right">New</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="box-add"></i><span class="menu-title" data-i18n="Components">Components</span></a>
                    <ul class="menu-content">
                        <li><a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a href="component-buttons-basic.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Buttons">Buttons</span></a>
                        </li>
                        <li><a href="component-breadcrumbs.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a href="component-carousel.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a href="component-collapse.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Collapse">Collapse</span></a>
                        </li>
                        <li><a href="component-dropdowns.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a href="component-list-group.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="List Group">List Group</span></a>
                        </li>
                        <li><a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a href="component-pagination.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a href="component-navbar.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Navbar">Navbar</span></a>
                        </li>
                        <li><a href="component-tabs-component.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Tabs Component">Tabs Component</span></a>
                        </li>
                        <li><a href="component-pills-component.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Pills Component">Pills Component</span></a>
                        </li>
                        <li><a href="component-tooltips.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Tooltips">Tooltips</span></a>
                        </li>
                        <li><a href="component-popovers.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Popovers">Popovers</span></a>
                        </li>
                        <li><a href="component-badges.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a href="component-pill-badges.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Pill Badges">Pill Badges</span></a>
                        </li>
                        <li><a href="component-progress.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a href="component-media-objects.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Media Objects">Media Objects</span></a>
                        </li>
                        <li><a href="component-spinner.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Spinner">Spinner</span></a>
                        </li>
                        <li><a href="component-bs-toast.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Toasts">Toasts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="briefcase"></i><span class="menu-title" data-i18n="Extra Components">Extra Components</span></a>
                    <ul class="menu-content">
                        <li><a href="ex-component-avatar.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Avatar</span></a>
                        </li>
                        <li><a href="ex-component-chips.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Chips">Chips</span></a>
                        </li>
                        <li><a href="ex-component-divider.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Divider">Divider</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Forms &amp; Tables</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="check"></i><span class="menu-title" data-i18n="Form Elements">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a href="form-inputs.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Input">Input</span></a>
                        </li>
                        <li><a href="form-input-groups.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Input Groups">Input Groups</span></a>
                        </li>
                        <li><a href="form-number-input.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Number Input">Number Input</span></a>
                        </li>
                        <li><a href="form-select.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Select">Select</span></a>
                        </li>
                        <li><a href="form-radio.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Radio">Radio</span></a>
                        </li>
                        <li><a href="form-checkbox.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Checkbox">Checkbox</span></a>
                        </li>
                        <li><a href="form-switch.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Switch">Switch</span></a>
                        </li>
                        <li><a href="form-textarea.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Textarea">Textarea</span></a>
                        </li>
                        <li><a href="form-quill-editor.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Quill Editor">Quill Editor</span></a>
                        </li>
                        <li><a href="form-file-uploader.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="File Uploader">File Uploader</span></a>
                        </li>
                        <li><a href="form-date-time-picker.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="form-layout.html"><i class="menu-livicon" data-icon="settings"></i><span class="menu-title" data-i18n="Form Layout">Form Layout</span></a>
                </li>
                <li class=" nav-item"><a href="form-wizard.html"><i class="menu-livicon" data-icon="priority-low"></i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
                </li>
                <li class=" nav-item"><a href="form-validation.html"><i class="menu-livicon" data-icon="check-alt"></i><span class="menu-title" data-i18n="Form Validation">Form Validation</span></a>
                </li>
                <li class=" nav-item"><a href="form-repeater.html"><i class="menu-livicon" data-icon="priority-low"></i><span class="menu-title" data-i18n="Form Repeater">Form Repeater</span></a>
                </li>
                <li class=" nav-item"><a href="table.html"><i class="menu-livicon" data-icon="thumbnails-big"></i><span class="menu-title" data-i18n="Table">Table</span></a>
                </li>
                <li class=" nav-item"><a href="table-extended.html"><i class="menu-livicon" data-icon="thumbnails-small"></i><span class="menu-title" data-i18n="Table extended">Table extended</span></a>
                </li>
                <li class=" nav-item"><a href="table-datatable.html"><i class="menu-livicon" data-icon="morph-map"></i><span class="menu-title" data-i18n="Datatable">Datatable</span></a>
                </li>
                <li class=" navigation-header"><span>Pages</span>
                </li>
                <li class=" nav-item"><a href="page-user-profile.html"><i class="menu-livicon" data-icon="user"></i><span class="menu-title" data-i18n="User Profile">User Profile</span></a>
                </li>
                <li class=" nav-item"><a href="page-faq.html"><i class="menu-livicon" data-icon="question-alt"></i><span class="menu-title" data-i18n="FAQ">FAQ</span></a>
                </li>
                <li class=" nav-item"><a href="page-knowledge-base.html"><i class="menu-livicon" data-icon="info-alt"></i><span class="menu-title" data-i18n="Knowledge Base">Knowledge Base</span></a>
                </li>
                <li class=" nav-item"><a href="page-search.html"><i class="menu-livicon" data-icon="search"></i><span class="menu-title" data-i18n="Search">Search</span></a>
                </li>
                <li class=" nav-item"><a href="page-account-settings.html"><i class="menu-livicon" data-icon="wrench"></i><span class="menu-title" data-i18n="Account Settings">Account Settings</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="users"></i><span class="menu-title" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a href="page-users-list.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="List">List</span></a>
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
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="share"></i><span class="menu-title" data-i18n="Miscellaneous">Miscellaneous</span></a>
                    <ul class="menu-content">
                        <li><a href="page-coming-soon.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Coming Soon">Coming Soon</span></a>
                        </li>
                        <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Error">Error</span></a>
                            <ul class="menu-content">
                                <li><a href="error-404.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="404">404</span></a>
                                </li>
                                <li><a href="error-500.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="500">500</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-not-authorized.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Not Authorized">Not Authorized</span></a>
                        </li>
                        <li><a href="page-maintenance.html" target="_blank"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Maintenance">Maintenance</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Charts &amp; Maps</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="pie-chart"></i><span class="menu-title" data-i18n="Charts">Charts</span><span class="badge badge-pill badge-round badge-light-info float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li><a href="chart-apex.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a href="chart-chartjs.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                        <li><a href="chart-chartist.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Chartist">Chartist</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="maps-google.html"><i class="menu-livicon" data-icon="globe"></i><span class="menu-title" data-i18n="Google Maps">Google Maps</span></a>
                </li>
                <li class=" navigation-header"><span>Extensions</span>
                </li>
                <li class=" nav-item"><a href="ext-component-sweet-alerts.html"><i class="menu-livicon" data-icon="warning-alt"></i><span class="menu-title" data-i18n="Sweet Alert">Sweet Alert</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-toastr.html"><i class="menu-livicon" data-icon="morph-map"></i><span class="menu-title" data-i18n="Toastr">Toastr</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-noui-slider.html"><i class="menu-livicon" data-icon="settings"></i><span class="menu-title" data-i18n="NoUi Slider">NoUi Slider</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-drag-drop.html"><i class="menu-livicon" data-icon="priority-high"></i><span class="menu-title" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-tour.html"><i class="menu-livicon" data-icon="paper-plane"></i><span class="menu-title" data-i18n="Tour">Tour</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-swiper.html"><i class="menu-livicon" data-icon="morph-orientation-tablet"></i><span class="menu-title" data-i18n="Swiper">Swiper</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-treeview.html"><i class="menu-livicon" data-icon="morph-sort-alt"></i><span class="menu-title" data-i18n="Treeview">Treeview</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-block-ui.html"><i class="menu-livicon" data-icon="expand"></i><span class="menu-title" data-i18n="Block-UI">Block-UI</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-media-player.html"><i class="menu-livicon" data-icon="music"></i><span class="menu-title" data-i18n="Media Player">Media Player</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-miscellaneous.html"><i class="menu-livicon" data-icon="loader-10"></i><span class="menu-title" data-i18n="Miscellaneous">Miscellaneous</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-i18n.html"><i class="menu-livicon" data-icon="globe"></i><span class="menu-title" data-i18n="i18n">i18n</span></a>
                </li>
                <li class=" navigation-header"><span>Others</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="morph-menu-arrow-bottom"></i><span class="menu-title" data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                        </li>
                        <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                            <ul class="menu-content">
                                <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                                <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                            </ul>
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
                <!-- app invoice View Page -->
                <section class="invoice-edit-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body pb-0 mx-25">
                                        <!-- header section -->
                                        <div class="row mx-0">
                                            <div class="col-xl-4 col-md-12 d-flex align-items-center pl-0">
                                                <h6 class="invoice-number mr-75">Invoice#</h6>
                                                <input type="text" class="form-control pt-25 w-50" value="000756">
                                            </div>
                                            <div class="col-xl-8 col-md-12 px-0 pt-xl-0 pt-1">
                                                <div class="invoice-date-picker d-flex align-items-center justify-content-xl-end flex-wrap">
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-muted mr-75">Date Issue: </small>
                                                        <fieldset class="d-flex">
                                                            <input type="text" class="form-control pickadate mr-2 mb-50 mb-sm-0" value="08/10/2019">
                                                        </fieldset>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-muted mr-75">Date Due: </small>
                                                        <fieldset class="d-flex justify-content-end">
                                                            <input type="text" class="form-control pickadate mb-50 mb-sm-0" value="08/10/2019">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- logo and title -->
                                        <div class="row my-2 py-50">
                                            <div class="col-sm-6 col-12 order-2 order-sm-1">
                                                <h4 class="text-primary">Invoice</h4>
                                                <input type="text" class="form-control" value="Admin Template">
                                            </div>
                                            <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-end">
                                                <img src="/app-assets/images/pages/pixinvent-logo.png" alt="logo" height="46" width="164">
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- invoice address and contact -->
                                        <div class="row invoice-info">
                                            <div class="col-lg-6 col-md-12 mt-25">
                                                <h6 class="invoice-to">Bill To</h6>
                                                <fieldset class="invoice-address form-group">
                                                    <input type="text" class="form-control" value="Clevision PVT. LTD.">
                                                </fieldset>
                                                <fieldset class="invoice-address form-group">
                                                    <textarea class="form-control" rows="4" placeholder="9205 Whitemarsh Street New York, NY 10002"></textarea>
                                                </fieldset>
                                                <fieldset class="invoice-address form-group">
                                                    <input type="email" class="form-control" value="hello@clevision.net">
                                                </fieldset>
                                                <fieldset class="invoice-address form-group">
                                                    <input type="number" class="form-control" placeholder="601-678-8022">
                                                </fieldset>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="card-body pt-50">
                                        <!-- product details table-->
                                        <div class="invoice-product-details ">
                                            <form class="form invoice-item-repeater">
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item>
                                                        <div class="row mb-50">
                                                            <div class="col-3 col-md-4 invoice-item-title">Item</div>
                                                            <div class="col-3 invoice-item-title">Cost</div>
                                                            <div class="col-3 invoice-item-title">Qty</div>
                                                            <div class="col-3 col-md-2 invoice-item-title">Price</div>
                                                        </div>
                                                        <div class="invoice-item d-flex border rounded mb-1">
                                                            <div class="invoice-item-filed row pt-1 px-1">
                                                                <div class="col-12 col-md-4 form-group">
                                                                    <select class="form-control invoice-item-select">
                                                                        <option value="Frest Admin Template">Frest Admin Template</option>
                                                                        <option value="Stack Admin Template">Stack Admin Template</option>
                                                                        <option value="Robust Admin Template">Robust Admin Template</option>
                                                                        <option value="Apex Admin Template">Apex Admin Template</option>
                                                                        <option value="Modern Admin Template">Modern Admin Template</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 col-12 form-group">
                                                                    <input type="text" class="form-control" value="24">
                                                                </div>
                                                                <div class="col-md-3 col-12 form-group">
                                                                    <input type="text" class="form-control" value="1">
                                                                </div>
                                                                <div class="col-md-2 col-12 form-group">
                                                                    <strong class="text-primary align-middle">$24.00</strong>
                                                                </div>
                                                                <div class="col-md-4 col-12 form-group">
                                                                    <input type="text" class="form-control invoice-item-desc" value="The most developer friendly & highly customisable HTML5 Admin">
                                                                </div>
                                                                <div class="col-md-8 col-12 form-group">
                                                                    <span>Discount: </span><span class="discount-value mr-1">0%</span>
                                                                    <span class="mr-1 tax1">0%</span>
                                                                    <span class="mr-1 tax2">0%</span>
                                                                </div>
                                                            </div>
                                                            <div class="invoice-icon d-flex flex-column justify-content-between border-left p-25">
                                                                <span class="cursor-pointer" data-repeater-delete>
                                                                    <i class="bx bx-x"></i>
                                                                </span>
                                                                <div class="dropdown">
                                                                    <i class="bx bx-cog cursor-pointer dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"></i>
                                                                    <div class="dropdown-menu p-1">
                                                                        <div class="row">
                                                                            <div class="col-12 form-group">
                                                                                <label for="discount">Discount(%)</label>
                                                                                <input type="number" class="form-control" id="discount" placeholder="0">
                                                                            </div>
                                                                            <div class="col-6 form-group">
                                                                                <label for="Tax1">Tax1</label>
                                                                                <fieldset>
                                                                                    <select name="tax1" id="Tax1" class="form-control invoice-tax">
                                                                                        <option value="1%" selected>1%</option>
                                                                                        <option value="10%">10%</option>
                                                                                        <option value="18%">18%</option>
                                                                                        <option value="40%">40%</option>
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-6 form-group">
                                                                                <label for="Tax2">Tax2</label>
                                                                                <fieldset>
                                                                                    <select name="tax1" id="Tax2" class="form-control invoice-tax">
                                                                                        <option value="1%" selected>1%</option>
                                                                                        <option value="10%">10%</option>
                                                                                        <option value="18%">18%</option>
                                                                                        <option value="40%">40%</option>
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="d-flex justify-content-between">
                                                                            <button type="button" class="btn btn-primary invoice-apply-btn">
                                                                                <span>Apply</span>
                                                                            </button>
                                                                            <button type="button" class="btn btn-light-primary ml-1">
                                                                                <span>Cancel</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col p-0">
                                                        <button class="btn btn-light-primary btn-sm" data-repeater-create type="button">
                                                            <i class="bx bx-plus"></i>
                                                            <span class="invoice-repeat-btn">Add Item</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- invoice subtotal -->
                                        <hr>
                                        <div class="invoice-subtotal pt-50">
                                            <div class="row">
                                                <div class="col-md-5 col-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="Partial Payment">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="Happy to give you a 10% discount.">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-7 offset-lg-2 col-12">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">Subtotal</span>
                                                            <h6 class="invoice-subtotal-value mb-0">$72.00</h6>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">Discount</span>
                                                            <h6 class="invoice-subtotal-value mb-0">- $ 09.60</h6>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">Tax</span>
                                                            <h6 class="invoice-subtotal-value mb-0">21%</h6>
                                                        </li>
                                                        <li class="list-group-item py-0 border-0 mt-25">
                                                            <hr>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 py-0">
                                                            <span class="invoice-subtotal-title">Invoice Total</span>
                                                            <h6 class="invoice-subtotal-value mb-0">$ 61.40</h6>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">Paid to date</span>
                                                            <h6 class="invoice-subtotal-value mb-0">- $ 00.00</h6>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between border-0 pb-0">
                                                            <span class="invoice-subtotal-title">Balance (USD)</span>
                                                            <h6 class="invoice-subtotal-value mb-0">$ 10,953</h6>
                                                        </li>
                                                        <li class="list-group-item border-0 pb-0">
                                                            <button class="btn btn-primary btn-block subtotal-preview-btn">Preview</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- invoice action  -->
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="card invoice-action-wrapper shadow-none border">
                                <div class="card-body">
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-primary btn-block invoice-send-btn">
                                            <i class="bx bx-send"></i>
                                            <span>Send Invoice</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-light-primary btn-block">
                                            <span>Download Invoice</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn mb-1 d-flex">
                                        <div class="preview w-50 mr-50">
                                            <button class="btn btn-light-primary btn-block">
                                                <span class="text-nowrap">Preview</span>
                                            </button>
                                        </div>
                                        <div class="save w-50">
                                            <button class="btn btn-light-primary btn-block">
                                                <span class="text-nowrap">Save</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="invoice-action-btn mb-1">
                                        <button class="btn btn-success btn-block">
                                            <i class='bx bx-dollar'></i>
                                            <span>Add Payment</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-payment">
                                <div class="invoice-payment-option mb-2">
                                    <p>Accept payments via</p>
                                    <select name="payment" id="paymentOption" class="form-control bg-transparent">
                                        <option value="DebitCard">Debit Card</option>
                                        <option value="DebitCard">Credit Card</option>
                                        <option value="DebitCard">Paypal</option>
                                        <option value="DebitCard">Internet Banking</option>
                                        <option value="DebitCard">UPI Transfer</option>
                                    </select>
                                </div>
                                <div class="invoice-terms">
                                    <div class="d-flex justify-content-between py-50">
                                        <span class="invoice-terms-title">Payment Terms</span>
                                        <div class="custom-control custom-switch custom-switch-glow">
                                            <input type="checkbox" class="custom-control-input" checked id="paymentTerms">
                                            <label class="custom-control-label" for="paymentTerms">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between py-50">
                                        <span class="invoice-terms-title">Client Notes</span>
                                        <div class="custom-control custom-switch custom-switch-glow">
                                            <input type="checkbox" class="custom-control-input" checked id="clientNotes">
                                            <label class="custom-control-label" for="clientNotes">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between py-50">
                                        <span class="invoice-terms-title">Payment Stub</span>
                                        <div class="custom-control custom-switch custom-switch-glow">
                                            <input type="checkbox" class="custom-control-input" id="paymentStub">
                                            <label class="custom-control-label" for="paymentStub">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
    <script src="/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <script src="/app-assets/js/scripts/components.js"></script>
    <script src="/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/app-assets/js/scripts/pages/app-invoice.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>