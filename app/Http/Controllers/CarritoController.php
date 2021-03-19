<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Cart;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
   public function add(Request $request){

    $producto = Productos::find($request->producto_id);
    
    Cart::ad(
        $producto->id,
        $producto->nombre,
        $producto->precio,
        1,
    );

    
    return redirect()->back()->with('success', 'your message,here'); 
    
   }
}
