@extends('customers.layouts.app')

@section('content')
    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Orders</li>
                        <li class="active">History</li>
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
                    <h4 class="heading uppercase marginbottom15">Order Histories</h4>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-3">Status</dt>
                                    @php
                                        if ($order->status == 'completed') {
                                            $statusColor = 'text-success';
                                        } elseif ($order->status == 'delivering') {
                                            $statusColor = 'text-warning';
                                        } elseif ($order->status == 'waiting') {
                                            $statusColor = 'text-warning';
                                        } elseif ($order->status == 'cancelled') {
                                            $statusColor = 'text-danger';
                                        }
                                    @endphp
                                    <dd class="col-sm-9 {{ $statusColor }}">{{ $order->status }}</dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-3">Order Date</dt>
                                    <dd class="col-sm-9">{{ $order->orderdate }}</dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-3">Employee</dt>
                                    <dd class="col-sm-9">{{ $order->employee ? $order->employee->name : '-' }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p>Order Details</p>
                    <table class="table">
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                        @foreach ($order->orderdetails as $orderdetail)
                            <tr>
                                <td>{{ $orderdetail->name }}</td>
                                <td>{{ $orderdetail->pivot->qty }}</td>
                                <td>{{ number_format($orderdetail->pivot->subtotal) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <th>Grand Total</th>
                            <td>{{ number_format($order->grand_total) }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('customers.orders.history') }}" class="btn btn-primary me-1">Back</a>
                </div>
            </div>
        </div>
    </section>
@endsection
