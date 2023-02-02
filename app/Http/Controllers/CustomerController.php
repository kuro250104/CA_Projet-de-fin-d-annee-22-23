<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function home()
    {
        $customers = Customer::paginate(25);
        // dd($customers);
        return view('customer.customers', compact("customers"));
    }
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact("customers"));
    }
    public function create(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->get('name');
        $customer->code = $request->get('code');
        $customer->save();

        return redirect()->route('customer.customers');
    }
}
