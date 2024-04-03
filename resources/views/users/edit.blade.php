@extends('adminlte::page')

@section('title', 'Editar ')

@section('content_header')
    <h1>Asignar un rol</h1>
    <br><br><br>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<center>
<div class="card mb-3 " style="width: 70%; ">
    <div class="card-body" style="text-align: left">
        <p class="h5">Nombre</p>
        <p class="form-control">{{$user->name}}</p>

        <h2 class="h5"> Listado de roles</h2>
        {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
        @foreach ($roles as $role)
        <div>

            <label>
                
                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                {{$role->name}}
            </label>
        </div>
        @endforeach
<center>
        {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2 btn-lg']) !!}
        <a href="/users" class="btn btn-danger mt-2 btn-lg" tabindex="6">Cancelar</a>
        {!! Form::close() !!}
</center>

    </div>
</div>

</center>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop
