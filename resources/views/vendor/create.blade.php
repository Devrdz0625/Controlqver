@extends('adminlte::page')

@section('title', 'Crear Área Encargado')

@section('content_header')
    <h1>Crear Área Encargada</h1>
    <br><br><br>
@stop

@section('content')
<center>
<div class="card mb-3" style="width: 80%;">
  <div class="card-body">
<form action="/vendors" method="POST">
    @csrf
    <div class="mb-3 " style="text-align: left">
        <label for="" class="form-label">Encargado de Área</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3 " style="text-align: left">
        <label for="" class="form-label">Teléfono</label>
        <input id="phone" name="phone" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3 " style="text-align: left">
        <label for="" class="form-label">Correo Electrónico</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3 " style="text-align: left">
        <label for="" class="form-label">Estado</label>
        <input id="address" name="address" type="text" class="form-control" tabindex="2">
    </div>

    <a href="/vendors" class="btn btn-danger" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    
</form>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop