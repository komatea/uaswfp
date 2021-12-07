@extends('admins.layouts.app', ['pageActive' => 'admins.products.index', 'pageTitle' => 'Admins - Data Products'])

@section('header')
    <style>
        ul {
            margin: 0;
        }

    </style>
@endsection

@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Data Products</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">Admins</a>
                            </li>
                            <li class="breadcrumb-item active">Products
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">

        <div class="card">
            <div class="card-body">
                @include('admins.layouts.alert')
                <h4 class="card-title mt-2">Search &amp; Filter</h4>
                <form method="get" action="{{ route('admins.products.index') }}">
                    <div class="row">
                        <div class="col-md-6 mb-1">
                            <label for="team_nama" class="form-label">Search by</label>
                            <div class="input-group">
                                <select id="searchBy" name="searchBy" class="form-select text-capitalize">
                                    <option value="name" class="text-capitalize">Name</option>
                                    <option value="brands.name" class="text-capitalize">Brand</option>
                                    <option value="categories.name" class="text-capitalize">Category</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Keyword" name="keyword" value="{{ session('keyword') ?? '' }}">
                                <button class="btn btn-outline-primary waves-effect" type="submit"><i data-feather="search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="card-body">
                <div class="divider mb-4">
                    <div class="divider-text">
                        {{ $products->onEachSide(1)->withQueryString()->links() }}</div>
                </div>

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>
                            <a class="btn btn-success" href="{{ route('admins.products.create') }}" style="width:100%;">
                                <i data-feather="plus-square"></i>
                            </a>
                        </th>
                    </tr>
                    @foreach ($products as $product)
                        <tr id='tr_product_{{ $product->id }}'>
                            <td id='td_id_{{ $product->id }}'>{{ $product->id }}</td>
                            <td id='td_name_{{ $product->id }}'>{{ $product->name }}</td>
                            <td id='td_brand_{{ $product->id }}'>{{ $product->brand->name }}</td>
                            <td id='td_category_{{ $product->id }}'>{{ $product->category->name }}</td>
                            <td width="8%">
                                <a class="btn btn-outline-primary" href="{{ route('admins.products.edit', $product->slug) }}" style="width:100%;">
                                    <i data-feather="edit"></i></a>
                                <button class="btn btn-outline-danger mt-1" onclick="if(!confirm('Delete the data?')) return false; else destroyNoReload({{ $product->id }})" style="width:100%;">
                                    <i data-feather="trash-2"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


    {{-- MODAL ADD --}}
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('admins.products.store') }}" id="adminsProductsStore">
                        @csrf

                        <div class="mb-1">
                            <label for="add_name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="add_name" placeholder="Name" aria-describedby="name" tabindex="1" autofocus />
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button form="adminsProductsStore" type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF MODAL ADD --}}




@endsection

@section('script')
    <script>
        function destroyNoReload(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('admins.products.destroyNoReload') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id,
                },
                success: function(data) {
                    alert(data.msg);
                    if (data.status = "success")
                        $('#tr_product_' + id).remove();
                }
            });
        }
    </script>
@endsection
