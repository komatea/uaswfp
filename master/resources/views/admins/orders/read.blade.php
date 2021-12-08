@extends('admins.layouts.app', ['pageActive' => 'admins.orders.index', 'pageTitle' => 'Admins - Read Data Orders'])

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
                    <h2 class="content-header-title float-start mb-0">Read Orders</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">Admin</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('admins.orders.index') }}">Orders</a>
                            </li>
                            <li class="breadcrumb-item active">Read
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">

        @include('admins.layouts.alert')

        <div class="card">
            <div class="card-body">
                <div class="divider">
                    <div class="divider-text">Order Information</div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $order->customer->name }}'s Order <small class="text-muted">{{ $order->orderdate }}</small></h4>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-3">Grand Total</dt>
                                <dd class="col-sm-9">Rp. {{ $order->grand_total }}</dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Employee</dt>
                                <dd class="col-sm-9">{{ $order->employee ? $order->employee->name : '-' }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <table class="table">
                    <tr>
                        <th>Product</th>
                        <th class="text-end">Quantity</th>
                        <th class="text-end">Subtotal</th>
                    </tr>
                    @foreach ($order->orderdetails as $orderdetail)
                        <tr>
                            <td>{{ $orderdetail->name }}</td>
                            <td class="text-end">{{ number_format($orderdetail->pivot->qty) }}</td>
                            <td class="text-end">Rp. {{ number_format($orderdetail->pivot->subtotal) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <th class="text-end">Total</th>
                        <td class="text-end">Rp. {{ number_format($order->grand_total) }}</td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="divider">
                    <div class="divider-text">Change Status</div>
                </div>
                <div class="d-flex justify-content-center">
                    <form method="post" action="{{ route('admins.orders.changeStatus') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $order->id }}">
                        @auth
                            <input type="hidden" name="employee_id" value="{{ auth()->user()->id }}">
                        @endauth
                        <button type="submit" name="status" value="completed" class="btn {{ $order->status == 'completed' ? 'btn-success' : 'btn-outline-success' }} me-1">Completed</button>
                        <button type="submit" name="status" value="delivering" class="btn {{ $order->status == 'delivering' ? 'btn-warning' : 'btn-outline-warning' }} me-1">Delivering</button>
                        <button type="submit" name="status" value="waiting" class="btn {{ $order->status == 'waiting' ? 'btn-secondary' : 'btn-outline-secondary' }} me-1">Waiting</button>
                        <button type="submit" name="status" value="cancel" class="btn {{ $order->status == 'cancel' ? 'btn-danger' : 'btn-outline-danger' }} me-1">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <a href="{{ route('admins.orders.index') }}" class="btn btn-secondary me-1">Back to Home</a>

    </div>





@endsection

@section('script')
    <script>
        var loadFile = function(image_id, event) {
            var image = document.getElementById(image_id);
            image.src = URL.createObjectURL(event.target.files[0]);
            $('#text_main_image').html(event.target.files[0].name);
        };
    </script>
@endsection
