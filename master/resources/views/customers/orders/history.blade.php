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
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order Date</th>
                                    <th>Grand Total</th>
                                    <th>Employee</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->orderdate }}</td>
                                    <td class="product-name">Rp. {{ number_format($order->grand_total) }}</td>
                                    <td><p>{{ $order->employee ? $order->employee->name : "-" }}</p></td>
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
                                    <td class="{{ $statusColor }}">{{ $order->status }}</td>
                                    <td class="text-center"><a class="btn btn-primary" href="{{ route('customers.orders.historydetail', $order->id) }}">Show Detail</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $orders->onEachSide(1)->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
