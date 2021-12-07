@extends('admins.layouts.app', ['pageActive' => 'admins.orders.index', 'pageTitle' => 'Admins - Data Orders'])

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
                    <h2 class="content-header-title float-start mb-0">Data Orders</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">Admin</a>
                            </li>
                            <li class="breadcrumb-item active">Orders
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
                <form method="get" action="{{ route('admins.orders.index') }}">
                    <div class="row mb-1">
                        <div class="col-md-6 mb-4">
                            <label for="team_nama" class="form-label">Status</label>
                            <div class="d-flex align-items-center h-100">
                                <div class="form-check form-check-inline form-check-success">
                                    <input id="checkStatusCompleted" class="form-check-input" type="checkbox" name="status[]" value="completed" {{ request('status') ? (in_array('completed', request('status')) ? ' checked' : '') : '' }}><label class="form-check-label" for="checkStatusCompleted">Completed</label>
                                </div>
                                <div class="form-check form-check-inline form-check-warning">
                                    <input id="checkStatusDelivering" class="form-check-input" type="checkbox" name="status[]" value="delivering" {{ request('status') ? (in_array('delivering', request('status')) ? ' checked' : '') : '' }}><label class="form-check-label" for="checkStatusDelivering">Delivering</label>
                                </div>
                                <div class="form-check form-check-inline form-check-secondary">
                                    <input id="checkStatusWaiting" class="form-check-input" type="checkbox" name="status[]" value="waiting" {{ request('status') ? (in_array('waiting', request('status')) ? ' checked' : '') : '' }}><label class="form-check-label" for="checkStatusWaiting">Waiting</label>
                                </div>
                                <div class="form-check form-check-inline form-check-danger">
                                    <input id="checkStatusCancelled" class="form-check-input" type="checkbox" name="status[]" value="cancelled" {{ request('status') ? (in_array('cancelled', request('status')) ? ' checked' : '') : '' }}><label class="form-check-label" for="checkStatusCancelled">Cancelled</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <label class="form-label">Search by</label>
                            <div class="input-group">
                                <select id="searchBy" name="searchBy" class="form-select text-capitalize">
                                    <option value="customer.name" class="text-capitalize">Customer</option>
                                    <option value="employee.name" class="text-capitalize">Employee</option>
                                    <option value="orders.orderdate" class="text-capitalize">Order Date</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Keyword" name="keyword" value="{{ session('keyword') ?? '' }}">
                                <button class="btn btn-outline-primary waves-effect" type="submit"><i data-feather="search"></i></button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                    <div class="col-md-6 mb-1">
                        <label for="team_nama" class="form-label">Search by</label>
                        <div class="input-group">
                            <select id="searchBy" name="searchBy" class="form-select text-capitalize">
                                <option value="customer.name" class="text-capitalize">Customer</option>
                                <option value="employee.name" class="text-capitalize">Employee</option>
                                <option value="orders.orderdate" class="text-capitalize">Order Date</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Keyword" name="keyword" value="{{ session('keyword') ?? '' }}">
                            <button class="btn btn-outline-primary waves-effect" type="submit"><i data-feather="search"></i></button>
                        </div>
                    </div>
                </div> --}}
                </form>

            </div>

            <div class="card-body">
                <div class="divider mb-4">
                    <div class="divider-text">
                        {{ $orders->onEachSide(1)->withQueryString()->links() }}</div>
                </div>

                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Order Date</th>
                        <th>Grand Total</th>
                        <th>Employee</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                    @foreach ($orders as $order)
                        <tr id='tr_order_{{ $order->id }}'>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->customer->name }}</td>
                            <td>{{ $order->orderdate }}</td>
                            <td>{{ $order->grand_total }}</td>
                            <td>{{ $order->employee ? $order->employee->name : '-' }}</td>
                            @php
                                if ($order->status == 'completed') {
                                    $statusBadgeColor = 'badge-light-success';
                                } elseif ($order->status == 'delivering') {
                                    $statusBadgeColor = 'badge-light-warning';
                                } elseif ($order->status == 'waiting') {
                                    $statusBadgeColor = 'badge-light-secondary';
                                } elseif ($order->status == 'cancelled') {
                                    $statusBadgeColor = 'badge-light-danger';
                                }
                            @endphp
                            <td><span class="badge{{ " $statusBadgeColor" }}">{{ $order->status }}</span></td>
                            <td width="8%">
                                <a class="btn btn-outline-primary" href="{{ route('admins.orders.read', $order->id) }}" style="width:100%;"><i data-feather="book"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
    </script>
@endsection
