<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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

}
