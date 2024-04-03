@extends('adminlte::page')

@section('title', 'Crear Categoría')

@section('content_header')
    <h1>Crear Categoría</h1>
@stop

@section('content')
<center>
<br><br><br><br>
<div class="card mb-3" style="width: 80%;">
  <div class="card-body">
<form action="/categorys" method="POST">
    @csrf
      <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Nueva Categoría</label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
   
    <a href="/categorys" class="btn btn-danger" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  
@stop
