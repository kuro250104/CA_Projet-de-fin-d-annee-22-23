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
        return view('customer.index', compact("customers"));
    }
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact("customers"));
    }
    public function create(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->post('name');
        $customer->code = $request->post('code');
        $customer->save();

        return redirect()->route('customer.index');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit', compact("customer"));
    }
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->get('name');
        $customer->code = $request->get('code');
        $customer->save();

        return redirect()->route("customer.index");
    }
    public function delete(Request $request)
    {
        Customer::destroy( $request->get('customer_id') );

        return redirect()->route("customer.index");
    }
}
