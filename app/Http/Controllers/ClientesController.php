<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect; //---> Sirve para poder utilizar los modelos

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function CrearCliente(Request $request){
      $usuario = new User();
      $usuario->name = $request->nombres;
      $usuario->apellido = $request->apellidos;
      $usuario->nit = $request->nit;
      $usuario->direccion_envio = $request->direnvio;
      $usuario->email = $request->correo;
      $usuario->password = $request->pass;
      $usuario->rol = 1;
      $usuario->save();
      return view('CRUDClientes.CrearCliente');
    }

    public function MostrarFormCrearCliente(){
      return view('CRUDClientes.CrearCliente');
    }

    public function MostrarFormClientes(){
      $usuarios = User::all();
      return view('CRUDClientes.EditarCliente')->with('usuarios', $usuarios);
    }

    public function MostrarFormaParaEditarClientes($idUsuario){
      $usuario = User::where(array(
        'id' => $idUsuario
      ))->first();
      return view('CRUDClientes.EditarCliente2')->with('usuario', $usuario);
    }

    public function ActualizarCliente(Request $request, $idUsuario){
            $usuarios =User::find($idUsuario);
            $usuarios->name = $request->nombres;
            $usuarios->apellido = $request->apellidos;
            $usuarios->nit = $request->nit;
            $usuarios->direccion_envio = $request->direnvio;
            $usuarios->email = $request->correo;
            $usuarios->password = $request->pass;
            $usuarios->rol = 1;
            $usuarios->save();
            $us = User::all();
                return view('CRUDClientes.EditarCliente')->with('usuarios', $us);
    }

    public function EliminarClientes(){
      $usuarios = User::all();
      return view('CRUDClientes.EliminarCliente')->with('usuarios', $usuarios);
    }

    public function EliminarClientes2($idUsuario){
            $usuario = User::where(array(
              'id' => $idUsuario
            ))->first();
            $usuario->delete();
      $usuarios = User::all();
      return view('CRUDClientes.EliminarCliente')->with('usuarios', $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
