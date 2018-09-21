<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use App\Objeto;
use App\Producto;
use App\Funciones;

class eCommerceTest extends TestCase
{
    /**
    * Prueba para la funcion calcular SubTotal de Compra
    */
    public function testCalcularSubTotal()
    {
        //Arrange (Preparar)
        $funciones=new Funciones();
        $prod = new Producto();
        $prod->nombre = 'ProductoX';
        $prod->descripcion='Producto de Prueba'; 
        $prod->cantidad_disponible='100';
        $prod->ruta_imagen='Db.jpg';
        $prod->precio = '150';
        $prod->save();
        //Act (Actuar)
        $respuestaFuncion=$funciones->calcularSubTotal($prod->cantidad_disponible,$prod->precio);
        $RescpuestaCorrecta=$prod->cantidad_disponible*$prod->precio;
        $prod->delete();
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
        
    }

    /**
    * Prueba para la funcion calcular IVA
    */
    public function testCalcularIva()
    {
        $funciones=new Funciones();                 
        $this->assertEquals(120,$funciones->calcularIva(1120));    
    }

    /**
    * Prueba para la funcion Aumentar Stock
    */
    public function testAumentarStock()
    {
        //Arrange (Preparar)
        $funciones=new Funciones();
        $prod = new Producto();
        $prod->nombre = 'ProductoX';
        $prod->descripcion='Producto de Prueba'; 
        $prod->cantidad_disponible='100';
        $prod->ruta_imagen='Db.jpg';
        $prod->precio = '100';
        $prod->save();
        //Act (Actuar)
        $aumento=50;
        $respuestaFuncion=$funciones->aumentarStock($prod->id_producto,$aumento);
        $RescpuestaCorrecta=$prod->cantidad_disponible+$aumento;
        $prod->delete();
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }    
    /**
    * Prueba para la funcion calcular IVA
    */    
    public function testDisminuirStock()
    {
        //Arrange (Preparar)
        $funciones=new Funciones();
        $prod = new Producto();
        $prod->nombre = 'ProductoX';
        $prod->descripcion='Producto de Prueba'; 
        $prod->cantidad_disponible='100';
        $prod->ruta_imagen='Db.jpg';
        $prod->precio = '100';
        $prod->save();
        //Act (Actuar)
        $disminucion=50;
        $respuestaFuncion=$funciones->disminuirStock($prod->id_producto,$disminucion);
        $RescpuestaCorrecta=$prod->cantidad_disponible-$disminucion;
        $prod->delete();
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    public function testProductoExiste()
    {
        //Arrange (Preparar)
        $funciones=new Funciones();
        $prod = new Producto();
        $prod->nombre = 'ProductoX';
        $prod->descripcion='Producto de Prueba'; 
        $prod->cantidad_disponible='100';
        $prod->ruta_imagen='Db.jpg';
        $prod->precio = '100';
        $prod->save();
        //Act (Actuar)
        $respuestaFuncion=$funciones->productoExiste($prod->id_producto);
        $prod->delete();
        //Assert (Afirmar)

        $this->assertTrue($respuestaFuncion);
    }

    /**
     * Prueba para averiguar el rol del usuario especifico.
     *
     */
    public function testVerificarRolUsuario()
    {
        $funciones=new Funciones(); 
        $this->assertEquals(1,$funciones->verificarRolUsuario(1));
    }

    /**
     * Prueba para averiguar si de un producto especifico se puede comprar cierta cantidad de elementos.
     *
     */
    public function testVerificarExistenciaProducto()
    {
        $funciones=new Funciones(); 
        $this->assertTrue($funciones->verificarExistenciaProducto(1,5));
    }

    /**
     * Prueba para sumar el subtotal de una coleccion.
     *
     */
    public function testCalcularTotal()
    {
        //Arrange (Preparar)
        $funciones=new Funciones(); 
        $subtotalesCollection = new Collection();
        $objeto1 = new Objeto();
        $objeto1->subtotal = 50;
        $subtotalesCollection->push($objeto1);
        $objeto2 = new Objeto();
        $objeto2->subtotal = 120;
        $subtotalesCollection->push($objeto2);
        $objeto3 = new Objeto();
        $objeto3->subtotal = 70;
        $subtotalesCollection->push($objeto3);
        $objeto4 = new Objeto();
        $objeto4->subtotal = 250;
        $subtotalesCollection->push($objeto4);
        
        //Act (Actuar)
        $respuestaFuncion=$funciones->calcularTotal($subtotalesCollection);
        $RescpuestaCorrecta=490;
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);   
    }
    
}
