<?php

namespace Productos\Http\Controllers;

use Illuminate\Http\Request;

use Productos\Http\Requests;
use Productos\Diaria;


class dailyController extends Controller
{
    public function store(Request $request){
    	$diaria = Diaria::create([
            'ganancia' => $request['ganancia'],
            'id_pedido' => $request['id_pedido']
        ]);
    	return redirect('/');
    }

    public function destroy($id){
    	Diaria::destroy($id);
    	return back()->withInput();
    }
}
