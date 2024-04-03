@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Servicios</h1>
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

@can('products.create')
<a href="{{route('products.create') }}" class="btn btn-lg btn-primary mb-3">Crear</a>
@endcan

<center>
<table id="products" class="table table-striped table-bordered table-hover mt-4" style="width:100%">
  <thead class="bg-dark text-white text-center">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Categoría</th>
        <th scope="col">Servicio</th>
        <th scope="col">Detalles</th>

        <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody class="text-center">
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->category_id}}</td>
        <td>{{ $product->product_name}}</td>
        <td>{{ $product->details}}</td>

        <td>
        <div class="c1" >
       <div class="col">
            @can('products.edit') 
          <a href="{{route('products.edit', $product) }}" class="btn btn-info">Editar</a>
        @endcan 
        </div>
        <div class="col">
            @can('products.destroy')
          <form action="{{ route ('products.destroy',$product->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
          </form>
          @endcan 
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
    $('#products').DataTable({
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