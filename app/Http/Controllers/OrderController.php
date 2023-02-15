<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateOrderRequest;
use App\Models\Delivery;
use App\Models\Order_Lines;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Customer;


class OrderController extends Controller
{
    public function home()
    {
        $orders = Order::with("customer")->paginate(25);
        $customers = Customer::paginate(25);

        return view('order.index', compact('orders', 'customers'));
    }

    public function store(UpdateOrderRequest $request)
    {

        Order::create($request->validated());

        return redirect()->route('order.index');
    }
    public function edit(int $orderId)
    {
        $customers = Customer::all();
        $order = Order::find($orderId);

        return view('order.edit', compact("order", 'customers'));
    }
    public function update(UpdateOrderRequest $request, $orderId)
    {

        $order = Order::find($orderId);
        $order->customer_id = $request->get('customer_id');
        $order->number = $request->get('number');
        $order->save();


//        Order::findOrFail($orderId)->update($request->validated());

        return redirect()->route("order.index");
    }

    public function destroy(int $orderId)
    {
        Order_Lines::where('order_id', $orderId)->delete();
        Delivery::where('order_id', $orderId)->delete();
        Order::destroy($orderId);

        return redirect()->route("order.index");
    }




}
