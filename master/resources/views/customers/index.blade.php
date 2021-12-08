@extends('customers.layouts.app')
@section('style')
    <style>
        #parallax2 {
            background: url('https://images.pexels.com/photos/51415/pexels-photo-51415.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') repeat #d3e6eb;
            background-attachment: fixed;
            background-position: center center;
            background-size: cover;
        }

    </style>
@endsection
@section('content')

    <!--New Arrivals-->
    <section id="arrivals" class="padding">
        <div class="container-fluid arrival_container">
            <div class="row">
                <div class="col-md-6">
                    <div class="arrival_wrap margintop10">
                        <img src="https://images.pexels.com/photos/1337247/pexels-photo-1337247.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="new arrivals" class="img-responsive" style="width:915px; height:897px;object-fit: cover;">
                        <div class="overlay_arrival">
                            <div class="inner">
                                <h3 class="uppercase">NEW PRODUCT</h3>
                                <h1 class="uppercase">Gaming</h1>
                                <h2 class="uppercase content_space">Find Your Best Gaming Equipment</h2>
                                <a href="{{ route('customers.products.index') }}" class="btn-white uppercase">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($latestProduct as $product)
                    @if (!Auth::check())
                        @php
                            $discountedPrice = $product->price * (1 - $product->disc / 100);
                            $tempPrice  =substr($product->price, 0, 1);
                            $tempDiscountedPrice = substr($discountedPrice, 0, 1);
                            $product->price = str_pad($tempPrice, strlen($product->price), 'x');
                            $discountedPrice = str_pad($tempDiscountedPrice, strlen($discountedPrice), 'x');
                        @endphp
                    @else
                        @php
                            $discountedPrice = $product->price * (1 - $product->disc / 100);
                            $product->price = number_format($product->price);
                            $discountedPrice = number_format($discountedPrice);
                        @endphp
                    @endif
                    <div class="col-md-2 col-sm-6">
                        <div class="product_wrap margintop10">
                            <div class="image">
                                {{-- <div class="tag">
                                <div class="tag-btn">
                                    <span class="uppercase text-center">New</span>
                                </div>
                            </div> --}}
                                <a class="fancybox" href="{{ asset($product->takeImage()) }}">
                                    <img src="{{ asset($product->takeImage()) }}" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p><a href="{{ route('customers.products.show', $product->slug) }}">{{ $product->name }}</a></p>
                                <span class="price">Rp.{{ $discountedPrice }} &nbsp;
                                    <del><span class="discount">Rp.{{ $product->price }}</span></del></span>
                                <a href="{{ route('customers.products.addToCart', $product->slug) }}" onclick="return confirm('Are you sure?')"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!--Prallax-->
    <section id="parallax2" class="padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center" style="color:white">
                    <h2 class="heading_space uppercase text-white">creative design<strong>lighting furniture</strong></h2>
                    <h3 class="content_space  text-white">Typi non habent claritatem insitam.</h3>
                    <a href="#." class="btn-white uppercase">view collection</a>
                </div>
            </div>
        </div>
    </section>

    <!--Features Products-->
    <section id="feature_product" class="padding_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading_space uppercase">Find Your Favourite Brand</h2>
                    <p class="content_space">Claritas est etiam processus dynamicus, qui sequitur.</p>
                </div>
                <div class="d-flex justify-content-around">
                    @foreach ($brands as $brand)
                        <div class="col-md-2 col-sm-6 ">
                            <div class="product_wrap bottom_half">
                                <div class="image">
                                    <a class="fancybox" href="images/product1.jpg"><img src="{{ asset($brand->takeImage()) }}" alt="Product" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product_desc text-center">
                                    <p>{{ $brand->name }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
    </section>
@endsection
