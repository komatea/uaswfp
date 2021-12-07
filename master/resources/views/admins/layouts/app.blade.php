<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ $pageTitle ?? 'ILPC 2022 - Artificial Iintelligence: The Future Is Now!' }}</title>
    <link rel="apple-touch-icon" href="{{ asset('vuexy') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ilpc2022') }}/identity/favicon.ico">
    <link href=" https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{  asset('vuexy') }}/app-assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="{{  asset('vuexy') }}/app-assets/css/plugins/extensions/ext-component-swiper.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy') }}/assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- Template files -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-swiper.css">

    @yield('header')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item">
                        <a class="nav-link menu-toggle" href="#">
                            <i class="ficon" data-feather="menu">
                            </i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{-- <div class="user-nav d-flex"><span class="user-name fw-bolder">{{ auth()->user()->username }}</span><span class="user-status">Account</span></div><span class="avatar"><img class="round" src="{{ asset('ilpc2022') }}/identity/account.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span> --}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        {{-- <a
                            class="dropdown-item" href="#"><i class="me-50" data-feather="user"></i>
                            Profile</a><a class="dropdown-item" href="#"><i class="me-50"
                                data-feather="mail"></i>
                            Inbox</a><a class="dropdown-item" href="#"><i class="me-50"
                                data-feather="check-square"></i>
                            Task</a><a class="dropdown-item" href="#"><i class="me-50"
                                data-feather="message-square"></i>
                            Chats</a> --}}
                        {{-- <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="me-50"
                                data-feather="settings"></i> Settings</a><a class="dropdown-item" href="#"><i
                                class="me-50" data-feather="credit-card"></i> Pricing</a> --}}
                        <a class="dropdown-item" href="{{ route('customers.index') }}">
                            <i class="me-50" data-feather="help-circle"></i>
                            Main Website
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="me-50" data-feather="power"></i>
                            Logout
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="{{ route('admins.index') }}">
                        {{-- <span class="brand-logo"></span> --}}
                        <img src="{{ asset('ilpc2022') }}/identity/logo-no-footer.png" style="height: 20px;">
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item{{ $pageActive == 'admins.index' ? ' active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('admins.index') }}">
                        <i data-feather="cpu"></i>
                        <span class="menu-title text-truncate">Dashboard</span>
                    </a>
                </li>

                <div class="divider">

                    <div class="divider-text">Administration</div>
                </div>
                <li class="nav-item{{ $pageActive == 'admins.products.index' ? ' active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('admins.products.index') }}">
                        <i data-feather="monitor"></i>
                        <span class="menu-title text-truncate">Product</span>
                    </a>
                </li>
                <li class="nav-item{{ $pageActive == 'admins.brands.index' ? ' active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('admins.brands.index') }}">
                        <i data-feather="pocket"></i>
                        <span class="menu-title text-truncate">Brands</span>
                    </a>
                </li>
                <li class="nav-item{{ $pageActive == 'admins.categories.index' ? ' active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('admins.categories.index') }}">
                        <i data-feather="trello"></i>
                        <span class="menu-title text-truncate">Categories</span>
                    </a>
                </li>

                <div class="divider">
                    <div class="divider-text">Customer</div>
                </div>
                <li class="nav-item{{ $pageActive == 'admins.customers.index' ? ' active' : '' }}">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="shopping-cart"></i>
                        <span class="menu-title text-truncate">Orders</span>
                        <span id="registration_unverified" class="badge{{ $pageActive == 'admins.customers.index' ? ' bg-warning ' : ' badge-light-warning ' }}rounded-pill ms-auto me-1">
                            <div class="spinner-border spinner-border-sm" role="status" width:>
                            </div>
                        </span>
                    </a>
                </li>

                <div class="divider">
                    <div class="divider-text">Owner</div>
                </div>
                <li class="nav-item{{ $pageActive == 'admins.users.index' ? ' active' : '' }}">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="users"></i>
                        <span class="menu-title text-truncate">Users</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; BukuLaptop<span class="d-none d-sm-inline-block">,
                    All rights Reserved</span></span>
            <span class="float-md-end d-none d-md-block">SI Mohon Dicintai<i data-feather="heart"></i></span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{  asset('vuexy') }}/app-assets/vendors/js/extensions/swiper.min.js"></script>
    <script src="{{  asset('vuexy') }}/app-assets/js/scripts/extensions/ext-component-swiper.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('js') }}/jquery.editable.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('vuexy') }}/app-assets/js/core/app-menu.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('vuexy') }}/app-assets/js/scripts/pages/auth-login.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/js/scripts/forms/form-select2.js"></script>
    <script src="{{ asset('vuexy') }}/app-assets/js/scripts/components/components-popovers.js"></script>
    <!-- END: Page JS-->

    


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    @yield('script')
</body>
<!-- END: Body-->

</html>
