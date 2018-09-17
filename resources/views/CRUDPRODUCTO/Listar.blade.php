@extends('layouts.app')
 @section('content')
 <div class="container">
    
    <h1> Lista de Productos </h1>
    <div class="row">
       <div class="col-lg-12">
          {!! link_to('tareas/create', 'Crear', ['class' => 'btn btn-primary']) !!}
       </div>
    </div>
    <table class="table">
       <thead>
       <tr>
             <th style="width: 35%"> Título </th>
             <th style="width: 35%"> Estado </th>
             <th style="width: 10%"> </th>
             <th style="width: 10%"> </th>
             <th style="width: 10%"> </th>
          </tr>
       </thead>
       <tbody>
          
             <tr>
                <td> Titulo </td>
                <td> Nombre </td>
                <td>
                   {!! link_to('12', 'Ver', ['class' => 'btn btn-primary']) !!}
                </td>
                <td>
                   {!! link_to('12', 'Editar', ['class' => 'btn btn-primary']) !!}
                </td>
                <td>
                   
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                   
                </td>
             </tr>
         
       </tbody>
    </table>
 </div>
 @endsection