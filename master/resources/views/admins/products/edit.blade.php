@extends('admins.layouts.app', ['pageActive' => 'admins.products.index', 'pageTitle' => 'Admins - Edit Data Products'])

@section('header')
    <style>
        ul {
            margin: 0;
        }

        .swiper {
            width: 600px;
            height: 300px;
        }

    </style>
@endsection
@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Edit Products</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">Admins</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('admins.products.index') }}">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Edit
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">

        @include('admins.layouts.alert')


        <form method="post" action="{{ route('admins.products.update', $product->slug) }}" id="adminsProductsStore" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="card">
                <div class="card-body">
                    <div class="divider">
                        <div class="divider-text">Mandatory Information</div>
                    </div>
                    <div class="mb-1">
                        <label for="add_name" class="form-label">Name</label>
                        <input id="add_name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" tabindex="1" autofocus value="{{ old('name') ?? $product->name }}" />
                        @error('name')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>

                    <div class="mb-1">
                        <label for="add_price" class="form-label">Price (in Rupiah, without coma)</label>
                        <input id="add_price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="10000000" tabindex="2" value="{{ old('price') ?? $product->price }}" />
                        @error('price')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>

                    <div class="mb-1">
                        <label for="add_disc" class="form-label">Discount (in 0-100%, 0 = no discount)</label>
                        <input id="add_disc" type="text" class="form-control @error('disc') is-invalid @enderror" name="disc" placeholder="5%" tabindex="3" value="{{ old('disc') ?? $product->disc }}" />
                        @error('disc')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>

                    <div class="mb-1">
                        <label for="add_description" class="form-label">Description</label>
                        <textarea id="add_description" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" tabindex="4" rows="3">{{ old('description') ?? $product->description }}</textarea>
                        @error('description')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>
                    <div class="mb-1">
                        <label for="add_slug" class="form-label">Slug</label>
                        <input id="add_slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="Slug" tabindex="15" value="{{ old('slug') ?? $product->slug }}" />
                        @error('slug')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>

                    <div class="mb-1">
                        <label for="add_main_image" class="form-label">Main Image</label><br>
                        <label for="add_main_image" class="btn btn-outline-primary" id="text_main_image">{{ $product->main_image }}</label><br>
                        <input id="add_main_image" type="file" class="d-none" name="main_image" tabindex="16" onchange="loadFile('display_main_image', event)" />
                        <img id="display_main_image" style="max-height: 200px;" src="{{ asset($product->takeImage()) }}" />
                        @error('main_image')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>

                    <div class="mb-1">
                        <label for="add_main_image" class="form-label">Brand</label>
                        <select class="form-select select2" name="brand_id" id="">
                            @foreach ($brands as $brand)
                                @if ($brand->id == $product->brand->id)
                                    <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                @else
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="add_main_image" class="form-label">Category</label>
                        <select class="form-select select2" name="category_id" id="">
                            @foreach ($categories as $category)
                                @if ($category->id == $product->category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="add_weight" class="form-label">Weight</label>
                        <input id="add_weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" placeholder="Weight" tabindex="14" value="{{ old('weight') ?? $product->weight }}" />
                        @error('weight')<span class="text-danger" role="alert"><small>{{ $message }}</small></span>@enderror
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="divider">
                        <div class="divider-text">Optional Information</div>
                    </div>
                    <div class="mb-1">
                        <label for="add_interfaces" class="form-label">Interfaces</label>
                        <textarea id="add_interfaces" class="form-control" name="interfaces" placeholder="Interfaces" tabindex="5" rows="2">{{ old('interfaces') ?? $product->interfaces }}</textarea>
                    </div>

                    <div class="mb-1">
                        <label for="add_graphics_card" class="form-label">Graphics Card</label>
                        <input id="add_graphics_card" type="text" class="form-control" name="graphics_card" placeholder="Graphics Card" tabindex="6" value="{{ old('graphics_card') ?? $product->graphics_card }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_processor" class="form-label">Processor</label>
                        <input id="add_processor" type="text" class="form-control" name="processor" placeholder="Processor" tabindex="7" value="{{ old('processor') ?? $product->processor }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_display" class="form-label">Display</label>
                        <input id="add_display" type="text" class="form-control" name="display" placeholder="Display" tabindex="8" value="{{ old('display') ?? $product->display }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_ram" class="form-label">RAM</label>
                        <input id="add_ram" type="text" class="form-control" name="ram" placeholder="RAM" tabindex="9" value="{{ old('ram') ?? $product->ram }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_hardisk" class="form-label">Hardisk</label>
                        <input id="add_hardisk" type="text" class="form-control" name="hardisk" placeholder="Hardisk" tabindex="9" value="{{ old('hardisk') ?? $product->hardisk }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_ssd" class="form-label">SSD</label>
                        <input id="add_ssd" type="text" class="form-control" name="ssd" placeholder="SSD" tabindex="9" value="{{ old('ssd') ?? $product->ssd }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_keyboard" class="form-label">Keyboard</label>
                        <input id="add_keyboard" type="text" class="form-control" name="keyboard" placeholder="Keyboard" tabindex="10" value="{{ old('keyboard') ?? $product->keyboard }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_camera" class="form-label">Camera</label>
                        <input id="add_camera" type="text" class="form-control" name="camera" placeholder="Camera" tabindex="11" value="{{ old('camera') ?? $product->camera }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_wifi" class="form-label">Wifi</label>
                        <input id="add_wifi" type="text" class="form-control" name="wifi" placeholder="Wifi" tabindex="12" value="{{ old('wifi') ?? $product->wifi }}" />
                    </div>

                    <div class="mb-1">
                        <label for="add_speaker" class="form-label">Speaker</label>
                        <input id="add_speaker" type="text" class="form-control" name="speaker" placeholder="Speaker" tabindex="13" value="{{ old('speaker') ?? $product->speaker }}" />
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body d-flex justify-content-end">
                    <a href="{{ route('admins.products.index') }}" class="btn btn-danger me-1">Cancel</a>
                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                </div>
            </div>

        </form>

    </div>

    <div class="card">
        <div class="card-body">
            <!-- Responsive Breakpoints swiper -->
            <section id="component-swiper-responsive-breakpoints">
                <div class="card">
                    <div class="card-header flex-column gap-1">
                        <form action="{{ route('admins.products.addImageProduct') }}" class='d-none' method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="file" id="addImageProduct" name="image_product" onchange="document.getElementById('addImageProductButton').click()">
                            <button type="submit" id="addImageProductButton"></button>
                        </form>
                        <h4 class="card-title">Product Images</h4>
                        <label for="addImageProduct" class="btn btn-outline-primary">Add Product Images</label><br>
                    </div>
                    <div class="card-body">
                        <div class="swiper-responsive-breakpoints swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($product->imageProducts as $imageProduct)
                                    <div class="swiper-slide d-flex flex-column justify-content-center">
                                        <img style="float: left;" class="img-fluid" src="{{ asset($imageProduct->takeImage()) }}" alt="banner" />
                                        <button type="button" onclick="if(!confirm('Delete the data?')) return false; else deleteImageProduct({{ $imageProduct->id }})" class="btn btn-outline-danger btm-sm"><i data-feather="trash"></i></button>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination" style="position:relative; padding-top: 30px;"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Responsive Breakpoints swiper -->
        </div>
    </div>





@endsection

@section('script')
    <script>
        function deleteImageProduct(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('admins.products.destroyImageProduct') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id,
                },
                success: function(data) {
                    alert(data.msg);
                    location.reload();
                }
            });
        }
        var loadFile = function(image_id, event) {
            var image = document.getElementById(image_id);
            image.src = URL.createObjectURL(event.target.files[0]);
            $('#text_main_image').html(event.target.files[0].name);
        };
    </script>
@endsection
