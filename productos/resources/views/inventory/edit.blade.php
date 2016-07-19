@extends('layouts.templateTable')

@section('title', 'Editar '.$Product->nombre_producto)

@section('content')

	<div class="row">
	<div class="col-md-8">
	<div class="panel panel-default" style="min-height:250px;">
	  <div class="panel-heading">Lista de productos</div>
	    <div class="panel-table">
	      <table class="table table-striped">
	      	<tr>
	      		<th>#</th>
	      		<th>Nombre del producto</th>
	      		<th>Costo del producto</th>
	      		<th><span class="glyphicon glyphicon-cog"></span></th>
	      	</tr>
	@foreach($Productos as $Producto)
	      	<tr>
	      		<td>{!!$Producto->id!!}</td>
	      		<td>{!!$Producto->nombre_producto!!}</td>
	      		<td><b>Bsf:</b> {!!$Producto->costo_producto!!}</td>
	      		<td><a href="inventory/{!!$Producto->id!!}/edit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-edit"></span></a></td>
	      	</tr>
	@endforeach
	</table>
	    </div>
	  </div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading">Agregar</div>
		  <div class="panel-body">
		    {!!Form::model($Product,['route'=>['inventory.update', $Product->id], 'method'=>'PUT'])!!}
		    	<div class="form-group">
		    		<label for="Producto">Nombre del porducto</label>
		    		{!!Form::text('nombre_producto', null,['class'=>'form-control','placeholder'=>'Ej: Jabón'])!!}
		    	</div>
		    	<div class="form-group">
		    		<label for="Costo">Costo del producto</label>
		    		{!!Form::number('costo_producto', null,['class'=>'form-control', 'required'])!!}
		    	</div>
		    	<div class="form-group">
		    		<button type="submit" class="pull-right btn btn-primary">Añadir</button>
		    	</div>
		    {!!Form::close()!!}
		  </div>
		</div>
	</div>

	</div>
@endsection