<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use PDF;
use Maatwebsite\Excel\Facade\Excel;
use App\exports\ServicioExport;


use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */

       //crea restriccion por los roles
  public function __construct()
  {
     $this->middleware('can:servicios.index')->only('index');
     $this->middleware('can:servicios.create')->only('create', 'store');
     $this->middleware('can:servicios.edit')->only('edit', 'update');
     $this->middleware('can:servicios.destroy')->only('destroy');
  }

    public function index()
    {
        $servicios = Servicio::all();
        return view('servicio.index')->with('servicios',$servicios);
    }

    public function pdf()
    {
        $servicios = Servicio::all();

        $pdf = PDF::loadView('servicio.pdf', ['servicios'=>$servicios]);
        return $pdf->stream();

    }

    //  public function excel()
    // {
    //      return excel::download(new ServicioExport, 'servicios.xlsx');
    //  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servicios = new Servicio();
        $servicios->fecha = $request->get('fecha');
        $servicios->categoria = $request->get('categoria');
        $servicios->servicio = $request->get('servicio');
        $servicios->cantidad = $request->get('cantidad');
        $servicios->cliente = $request->get('cliente');
        $servicios->monto = $request->get('monto');
        $servicios->archivo = $request->file('archivo')->store('public/archivos');
        $servicios->realizo = $request->get('realizo');

        // $url = Storage::url($servicios->archivo);
        // Servicio::create([
        //     'archivo' => $url
        // ]);

        $servicios->save();
        // $save = new Servicio;
        // $array = explode('public',$servicios->archivo);
        // $save->servicios = 'storage'. $array[1];
        return redirect('/servicios');
    }

    // public function download($id)
    // {
    //     $servicio = Servicio::where('id', $id)->firstOrFail();
    //     $pathToFile = storage_path('app/public/storage/archivos/' . $servicio->archivo);
    //     return response()->download($pathToFile);
    // }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        // $servicio = Servicio::findOrFail($id);
// dd($servicio);
        return view('servicio.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servicio = Servicio::find($id);
        return view('servicio.edit')->with('servicio', $servicio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servicio = Servicio::find($id);

        $servicio->fecha = $request->get('fecha');
        $servicio->categoria = $request->get('categoria');
        $servicio->servicio = $request->get('servicio');
        $servicio->cantidad = $request->get('cantidad');
        $servicio->cliente = $request->get('cliente');
        $servicio->monto = $request->get('monto');
        // $servicio->archivo = $request->file('archivo');
        $servicio->realizo = $request->get('realizo');

        $servicio->save(); //sirve para grabar los cambios

        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();
        return redirect('/servicios')->with('info', 'El servicio solicitado se eliminó con éxito');;
    }
}
