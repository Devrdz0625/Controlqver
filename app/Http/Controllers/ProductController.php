<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
  //crea restriccion por los roles
  public function __construct()
  {
     $this->middleware('can:products.index')->only('index');
     $this->middleware('can:products.create')->only('create', 'store');
     $this->middleware('can:products.edit')->only('edit', 'update');
     $this->middleware('can:products.destroy')->only('destroy');
  }

    public function store(Request $request)
    {
        $products = new Product();
        $products->category_id = $request->get('category_id');
        $products->product_name = $request->get('product_name');
        $products->details = $request->get('details');

        $products->save();

        return redirect('/products');

        
        
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
        $product = Product::find($id);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $product->category_id = $request->get('category_id');
        $product->product_name = $request->get('product_name');
        $product->details = $request->get('details');


        $product->save(); //sirve para grabar los cambios

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('info', 'El servicio se eliminó con éxito');
    
    }
}
