<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Carrito;
use App\Carrito_Producto;
use App\Producto;
use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Hash;

class viewTest extends TestCase
{

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Carga Masiva
    */
    public function testCargaMasiva(){
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
        $llamaVista=$this->get('/cargamasiva');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }




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
    * devulve la vista CrearCliente2 POST
    */
    public function testVistaCrearClientePOST(){
        //Arrange (Preparar)
            //crear un usuario
        $usuario = new User();
        $usuario->name = 'NuevoX';
        $usuario->apellido = 'ApellidoX';
        $usuario->nit = '333-3';
        $usuario->email = 'nuevoX@gmail.com';
        $usuario->password = 'PasswordX';
        $usuario->rol = '0';
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
        $usuario=User::where('email','nuevoX@gmail.com')->first();
        $usuario->delete();
        $usuario=User::where('email','correo')->first();
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
                //Crear Cliente
        $cliente = new User();
        $cliente->name = 'ClienteX';
        $cliente->apellido = 'ApellidoClienteX';
        $cliente->nit = '333-3';
        $cliente->email = 'ClienteX@gmail.com';
        $cliente->password = 'PasswordX';
        $cliente->rol = '0';
        $cliente->save();
                //Establecer respuesta correcta
        $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/EditarCliente2/'.$cliente->id);
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        $cliente->delete();
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
                    //Crear Cliente
            $cliente = new User();
            $cliente->name = 'ClienteX';
            $cliente->apellido = 'ApellidoClienteX';
            $cliente->nit = '333-3';
            $cliente->email = 'ClienteX@gmail.com';
            $cliente->password = 'PasswordX';
            $cliente->rol = '0';
            $cliente->save();
                    //Establecer respuesta correcta
            $RescpuestaCorrecta=200; //Codigo HTTP de respuesta correcta
                    
            //Act (Actuar)
            
            $llamaVista=$this->call('POST', '/EditarCliente2/'.$cliente->id, [
                'nombres'=>'nombres',
                'apellidos'=>'apellidos',
                'nit'=>'77-7',
                'direnvio'=>'direnvio',
                'correo'=>'correo',
                'pass'=>'pass'
            ]);
            $respuestaFuncion=$llamaVista->getStatusCode();
            $usuario->delete();
            $usuario=User::where('email','nuevoX@gmail.com')->first();
            $cliente->delete();
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
    * devulve la vista PerfilProducto
    */
    public function testPerfilProducto(){
        //Arrange (Preparar)
            //crear un usuario
        $prod = new Producto();
        $prod->nombre = 'ProductoXlp';
        $prod->descripcion='Producto de Prueba'; 
        $prod->cantidad_disponible='100';
        $prod->ruta_imagen='Db.jpg';
        $prod->precio = '150';
        $prod->save();
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
        $llamaVista=$this->get('/PerfilProducto/'.$prod->id_producto);
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        $prod->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista EnviosAdmin
    */
    public function testEnviosAdmin(){
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
        $llamaVista=$this->get('/EnviosAdmin');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Admin
    */
    public function testAdmin(){
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
        $llamaVista=$this->get('/Admin');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }


    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Proveedor Producto
    */
    public function testProveedorProducto(){
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
        $RescpuestaCorrecta=302; //Codigo HTTP de respuesta correcta
        $prod = new Producto();
        $prod->nombre = 'ProductoXlp';
        $prod->descripcion='Producto de Prueba'; 
        $prod->cantidad_disponible='100';
        $prod->ruta_imagen='Db.jpg';
        $prod->precio = '150';
        $prod->save();

        //Act (Actuar)
        $llamaVista=$this->get('/ProveedorProducto');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        $prod->delete();
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }


    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Proveedor Producto
    */
    public function testProveedorProductofinalizar(){
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
        $RescpuestaCorrecta=302; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/ProveedorProducto/finalizar');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }



    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Carrito/FinalizarCompra
    */
    public function testCarritoFinalizarCompra(){
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
        $carrito = new Carrito();
        $carrito->id_user = $usuario->id;
        $carrito->save();
                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=302; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('Carrito/FinalizarCompra');
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
        $usuario->email = 'n@gmail.com';
        $usuario->password = Hash::make('PasswordX');
        $usuario->rol = '0';
        $usuario->no_items = '0';
        $usuario->direccion_envio='Ciudad';
        $usuario->save();
        $carrito = new Carrito();
        $carrito->id_user = $usuario->id;
        $carrito->save();
        $prod = new Producto();
        $prod->nombre = 'ProductoXlp';
        $prod->descripcion='Producto de Prueba'; 
        $prod->cantidad_disponible='100';
        $prod->ruta_imagen='Db.jpg';
        $prod->precio = '150';
        $prod->save();
        $carProd=new Carrito_Producto();
        $carProd->id_carrito=$carrito->id_carrito;
        $carProd->nombre_producto=$prod->nombre;
        $carProd->ruta_imagen=$prod->ruta_imagen;
        $carProd->cantidad=5;
        $carProd->precio=$prod->precio;
        $carProd->subtotal=$carProd->cantidad*$prod->precio;
        $carProd->id_producto=$prod->id_producto;
        $carProd->save();
        $usuario->no_items=5;
        $usuario->save();

                //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=302; //Codigo HTTP de respuesta correcta

        //Act (Actuar)
        $llamaVista=$this->get('/Carrito/ListarProductos');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $carProd->delete();
        $prod->delete();
        $carrito->delete();
        $usuario->delete();

        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista carrito Vaciar
    */
    public function testVistaCarritoVaciar(){
        //Arrange (Preparar)
            //crear un usuario
            $usuario = new User();
            $usuario->name = 'NuevoX';
            $usuario->apellido = 'ApellidoX';
            $usuario->nit = '333-3';
            $usuario->email = 'nuevolpX@gmail.com';
            $usuario->password = 'PasswordX';
            $usuario->rol = '0';
            $usuario->no_items = '0';
            $usuario->direccion_envio='Ciudad';
            $usuario->save();
            $carrito = new Carrito();
            $carrito->id_user = $usuario->id;
            $carrito->save();
                    //autenticarse
                $response = $this->call('POST', '/login', [
                    'email' => $usuario->email,
                    'password' => $usuario->password,
                    '_token' => csrf_token()
                ]);
                //Establecer respuesta correcta
        $RescpuestaCorrecta=302; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/Carrito/Vaciar');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        $carrito->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }

/**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista /
    */
    public function testVistaInicio(){
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
            $RescpuestaCorrecta=302; //Codigo HTTP de respuesta correcta
                    
            //Act (Actuar)
            $llamaVista=$this->get('/');
            $respuestaFuncion=$llamaVista->getStatusCode();
            $usuario->delete();
            
            //Assert (Afirmar)
            $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
        }
       /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Carga Masiva
    */


    /**Evaluar la respuesta del metodo del controlador que 
    * devulve la vista Home
    */
    public function testHome(){
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
        $RescpuestaCorrecta=302; //Codigo HTTP de respuesta correcta
                
        //Act (Actuar)
        $llamaVista=$this->get('/home');
        $respuestaFuncion=$llamaVista->getStatusCode();
        $usuario->delete();
        
        //Assert (Afirmar)
        $this->assertEquals($RescpuestaCorrecta,$respuestaFuncion);
    }
    




}