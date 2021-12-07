@extends('customers.layouts.app')

@section('content')
    <!--Page Nav-->
    <section class="page_menu bottom-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('customers.index') }}">Home</a>
                        </li>
                        <li class="active">Compare</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--Special Design Product-->
    <div class="row">
        <div class="col-xs-5">
            <section style="margin: 100px 0">
                <div class="container">
                    <div class="row">
                        <div class="design clearfix">
                            <div class="col-5 col-offset-1">
                                <div class="design_img">
                                    {{-- <div class="tag">
                    <div class="tag-btn">
                      <span class="uppercase text-center">New
                      </span>
                    </div>
                  </div> --}}
                                    <img src="{{ asset('eren') }}/images/design-prouct.jpg" alt="desing Product">
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <div class="descrp">
                                    <h3 class="uppercase heading_space">
                                        <a href="product_detail.html">Sacrificial Chair Design
                                        </a>
                                    </h3>
                                    <ul class="review">

                                    </ul>
                                    <h3 class="price marginbottom15">
                                        <i class="fa fa-gbp" aria-hidden="true">
                                        </i>170.00 &nbsp;
                                        <span>
                                            <i class="fa fa-gbp" aria-hidden="true">
                                            </i>69.00
                                        </span>
                                    </h3>
                                    <p class="marginbottom15 detail">Size:
                                        <span>Large
                                        </span>
                                    </p>
                                    <p class="marginbottom15 detail">Color:
                                        <span>Grey white & Brown
                                        </span>
                                    </p>
                                    <p class="detail">Dimensions:
                                        <span>Height: 13cm x Length: 15cm
                                        </span>
                                    </p>
                                    <div class="countdown countdown-container margintop15" data-start="1362139200" data-end="1388461320" data-now="1387461319" data-border-color="#79b6c8">
                                        <div class="clock row">
                                            <div class="clock-item clock-days countdown-time-value col-xs-6 col-sm-3">
                                                <div class="wrap">
                                                    <div class="inner">
                                                        <div id="canvas-days" class="clock-canvas">
                                                        </div>
                                                        <div class="text">
                                                            <p class="val">0
                                                            </p>
                                                        </div>
                                                        <!-- /.text -->
                                                        <p class="type-days type-time">DAYS
                                                        </p>
                                                    </div>
                                                    <!-- /.inner -->
                                                </div>
                                                <!-- /.wrap -->
                                            </div>
                                            <!-- /.clock-item -->
                                            <div class="clock-item clock-hours countdown-time-value col-xs-6 col-sm-3">
                                                <div class="wrap">
                                                    <div class="inner">
                                                        <div id="canvas-hours" class="clock-canvas">
                                                        </div>
                                                        <div class="text">
                                                            <p class="val">0
                                                            </p>
                                                        </div>
                                                        <p class="type-hours type-time">HOURS
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clock-item clock-minutes countdown-time-value col-xs-6 col-sm-3">
                                                <div class="wrap">
                                                    <div class="inner">
                                                        <div id="canvas-minutes" class="clock-canvas">
                                                        </div>
                                                        <div class="text">
                                                            <p class="val">0
                                                            </p>
                                                        </div>
                                                        <p class="type-minutes type-time">MINUTES
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clock-item clock-seconds countdown-time-value col-xs-6 col-sm-3">
                                                <div class="wrap">
                                                    <div class="inner">
                                                        <div id="canvas-seconds" class="clock-canvas">
                                                        </div>
                                                        <div class="text">
                                                            <p class="val">0
                                                            </p>
                                                        </div>
                                                        <p class="type-seconds type-time">SECONDS
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
    </div>
    {{-- End section special --}}

@endsection
