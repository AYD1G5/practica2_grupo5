<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\Controller;
use App\Http\Objeto;
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

    /**
     * Prueba para averiguar el rol del usuario especifico.
     *
     * @return void
     */
    public function testVerificarRolUsuario()
    {
        $funciones=new Funciones(); 
        $this->assertEquals(0,$funciones->verificarRolUsuario(1));
    }

    /**
     * Prueba para averiguar si de un producto especifico se puede comprar cierta cantidad de elementos.
     *
     * @return void
     */
    public function testVerificarExistenciaProducto()
    {
        $funciones=new Funciones(); 
        $this->assertTrue($funciones->verificarExistenciaProducto(1,5));
    }

    /**
     * Prueba para averiguar si un pedido existe.
     *
     * @return void
     */
    public function testVerificarExistePedido()
    {
        $funciones=new Funciones(); 
        $this->assertNotNull($funciones->verificarExistePedido(1));
    }

    /**
     * Prueba para sumar el subtotal de una coleccion.
     *
     * @return void
     */
    public function testCalcularTotal()
    {
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
        $funciones=new Funciones(); 
        $this->assertEquals(490,$funciones->calcularTotal($subtotalesCollection));   
    }
    
}
