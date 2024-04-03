@extends('adminlte::page')

@section('title', 'Editar Categoría')

@section('content_header')
<h1>Editar Categoría</h1>
@stop

@section('content')
<br><br><br><br>
<center>
<div class="card mb-3" style="width: 80%;">
<div class="card-body">
<form action="/categorys/{{$category->id}}" method="POST">
@csrf
@method('PUT')
      <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Categoría</label>
        <input id="name" name="name" type="text" class="form-control" value="{{$category->name}}">
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