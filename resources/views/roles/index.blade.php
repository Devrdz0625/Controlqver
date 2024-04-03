@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Roles</h1>
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

@can('roles.create')
<a href="{{route('roles.create') }}" class="btn btn-lg btn-primary mb-3">Crear Rol</a>
@endcan

<center>
<div class="card">
    <div class="card-body">
        <table class="table table-striped table-bordered table-hover mt-4" style="width:70%">
            <thead class="bg-dark text-white text-center">
                <tr>
                    <th>ID</th>
                    <th>Roles</th>
                    <th colspan="2"></th>
                </tr>

            </thead>

            <tbody class="text-center">
            @foreach ($roles as $role)
                 <tr>
                    <td>{{ $role->id}}</td>
                    <td>{{ $role->name}}</td>

            <td width="10px">
                <div class="c1" >
                <div class="col">
                @can('roles.edit') 
                <a href="{{route('roles.edit', $role) }}" class="btn btn-primary ">Editar</a>
                @endcan 
                </div>

                <div class="col">
                @can('products.destroy')
                <form action="{{ route ('roles.destroy',$role)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                @endcan 
                       
                    </td>

                 </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</div>
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