<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrderController extends Controller
{
    public function getWaitingCount()
    {
        $this->authorize('checkemployee');
        $waiting_orders = count(Order::where('status', "waiting")->get());
        return response()->json(array(
            'waiting_orders' => $waiting_orders,
        ), 200);
    }

    public function index()
    {
        $this->authorize('checkemployee');
        $orders = new Order();
        $orders = $orders->join('users as customer', 'orders.customer_id', '=', 'customer.id')->leftJoin('users as employee', 'orders.employee_id', '=', 'employee.id');
        if (request('keyword')) {
            $wildcards = '%' . request('keyword') . '%';
            $orders = $orders->where(request('searchBy'), 'like', $wildcards);
        }
        if (request('status')) {
            $orders = $orders->whereIn('orders.status', request('status'));
        }
        $orders = $orders->select('orders.*')->paginate(12);
        return view('admins.orders.index', compact('orders'));
    }

    public function read(Order $order)
    {
        $this->authorize('checkemployee');
        return view('admins.orders.read', compact('order'));
    }

    public function changeStatus(Request $request)
    {
        $this->authorize('checkemployee');
        $order = Order::find($request['id']);
        if($request['employee_id']) $order->employee_id = $request['employee_id'];
        $order->status = $request['status'];
        $order->save();
        session()->flash('success', 'Order Status has been changed Successfuly');
        return back();
    }

    public function create()
    {
        $this->authorize('checkemployee');
        return view('admins.orders.create');
    }

    public function store(Request $request)
    {
        $this->authorize('checkemployee');
        $data = $request->all();
        Order::create($data);
        session()->flash('success', 'New Order Succesfully Created');
        return redirect()->to(route('admins.orders.index'));
    }

    public function show(Order $order)
    {
        $this->authorize('checkemployee');
        return view('admins.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $this->authorize('checkemployee');
        return view('admins.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $this->authorize('checkowner');
        $attr = $request->all();
        $order->update($attr);
        session()->flash("success", "Order $order->id successfuly updated");
        return back();
    }

    public function destroy(Order $order)
    {
        $this->authorize('checkowner');
        $order->delete();
        session()->flash('success', "Order $order->id successfuly deleted");
        return redirect()->to(route('admins.orders.index'));
    }

    public function destroyNoReload(Request $request)
    {
        $this->authorize('checkowner');
        $order = Order::find($request['id']);
        File::delete($order->takeImage());
        $order->delete();
        return response()->json(array(
            'msg' => "Success"
        ), 200);
    }
}
