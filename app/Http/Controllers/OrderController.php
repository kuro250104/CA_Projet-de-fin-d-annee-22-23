<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function home()
    {
        $orders = Order::all();
        return view('order.orders', compact('orders'));
    }
}
