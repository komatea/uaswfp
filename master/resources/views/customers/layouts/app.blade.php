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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ asset('eren') }}/images/favicon.png">

    @yield("style")

    {{-- <[if lt IE 9]>
        <script src="{{ asset('eren') }}/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="{{ asset('eren') }}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]> --}}

</head>

<body>

    <!--Loader-->
    {{-- <div class="loader">
        <div class="spinner-load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div> --}}



    @php
        $total = 0;
        $quantity = 0;
    @endphp
    @if (session('cart'))
        @foreach (session('cart') as $id => $details)
            @php
                $total += $details['price'] * $details['quantity'];
                $quantity += $details['quantity'];
            @endphp
        @endforeach
    @endif
    <header class="right-menu">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav" style="padding: 0 20px;">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="cart-toggler">
                        <a href="#.">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="badge">{{ $quantity }}</span>
                        </a>
                    </li>
                    <li class="search"><a href="#."><i class="fa fa-search"></i></a></li>
                </ul>
            </div>

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" ><img src="{{ asset('images') }}/logo.svg" class="logo" alt="" style="height: 20px;"></a>
            </div>
            <!-- End Header Navigation -->

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                    <li>
                        <a href="{{ route('customers.index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('customers.products.index') }}">Products</a>
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
                    @auth
                        @if (auth()->user()->role->name == 'member')
                            <li><a href="{{ route('customers.products.compare') }}">Compare</a>
                            <li><a href="{{ route('customers.orders.history') }}">History</a>
                        @endif
                    @endauth
                    </li>
                    {{-- <li class="dropdown megamenu-fw">
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
                                                        <ul cla{{ ss=" }}menu-col">
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
                                                        <img sr{{ c=" }}{ asset('eren') }}/images/mega-menu.png" alt="menu" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li> --}}
                    {{-- <li><a href="#.">about us</a>
                                </li> --}}
                    @auth
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        <li><a><i data-feather="user"></i>&nbsp;&nbsp;{{ auth()->user()->name }} ({{ auth()->user()->role->name }})</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
            </div>


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
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        @if (!Auth::check())
                            @php
                                $tempPrice = substr($details['price'], 0, 1);
                                $tempTotalPrice = substr($total, 0, 1);
                                $details['price'] = str_pad($tempPrice, strlen($details['price']), 'x');
                                $total = str_pad($tempTotalPrice, strlen($total), 'x');
                            @endphp
                        @else
                            @php
                                $details['price'] = number_format((float)$details['price']);
                            @endphp
                        @endif
                        <li>
                            <a class="photo"><img src="{{ asset($details['main_image']) }}" class="cart-thumb" alt="" /></a>
                            <p><a href="{{ route('customers.products.show', $details['slug']) }}">{{ $details['name'] }}</a></p>
                            <h6>Qty: {{ $details['quantity'] }}</h6>
                            <span class="price">Rp.{{ $details['price'] }}</span>
                        </li>
                    @endforeach
                @endif
                <li class="total clearfix">
                    <div class="pull-right"><strong>Total</strong>: Rp. {{ $total }}</div>
                </li>
                <li class="cart-btn">
                    <a class="active" href="{{ route('customers.orders.checkout') }}" style="margin:0;">CHECKOUT</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>


    <!--BEGIN Footer-->
    <footer class="padding plain_footer" style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-1"></div>
                <div class="col-md-6 col-sm-10">
                    <div class="footer_panel text-center">
                        <a href="index3.html"><img src="{{ asset('images') }}/logo.svg" alt="logo" class="content_space">
                        </a>
                        <p class="content_space" style="color: white;">BukaLaptop adalah platform pencarian informasi produk teknologi terbesar di Indonesia. Gunakanlah teknologi ini sebaik mungkin. Semoga anda menikmati dan selamat berbelanja! Happy Shopping!</p>
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
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- END CORE PLUGIN --}}

    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    @yield('javascript')
    <script>
        feather.replace({
            width: 14,
            height: 14
        });
    </script>
</body>


</html>
