<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class viewTest extends TestCase
{
   
    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Catalogo
    */
    public function testVistaCatalogo(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/Catalogo');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Crear Cliente
    */
    public function testVistaCrearCliente(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/CrearCliente');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista EditarCliente
    */
    public function testVistaEditarCliente(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/EditarCliente');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista EditarCliente2
    */
    public function testVistaEditarCliente2(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/EditarCliente2/1');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

        /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista EditarCliente2 POST
    */
    public function testVistaEditarCliente2POST(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->call('POST', '/CrearCliente', [
            'nombres'=>'nombres',
            'apellidos'=>'apellidos',
            'nit'=>'77-7',
            'direnvio'=>'direnvio',
            'correo'=>'correo',
            'pass'=>'pass'
        ]);
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Eliminar Cliente
    */
    public function testVistaEliminarCliente(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/EliminarCliente');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Eliminar Cliente por ID
    */
    public function testVistaEliminarClienteID(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                //crear un cliente
        $cliente = new User();
        $cliente->name = 'ClienteX';
        $cliente->apellido = 'ApellidoClienteX';
        $cliente->nit = '333-3';
        $cliente->email = 'ClienteX@gmail.com';
        $cliente->password = 'PasswordX';
        $cliente->rol = '0';
        $cliente->save();
        //Act (Actuar)
        $llamaVista=$this->get('/EliminarCliente/'.$cliente->id.'');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        $cliente->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Crear Producto
    */
    public function testVistaCrearProducto(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/CrearProducto');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Editar
    */
    public function testVistaEditar(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/Editar');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Eliminar
    */
    public function testVistaEliminar(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/Eliminar');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    
    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista ListarProductos de Carrito de Compras
    */
    public function testVistaCarritoListarProductos(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '1';
        $usuario->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/Carrito/ListarProductos');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

}