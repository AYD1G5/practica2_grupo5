<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Funciones;

class eCommerceTest extends TestCase
{
    /**
    * Prueba para la funcion calcular SubTotal de Compra
    */
    public function testCalcularSubTotal()
    {
        $funciones=new Funciones(); 
                
        $this->assertEquals(1500,$funciones->calcularSubTotal(5,300));
    }

   /**
    * Prueba para la funcion calcular Total de Compra
    */
    public function testCalcularTotal()
    {
        $funciones=new Funciones(); 
                
        $this->assertEquals(1500,$funciones->calcularTotal());
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
        $funciones=new Funciones();                 
        $this->assertEquals(150,$funciones->aumentarStock(1,50));    
    }    /**
    * Prueba para la funcion calcular IVA
    */
    public function testDisminuirStock()
    {
        $funciones=new Funciones();                 
        $this->assertEquals(140,$funciones->disminuirStock(1,10));    
    }

    public function testProductoExiste()
    {
        $funciones=new PerfilGrupoController(); 
        $this->assertTrue($funciones->productoExiste(1));
    }

}
