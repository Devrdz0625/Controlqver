@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
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

@can('customers.create')
<a href="{{route('customers.create') }}" class="btn btn-lg btn-primary mb-3">Crear Cliente</a>
@endcan
<!-- <a href="customers/create" class="btn btn-lg btn-primary mb-3">Crear Cliente</a> -->
<a href="{{route('customers.pdf') }}" class="btn btn-lg btn-danger mb-3">PDF</a>
<center>
<table id="customers" class="table table-striped table-bordered table-hover mt-4" style="width:80%">
  <thead class="bg-dark text-white text-center">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre cliente</th>
        <th scope="col">Correo Electrónico</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Dirección</th>

        <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody class="text-center">
    @foreach ($customers as $customer)
    <tr>
        <td>{{ $customer->id}}</td>
        <td>{{ $customer->customer_name}}</td>
        <td>{{ $customer->email}}</td>
        <td>{{ $customer->phone}}</td>
        <td>{{ $customer->address}}</td>

        
        <td >
          <div class="c1" >
       <div class="col">
            @can('customers.edit') 
          <a href="{{route('customers.edit', $customer) }}" class="btn btn-info">Editar</a>
        @endcan 
        </div>
        <div class="col">
            @can('customers.destroy')
          <form action="{{ route ('customers.destroy',$customer->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Borrar</button>
          <!-- {{ __('PDF')}} -->
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

<script>
  $(document).ready(function() {
    $('#customers').DataTable({
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
      
    });
  });
       
    </script>
@stop