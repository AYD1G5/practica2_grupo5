<?php

namespace App\Http\Controllers;
use App\producto;
use Illuminate\Http\Request;
use DB;
use Auth;

class CatalogoController extends Controller
{
    public function Catalogo()
    {
        $Catalogo=DB::table('producto as P')
        ->where('P.cantidad_disponible', '>',0)->get();
        /**
         * retorno de la vista de grupos a los que pertenece el usuario
         * */        
        return view('Catalogo')->with("catalogo",$Catalogo);
    } 
    public function PerfilProducto($idproducto)
    {
        
        return view('PerfilProducto');
    } 
}
