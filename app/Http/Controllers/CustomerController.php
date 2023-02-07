<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Order;
use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function home()
    {
        $customers = Customer::paginate(25);

        return view('customer.index', compact("customers"));
    }
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', compact("customers"));
    }
    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->validated());

        return redirect()->route('customer.index');
    }

    public function edit(int $customerId)
    {
        $customer = Customer::find($customerId);

        return view('customer.edit', compact("customer"));
    }
    public function update(UpdateCustomerRequest $request,int $customerId)
    {
        Customer::findOrFail($customerId)->update($request->validated());

        return redirect()->route("customer.index");
    }
    public function destroy(int $customerId)
    {
        if(count(Order::where('customer_id', $customerId)->get()) >0) {
            return redirect()->back()->with('error', 'Le client a des commandes en cours.');
        }
        Customer::destroy($customerId);

        return redirect()->route("customer.index");
    }
}
