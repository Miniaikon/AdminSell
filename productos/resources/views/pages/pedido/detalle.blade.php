@extends('layouts.templateTable')

@section('title')
{!!$Producto->nombre_producto!!}
@endsection

@section('header')

@include('components.graphics.detalle')

@endsection

@section('content')

<?php 
$duracion = 0;
$cantidad = 0;
$fecha = 0;
 ?>

@foreach($Money as $Moneys)
	<?php $duracion = $duracion + 1; ?>
	<?php $cantidad = $cantidad + $Moneys->ganancia; ?>
	<?php $fecha = $Moneys->created_at; ?>
@endforeach

<div class="panel panel-black">
	<div class="panel-heading">Detalle de Pedido</div>
	<div class="panel-body">
		<div class="col-md-6">
		<h3><b>Productos Solicitado:</b> <span class="label label-primary" style="text-transform: uppercase;">{!!$Producto->nombre_producto!!}</span></h3><hr>
		<h3><b>Cantidad Solicitada:</b> &nbsp;&nbsp;&nbsp;<span class="label label-success" style="text-transform: uppercase;">{!!$Producto->cantidad!!}</span></h3><hr>
		<h3><b>Fecha de Solicitud:</b>&nbsp;&nbsp;&nbsp;&nbsp; <span class="label label-default" style="text-transform: uppercase;">{!!date("D-d-M-Y",strtotime($Producto->created_at))!!}</span></h3><hr>
		<h3><b>Costo de Productos:</b>&nbsp; <span class="label label-info" style="text-transform: uppercase;">Bsf: {!!$Producto->costo_unitario!!}</span></h3><hr>
		<h3><b>Costo de Pedido:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="label label-warning" style="text-transform: uppercase;">Bsf: {!!number_format($Producto->costo_total, 2, ',', ' ')!!}</span></h3>
		</div>
		<div class="col-md-6">
			<h3><b>Duracion: </b> <span class="label label-success" style="text-transform: uppercase;">{!!$duracion!!} Dias</span></h3><hr>
			<h3><b>Cantidad Generada: </b> <span class="label label-success" style="text-transform: uppercase;">Bsf: {!!$cantidad!!}</span></h3><hr>
			<h3><b>Ganancia Generada: </b> <span class="label label-success" style="text-transform: uppercase;">Bsf: {!!$cantidad - $Producto->costo_total!!}</span></h3><hr>
			<h3><b>Fecha de Finaliacion: </b> <span class="label label-default" style="text-transform: uppercase;">{!!date("D-d-M-Y",strtotime($fecha))!!}</span></h3><hr>
			</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-black-anti">
			<div class="panel-heading"><span class="title">Ventas diarias hechas con el pedido de {!!$Producto->nombre_producto!!}</span></div>
			<div class="panel-table" style="overflow-y: scroll; height: 250px;">
				<table class="table table-hover table-altern">
					<tr class="thead">
						<th>Ganancia</th>
						<th>Fecha</th>
					</tr>
				@foreach($Money as $Moneys)
					<tr>
						<td>{{ number_format($Moneys->ganancia, 2, ',', ' ') }} Bsf</td>
						<td>{!!date("d",strtotime($Moneys->created_at))!!} de {!!date("M",strtotime($Moneys->created_at))!!}</td>
					</tr>
				@endforeach
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"><span class="title">Grafica de ventas diarias</span></div>
			<div class="panel-body">
				<div id="chartContainer" style="height: 210px; width: 100%;"></div>
			</div>
		</div>
	</div>
</div>
@endsection