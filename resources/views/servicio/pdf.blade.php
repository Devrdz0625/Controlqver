<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ public_path('css/style.css') }}" rel="stylesheet" type="text/css">



    <title>Exportar a PDF</title>
</head>
<body>
  <center><h1>REPORTE SERVICIOS SOLICITADOS</h1>
  <p style="text-align: left"></p>
    <p  style="text-align: left"><b> </b></p>
    <!-- <img src="{{ asset('/vendor/adminlte/dist/img/Qver-logo.png')}}" alt="image"> -->

    <table id="servicios" class="table" style="width:100%; background-color:; border:2px solid black; text-align: center;">
  <thead class="bg-dark text-white">
    <tr>
        <!-- <th scope="col">ID</th> -->
        <th scope="col">Fecha</th>
        <th scope="col">Cliente</th>
        <th scope="col">Categoría</th>
        <th scope="col">Servicio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Monto</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($servicios as $servicio)
    <tr>
        <!-- <td>{{ $servicio->id}}</td> -->
        <td>{{ $servicio->fecha}}</td>
        <td>{{ $servicio->cliente}}</td>
        <td>{{ $servicio->categoria}}</td>
        <td>{{ $servicio->servicio}}</td>
        <td>{{ $servicio->cantidad}}</td>
        <td>{{ $servicio->monto}}</td>

    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>