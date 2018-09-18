<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;
use App\User;
use App\Factura;

class Funciones extends Model
{
   /**
    *  funcion calcular SubTotal de Compra
    */
    public function calcularSubTotal($cantidad,$precio)
    {
        $respuesta=0;
        $respuesta=$cantidad * $precio;
        return $respuesta;
    }
    /**
    *funcion calcular IVA del precio de un producto
    */
    public function calcularIva($precio)
    {
        $iva=0;
        $razon=1.12;
        $costo=$precio/$razon;
        $porcentajeIva=0.12;
        $iva=$costo*$porcentajeIva;
        return $iva;
        
    }
    /**
    * Funcion para Aumentar Stock de un producto en inventario
    */
    public function aumentarStock($id_producto,$cantidad)
    {
        $producto=Producto::where('id_producto',$id_producto)->first();
        $producto->cantidad_disponible=$producto->cantidad_disponible+$cantidad;
        $producto->save();
        $producto2=Producto::where('id_producto',$id_producto)->get();
        return $producto->cantidad_disponible;
    }  
    /**
    * Funcion para Disminuir Stock de un producto en inventario
    */
    public function disminuirStock($id_producto,$cantidad)   
    {
        $producto=Producto::where('id_producto',$id_producto)->first();
        $producto->cantidad_disponible=$producto->cantidad_disponible-$cantidad;
        $producto->save();
        $producto2=Producto::where('id_producto',$id_producto)->get();
        return $producto->cantidad_disponible;
    }
    /**
    * Funcion para Verificar si existe un producto en inventario
    */
    public function productoExiste($id_producto)
    {
        $respuesta=false;
        $producto=Producto::where('id_producto',$id_producto)->first();
        if(!$producto->isEmpty())
        {
            $respuesta=true;
        }

        return $respuesta;        
    }

    public function verificarRolUsuario($id_usuario){
         $estudiantes = User::where('id',$id_usuario)->first();
         return $estudiantes->rol;
       
     }

     public function verificarExistenciaProducto($id_producto, $cantidad){
        $producto = Producto::where('id_producto',$id_producto)->first();;
        if($producto->cantidad_disponible-$cantidad>0){
            return true;
        }else{
            return false;
        }
     }

     public function verificarExistePedido($id_factura){
        $factura = Factura::where('id_factura')->first();
        return $factura;
    }

    public function calcularTotal($elementos){
        $factura = Factura::where('id_factura')->first();
        $suma = 0;
        foreach($elementos as $elemento){
            $suma += $elemento->subtotal;
        }
        return $suma;
    }
}
