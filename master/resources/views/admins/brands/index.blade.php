@extends('admins.layouts.app', ['pageActive' => 'admins.brands.index', 'pageTitle' => 'Admins - Data Brands'])

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
                    <h2 class="content-header-title float-start mb-0">Data Brands</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admins</a>
                            </li>
                            <li class="breadcrumb-item active">Brands
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
                <form method="get" action="{{ route('admins.brands.index') }}">
                    <div class="row">
                        <div class="col-md-6 mb-1">
                            <label for="team_nama" class="form-label">Search by</label>
                            <div class="input-group">
                                <select id="searchBy" name="searchBy" class="form-select text-capitalize">
                                    <option value="name" class="text-capitalize">Name</option>
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
                        {{ $brands->onEachSide(1)->withQueryString()->links() }}</div>
                </div>

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Image</th>
                        <th>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" style="width:100%;">
                                <i data-feather="plus-square"></i>
                            </button>
                        </th>
                    </tr>
                    @foreach ($brands as $brand)
                        <tr id='tr_brand_{{ $brand->id }}'>
                            <td id='td_id_{{ $brand->id }}'>{{ $brand->id }}</td>
                            <td class="editable" id='td_name_{{ $brand->id }}'>{{ $brand->name }}</td>
                            <td id='td_logo_image_{{ $brand->id }}'>
                                <form action="{{ route('admins.brands.changeImage') }}" class='d-none' method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $brand->id }}">
                                    <input type="file" id="changeImage_{{ $brand->id }}" name="logo_image" onchange="document.getElementById('changeImageButton_{{ $brand->id }}').click()">
                                    <button type="submit" id="changeImageButton_{{ $brand->id }}"></button>
                                </form>
                                <button class="btn" onclick="document.getElementById('changeImage_{{ $brand->id }}').click()">
                                    <img src='{{ asset($brand->takeImage()) }}' alt='Logo Brand' height='50px'>
                                </button>
                            </td>
                            <td width="8%">
                                <button class="btn btn-outline-danger mt-1" onclick="if(!confirm('Delete the data?')) return false; else destroyNoReload({{ $brand->id }})" style="width:100%;">
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
                    <h4 class="modal-title">Add Brand</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('admins.brands.store') }}" id="adminsBrandsStore">
                        @csrf

                        <div class="mb-1">
                            <label for="add_name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="add_name" placeholder="Name" aria-describedby="name" tabindex="1" autofocus />
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button form="adminsBrandsStore" type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div>
    {{-- END OF MODAL ADD --}}




@endsection

@section('script')
    <script>
        $('.editable').editable({
            closeOnEnter: true,
            callback: function(data) {
                if (data.content) {
                    var s_id = data.$el[0].id;
                    var splitted = s_id.split('_');
                    var id = splitted.at(-1);
                    splitted.shift();
                    splitted.pop();
                    var fname = splitted.join("_");

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('admins.brands.updateInline') }}",
                        data: {
                            '_token': '<?php echo csrf_token(); ?>',
                            'id': id,
                            'fname': fname,
                            'value': data.content
                        },
                        success: function(data) {
                            alert(data.msg);
                        }
                    })
                }
            }
        });

        function destroyNoReload(id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('admins.brands.destroyNoReload') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id,
                },
                success: function(data) {
                    alert(data.msg);
                    if (data.status = "success")
                        $('#tr_brand_' + id).remove();
                }
            });
        }
    </script>
@endsection