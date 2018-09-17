@extends('layouts.app')
@section('content')
<table class="table table-hover">
<thead>
<tr class="table-primary">
  <th scope="col">No.</th>
  <th scope="col">Nombre</th>
  <th scope="col">Apellido</th>
  <th scope="col">Correo</th>
  <th scope="col">Ver</th>
  <th scope="col">Editar</th>
  <th scope="col">Eliminar</th>
</tr>
</thead>
  <tbody>
      <tr class="table-info">
        <th scope="row">1</th>
        <td>MIGUEL</td>
        <td>RUANO</td>
        <td>puto@gmail.com</td>
        <td>{!! link_to('/PruebaCrearCliente', 'Ver', ['class' => 'btn btn-primary']) !!}</td>
        <td>{!! link_to('/PruebaCrearCliente', 'Editar', ['class' => 'btn btn-warning']) !!}</td>
        <td>
          {!! Form::open(array('url' => '/PruebaCrearCliente', 'method' => 'DELETE')) !!}
             {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
  </tbody>
</table>
@endsection
