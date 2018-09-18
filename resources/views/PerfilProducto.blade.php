@extends('layouts.app')
@section('content')
<div >
  <h1>{{$producto->nombre}}</h1>
</div>
<div >
<img src="\fotosproductos\{{$producto->ruta_imagen}}" width=300 height=300 style="float:left; margin:10px;margin-right: 40px;">
<FONT SIZE=4 ALIGN="justify">
<b>ID:     </b> {{$producto->id_producto}}<br>
<b>Nombre:   </b> {{$producto->nombre}}<br>
<b>Disponibles:  </b>  {{$producto->cantidad_disponible}}<br>
<b>Precio:   </b>  Q{{$producto->precio}}<br>
<P ALIGN="justify"><b>Descripcion:   </b> {{$producto->descripcion}}
</Font>
</div>
@endsection