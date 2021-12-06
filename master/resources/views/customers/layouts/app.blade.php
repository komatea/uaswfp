<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>BukaLaptop</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/loader.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('eren') }}/css/style.css">

    <link rel="shortcut icon" href="{{ asset('eren') }}/images/favicon.png">

    @yield("style")

    {{-- <[if lt IE 9]>
        <script src="{{ asset('eren') }}/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="{{ asset('eren') }}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]> --}}

</head>

<body>

    <!--Loader-->
    <div class="loader">
        <div class="spinner-load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>


    <div class="container-fluid">

        <header class="right-menu">
            <div class="container-fluid">
                <div class="row">
                    <!-- Start Navigation -->
                    <nav class="navbar navbar-default  bootsnav">
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="cart-toggler">
                                    <a href="#.">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="badge">3</span>
                                    </a>
                                </li>
                                <li class="search"><a href="#."><i class="fa fa-search"></i></a>
                                </li>
                                <li class="side-menu"><a href="#."><i class="fa fa-bars"></i></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index3.html"><img src="{{ asset('eren') }}/images/logo-black.png" class="logo" alt="">
                            </a>
                        </div>
                        <!-- End Header Navigation -->

                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                                <li class="dropdown active">
                                    <a href="/" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('customers.products.index') }}" class="dropdown-toggle" data-toggle="dropdown">Products</a>
                                    {{-- <ul class="dropdown-menu">
                                        <li><a href="grid.html">Grid Default</a>
                                        </li>
                                        <li><a href="grid_list.html">Grid Lists</a>
                                        </li>
                                        <li><a href="grid_sidebar.html">Grid Sidebar</a>
                                        </li>
                                        <li><a href="list_sidebar.html">Lists Sidebar</a>
                                        </li>
                                    </ul> --}}
                                </li>
                                <li><a href="#.">collection</a>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">pages</a>
                                    <ul class="dropdown-menu megamenu-content" role="menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-menu col-md-3">
                                                    <h5 class="title heading_border">Blog</h5>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="blog1.html">Blog Two Cols</a>
                                                            </li>
                                                            <li><a href="blog2.html">Blog Three Cols</a>
                                                            </li>
                                                            <li><a href="blog_post.html">Blog Posts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-menu col-md-3">
                                                    <h5 class="title heading_border">Products Elements</h5>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="checkout.html">Product Chekouts</a>
                                                            </li>
                                                            <li><a href="product_detail.html">Products Details</a>
                                                            </li>
                                                            <li><a href="cart.html">Shopping Cart</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-menu col-md-3">
                                                    <h5 class="title heading_border">Theme Elements</h5>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="#.">Skills</a>
                                                            </li>
                                                            <li><a href="#.">Team & Testimonials</a>
                                                            </li>
                                                            <li><a href="404.html">Errors</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-menu col-md-3">
                                                    <div class="content">
                                                        <img src="{{ asset('eren') }}/images/mega-menu.png" alt="menu" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#.">about us</a>
                                </li>
                                <li><a href="#">Login</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Start Side Menu -->
                        <div class="side">
                            <a href="#." class="close-side"><i class="fa fa-times"></i></a>
                            <div class="widget">
                                <h6 class="title">Custom Pages</h6>
                                <ul class="link">
                                    <li><a href="#.">About</a>
                                    </li>
                                    <li><a href="#.">Services</a>
                                    </li>
                                    <li><a href="#.">Blog</a>
                                    </li>
                                    <li><a href="#.">Portfolio</a>
                                    </li>
                                    <li><a href="#.">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h6 class="title">Additional Links</h6>
                                <ul class="link">
                                    <li><a href="#.">Retina Homepage</a>
                                    </li>
                                    <li><a href="#.">New Page Examples</a>
                                    </li>
                                    <li><a href="#.">Parallax Sections</a>
                                    </li>
                                    <li><a href="#.">Shortcode Central</a>
                                    </li>
                                    <li><a href="#.">Ultimate Font Collection</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Side Menu -->

                        <!--Search Bar-->
                        <div class="search-toggle">
                            <div class="top-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <ul class="cart-list">
                            <li>
                                <a href="#." class="photo"><img src="{{ asset('eren') }}/images/hover-cart.jpg" class="cart-thumb" alt="" />
                                </a>
                                <h6><a href="#.">Sacrificial Chair Design </a></h6>
                                <p>Qty: 2 <span class="price">$170.00</span>
                                </p>
                            </li>
                            <li class="total clearfix">
                                <div class="pull-right"><strong>Shipping</strong>: $5.00</div>
                                <div class="pull-left"><strong>Total</strong>: $173.00</div>
                            </li>
                            <li class="cart-btn">
                                <a href="#." class="active">VIEW CART </a>
                                <a href="#.">CHECKOUT </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>


        <!--BEGIN Footer-->
        <footer class="padding plain_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-1"></div>
                    <div class="col-md-6 col-sm-10">
                        <div class="footer_panel text-center">
                            <a href="index3.html"><img src="{{ asset('eren') }}/images/logo.png" alt="logo" class="content_space">
                            </a>
                            <p class="content_space">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus.</p>
                            <ul class="social">
                                <li><a href="#."><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#."><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#."><i class="fa fa-rss"></i></a>
                                </li>
                                <li><a href="#."><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="#."><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-1"></div>
                </div>
            </div>
        </footer>
        <!--END Footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>Copyright &copy; 2016 <a href="#.">Erene</a>. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    {{-- BEGIN CORE PLUGINS --}}
    <script src="{{ asset('eren') }}/js/jquery-2.2.3.js"></script>
    <script src="{{ asset('eren') }}/https://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
    <script src="{{ asset('eren') }}/js/gmap3.min.js"></script>
    <script src="{{ asset('eren') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('eren') }}/js/bootsnav.js"></script>
    <script src="{{ asset('eren') }}/js/jquery.parallax-1.1.3.js"></script>
    <script src="{{ asset('eren') }}/js/jquery.appear.js"></script>
    <script src="{{ asset('eren') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('eren') }}/js/jquery.cubeportfolio.min.js"></script>
    <script src="{{ asset('eren') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('eren') }}/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('eren') }}/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ asset('eren') }}/js/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ asset('eren') }}/js/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('eren') }}/js/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('eren') }}/js/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('eren') }}/js/revolution.extension.video.min.js"></script>
    <script src="{{ asset('eren') }}/js/kinetic.js"></script>
    <script src="{{ asset('eren') }}/js/jquery.final-countdown.js"></script>
    <script src="{{ asset('eren') }}/js/functions.js"></script>
    {{-- END CORE PLUGIN --}}

    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    @yield('javascript')

</body>


</html>