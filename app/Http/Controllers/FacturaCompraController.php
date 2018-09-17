<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class FacturaCompraController extends Controller
{
    /** CONSTRUCT
     *  Revisa que el usuario haya iniciado sesion
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** INDEX
     *  En la pagina index se mostrará las compras adquiridas actualmente
     *  asi como un form para agregar un nuevo producto
     */
    public function index()
    {
        return view('facturacompra.index');
    }    
}
