<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;


class ProductosController extends Controller
{
    public function frutas(){

        $productos = Productos::whereRaw('id_categoria = 1')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();


        // $produc = Productos::join("unidades", "unidades.id", "=", "productos.id_unidad")
        //                         ->whereRaw('id_categoria = 1')
        //                         ->orderBy('nombre','asc')
        //                          ->get();

        return view('productos.frutas-y-verduras', compact('productos') );
    }

    public function abarrotes(){

        $productos = Productos::whereRaw('id_categoria = 2')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();


        // $produc = Productos::join("unidades", "unidades.id", "=", "productos.id_unidad")
        //                         ->whereRaw('id_categoria = 1')
        //                         ->orderBy('nombre','asc')
        //                          ->get();

        return view('productos.abarrote', compact('productos') );
    }

    public function lacteos(){

        $productos = Productos::whereRaw('id_categoria = 3')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();


        // $produc = Productos::join("unidades", "unidades.id", "=", "productos.id_unidad")
        //                         ->whereRaw('id_categoria = 1')
        //                         ->orderBy('nombre','asc')
        //                          ->get();

        return view('productos.lacteo-huevo', compact('productos') );
    }

    public function panaderia(){

        $productos = Productos::whereRaw('id_categoria = 4')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();


        // $produc = Productos::join("unidades", "unidades.id", "=", "productos.id_unidad")
        //                         ->whereRaw('id_categoria = 1')
        //                         ->orderBy('nombre','asc')
        //                          ->get();

        return view('productos.panaderia', compact('productos') );
    }

    public function carnes(){

        $productos = Productos::whereRaw('id_categoria = 5')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();


        // $produc = Productos::join("unidades", "unidades.id", "=", "productos.id_unidad")
        //                         ->whereRaw('id_categoria = 1')
        //                         ->orderBy('nombre','asc')
        //                          ->get();

        return view('productos.carnes', compact('productos') );
    }

    public function bebidas(){

        $productos = Productos::whereRaw('id_categoria = 6')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();


        // $produc = Productos::join("unidades", "unidades.id", "=", "productos.id_unidad")
        //                         ->whereRaw('id_categoria = 1')
        //                         ->orderBy('nombre','asc')
        //                          ->get();

        return view('productos.bebidas', compact('productos') );
    }

    public function despensa(){

        $productos = Productos::whereRaw('id_categoria = 7')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();

        return view('productos.despensa', compact('productos') );
    }

    public function hogar(){

        $productos = Productos::whereRaw('id_categoria = 8')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();

        return view('productos.aseo-hogar', compact('productos') );
    }

    public function personal(){

        $productos = Productos::whereRaw('id_categoria = 9')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();

        return view('productos.cuidado-personal', compact('productos') );
    }

    public function mascotas(){

        $productos = Productos::whereRaw('id_categoria = 10')
                                ->join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();

        return view('productos.mascota', compact('productos') );
    }

    public function info($productos){

        $producto = Productos::join("unidades", "unidades.id", "=", "productos.id_unidad")
                    ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                    "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                    "productos.precio_descuento")
                    ->find( $productos );
                        

        return view('productos.detail', compact('producto'));
    }

    //Principal (todos los productos)
    public function productos(){

        $productos = Productos::join("unidades", "unidades.id", "=", "productos.id_unidad")
                                ->select("productos.id", "productos.codigo", "productos.imagen", "productos.nombre", "unidades.unidad_corto", 
                                            "productos.cantidad", "productos.precio", "productos.stock_minimo", "productos.descripcion", "productos.descuento",
                                            "productos.precio_descuento")
                                ->get();

        return view('welcome', compact('productos') );
    }
    
}
