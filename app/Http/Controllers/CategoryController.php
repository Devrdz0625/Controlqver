<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
      //crea restriccion por los roles
      public function __construct()
      {
         $this->middleware('can:categorys.index')->only('index');
         $this->middleware('can:categorys.create')->only('create', 'store');
         $this->middleware('can:categorys.edit')->only('edit', 'update');
         $this->middleware('can:categorys.destroy')->only('destroy');
      }
      
    public function index()
    {
        $categorys = Category::all();
        return view('category.index')->with('categorys',$categorys);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorys = new Category();
        $categorys->name = $request->get('name');

        $categorys->save();

        return redirect('/categorys');
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
        $category = Category::find($id);
        return view('category.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);

        $category->name = $request->get('name');

        $category->save(); //sirve para grabar los cambios

        return redirect('/categorys');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categorys')->with('info', 'La categoría se eliminó con éxito');
    }
}
