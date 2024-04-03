@extends('adminlte::page')

@section('title', 'Editar Servicio')

@section('content_header')
    <h1>Editar Solicitud</h1>
    <br><br><br>
@stop

@section('content')
<center>
<div class="card mb-3" style="width: 80%;">
<div class="card-body">
<form action="/servicios/{{$servicio->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Fecha</label>
        <input id="fecha" name="fecha" type="date" class="form-control" value="{{$servicio->fecha}}">
    </div>
      <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Categoría</label>
        <input id="categoria" name="categoria" type="text" class="form-control" value="{{$servicio->categoria}}">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Servicio</label>
        <input id="servicio" name="servicio" type="text" class="form-control" value="{{$servicio->servicio}}">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{$servicio->cantidad}}">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Cliente</label>
        <input id="cliente" name="cliente" type="text" class="form-control" value="{{$servicio->cliente}}">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">$ Monto</label>
        <input id="monto" name="monto" type="text" class="form-control" value="{{$servicio->monto}}">
    </div>
    <div class="mb-3" style="text-align: left">
        <label for="" class="form-label">Realizo</label>
        <input id="realizo" name="realizo" type="text" class="form-control" value="{{$servicio->realizo}}">
    </div>

    <a href="/servicios" class="btn btn-danger" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    
</form>
</div>
</div>
<br><br>
</center>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop
