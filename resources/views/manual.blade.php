@extends('adminlte::page')

@section('title', 'Manual de Usuario')

@section('content_header')
    <h1>MANUAL DE USUARIO</h1>
@stop

@section('content')
<br>
<div class="card" style="width:85%; height: 65%; background-color:white; margin: 0 auto; box-shadow: 0px 1px 1px 1px rgba(0, 0, 0);">
<br>

<img src="https://img.hotimg.com/Qver-logo-nuevo.png"    alt="" style="width:45%; text-align: justify; margin: 0 auto;  ">
<br>
<h1 style="text-align: center; font-size:30px;"><b>INTRODUCCIÓN</b></h1> 
<div style="width:80%; text-align: justify; margin: 0 auto; font-size: 20px;">
La aplicación web Qver Control, tiene como objetivo principal en la empresa, el control y actualización
de información de los servicios que ofrece la empresa. Enfocando en la base de datos, esto con el fin 
de permitir que el sistema sea más eficiente, optimizando el uso de datos de los servicios que se 
almacenarán en la base de datos, evitando la duplicación y evitando redundancias.
Brindar una mayor funcionalidad, tener un orden sin duplicados de datos, y tener una mejor seguridad 
con los <b> ROLES Y PERMISOS </b> de usuario, de los cuales: <br> 
El <b> ADMINISTRADOR </b> asignará un tipo de usuario para los miembros de la empresa, por el momento se trabajarán 
en dos roles que son el administrador que es donde el tendrá permiso de toda la aplicación y los permisos 
para administrar los roles. <br> 
Y el <b> EMPLEADO </b>, sólo tendrá permiso ver el listado de cliente, listado de categorías con las cuales 
podrá hacer creación y eliminación de dichos datos, también manejará las mismas funcionalidades de los 
servicios y el área encargada, podrá observar el listado de servicios solicitados y lista de los roles.
</div> <br><br><br>
<h1 style="text-align: center; font-size:30px;"><b>ENTRADA AL SISTEMA</b></h1> 
<div style="width:80%; text-align: justify; margin: 0 auto; font-size: 20px;">
Para acceder al sistema se debe ingresar en la dirección: http://127.0.0.1:8000/, en este se observa
la página principal en donde se pueden visualizar información básica de la empresa y los casos de 
éxito que tienen en sus servicios.
<br>
Además de los botones de registrar usuario e iniciar sesión.
<br><br>
</div>
<img src="https://img.hotimg.com/4fa3b45f-4da1-4244-9d6c-4030f5520c07.jpeg"    alt="" style="width:45%; text-align: justify; margin: 0 auto; ">
<br>
<div style="width:80%; text-align: justify;  margin: 0 auto; font-size: 20px;">
Para poder ingresar al sistema, se necesita un usuario y su contraseña. En caso de que no tenga un usuario
se puede registrar y después iniciar sesión. <br>
Una vez introducido el usuario y la contraseña, se debe de dar clic en el botón iniciar sesión para 
acceder al sistema. Por defecto el sistema detectará que tipo de usuario es el que esta ingresando, 
ya sea el administrador o el empleado, por lo que, como se explicó anteriormente el administrador 
tiene el acceso a todo, y el empleado solo a ciertos privilegios. 
</div><br>
<center>
<div class="row" style="" >
    <div class="col-5"style=" margin: 0 auto;  text-align: center;">
<img src="https://img.hotimg.com/cbe1747c-207d-4deb-a638-47b62d7fb278.jpeg"    alt="" style="width:86%;  ">
</div>
    <div class="col-5" style=" margin: 0 auto; text-align: center;">
<img src="https://img.hotimg.com/e0bfabbe-059f-4c1d-b74e-6cb166229e03.jpeg"    alt="" style="width:80%; ">
</div>
</div>
</center>
<br>
<div style="width:80%;  margin: 0 auto; font-size: 20px; text-align: justify;">
A continuación, se explicarán los privilegios que tiene cada rol: <br>
<b>ROL ADMINISTRADOR</b> <br>
El administrador tendrá acceso total a cada una de las vistas como son la vista de clientes, categorías, 
servicios, área encargada, y los servicios que solicitan, esto significa que en estas vistas el 
administrador tiene la facilidad de poder crear fácilmente los registros o los datos de cada vista, 
también podrá editar o modificar por un posible error, visualizar y eliminar en caso de ya no ocuparlo. 
Podrá realizar en caso necesario una exportación de reportes de los datos registrados en la vista de 
clientes y servicios solicitados. 
</div> <br>
<img src="https://img.hotimg.com/9bc1fcfb-3e57-4f0b-98ca-84978594e97f.jpeg"    alt="" style="width:70%; text-align: justify; margin: 0 auto; "> <br>
<div style="width:80%;  margin: 0 auto; font-size: 20px; text-align: justify;">
En la vista de usuarios, es donde podrá asignar y modificar los roles y permisos o eliminar el usuario. 
Además, el administrador contará con el control de los roles y permisos, esto ayuda a tener un mejor 
control de los accesos, esto con el fin de poder brindar una seguridad de los datos que se almacenen en 
la aplicación web.
</div> <br>
<img src="https://img.hotimg.com/d43ea268-e2de-45b1-a149-ac66235f9a87.jpeg"    alt="" style="width:70%; text-align: justify; margin: 0 auto; "> <br><br>
<div style="width:80%;  margin: 0 auto; font-size: 20px; text-align: justify;">
Los roles y permisos serán de uso para poder establecer roles específicos en el rol de empleado, 
de esta manera, se evita que los empleados accedan a información confidencial o realicen cambios no 
autorizados en la aplicación web. En caso de ser necesario el administrador podrá crear nuevos roles con 
sus nuevos permisos, por ejemplo, se pueden asignar permisos basados en las funciones y responsabilidades 
de cada empleado o en dado caso que sea otra persona. <br> <br>
<b>ROL EMPLEADO</b> <br>
El rol de empleado tendrá acceso a ciertas partes de la aplicación, solo tendrán acceso a visualizar las 
vistas de clientes, categorías, servicios, área encargada, y exportar los datos de las vistas de clientes 
y servicios solicitados, <b>NO</b> podrá modificar o eliminar los datos porque no tiene autorización. 
<br>
Por ejemplo, en la vista de clientes el empleado no puede realizar modificaciones, por lo que, no le 
aparecen los botones para realizar cambios.
</div> <br>
<img src="https://img.hotimg.com/5137faff-eec3-44da-9282-11e8fd3f53c0.jpeg"    alt="" style="width:70%; text-align: justify; margin: 0 auto; "> <br><br>


</div>
<br><br><br>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
    <!-- <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> -->
@stop

@section('js')
@stop 