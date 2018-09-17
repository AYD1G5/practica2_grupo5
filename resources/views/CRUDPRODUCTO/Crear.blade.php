@extends('layouts.app')
@section('content')

<div class="jumbotron">
  <h1 class="display-3">Creación de Productos</h1>
  <p class="lead">Ingrese la información necesaria para crear un nuevo producto:</p>
  <hr class="my-4">
  

<div class="form-group">
  <label class="col-form-label" for="inputDefault">Nombre de Producto</label>
  <input type="text" class="form-control" placeholder="Nombre" id="inputDefault">
</div>

<div class="form-group">
  <label class="col-form-label" for="inputDefault">Descripción de Producto</label>
  <input type="text" class="form-control" placeholder="Descripción" id="inputDefault">
</div>

<div class="form-group">
  <label class="col-form-label" for="inputDefault">Cantidad Disponible</label>
  <input type="text" class="form-control" placeholder="Cantidad" id="inputDefault">
</div>

<div class="form-group">
      <label for="exampleInputFile">Imagen de Producto</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Seleccione una imagen para el producto que se está creando.</small>
</div>

<div class="form-group">
  <label class="control-label">Precio del prducto</label>
  <div class="form-group">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Q.</span>
      </div>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <div class="input-group-append">
        <span class="input-group-text">.00</span>
      </div>
    </div>
  </div>
</div>




@endsection