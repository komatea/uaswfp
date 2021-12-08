@extends('customers.layouts.app')

@section('content')
    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Products</li>
                        <li class="active">Shopping cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--Cart TAble-->
    <section id="cart" class="padding">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="heading uppercase marginbottom15">Shopping cart</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="uppercase">Photo</th>
                                    <th class="uppercase">Name</th>
                                    <th class="uppercase">Quantity</th>
                                    <th class="uppercase">Price</th>
                                    <th class="uppercase">Subtotal</th>
                                    <th class="uppercase"></th>
                                </tr>
                            </thead>
                            <tbody>

                                @php $total = 0; @endphp
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity']; @endphp
                                        @if (!Auth::check())
                                            @php
                                                $subtotalPrice = $details['price'] * $details['quantity'];
                                                $tempPrice = substr($details['price'], 0, 1);
                                                $tempSubtotalPrice = substr($subtotalPrice, 0, 1);
                                                $details['price'] = str_pad($tempPrice, strlen($details['price']), 'x');
                                                $subtotalPrice = str_pad($tempSubtotalPrice, strlen($subtotalPrice), 'x');
                                            @endphp
                                        @else
                                            @php
                                                $subtotalPrice = $details['price'] * $details['quantity'];
                                                $details['price'] = number_format($details['price']);
                                                $subtotalPrice = number_format($subtotalPrice);
                                            @endphp
                                        @endif
                                        <tr>
                                            <td><img height="80px;" class="shopping-product" src="{{ asset($details['main_image']) }}" alt="your product"></td>
                                            <td class="product-name">{{ $details['name'] }}</td>
                                            <td>{{ $details['quantity'] }}</td>
                                            <td class="price">
                                                <h5>Rp. {{ $details['price'] }}</h5>
                                            </td>
                                            <td class="price">
                                                <h5>Rp. {{ $subtotalPrice }}</h5>
                                            </td>
                                            <td class="text-center"><a class="btn-close" href="{{ route('customers.products.removeFromCart', $id) }}"><i class="fa fa-close"></i></a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ route('customers.products.index') }}" class="uppercase btn-light border-radius margintop30">CONTINUE SHOPPING</a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('customers.products.emptyCart') }}" class="uppercase btn-dark border-radius margintop30">CLEAR SHOPPING CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="shop_measures margintop40">
                        <h4 class="heading uppercase bottom30">cart totals</h4>
                        <table class="table table-responsive">
                            <tbody>
                                @if (!Auth::check())
                                    @php
                                        $tempTotalPrice = substr($total, 0, 1);
                                        $total = str_pad($tempTotalPrice, strlen($total), 'x');
                                    @endphp
                                @else
                                    @php
                                        $total = number_format($total);
                                    @endphp
                                @endif
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td class="text-right">
                                        <h5>Rp. {{ $total }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td class="text-right">
                                        <h5>FREE</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cart Totals</td>
                                    <td class="text-right">
                                        <h5 class="price">Rp. {{ $total }}</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('customers.orders.checkout.submit') }}" class="uppercase btn-light border-radius margintop30">checkout (MEMBER ONLY)</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
