<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Customer;


class OrderController extends Controller
{
    public function home()
    {
        $orders = Order::all();
        $customers = Customer::all();
        return view('order.orders', compact('orders', 'customers'));
    }

    public function create(Request $request)
    {
        $order = new Order();
        $order->customer_id = $request->get('customer_id');
        $order->number = $request->get('number');
        $order->save();

        return redirect()->route('order.orders');
    }
   
}
