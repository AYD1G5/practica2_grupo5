<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    *  funcion calcular Total de Compra
    */
    public function calcularTotal()
    {
    }

    /**
    *funcion calcular IVA
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
    * Prueba para la funcion Aumentar Stock
    */
    public function aumentarStock(1,50));    
    }    /**
    * Prueba para la funcion calcular IVA
    */
    public function disminuirStock(1,10));    
    }

    public function productoExiste(1));

}
