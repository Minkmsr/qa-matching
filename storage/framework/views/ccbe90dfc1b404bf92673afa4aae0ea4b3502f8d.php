<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="MINK">
    <title>QA task</title>
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/ico/apple-icon-120.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/ico/favicon.ico')); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/vendors.min.css')); ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap-extended.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/colors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/components.css')); ?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('assets/css/core/menu/menu-types/vertical-menu-modern.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/core/colors/palette-gradient.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/css/charts/morris.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/fonts/simple-line-icons/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/fonts/font-awesome/css/all.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/core/colors/palette-gradient.css')); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->


<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">


<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="ft-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo" alt="modern admin logo"
                             src="<?php echo e(asset('assets/images/logo/logo.png')); ?>">
                        <h3 class="brand-text">Task </h3>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i>
                    </a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#">
                            <i class="ficon ft-maximize"></i>
                        </a>
                    </li>
                    <li class="dropdown nav-item mega-dropdown d-none d-lg-block">
                        <a class="dropdown-toggle nav-link"
                           href="#" data-toggle="dropdown">Mega</a>
                        <ul class="mega-dropdown-menu dropdown-menu row p-1">
                            <li class="col-md-4 bg-mega p-2">
                                <h3 class="text-white mb-1 font-weight-bold">Mega Menu Sidebar</h3>
                                <p class="text-white line-height-2">Candy canes bonbon toffee. Cheesecake dragée gummi
                                    bears chupa chups powder bonbon. Apple pie cookie sweet.</p>
                                <button class="btn btn-outline-white">Learn More</button>
                            </li>
                            <li class="col-md-5 px-2">
                                <h6 class="font-weight-bold font-medium-2 ml-1">Admin Panel</h6>
                                <ul class="row mt-2">
                                    <li class="col-6 col-xl-4">
                                        <a class="text-center mb-2 mb-xl-3"
                                           href="../ecommerce-menu-template" target="_blank"><i
                                                class="la la-shopping-cart font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-0">eCommerce</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4">
                                        <a class="text-center mb-2 mb-xl-3"
                                           href="../travel-menu-template" target="_blank"><i
                                                class="la la-plane font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-0">Travel</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4">
                                        <a class="text-center mb-2 mb-xl-3 mt-75 mt-xl-0"
                                           href="../hospital-menu-template" target="_blank"><i
                                                class="la la-stethoscope font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-0">Hospital</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4">
                                        <a class="text-center mb-2 mt-75 mt-xl-0"
                                           href="../crypto-menu-template" target="_blank"><i
                                                class="la la-bitcoin font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-50">Crypto</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4">
                                        <a class="text-center mb-2 mt-75 mt-xl-0"
                                           href="../support-menu-template" target="_blank"><i
                                                class="la la-tag font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-50">Support</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4">
                                        <a class="text-center mb-2 mt-75 mt-xl-0"
                                           href="../bank-menu-template" target="_blank"><i
                                                class="la la-bank font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-50">Bank</p>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <h6 class="font-weight-bold font-medium-2">Components</h6>
                                <ul class="row mt-1 mt-xl-2">
                                    <li class="col-12 col-xl-6 pl-0">
                                        <ul class="mega-component-list">
                                            <li class="mega-component-item">
                                                <a class="mb-1 mb-xl-2"
                                                   href="component-alerts.html"
                                                   target="_blank">Alert</a></li>
                                            <li class="mega-component-item">
                                                <a class="mb-1 mb-xl-2"
                                                   href="component-callout.html"
                                                   target="_blank">Callout</a></li>
                                            <li class="mega-component-item">
                                                <a class="mb-1 mb-xl-2"
                                                   href="component-buttons-basic.html"
                                                   target="_blank">Buttons</a></li>
                                            <li class="mega-component-item">
                                                <a class="mb-1 mb-xl-2"
                                                   href="component-carousel.html"
                                                   target="_blank">Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-12 col-xl-6 pl-0">
                                        <ul class="mega-component-list">
                                            <li class="mega-component-item">
                                                <a class="mb-1 mb-xl-2"
                                                   href="component-dropdowns.html"
                                                   target="_blank">Drop Down</a></li>
                                            <li class="mega-component-item">
                                                <a class="mb-1 mb-xl-2"
                                                   href="component-list-group.html"
                                                   target="_blank">List Group</a></li>
                                            <li class="mega-component-item">
                                                <a class="mb-1 mb-xl-2"
                                                   href="component-modals.html"
                                                   target="_blank">Modals</a></li>
                                            <li class="mega-component-item">
                                                <a class="mb-1 mb-xl-2"
                                                   href="component-pagination.html"
                                                   target="_blank">Pagination</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-search">
                        <a class="nav-link nav-link-search" href="#">
                            <i class="ficon ft-search">
                            </i>
                        </a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Modern..." tabindex="0"
                                   data-search="template-list">
                            <div class="search-input-close"><i class="ft-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link"
                           id="dropdown-flag" href="#"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="#"
                               data-language="en"><i class="flag-icon flag-icon-us"></i> English</a>
                            <a class="dropdown-item" href="#"
                               data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a>
                            <a class="dropdown-item" href="#"
                               data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a>
                            <a class="dropdown-item" href="#"
                               data-language="de"><i class="flag-icon flag-icon-de"></i> German</a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#"
                           data-toggle="dropdown"><i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6>
                                <span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                            </li>
                            <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit
                                                amet, consectetuer elit.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">30 minutes ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-download-cloud icon-bg-circle bg-red bg-darken-1 mr-0"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% Server load</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                mauris eu risus.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Five hour ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3 mr-0"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                dapibus neque.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-check-circle icon-bg-circle bg-cyan mr-0"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Complete the task</h6><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Last week
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-file icon-bg-circle bg-teal mr-0"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Generate monthly report</h6><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="javascript:void(0)">Read all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                                                           data-toggle="dropdown"><i
                                class="ficon ft-mail"></i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span
                                    class="notification-tag badge badge-warning float-right m-0">4 New</span>
                            </li>
                            <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span
                                                class="avatar avatar-sm avatar-online rounded-circle"><img
                                                    src="<?php echo e(asset('assets/images/portrait/small/avatar-s-19.png')); ?>"
                                                    alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Margaret Govan</h6>
                                            <p class="notification-text font-small-3 text-muted">I like your portfolio,
                                                let's start.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span
                                                class="avatar avatar-sm avatar-busy rounded-circle"><img
                                                    src="<?php echo e(asset('assets/app-assets/images/portrait/small/avatar-s-2.png')); ?>"
                                                    alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Bret Lezama</h6>
                                            <p class="notification-text font-small-3 text-muted">I have seen your work,
                                                there is</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Tuesday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span
                                                class="avatar avatar-sm avatar-online rounded-circle"><img
                                                    src="<?php echo e(asset('assets/images/portrait/small/avatar-s-3.png')); ?>"
                                                    alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Carie Berra</h6>
                                            <p class="notification-text font-small-3 text-muted">Can we have call in
                                                this week ?</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Friday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left"><span
                                                class="avatar avatar-sm avatar-away rounded-circle"><img
                                                    src="<?php echo e(asset('assets/images/portrait/small/avatar-s-6.png')); ?>"
                                                    alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Eric Alsobrook</h6>
                                            <p class="notification-text font-small-3 text-muted">We have project party
                                                this saturday.</p><small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="javascript:void(0)">Read all messages</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                                                                   href="#" data-toggle="dropdown"><span
                                class="mr-1 user-name text-bold-700">John Doe</span><span
                                class="avatar avatar-online"><img
                                    src="<?php echo e(asset('assets/images/portrait/small/avatar-s-19.png')); ?>"
                                    alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                                          href="user-profile.html"><i
                                    class="ft-user"></i> Edit Profile</a><a class="dropdown-item"
                                                                            href="app-kanban.html"><i
                                    class="ft-clipboard"></i> Todo</a><a class="dropdown-item" href="user-cards.html"><i
                                    class="ft-check-square"></i> Task</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

