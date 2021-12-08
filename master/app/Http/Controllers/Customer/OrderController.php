<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('customers.orders.checkout');
    }
    
    public function history()
    {
        $this->authorize('checkmember');

        $orders = Order::where('customer_id', '=', auth()->user()->id)->paginate(6);
        return view('customers.orders.history', compact('orders'));
    }

    public function historydetail(Order $order)
    {
        $this->authorize('checkmember');

        return view('customers.orders.historydetail', compact('order'));
    }

    public function checkoutSubmit()
    {
        $this->authorize('checkmember');

        $cart = session()->get('cart');
        $user = Auth::user();
        $order = new Order;
        $order->orderdate = Carbon::now()->toDateTimeString();
        $order->customer_id = $user->id;
        $order->status = 'waiting';
        $order->save();
        $totalHarga = $order->insertProduct($cart, $order->id);
        $order->grand_total = $totalHarga;
        $order->save();

        session()->forget('cart');
        return redirect()->route('customers.orders.history');
    }
}
