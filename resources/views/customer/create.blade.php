@extends('adminlte::page')

@section('title', 'Crear Clientes')

@section('content_header')
    <h1>Crear Cliente</h1>
@stop

@section('content')
<br><br><br>
<center>
<div class="card mb-3" style="width: 80%;">
  <div class="card-body">
<form action="/customers" method="POST">
    @csrf
      <div class="mb-3" style="text-align: left">
        <label for="" class="form-label" >Cliente</label>
        <input id="customer_name" name="customer_name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Correo Electrónico</label>
        <input id="email" name="email" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Teléfono</label>
        <input id="phone" name="phone" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Dirección</label>
        <input id="address" name="address" type="text" class="form-control" tabindex="4">
    </div>
    <a href="/customers" class="btn btn-danger" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  
@stop