@extends('adminlte::page')

@section('title', 'Editar Servicio')

@section('content_header')
    <h1>Editar Servicio</h1>
    <br><br><br>
@stop

@section('content')
<center>
<div class="card mb-3" style="width: 80%;">
<div class="card-body">
<form action="/products/{{$product->id}}" method="POST">
@csrf
@method('PUT')
      <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Categoría</label>
        <input id="category_id" name="category_id" type="text" class="form-control" value="{{$product->category_id}}">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Servicio</label>
        <input id="product_name" name="product_name" type="text" class="form-control" value="{{$product->product_name}}">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Detalles</label>
        <input id="details" name="details" type="text" class="form-control" value="{{$product->details}}">
    </div>

    <a href="/products" class="btn btn-danger" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    
</form>
</div>
</div>
</center>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop