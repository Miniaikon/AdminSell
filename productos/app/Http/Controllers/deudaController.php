<?php

namespace Productos\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Farcades\Input;

use Productos\Http\Requests;
use Productos\Deuda;

class deudaController extends Controller
{
    public function store(Request $request)
    {
    	$Deuda = Deuda::create($request->all());
    	return response()->json();
    	
    }

    public function destroy($id)
    {
    	Deuda::destroy($id);
    	return redirect()->back();
    }

    public function edit($id)
    {
        $Deudas = Deuda::find($id);
        return response()->json($Deudas);
    }

     public function update(Request $request, $id)
     {
        if($request->ajax()){
        $Deuda = Deuda::find($id);
        $Deuda->fill([
            'abono_deuda' => $request['abonado'] + $request['abono_deuda'],
            ]);
        $Deuda->save();
        return response()->json();
     }
 }
}