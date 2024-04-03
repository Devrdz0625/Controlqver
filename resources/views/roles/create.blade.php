@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Crear Roles</h1>
@stop

@section('content')
<center>
<div class="card mb-3 " style="width: 70%; ">
    <div class="card-body" style="text-align: left">
        {!! Form::open(['route' => 'roles.store']) !!}
       
        @include('roles.partials.form')
<center>
        {!! Form::submit('Crear rol', ['class' => 'btn btn-primary btn-lg']) !!}
        <a href="/roles" class="btn btn-danger btn-lg" tabindex="6">Cancelar</a>
        {!! Form::close() !!}
        </center>
    </div>
</div>
</center>
<br><br><br>
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