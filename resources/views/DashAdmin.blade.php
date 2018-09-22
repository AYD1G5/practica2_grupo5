@extends('layouts.app')
@section('content')
<a class="btn btn-primary" href="{{ url('/CrearProducto')}}">Crear Producto</a>
<a class="btn btn-primary" href="{{ url('/EnviosAdmin')}}">Estado Ordenes</a>
@endsection