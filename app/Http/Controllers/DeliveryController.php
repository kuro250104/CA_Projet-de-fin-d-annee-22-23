<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Order;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function home()
    {
        $deliveries = Delivery::paginate(25);


        return view('delivery.index', compact('deliveries'));
    }
}
