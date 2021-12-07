@extends('customers.layouts.app')

@section('content')
    <!--Page Header-->
    <section class="header_layout2 padding">
        <div class="container">
            <div class="header_content padding">
                <div class="ro{{ w"> }}
                    <div class="col-md-12 text-center">
                        <h2 class="heading_space uppercase">creative design<strong>lighting furniture</strong></h2>
                        <h3 class="content_space">Typi non habent claritatem insitam.</h3>
                        <a href="#." class="btn-common uppercase">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Page Nav-->
    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="active">Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="grid padding">
        <h3 class="hidden">hidden</h3>{{  }}
        <div class="container">
            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">
                    {{-- <div class="widget content_space">
                        <h4 class="heading uppercase bottom30">categories</h4>
                        <div class="accordion-container">
                            <div class="set">
                                <a href="#." class="active uppercase">Chair<i class="fa fa-plus"></i></a>
                                <div class="content" style="display:block;">
                                    <ul>
                                        <li><a href="#.">Bag & Luggage</a>
                                        </li>
                                        <li><a href="#.">Eyewear</a>
                                        </li>
                                        <li><a href="#.">Jewelry</a>
                                        </li>
                                        <li><a href="#.">Shoes</a>
                                        </li>
                                        <li><a href="#.">Skerts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="set">
                                <a href="#." class="uppercase">women <i class="fa fa-plus"></i></a>
                                <div class="content">{{  }}
                                    <ul>
                                        <li><a href="#.">Bag & Luggage</a>
                                        </li>
                                        <li><a href="#.">Eyewear</a>
                                        </li>
                                        <li><a href="#.">Jewelry</a>
                                        </li>
                                        <li><a href="#.">Shoes</a>
                                        </li>
                                        <li><a href="#.">Skerts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="set">
                                <a href="#.">kids<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul>
                                        <li><a href="#.">Bag & Luggage</a>
                                        </li>
                                        <li><a href="#.">Eyewear</a>
                                        </li>
                                        <li><a href="#.">Jewelry</a>
                                        </li>
                                        <li><a href="#.">Shoes</a>
                                        </li>
                                        <li><a href="#.">Skerts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="set">
                                <a href="#.">All Product<i class="fa fa-plus"></i> </a>
                                <div class="content">
                                    <ul>
                                        <li><a href="#.">Bag & Luggage</a>
                                        </li>
                                        <li><a href="#.">Eyewear</a>
                                        </li>
                                        <li><a href="#.">Jewelry</a>
                                        </li>
                                        <li><a href="#.">Shoes</a>
                                        </li>
                                        <li><a href="#.">Skerts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget content_space">
                        <h4 class="heading uppercase bottom30">Shop by</h4>
                        <h5 class="uppercase marginbottom15">Manufacturer</h5>
                        <ul class="category">
                            <li><a href="#.">Adidas <span>(10)</span></a>
                            </li>
                            <li><a href="#.">Nike <span>(09)</span></a>
                            </li>
                            <li><a href="#.">Converse <span>(11)</span></a>
                            </li>
                            <li><a href="#.">Chanel <span>(10)</span></a>
                            </li>
                            <li><a href="#.">Gucci <span>(02)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">PriCe</h5>
                        <div class="range">
                            <div id="slider-3"></div>
                            <p>
                                <input type="text" id="price" style="border:0; color:#333333; font-weight:bold; font-size:12px;">
                            </p>
                            <button type="submit">Search</button>
                        </div>
                    </div> --}}
                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">brands</h5>
                        <ul class="brands">
                            @foreach ($brands as $brand)
                            <li><a href="#.">{{ $brand->name }}<span>(x)</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget content_space">
                        <h5 class="uppercase mb-5">Category</h5>
                        <ul class="category">
                            @foreach ($categories as $category)
                            <li><a href="#.">{{ $category->name }}<span>(x)</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">Size options</h5>
                        <ul class="category">
                            <li><a href="#.">L <span>(10)</span></a>
                            </li>
                            <li><a href="#.">S <span>(09)</span></a>
                            </li>
                            <li><a href="#.">M <span>(11)</span></a>
                            </li>
                            <li><a href="#.">XL <span>(10)</span></a>
                            </li>
                        </ul>
                    </div> --}}

                </aside>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="shop-grid-controls">
                    {{-- <a class="side-button bottom30" href="#."> Show Sidebar</a> --}}
                    <div class="view-button grid active bottom30">
                        <i class="fa fa-th-large"></i>
                    </div>
                    <div class="view-button list bottom30">
                        <i class="fa fa-align-justify"></i>
                    </div>
                    <div class="entry bottom30">
                        <form class="grid-form">
                            <div class="form-group">
                                <div class="select form-control">
                                    <select name="country" id="sorting">
                                        <option selected>Defaul sorting</option>
                                        <option>Defaul sorting</option>
                                        <option>Defaul sorting</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row shop-grid grid-view">
                    @foreach ($products as $product)
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                {{-- <div class="tag">
                                    <div class="tag-btn">
                                        <span class="uppercase text-center">New</span>
                                    </div>
                                </div> --}}
                                <a class="fancybox" href="{{asset($product->takeImage())}}">
                                    <img src="{{asset($product->takeImage())}}" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title"><a href="{{ route('customers.products.show', $product->slug) }}">{{ $product->name }}</a></p>
                                <div class="list_content">
                                    <h4 class="bottom30"><a href="{{ route('customers.products.show', $product->slug) }}">{{ $product->name }}</a></h4>
                                    <p>{{ Str::limit($product->description, 100, '...') }}</p>
                                    {{-- <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="{{asset('eren')}}/images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul> --}}
                                    <h4 class="price bottom30">Rp.{{ number_format($product->price * (1 - $product->disc / 100)) }} &nbsp;
                                        <del><span class="discount">Rp.{{ number_format($product->price)}}</span></del>
                                    </h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price">Rp.{{ number_format($product->price * (1 - $product->disc / 100)) }} &nbsp;   <del><span class="discount">Rp.{{ number_format($product->price)}}</span></del></span>                                
                                <a class="fancybox" href="{{asset('eren')}}/images/product5.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{-- <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <div class="tag">
                                    <div class="tag-btn">
                                        <span class="uppercase text-center">New</span>
                                    </div>
                                </div>
                                <a class="fancybox" href="{{asset('eren')}}/images/product6.jpg"><img src="{{asset('eren')}}/images/product6.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="{{asset('eren')}}/images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#."><i class="fa fa-heart-o"></i></a>
                                        <a class="icons" href="#."><i class="fa fa-exchange"></i></a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="{{asset('eren')}}/images/product6.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <a class="fancybox" href="{{asset('eren')}}/images/product7.jpg"><img src="{{asset('eren')}}/images/product7.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="{{asset('eren')}}/images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></span>
                                <a class="fancybox" href="{{asset('eren')}}/images/product7.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <a class="fancybox" href="{{asset('eren')}}/images/product8.jpg"><img src="{{asset('eren')}}/images/product8.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="{{asset('eren')}}/images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="{{asset('eren')}}/images/product8.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div> --}}


                </div>
                <div class="row">
                    <div class="d-flex justify-content-center mb-3">
                        {{ $products->withQueryString()->links() }}
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <h5 class="result uppercase">Showing 1-12 of 20 relults</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
