<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\Redirect;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::all();
        return View('CRUDPRODUCTO.Listar')->with('productos', $productos);
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
        $producto = Producto::find($id);
        $producto->delete();
        $productos = Producto::all();
        return View('CRUDPRODUCTO.Listar')->with('productos', $productos);
        
        
    }

    public function guardar(Request $request)
    {
        //
        $prod = new Producto();
        $prod->nombre = $request->input('nombre');
        $prod->descripcion=$request->input('desc'); 
        $prod->cantidad_disponible=$request->input('cantidad');
        
        $file = $request->file('archivo');
        
        $prod->ruta_imagen=$file->getClientOriginalName();
        $prod->precio = $request->input('precio');
        $prod->save();
         //Mover el archivo subido
         $destinationPath = 'fotosproductos/';
         $file->move($destinationPath, $file->getClientOriginalName());
        
         return Redirect::to('/CrearProducto');
    }

    public function mostrar()
    {
        //
        return view('CRUDPRODUCTO.Crear'); 
    }
    
    public function MostrarFormProductos(){
        $productos = Producto::all();
        return view('CRUDPRODUCTO.Editar')->with('productos', $productos);
    }

    public function MostrarFormaParaEditarProductos($idProducto){
        $producto = Producto::where(array(
          'id_producto' => $idProducto
        ))->first();
        return view('CRUDPRODUCTO.Editar2')->with('producto', $producto);
    }

    public function ActualizarProducto(Request $request, $idProducto){
        $productos =Producto::find($idProducto);
        $productos->nombre = $request->nombre;
        $productos->descripcion = $request->desc;
        $productos->cantidad_disponible = $request->cantidad;

        $file = $request->file('archivo');
        
        $productos->ruta_imagen=$file->getClientOriginalName();

        $productos->precio = $request->float;
        $productos->save();
        $us = Producto::all();
            return view('CRUDPRODUCTO.Editar')->with('productos', $us);
    }

    public function EliminarProductos(){
        $productos = Producto::all();
        return view('CRUDPRODUCTO.Eliminar')->with('productos', $productos);
      }
  
      public function EliminarProductos2($idProducto){
              $producto = Producto::where(array(
                'id_producto' => $idProducto
              ))->first();
              $producto->delete();
        $productos = Producto::all();
        return view('CRUDPRODUCTO.Eliminar')->with('productos', $productos);
      }
  

}
