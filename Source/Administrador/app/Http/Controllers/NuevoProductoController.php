<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Validator;
use Illuminate\Support\Facades\Redirect;
use File;

class NuevoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param integer $id
     * @return Response
     */


    public function index()
    {
			$marcas = DB::select("select nombre,id from marcas order by nombre");
			$categorias = DB::select("select nombre,id from categorias order by nombre");

    	
        return view('productos.nuevoproducto', ['title' => 'Home',
                                'page' => 'home','marcas' => $marcas, 'categorias' => $categorias,
                                'accion' => 0]
        );
    }
    
        public function guardar(Request $request)
    {

		#este validation valida que se haya cargado una imagen
		#Si la imagen se cargo entonces se ejecuta el codigo que sigue
		#Si la imagen no se cargo, o el archivo que se cargo no es una imagen
		#entonces el codigo siguiente no se ejecuta y se vuelve al formulario (se hace automaticamente
	

		$validator = Validator::make($request->all(), [
             
			'nombre' => 'required',			
			'precio' => 'required|numeric|min:0',
			'marca'  => 'required',
			'codigo' => 'required|unique:productos,codigo',
			'stock'  => 'required|integer|min:1',
			'imagen' => 'required|image'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
		

		#guardo el producto
		$id = DB::table('productos')->insertGetId(array('nombre' => ($request->nombre),'codigo' => ($request->codigo),'caracteristicas' => ($request->caracteristicas),
							'stock' => ($request->stock), 'marca' => ($request->marca), 'categoria' => ($request->categoria),
							'precio' => ($request->precio)));


		#se pasa la imagen a base64
		$file= $request->file('imagen');		
		$codificacion = base64_encode(file_get_contents($file));
		
		#se guarda la imagen en base64 en la BBDD
		DB::table('imagenes')->insert(array('id_producto' => $id, 'imagen_base64' => $codificacion));		
		
		$imagen2 = $request->file('imagen2');
		$imagen3 = $request->file('imagen3');
		$imagen4 = $request->file('imagen4');
			
		if ($imagen2 != null){
			$codificacion = base64_encode(file_get_contents($imagen2));
			DB::table('imagenes')->insert(array('id_producto' => $id, 'imagen_base64' => $codificacion));					
		}
		if ($imagen3 != null){
			$codificacion = base64_encode(file_get_contents($imagen3));
			DB::table('imagenes')->insert(array('id_producto' => $id, 'imagen_base64' => $codificacion));					
		}
		if ($imagen4 != null){
			$codificacion = base64_encode(file_get_contents($imagen4));
			DB::table('imagenes')->insert(array('id_producto' => $id, 'imagen_base64' => $codificacion));					
		}
		
		  $sql = "SELECT u.id, u.nombre, u.codigo, u.stock, u.marca, MIN(t.imagen_base64) AS imagen_base64,m.nombre as nombreMarca, c.nombre as nombreCategoria FROM productos u Left JOIN imagenes t ON t.id_producto = u.id 
		  Left JOIN marcas m ON m.id = u.marca
		  Left Join categorias c ON c.id= u.categoria 
		  where u.eliminado = 0
		  GROUP BY u.id;";

		  $productos = DB::select($sql);
		  $marcas = DB::select("select * from marcas");

        return view('productos.productos', ['title' => 'Home',
                                'page' => 'home','productos' => $productos,'marcas'=> $marcas, 'idMarca'=>0, 'nombre'=>'','codigo'=>'',
                                'accion' => 3]
        );
        
    }





}
