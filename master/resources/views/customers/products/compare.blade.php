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
    <div class="container">
        <div class="row">
            <form action="{{ route('customers.products.compare') }}" method="get">
                <div class="col-sm-6">
                    <div class="">
                        <label for="firstlaptop" class="form-label">First Laptop</label>
                        <select class="form-control select2" name="firstlaptop" id="firstlaptop">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('firstlaptop')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="">
                        <label for="secondlaptop" class="form-label">Second Laptop</label>
                        <select class="form-control select2" name="secondlaptop" id="secondlaptop">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('secondlaptop')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>
                </div>
                <div class="col-sm-12" style="display: flex; justify-content: center; margin-top: 20px; margin-bottom: 20px;">
                    <button class="btn btn-primary" type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    @if (request('firstlaptop') != '' && request('secondlaptop') != '')
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">

                        <div id="slider_product_1" class="cbp margintop40">
                            <div class="cbp-item">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset($firstlaptop->takeImage()) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            @php
                                $imageProducts = $firstlaptop->imageProducts;
                            @endphp
                            @if ($imageProducts->count())
                                @foreach ($imageProducts as $imageProduct)
                                    <div class="cbp-item">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="{{ asset($imageProduct->takeImage()) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div id="js-pagination-slider_1">
                            @if ($imageProducts->count())
                                @foreach ($imageProducts as $imageProduct)
                                    <div class="cbp-pagination-item cbp-pagination-active">
                                        <img src="{{ asset($imageProduct->takeImage()) }}" alt="">
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <table class="table table-responsive table-striped">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $firstlaptop->name }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $firstlaptop->description }}</td>
                                </tr>
                                <tr>
                                    <td>Brand</td>
                                    <td>{{ $firstlaptop->brand->name }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>Rp.{{ number_format($firstlaptop->price * (1 - $firstlaptop->disc / 100)) }} &nbsp; <del><span class="discount">Rp.{{ number_format($firstlaptop->price) }}</span></del> </td>
                                </tr>
                                <tr>
                                    <td>Graphics Card</td>
                                    <td>{{ $firstlaptop->graphics_card ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Processor</td>
                                    <td>{{ $firstlaptop->processor ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td>{{ $firstlaptop->ram ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Hardisk</td>
                                    <td>{{ $firstlaptop->hardisk ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>SSD</td>
                                    <td>{{ $firstlaptop->ssd ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Display</td>
                                    <td>{{ $firstlaptop->display ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Keyboard</td>
                                    <td>{{ $firstlaptop->keyboard ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Camera</td>
                                    <td>{{ $firstlaptop->camera ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Wifi</td>
                                    <td>{{ $firstlaptop->wifi ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Interfaces</td>
                                    <td>{!! $firstlaptop->interfaces ?? '-' !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">

                        <div id="slider_product_2" class="cbp margintop40">
                            <div class="cbp-item">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{ asset($secondlaptop->takeImage()) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            @php
                                $imageProducts = $secondlaptop->imageProducts;
                            @endphp
                            @if ($imageProducts->count())
                                @foreach ($imageProducts as $imageProduct)
                                    <div class="cbp-item">
                                        <div class="cbp-caption">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="{{ asset($imageProduct->takeImage()) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div id="js-pagination-slider_2">
                            @if ($imageProducts->count())
                                @foreach ($imageProducts as $imageProduct)
                                    <div class="cbp-pagination-item cbp-pagination-active">
                                        <img src="{{ asset($imageProduct->takeImage()) }}" alt="">
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <table class="table table-responsive table-striped">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $secondlaptop->name }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $secondlaptop->description }}</td>
                                </tr>
                                <tr>
                                    <td>Brand</td>
                                    <td>{{ $secondlaptop->brand->name }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>Rp.{{ number_format($secondlaptop->price * (1 - $secondlaptop->disc / 100)) }} &nbsp; <del><span class="discount">Rp.{{ number_format($secondlaptop->price) }}</span></del> </td>
                                </tr>
                                <tr>
                                    <td>Graphics Card</td>
                                    <td>{{ $secondlaptop->graphics_card ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Processor</td>
                                    <td>{{ $secondlaptop->processor ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td>{{ $secondlaptop->ram ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Hardisk</td>
                                    <td>{{ $secondlaptop->hardisk ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>SSD</td>
                                    <td>{{ $secondlaptop->ssd ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Display</td>
                                    <td>{{ $secondlaptop->display ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Keyboard</td>
                                    <td>{{ $secondlaptop->keyboard ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Camera</td>
                                    <td>{{ $secondlaptop->camera ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Wifi</td>
                                    <td>{{ $secondlaptop->wifi ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>Interfaces</td>
                                    <td>{!! $secondlaptop->interfaces ?? '-' !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endif
    {{-- End section special --}}

@endsection

@section('javascript')
    <script>
        $('.select2').select2();

        $('#slider_product_1').cubeportfolio({
            layoutMode: 'slider',
            drag: true,
            auto: false,
            autoTimeout: 5000,
            autoPauseOnHover: true,
            showNavigation: false,
            showPagination: false,
            rewindNav: true,
            scrollByPage: true,
            gridAdjustment: 'responsive',
            mediaQueries: [{
                width: 1,
                cols: 1
            }],
            gapHorizontal: 0,
            gapVertical: 0,
            caption: '',
            displayType: 'fadeIn',
            displayTypeSpeed: 400,

            plugins: {
                slider: {
                    pagination: '#js-pagination-slider_1',
                    paginationClass: 'cbp-pagination-active',
                }
            }
        });

        $('#slider_product_2').cubeportfolio({
            layoutMode: 'slider',
            drag: true,
            auto: false,
            autoTimeout: 5000,
            autoPauseOnHover: true,
            showNavigation: false,
            showPagination: false,
            rewindNav: true,
            scrollByPage: true,
            gridAdjustment: 'responsive',
            mediaQueries: [{
                width: 1,
                cols: 1
            }],
            gapHorizontal: 0,
            gapVertical: 0,
            caption: '',
            displayType: 'fadeIn',
            displayTypeSpeed: 400,

            plugins: {
                slider: {
                    pagination: '#js-pagination-slider_2',
                    paginationClass: 'cbp-pagination-active',
                }
            }
        });
    </script>
@endsection
