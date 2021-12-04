@extends('customers.layouts.app')

@section('content')
    <!--Slider-->
    <section class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider" data-version="5.0">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('eren') }}/images/home3-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="0" data-voffset="10" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:right;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><img src="{{ asset('eren') }}/images/home2-banner1layer1.png" alt="">
                    </div>
                    <!-- LAYER NR. 1 -->
                    <h3 class="tp-caption tp-resizeme uppercase" data-x="left" data-y="180" data-width="full" data-transform_idle="o:1;" data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="800">featured design ideal
                    </h3>
                    <h1 class="tp-caption tp-resizeme uppercase" data-x="left" data-y="210" data-width="full" data-transform_idle="o:1;" data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="800"><strong>Wooden</strong> <span class="white">collection</span>
                    </h1>
                    <div class="tp-caption  tp-resizeme" data-x="left" data-y="390" data-width="full" data-transform_idle="o:1;" data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="800">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem
                            <br>consuetudium lectorum.
                        </p>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-y="480" data-width="full" data-transform_idle="o:1;" data-transform_in="y:[-200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="800"><a href="#." class="btn-common">Shop Now</a>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('eren') }}/images/banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
                    <div class="tp-caption tp-resizeme" data-x="500" data-hoffset="" data-y="0" data-voffset="10" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:right;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><img src="{{ asset('eren') }}/images/baner1-layer.png" alt="">
                    </div>
                    <h3 class="tp-caption tp-resizeme uppercase" data-x="left" data-y="185" data-width="full" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="800">new arrivals
                    </h3>
                    <h1 class="tp-caption tp-resizeme uppercase" data-x="left" data-y="228" data-width="full" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1100"><strong>new style</strong> for lamp
                    </h1>
                    <div class="tp-caption tp-resizeme" data-x="left" data-y="415" data-width="full" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1400">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem
                            <br>consuetudium lectorum.
                        </p>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="left" data-y="510" data-width="full" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700"><a href="#." class="btn-common">Shop Now</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!-- Delivery Service-->
    <section id="msg" class="padding_top">
        <div class="container">
            <div class="message">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a class="tag-btn" href="#."><span class="uppercase">hurry up</span></a>
                        <h4>FREE UK DELIVERY + RETURN OVER £75.00 (EXCLUDING HOMEWARE)| FREE UK COLLECT FROM STORE</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--New Arrivals-->
    <section id="arrivals" class="padding">
        <div class="container-fluid arrival_container">
            <div class="row">
                <div class="col-md-6">
                    <div class="arrival_wrap margintop10">
                        <img src="{{ asset('eren') }}/images/arrival-main.jpg" alt="new arrivals">
                        <div class="overlay_arrival">
                            <div class="inner">
                                <h3 class="uppercase">new arrivals</h3>
                                <h1 class="uppercase">lookbook</h1>
                                <h2 class="uppercase content_space"> custom furniture design</h2>
                                <a href="#." class="btn-white uppercase">shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap margintop10">
                        <div class="image">
                            <div class="tag">
                                <div class="tag-btn">
                                    <span class="uppercase text-center">New</span>
                                </div>
                            </div>
                            <a class="fancybox" href="images/product5.jpg">
                                <img src="{{ asset('eren') }}/images/product5.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product5.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap margintop10">
                        <div class="image">
                            <a class="fancybox" href="images/product6.jpg"><img src="{{ asset('eren') }}/images/product6.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product6.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap margintop10">
                        <div class="image">
                            <div class="tag">
                                <div class="tag-btn">
                                    <span class="uppercase text-center">New</span>
                                </div>
                            </div>
                            <a class="fancybox" href="images/product7.jpg">
                                <img src="{{ asset('eren') }}/images/product7.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product7.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap margintop10">
                        <div class="image">
                            <div class="tag">
                                <div class="tag-btn">
                                    <span class="uppercase text-center">New</span>
                                </div>
                            </div>
                            <a class="fancybox" href="images/product8.jpg">
                                <img src="{{ asset('eren') }}/images/product8.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product8.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap margintop10">
                        <div class="image">
                            <div class="tag">
                                <div class="tag-btn">
                                    <span class="uppercase text-center">New</span>
                                </div>
                            </div>
                            <a class="fancybox" href="images/product9.jpg">
                                <img src="{{ asset('eren') }}/images/product9.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product9.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap margintop10">
                        <div class="image">
                            <a class="fancybox" href="images/product2.jpg"><img src="{{ asset('eren') }}/images/product2.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product2.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Prallax-->
    <section id="parallax2" class="padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h2 class="heading_space uppercase">creative design<strong>lighting furniture</strong></h2>
                    <h3 class="content_space">Typi non habent claritatem insitam.</h3>
                    <a href="#." class="btn-common uppercase">view collection</a>
                </div>
            </div>
        </div>
    </section>

    <!--Features Products-->
    <section id="feature_product" class="padding_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading_space uppercase">Features Products</h2>
                    <p class="content_space">Claritas est etiam processus dynamicus, qui sequitur.</p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap bottom_half">
                        <div class="image">
                            <div class="tag">
                                <div class="tag-btn">
                                    <span class="uppercase text-center">New</span>
                                </div>
                            </div>
                            <a class="fancybox" href="images/product1.jpg"><img src="{{ asset('eren') }}/images/product1.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product1.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap bottom_half">
                        <div class="image">
                            <a class="fancybox" href="images/product2.jpg"><img src="{{ asset('eren') }}/images/product2.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product2.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap bottom_half">
                        <div class="image">
                            <a class="fancybox" href="images/product8.jpg"><img src="{{ asset('eren') }}/images/product8.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product8.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap bottom_half">
                        <div class="image">
                            <a class="fancybox" href="images/product4.jpg"><img src="{{ asset('eren') }}/images/product4.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product4.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap bottom_half">
                        <div class="image">
                            <div class="tag">
                                <div class="tag-btn">
                                    <span class="uppercase text-center">New</span>
                                </div>
                            </div>
                            <a class="fancybox" href="images/product9.jpg"><img src="{{ asset('eren') }}/images/product9.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product9.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="product_wrap bottom_half">
                        <div class="image">
                            <div class="tag">
                                <div class="tag-btn">
                                    <span class="uppercase text-center">New</span>
                                </div>
                            </div>
                            <a class="fancybox" href="images/product5.jpg"> <img src="{{ asset('eren') }}/images/product5.jpg" alt="Product" class="img-responsive">
                            </a>
                        </div>
                        <div class="product_desc">
                            <p>Sacrificial Chair Design </p>
                            <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                            <a class="fancybox" href="images/product5.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Testinomials-->
    <section id="testinomialBg" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="tstinomial-slider" class="owl-carousel">
                        <div class="item text-center">
                            <div class="testinomial_pic heading_space">
                                <img src="{{ asset('eren') }}/images/testinomial1.png" alt="testinomial">
                                <h6 class="uppercase">michel smith</h6>
                                <span class="uppercase">Developer</span>
                            </div>
                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica.</p>
                        </div>
                        <div class="item text-center">
                            <div class="testinomial_pic heading_space">
                                <img src="{{ asset('eren') }}/images/testinomial1.png" alt="testinomial">
                                <h6 class="uppercase">michel Deneal</h6>
                                <span class="uppercase">Developer</span>
                            </div>
                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica.</p>
                        </div>
                        <div class="item text-center">
                            <div class="testinomial_pic heading_space">
                                <img src="{{ asset('eren') }}/images/testinomial1.png" alt="testinomial">
                                <h6 class="uppercase">michel smith</h6>
                                <span class="uppercase">Designer</span>
                            </div>
                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--OUR BLOG-->
    <section id="blog" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading_space uppercase">from our blog</h2>
                    <p class="content_space">Claritas est etiam processus dynamicus, qui sequitur</p>
                </div>
                <div class="col-md-6">
                    <div class="media blog_box">
                        <div class="media-left">
                            <a href="blog_post.html">
                                <img class="media-object" src="{{ asset('eren') }}/images/blog1.jpg" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading uppercase bottom30">27<sub>/ april</sub></h2>
                            <h5 class="uppercase bottom30"><a href="blog_post.html">Claritas est etiam processus <br>dynamicus.</a></h5>
                            <p class="bottom30">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum...</p>
                            <a href="blog_post.html" class="readmor uppercase">read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media blog_box">
                        <div class="media-left">
                            <a href="blog_post.html">
                                <img class="media-object" src="{{ asset('eren') }}/images/blog2.jpg" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading uppercase bottom30">27<sub>/ april</sub></h2>
                            <h5 class="uppercase bottom30"><a href="blog_post.html">Claritas est etiam processus <br>dynamicus.</a></h5>
                            <p class="bottom30">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum...</p>
                            <a href="blog_post.html" class="readmor uppercase">read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--BRANDS-->
    <section id="brands" class="padding_bottom">
        <h3 class="hidden">hidden</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="brand-slider" class="owl-carousel">
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo1.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo2.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo3.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo4.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo5.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo1.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo2.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo3.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo4.png" alt="Brand Logo">
                        </div>
                        <div class="item text-center"><img src="{{ asset('eren') }}/images/logo5.png" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--NEWSLETER-->
    <section id="newsletter" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <h2 class="heading_space uppercase">sign up to newsletter</h2>
                    <p class="bottom_half">Subscribe to the Eren mailing list to receive updates on new arrivals,
                        <br> special offers and other discount information.
                    </p>
                    <form class="newsletter">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Subscribe to our newsletter..." required>
                            <span class="input-group-addon" id="basic-addon2"><button type="submit"><i class="fa fa-paper-plane-o"></i></button></span>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>


    <!--Testinomial-->
    <section id="availability" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="availability text-center margin_top">
                        <i class="fa fa-headphones"></i>
                        <h5 class="uppercase">free shipping worldwide</h5>
                        <span>Free shipping worldwide</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="availability text-center margin_top">
                        <i class="fa fa-headphones"></i>
                        <h5 class="uppercase">24/7 CUSTOMER SERVICE</h5>
                        <span>Free shipping worldwide</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="availability text-center margin_top">
                        <i class="fa fa-headphones"></i>
                        <h5 class="uppercase">MONEY BACK GUARANTEE!</h5>
                        <span>Free shipping worldwide</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
