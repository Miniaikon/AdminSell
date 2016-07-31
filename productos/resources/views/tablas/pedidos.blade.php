<table class="table table-hover table-altern">
	<tr class="thead">
		<th>Producto</th>
		<th>Cantidad</th>
		<th>Costo</th>
		<th>Total</th>
		<th>Fecha</th>
		<th><span class="glyphicon glyphicon-cog"></span></th>
	</tr>
@foreach($Product as $Producto)
	<tr>
		<td style="text-transform: uppercase;" id="producto">
			{!!$Producto->nombre_producto!!}</td>
		<td>{!!$Producto->cantidad!!} litros</td>
		<td><b>Bsf </b>{!!$Producto->costo_unitario!!}</td>
		<td><b>Bsf </b>{!!number_format($Producto->costo_total, 2, ',', ' ')!!}</td>
		<td>{!!date("d",strtotime($Producto->created_at))!!} de {!!date("M", strtotime($Producto->created_at))!!}</td>
		<td>{!!Form::open(['route'=>['pedido.destroy', $Producto->id], 'method'=>'DELETE'])!!}
			<div class="btn-group-sm btn-group">
				<a href="pedidos/{!!$Producto->id!!}/detalle" class="btn btn-yellow"><span id="idProducto" class="fa fa-eye"></span></a>
				<button class="btn btn-red"><span class="glyphicon glyphicon-remove"></span></button>
			</div>
		{!!Form::close()!!}</td>
	</tr>
@endforeach
</table> 