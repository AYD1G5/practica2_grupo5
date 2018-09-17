@extends('layouts.app')
@section('content')
<h1 align="center">EDITAR CLIENTE</h1>
<div class="jumbotron">
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">NOMBRES</label>
  <input type="text" class="form-control" placeholder="INGRESE SUS NOMBRES" id="inputDefault">
</div>
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">APELLIDOS</label>
  <input type="text" class="form-control" placeholder="INGRESE SUS APELLIDOS" id="inputDefault">
</div>
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">NIT</label>
  <input type="text" class="form-control" placeholder="INGRESE SU NUMERO DE IDENTIFICACION TRIBUTARIA" id="inputDefault">
</div>
  <div class="form-group">
  <label class="col-form-label" for="inputDefault">DIRECCION DE ENVIO</label>
  <input type="text" class="form-control" placeholder="INGRESE SU DIRECCION" id="inputDefault">
</div>
  <div class="form-group">
  <label for="exampleInputEmail1">CORREO ELECTRONICO</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="INGRESE SU CORREO ELETRONICO">
  <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
</div>
<div class="form-group">
  <label for="exampleInputPassword1">CONTRASEÑA</label>
  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="INGRESE SUS PASSWORD">
</div>
<hr class="my-4">

<fieldset class="form-group">
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" value="" checked="">
      He revisado los cambios y los he aceptado.
    </label>
  </div>
</fieldset>

<button type="button" class="btn btn-primary btn-lg btn-block">EDITAR CLIENTE</button>
</div>
@endsection
