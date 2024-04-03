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
  <center><h1>REPORTE CLIENTES</h1>
  <p style="text-align: left"> </p>
    <p  style="text-align: left"><b> </b></p>
    <!-- <img src="{{ asset('/vendor/adminlte/dist/img/Qver-logo.png')}}" alt="image"> -->
                      
    <table id="customers" class="table" style="width:100%; background-color:; border:2px solid black; text-align: center;">
  <thead class="bg-dark text-white">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre cliente</th>
        <th scope="col">Correo Electrónico</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Dirección</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $customer)
    <tr>
        <td>{{ $customer->id}}</td>
        <td>{{ $customer->customer_name}}</td>
        <td>{{ $customer->email}}</td>
        <td>{{ $customer->phone}}</td>
        <td>{{ $customer->address}}</td>

    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>