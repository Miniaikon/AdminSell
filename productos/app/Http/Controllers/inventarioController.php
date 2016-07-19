<?php

namespace Productos\Http\Controllers;

use Illuminate\Http\Request;
use Productos\Productos;

use Productos\Http\Requests;

class inventarioController extends Controller
{
    public function index()
    {
    	$Productos = Productos::OrderBy('id', 'asc')->get();
    	return view('inventory.productos', compact('Productos'));
    }
    public function store(Request $request)
    {
    	Productos::create($request->all());
    	return redirect('/inventory');
    }
    public function edit($id)
    {
        $Product = Productos::find($id);
        $Productos = Productos::OrderBy('id', 'asc')->get();
        return view('inventory.edit', compact('Product','Productos'));
    }
    public function update(Request $request, $id)
     {
        $Producto = Productos::find($id);
        $Producto->fill($request->all());
        $Producto->save();
        return redirect('/inventory');
     }
}
