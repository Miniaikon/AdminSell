<?php

namespace Productos\Http\Controllers;

use Illuminate\Http\Request;

use Productos\Http\Requests;
use Productos\pedido;
use \Productos\Productos;

class pedidoController extends Controller
{ 
    public function store(Request $request){
        $Pd = Productos::orderBy('id', 'asc')->where('nombre_producto', $request['nombre_producto'])->get();
        foreach ($Pd as $P) {
            $costo = $P->costo_producto;
        };
    	$diaria = pedido::create([
    		'nombre_producto' => $request['nombre_producto'],
    		'cantidad' 		  => $request['cantidad'],
    		'costo_unitario'  => $costo,
    		'costo_total'     => $costo * $request['cantidad'],
    	]);
        return redirect()->back();
    	
    }
    public function edit(Request $request, $id)
    {
        $Pd = Productos::find($id);
        return response()->json();
    }

    public function destroy($id){
    	pedido::destroy($id);
    	return back()->withInput();
    }
}
