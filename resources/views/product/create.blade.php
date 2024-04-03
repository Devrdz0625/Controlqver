@extends('adminlte::page')

@section('title', 'Crear Servicio')

@section('content_header')
    <h1>Crear Servicio</h1>
    <br><br><br>
@stop

@section('content')
<center>
<div class="card mb-3" style="width: 80%;">
  <div class="card-body">
<form action="/products" method="POST">
    @csrf
<div class="mb-3" style="text-align: left"> 
<label for="" class="form-label">Categoría</label>   
  <select  id="category_id" name="category_id" class="form-select mb-3" aria-label="" style="width:100% ">
  <option selected>Selecciona la categoria</option>
  <option value="Geotecnia">1. Geotecnia</option>
  <option value="Gerencia de Calidad">2. Gerencia de Calidad</option>
  <option value="Commissioning">3. Commissioning</option>
  <option value="Consultoria de daños y recuperacion de desastres">4. Consultoria de daños y recuperacion de desastres</option>
  <option value="Mecánica de suelos">5. Mecánica de suelos</option>
  <option value="Geohidrología">6. Geohidrología</option>
  <option value="Mezclas Asfálticas">7. Mezclas Asfálticas</option>
  <option value="Acero (control calidad)">8. Acero (control calidad)</option>
  <option value="Hidrología">9. Hidrología</option>
  <option value="Patología Estructural">10. Patología Estructural</option>
  <option value="Diseño de Pavimentos">11. Diseño de Pavimentos</option>
  <option value="Geofísica">12. Geofísica</option>
  <option value="Impacto Ambiental">13. Impacto Ambiental</option>
  <option value="Sismicidad">14. Sismicidad</option>
  <option value="Geología">15. Geología</option>
  <option value="Impacto Vial">16. Impacto Vial</option>
  <option value="Topografía">17. Topografía</option>
</select>
</div>
      <div class="mb-3 " style="text-align: left">
        <label for="" class="form-label">Nombre Servicio</label>
        <input id="product_name" name="product_name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3 " style="text-align: left">
        <label for="" class="form-label">Detalles</label>
        <input id="details" name="details" type="text" class="form-control" tabindex="2">
    </div>

    <a href="/products" class="btn btn-danger" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    
</form>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop