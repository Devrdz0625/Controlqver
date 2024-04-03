<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
           //crea restriccion por los roles
  public function __construct()
  {
     $this->middleware('can:roles.index')->only('index');
     $this->middleware('can:roles.create')->only('create', 'store');
     $this->middleware('can:roles.edit')->only('edit', 'update');
     $this->middleware('can:roles.destroy')->only('destroy');
  }

    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create($request->all()); //se crea un nuevo rol

        $role->permissions()->sync($request->permissions); //asignamos distintos permisos a ese nuevo rol

        return redirect()->route('roles.edit', $role)->with('info', 'El rol se creó con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role->update($request->all());

        $role->permissions()->sync($request->permissions); //asignamos distintos permisos a ese nuevo rol

        return redirect()->route('roles.edit', $role)->with('info', 'El rol se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('info', 'El rol se eliminó con éxito');
    }
}
