<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admins.orders.index');
    }

    public function create()
    {
        return view('admins.orders.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Order::create($data);
        session()->flash('success', 'New Order Succesfully Created');
        return redirect()->to(route('admins.orders.index'));
    }

    public function show(Order $order)
    {
        return view('admins.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('admins.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $attr = $request->all();
        $order->update($attr);
        session()->flash("success", "Order $order->id successfuly updated");
        return back();
    }

    public function destroy(Order $order)
    {
        $order->delete();
        session()->flash('success', "Order $order->id successfuly deleted");
        return redirect()->to(route('admins.orders.index'));
    }
}
