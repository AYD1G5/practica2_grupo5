@extends('layouts.app')
@section('content')

<div >
  <h1>Catalogo de productos</h1>
</div>

<div style="padding: 0% 20% 20% 20%;">
								<table class="table table-hover text-center">
									<tbody>
										@foreach ($catalogo as $elemento)	
										<tr>
											<td><a href="{{url('/PerfilProducto/'.$elemento->id_producto.'')}}" class="btn btn-success btn-raised btn-xs" style="height:50px;width: 90%; font-size: 25px;background-color: #212F3D;">{{$elemento->nombre}}</a></td>
                                            <td><img src="{{'\fotosproductos\'.$elemento->ruta_imagen.''}}"></td>
										</tr>
										@endforeach
									</tbody>
                                    
								</table>
</div>
@endsection