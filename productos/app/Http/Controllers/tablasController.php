<?php

namespace Productos\Http\Controllers;

use Illuminate\Http\Request;

use Productos\Http\Requests;
use Productos\pedido;
use Productos\Diaria;
use Productos\deuda;
use Carbon\Carbon;

class tablasController extends Controller
{
    public function index(Request $request){
        $Product = pedido::orderBy('created_at', 'desc')->paginate(10);
        $Deuda = deuda::orderBy('created_at', 'desc')->paginate(10);

        return view('index',compact('Product','Deuda'));
    }
    public function daily(){
    	$Money = Diaria::orderBy('created_at', 'desc')->paginate(10);
    	return view('tablas.ganancia',compact('Money'));
    }
    public function pedido($id){
    	$Producto = pedido::find($id);
        $Money = Diaria::where('id_pedido', $id)->orderBy('created_at', 'ASC')->paginate(30);
    	return view('pages.pedido.detalle',compact('Producto','Money'));
    }
    public function deuda(){
        $Deuda = Deuda::orderBy('created_at', 'desc')->paginate(10); 
    	return view('content.deuda', compact('Deuda'));
    }
    public function show(){
        $date = Carbon::now();
        $date = $date->format('d-m-Y');
        return $date;
    }
    public function comming(){
        $Money = Diaria::orderBy('created_at', 'asc')->paginate(30);
        return view('comming', compact('Money'));
    }
    public function login(){
       
        return view('pages.login');
    }
}
