<?php

namespace Productos\Http\Controllers;

use Illuminate\Http\Request;

use Productos\Http\Requests;

class noteController extends Controller
{
    public function index()
    {
    	$Nota = \Productos\Nota::orderBy('created_at', 'desc')->paginate(5);
    	return view('nota.createNote',compact('Nota'));
    }
    public function store(Request $request)
    {

        if($request->ajax()){
            \Productos\Nota::create($request->all());
            return response()->json([
                "mensaje" => "creado"
            ]);
        }
    }

    public function show(){
        $Nota = \Productos\Nota::orderBy('created_at', 'desc')->paginate(5);
        return view('nota.tabla',compact('Nota'));
    }
    public function destroy($id)
    {
    	\Productos\Nota::destroy($id);
    	return response()->json();
    }
    
}
