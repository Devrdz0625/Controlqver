<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //crea restriccion por los roles
  public function __construct()
  {
     $this->middleware('can:vendors.index')->only('index');
     $this->middleware('can:vendors.create')->only('create', 'store');
     $this->middleware('can:vendors.edit')->only('edit', 'update');
     $this->middleware('can:vendors.destroy')->only('destroy');
  } 

    public function index()
    {
        $vendors = Vendor::all();
        return view('vendor.index')->with('vendors',$vendors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vendors = new Vendor();
        $vendors->name = $request->get('name');
        $vendors->phone = $request->get('phone');
        $vendors->email = $request->get('email');
        $vendors->address = $request->get('address');

        $vendors->save();

        return redirect('/vendors');
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
        $vendor = Vendor::find($id);
        return view('vendor.edit')->with('vendor', $vendor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vendor = Vendor::find($id);

        $vendor->name = $request->get('name');
        $vendor->phone = $request->get('phone');
        $vendor->email = $request->get('email');
        $vendor->address = $request->get('address');

        $vendor->save(); //sirve para grabar los cambios

        return redirect('/vendors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendor = Vendor::find($id);
        $vendor->delete();
        return redirect('/vendors')->with('info', 'El encargado de área se eliminó con éxito');
    }
}
