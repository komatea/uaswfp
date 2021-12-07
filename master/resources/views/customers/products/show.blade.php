@extends('customers.layouts.app')

@section('content')
  <section class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="hidden">hidden</h3>
          <ul class="breadcrumb">
            <li><a href="{{ route('customers.index') }}">Home</a>
            </li>
            <li>Products</li>
            <li class="active"> {{ $product->name }}</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!--Cart Detail -->
  <section id="cart" class="padding_bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div id="slider_product" class="cbp margintop40">
            <div class="cbp-item">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="{{asset($product->takeImage())}}" alt="">
                </div>
              </div>
            </div>
            @php 
              $imageProducts = $product->imageProducts;
            @endphp
            @if ($imageProducts->count())
            @foreach ($imageProducts as $imageProduct)
            <div class="cbp-item">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="{{asset($imageProduct->takeImage())}}" alt="">
                </div>
              </div>
            </div>
            @endforeach
            @endif

          </div>
          <div id="js-pagination-slider">
            @if ($imageProducts->count())
            @foreach ($imageProducts as $imageProduct)
            <div class="cbp-pagination-item cbp-pagination-active">
              <img src="{{asset($imageProduct->takeImage())}}" alt="">
            </div>
            @endforeach
            @endif
          </div>
        </div>
        <div class="col-sm-6">
          <div class="detail_pro margintop40">
            <h4 class="bottom30">{{ $product->category->name }}</h4>
            <h1 class="bottom30">{{ $product->name }}</h1>
            <p class="">By: {{ $product->brand->name }}</p>
            <p>{{ $product->description }}</p>
            {{-- <ul class="review_list marginbottom15">
              <li><img src="images/star.png" alt="star">
              </li>
              <li><a href="#.">10 review(s) </a>
              </li>
              <li><a href="#.">Add your review</a>
              </li>
            </ul> --}}
            <h2 class="price marginbottom15">Rp.{{ number_format($product->price * (1 - $product->disc / 100)) }} &nbsp;
              <del><span class="discount">Rp.{{ number_format($product->price)}}</span></del></h2>


            {{-- <form class="cart-form">
              <div class="form-group">
                <label for="city">
                  Size *
                </label>
                <label class="select form-control">
                  <select name="country" id="city">
                    <option selected>- Please select -</option>
                    <option>Canada</option>
                    <option>Chilli</option>
                    <option>France</option>
                  </select>
                </label>
              </div>
              <div class="form-group">
                <label for="city">
                  Color *
                </label>
                <label class="select form-control">
                  <select name="country" id="color">
                    <option selected>- Please select -</option>
                    <option>Canada</option>
                    <option>Chilli</option>
                    <option>France</option>
                  </select>
                </label>
              </div>
              <p class="text-danger">Repuired Fiields *</p>
            </form>
            <form class="cart-form">
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="quan">
                      Quantity *
                    </label>
                  </div>
                  <div class="col-sm-6">
                    <label class="select form-control">
                      <select name="country" id="selection">
                        <option selected>- 01 -</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                      </select>
                    </label>
                  </div>
                </div>
              </div>
            </form> --}}
            <div class="cart-buttons">
              <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
              <a class="icons" href="#.">
                <i class="fa fa-exchange"></i>
              </a>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="bottom_half">
    <div class="container">
      <div class="row">
        <div class="clearfix col-md-12">
          <div class="shop_tab">
            <ul class="tabs">

              <li class="active" rel="tab2">
                <h4 class="heading uppercase">Product Details</h4>
              </li>
            </ul>
            <div class="tab_container">

              <div id="tab2" class="tab_content">
                <div class="row">
                  <div class="col-md-6">
                    <table class="table table-responsive table-striped">
                      <tbody>
                       
                        <tr>
                          <td>Graphic Cards</td>
                          <td>{{ $product->graphics_card ?? '-'}}</td>
                        </tr>
                        <tr>
                          <td>Processor</td>
                          <td>{{ $product->processor ?? '-'}}</td>
                        </tr>
                        <tr>
                          <td>RAM</td>
                          <td>{{ $product->ram ?? '-'}}</td>
                        </tr>
                        <tr>
                          <td>Hardisk</td>
                          <td>{{ $product->hardisk ?? '-'}}</td>
                        </tr>
                        <tr>
                          <td>SSD</td>
                          <td>{{ $product->ssd ?? '-'}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-6">
                    <table class="table table-responsive table-striped">
                      <tbody>
                        <tr>
                          <td>Display</td>
                          <td>{{ $product->display ?? '-' }}</td>
                        </tr>
                        <tr>
                          <td>Keyboard</td>
                          <td>{{ $product->keyboard ?? '-'}}</td>
                        </tr>
                        <tr>
                          <td>Camera</td>
                          <td>{{ $product->camera ?? '-'}}</td>
                        </tr>
                        <tr>
                          <td>Wifi</td>
                          <td>{{ $product->wifi ?? '-'}}</td>
                        </tr>
                        <tr>
                          <td>Interfaces</td>
                          <td>{!! $product->interfaces ?? '-' !!}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="feature_product" class="bottom_half">
    <div class="container">
      <div class="row">
        <div class="col-md-12"></div>
          <h4 class="heading uppercase bottom30">upsell products</h4>
        </div>
        @foreach ($upsells as $upsell)
        <div class="col-md-3 col-sm-6">
          <div class="product_wrap bottom_half">
            <div class="tag-btn"><span class="uppercase text-center">New</span>
            </div>
            <div class="image">
              <a class="fancybox" href="{{asset($upsell->takeImage())}}"><img src="{{asset($upsell->takeImage())}}" alt="Product" class="img-responsive">
              </a>
            </div>
            <div class="product_desc">
              <p class="title"> {{ $upsell->name }}</p>
              <span class="price bottom30">Rp.{{ number_format($upsell->price * (1 - $upsell->disc / 100)) }} &nbsp;
                <del><span class="discount">Rp.{{ number_format($upsell->price)}}</span></del>
            </span>
              <a class="fancybox" href="{{asset($upsell->takeImage())}}" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>
  @endsection