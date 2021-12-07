@extends('admins.layouts.app', ['pageActive' => 'admins.users.index', 'pageTitle' => 'Admins - Data Users'])

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
                    <h2 class="content-header-title float-start mb-0">Data Users</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">Admins</a>
                            </li>
                            <li class="breadcrumb-item active">Users
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
                <form method="get" action="{{ route('admins.users.index') }}">
                    <div class="row">
                        <div class="col-md-6 mb-1">
                            <label for="team_nama" class="form-label">Search by</label>
                            <div class="input-group">
                                <select id="searchBy" name="searchBy" class="form-select text-capitalize">
                                    <option value="name" class="text-capitalize">Name</option>
                                    <option value="username" class="text-capitalize">Username</option>
                                    <option value="address" class="text-capitalize">Address</option>
                                    <option value="status" class="text-capitalize">Status</option>
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
                        {{ $users->onEachSide(1)->withQueryString()->links() }}</div>
                </div>

                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Status</th>
                        <th>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" style="width:100%;">
                                <i data-feather="plus-square"></i>
                            </button>
                        </th>
                    </tr>
                    @foreach ($users as $user)
                        <tr id='tr_user_{{ $user->id }}'>
                            <td class="editable" id='td_name_{{ $user->id }}'>{{ $user->name }}</td>
                            <td class="editable" id='td_username_{{ $user->id }}'>{{ $user->username }}</td>
                            <td class="editable text-primary" id='td_password_{{ $user->id }}'>reset password</td>
                            <td class="editable" id='td_address_{{ $user->id }}'>{{ $user->address }}</td>
                            <td class="editable" id='td_phone_num_{{ $user->id }}'>{{ $user->phone_num }}</td>
                            <td id='td_status_{{ $user->id }}'>{{ $user->status }}</td>
                            <td>
                                <form action="{{ route('admins.users.changeUserStatus') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    @if ($user->status == 'active')
                                        <button type="submit" class="btn btn-outline-danger mt-1" style="width:100%;" name="status" value="suspended"><i data-feather="thumbs-down"></i>&nbsp;Suspend</button>
                                    @else
                                        <button type="submit" class="btn btn-outline-success mt-1" style="width:100%;" name="status" value="active"><i data-feather="thumbs-up"></i>&nbsp;Activate</button>
                                    @endif
                                </form>
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
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('admins.users.store') }}" id="adminsUsersStore">
                        @csrf

                        <div class="mb-1">
                            <label for="add_name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="add_name" placeholder="Name" tabindex="1" autofocus />
                        </div>
                        <div class="mb-1">
                            <label for="add_username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="add_username" placeholder="Username" tabindex="2" />
                        </div>
                        <div class="mb-1">
                            <label for="add_password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="add_password" placeholder="Password" tabindex="2" />
                        </div>
                        <div class="mb-1">
                            <label for="add_password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="add_password" placeholder="Password" tabindex="2" />
                        </div>

                        <div class="mb-1">
                            <label for="add_address" class="form-label">Address</label>
                            <input type="address" class="form-control" name="address" id="add_address" placeholder="Address" tabindex="2" />
                        </div>

                        <div class="mb-1">
                            <label for="add_phone_num" class="form-label">Phone Number</label>
                            <input type="phone_num" class="form-control" name="phone_num" id="add_phone_num" placeholder="Phone Number" tabindex="2" />
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button form="adminsUsersStore" type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
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
                        url: "{{ route('admins.users.updateInline') }}",
                        data: {
                            '_token': '<?php echo csrf_token(); ?>',
                            'id': id,
                            'fname': fname,
                            'value': data.content
                        },
                        success: function(data) {
                            alert(data.msg);
                            if (fname == 'password') $('#' + s_id).html("reset password");
                        }
                    })
                }
            }
        });
    </script>
@endsection
