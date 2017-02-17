<!-- Modal ganancia -->
<div class="modal fade 2" tabindex="-1" style="color: black;" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title" id="gridSystemModalLabel">Venta de hoy</h4>
			</div>
			<div class="modal-body">
				<?php $ped = 0 ?>
				<?php $pedid = \Productos\pedido::orderBy('created_at', 'desc')->paginate(1) ?>
				{!!Form::open(['route'=>'daily.store', 'method'=>'post'])!!}
				<div class="form-group">
					<label for="ganancia">Generado</label>
					{!!Form::number('ganancia', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la cantidad ganada hoy'])!!}
				</div>
				@foreach($pedid as $pedido)
					<?php $ped = $pedido->id ?>
					{!!Form::hidden('id_pedido', $pedido->id)!!}
				@endforeach
				<button type="submit" class="btn btn-primary">Agregar</button>
				{!!Form::close()!!}
			</div>
		</div>
	</div>
</div>
{!!$Money = \Productos\Diaria::orderBy('created_at', 'desc')->where('id_pedido', $ped)->paginate(10) !!}

<table class="table table-hover table-altern">
	<tr class="thead">
		<th>Ganancia</th>
		<th>Fecha</th>
		<th><span class="glyphicon glyphicon-cog"></span></th>
	</tr>
	<?php $generado = 0 ?>
@foreach($Money as $Moneys)
	<tr>
		<td>{{ number_format($Moneys->ganancia, 2, ',', ' ') }} Bsf</td>
		<td>{!!date("d",strtotime($Moneys->created_at))!!} de {!!date("M",strtotime($Moneys->created_at))!!}</td>
		<td>
			{!!Form::open(['route'=>['daily.destroy', $Moneys->id], 'method'=>'DELETE'])!!}
				<button type="button" data-trigger="focus" class="btn btn-red" title="¿Seguro?" data-container="body" data-toggle="popover" data-placement="right" data-content="<button class='btn btn-default btn-sm'><span class='glyphicon glyphicon-ok' style='font-size:24px; color:green;'></span></button>
				<button class='btn btn-default btn-sm'><span class='glyphicon glyphicon-remove' style='font-size:24px; color:red;'></span></button>">
			  <span class='glyphicon glyphicon-remove'></span>
			</button>
			{!!Form::close()!!}
		</td>
	</tr>
	<?php $generado = $generado + $Moneys->ganancia ?>
@endforeach
</table>
</div>
<div class="panel-body">
	<button type="button" class="btn btn-blue btn-sm pull-right" data-toggle="modal" data-target=".2">Actualizar</button>
</div>
<div class="panel-footer">
<b>Total Generado: </b> {!!$generado!!}
