<?php

namespace Productos\Http\Controllers;

use Illuminate\Http\Request;

use Productos\Http\Requests;
use Productos\pedido;
use \Productos\Productos;

class pedidoController extends Controller
{ 
    public function store(Request $request){
    	pedido::create([
    		'nombre_producto' => substr($request['nombre_producto'],1),
    		'cantidad' 		  => substr($request['cantidad'],1),
    		'costo_unitario'  => substr($request['costo_unitario'],1),
    		'costo_total'     => $request['costo_total'],
    	]);
        return redirect()->back();
    	
    }
    public function edit($id)
    {
        $Pd = Productos::find($id);
        return response()->json($Pd);
    }

    public function destroy($id){
    	pedido::destroy($id);
    	return back()->withInput();
    }
}