<!-- BEGIN: Main Menu-->



<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <?php $__currentLoopData = app()->make('renderMenu')['result']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data_parent_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item">
                <a href="<?php echo e(URL::to($data_parent_menu['parent_menus'][$key]['sys_menu_class_name'])); ?>">
                    <i class="<?php echo e($data_parent_menu['parent_menus'][$key]['sys_menu_icon']); ?>"></i>
                    <span class="menu-title" data-i18n="<?php echo e($data_parent_menu['parent_menus'][$key]['sys_menu_name']); ?>">
                        <?php echo e($data_parent_menu['parent_menus'][$key]['sys_menu_name']); ?>

                    </span></a>
                    <?php if(isset($data_parent_menu['parent_menus'][$key]['sub_menus']) && count($data_parent_menu['parent_menus'][$key]['sub_menus']) > 0): ?>
                    <ul class="menu-content">
                        <?php $__currentLoopData = $data_parent_menu['parent_menus'][$key]['sub_menus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skey => $data_sub_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li><a class="menu-item" href="<?php echo e(URL::to($data_sub_menu['sys_menu_class_name'])); ?>"><i></i>
                                <span data-i18n="<?php echo e($data_sub_menu['sys_menu_name']); ?>"><?php echo e($data_sub_menu['sys_menu_name']); ?></span>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->


<!-- BEGIN: Content-->
<?php echo $__env->yieldContent('content'); ?>
<!-- END: Content-->


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2"
                                                                                     href="https://1.envato.market/modern_admin"
                                                                                     target="_blank">MINK</a></span><span
            class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span
                id="scroll-top"></span></span></p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?php echo e(asset('assets/vendors/js/vendors.min.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo e(asset('assets/js/core/app-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/core/app.js')); ?>"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!--<script src="<?php echo e(asset('assets/js/scripts/pages/dashboard-sales.js')); ?>"></script>-->
<!-- END: Page JS-->








<?php echo $__env->yieldContent('script'); ?>





</body>
<!-- END: Body-->

</html>
<?php /**PATH C:\xampp\htdocs\qa\resources\views/layouts/app_template.blade.php ENDPATH**/ ?>