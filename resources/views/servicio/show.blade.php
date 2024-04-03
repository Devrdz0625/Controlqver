@extends('adminlte::page')

@section('title', 'Vista Servicios')

@section('content_header')
    <h1>Detalles de Servicio</h1>
@stop

@section('content')
<div class="content">
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-tittle">Detalles Servicios</div>
                        <p class="card-category">Vista de detalles del servicio de {{ $servicio->cliente}}</p>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <a href="">
                                                    <img src="{{ asset('/vendor/adminlte/dist/img/Qver-logo.png')}}" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{$servicio->cliente}}</h5>
                                                </a>
                                                <p class="description"></p>
                                                {{$servicio->id}} <br>
                                                {{$servicio->fecha}} <br>
                                                {{$servicio->categoria}} <br>
                                                {{$servicio->servicio}} <br>
                                                {{$servicio->monto}} <br>
                                                {{$servicio->realizo}} <br>
                                            </div>
                                        </p>
                                        
                                            <div class="button-container">
                                            <a href="/servicios" class="btn btn-primary" tabindex="6">Regresar</a>
                                         
                                            
                                        </div>
                                    </div>
                                </div> -->

                                  <!--Start third-->
                                  <center>
              <div class="col-md-5">
                <div class="card card-user">
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <tbody>
                      <img src="{{ asset('/vendor/adminlte/dist/img/Qver-logo.png')}}" alt="image" class="avatar">
                      <p style="text-align: left">FELIX U. GOMEZ #2770, COL.MODERNA MONTERREY, N.L. MÉXICO, C.P. 64530 <br>TEL. (81) 3483 6572</p>
                      
                                                    <h5 class="title mt-3" style="text-align: left"><b>Cliente:</b> {{$servicio->cliente}}</h5>
                        <tr>
                          <th>ID</th>
                          <td>{{ $servicio->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Fecha</th>
                          <td>{{ $servicio->fecha }}</td>
                        </tr>
                        <tr>
                          <th>Categoria</th>
                          <td><a target="_blank">{{ $servicio->categoria }}</a></td>
                        </tr>
                       
                        <tr>
                          <th>Servicio</th>
                          <td><a  target="_blank">{{  $servicio->servicio  }}</a></td>
                        </tr>
                        <tr>
                          <th>Cantidad</th>
                          <td><a  target="_blank">{{  $servicio->cantidad  }}</a></td>
                        </tr>
                        <tr>
                          <th>Monto</th>
                          <td><a  target="_blank">{{  $servicio->monto  }}</a></td>
                        </tr>
                            </td>    
                                    
                      </tbody>
                    </table>
                    <br><br> 
                    
                    <div class="text-end ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <b>Total:{{  number_format($servicio->monto * $servicio->cantidad)  }} </b></div>
                        
                        <p><b>__________________________________________________________________</b></p>
                  </div>
         <div class="mb-5">
            <a href="/servicios" class="btn btn-danger " tabindex="6">Regresar</a>
                         
            <a href="/servicios/{{$servicio->id}}/edit" class="btn btn-info btn">Editar</a>
            <!-- <a href="{{route('servicios.pdf') }}" class="btn btn-success ">PDF</a> -->
            </div>
</div>
          
               
        
                  </div>
                </div>
              </div>
              <!--end third-->
              </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop