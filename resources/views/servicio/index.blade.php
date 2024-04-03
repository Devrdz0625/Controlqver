@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Servicios Solicitados</h1>
@stop

<style>
  .c1{
    display: flex;
    justify-content: center;  
  }
</style>

@section('content')
@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif

@can('servicios.create')
<a href="{{route('servicios.create') }}" class="btn btn-lg btn-primary mb-3">Crear</a>
@endcan

<a href="{{route('servicios.pdf') }}" class="btn btn-lg btn-danger mb-3 ">PDF</a>
<!-- <a href="'servicios.excel') }}" class="btn btn-lg btn-success mb-3 ">EXCEL</a> -->
<center>
<table id="servicios" class="table table-striped table-bordered table-hover mt-4" style="width:100%">
  <thead class="bg-dark text-white text-center">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Fecha</th>
        <th scope="col">Categoría</th>
        <th scope="col">Servicio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Cliente</th>
        <th scope="col">$ Monto (MXN)</th>
        <!-- <th scope="col">Archivo</th> -->
        <th scope="col">Operado por</th>
        <th scope="col">Descargar documento</th>

        <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody class="text-center">

  @foreach ($servicios as $servicio)
    <tr>
        <td>{{ $servicio->id}}</td>
        <td>{{ $servicio->fecha}}</td>
        <td>{{ $servicio->categoria}}</td>
        <td>{{ $servicio->servicio}}</td>
        <td>{{ $servicio->cantidad}}</td>
        <td>{{ $servicio->cliente}}</td>
        <td>{{ $servicio->monto}}</td>
        <!-- <td>{{ $servicio->archivo}}</td> -->
        <td>{{ $servicio->realizo}}</td>

        <td> <a href="{{ Storage::url($servicio->archivo)}}" >Descargar</a> </td>

        <td>
        <div class="c1" >
       <div class="col">
       @can('servicios.edit') 
          <a href="{{route('servicios.edit', $servicio) }}" class="btn btn-info">Editar</a>
        @endcan 
        </div>
        <div class="col"> 
          <a href="{{ route ('servicios.show',$servicio->id)}}" class="btn btn-success">Ver</a>
        </div>
        <div class="col">
            @can('servicios.destroy')
            <form action="{{ route ('servicios.destroy',$servicio->id)}}" method="POST">
           
            @csrf
            @method('DELETE')
            
            <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            @endcan 
            </div>
            </div>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</center>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> -->
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>

<script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>


<script>
  $(document).ready(function() {
    $('#servicios').DataTable({
      "language": {
            "lengthMenu": "Mostrar " +
            `<select>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="-1">All</option>
            </select>`
             + " registros por página",
            "zeroRecords": "Nada encontrado - Disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            }
        }
       <br><br><br>
    });
    // dom:"Bfrtip",
    //   buttons:{
    //     dom:{
    //       button:{
    //         className: 'btn'
    //       }
    //     },
    //     buttons:[
    //       {
    //         extend:"excel",
    //         text:'Exportar',
    //         className: "",
    //         excelStyles:{
    //           template: 'header_blue'
    //         }
    //       }
    //     ]
    //   }
  });
       
    </script>,

    <script>
        $(document).ready(function() {
    $('#servicios').DataTable({
      responsive: "true",
      dom:"Bfrtip",
      buttons:{
        dom:{
          button:{
            className: 'btn'
          }
        },
        buttons:[
          {
            extend:"excel",
            text:'Exportar Excel',
            className: 'btn btn-outline-secondary btn-lg  ',
            excelStyles:{
              template: 'header_blue'
            }
          },
        ]
      }
    });
  });
    </script>


@stop
