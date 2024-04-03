<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use PDF;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //crea restriccion por los roles
    public function __construct()
    {
       $this->middleware('can:customers.index')->only('index');
       $this->middleware('can:customers.create')->only('create', 'store');
       $this->middleware('can:customers.edit')->only('edit', 'update');
       $this->middleware('can:customers.destroy')->only('destroy');
    }


    public function index()
    {
        $customers = Customer::all();
        return view('customer.index')->with('customers',$customers);
    }

    public function pdf()
    {
        $customers = Customer::all();

        $pdf = PDF::loadView('customer.pdf', ['customers'=>$customers]);
        return $pdf->stream();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customers = new Customer();
        $customers->customer_name = $request->get('customer_name');
        $customers->email = $request->get('email');
        $customers->phone = $request->get('phone');
        $customers->address = $request->get('address');

        $customers->save();

        return redirect('/customers');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('customer.edit')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);

        $customer->customer_name = $request->get('customer_name');
        $customer->email = $request->get('email');
        $customer->phone = $request->get('phone');
        $customer->address = $request->get('address');

        $customer->save(); //sirve para grabar los cambios

        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customers')->with('info', 'El cliente se eliminó con éxito');
   
    }
}
