<table class="table table-hover table-altern"lass="table" border="1">
	<tr class="thead">
		<th>Nombre</th>
		<th>Deuda</th>
		<th>Abono</th>
		<th>Fecha</th>
		<th><span class="glyphicon glyphicon-cog"></span></th>
	</tr>
	<?php $deben = 0; $abono = 0; ?>
@foreach($Deuda as $Deudas)
<?php $deben = $deben + $Deudas->monto_deuda; $abono = $abono + $Deudas->abono_deuda;?>
	@if($Deudas->abono_deuda >= $Deudas->monto_deuda)
	@else
	<tr>
		<td style="text-transform: uppercase;">{!!$Deudas->nombre_deuda!!}</td>
		<td>Bsf {!!number_format($Deudas->monto_deuda, 2, ',', '.')!!}</td>
		<td>Bsf {!!number_format($Deudas->abono_deuda, 2, ',', '.')!!}</td>
		<td>{!!$Deudas->created_at!!}</td>
		<td>
		<div class="col-md-6">
			<button value="{!!$Deudas->id!!}" class="btn btn-orange btn-sm" data-toggle="modal" data-target="#myModal" OnClick="Mostrar(this);"><span class="glyphicon glyphicon-piggy-bank"></span></button>
		</div>
		<div class="col-md-6">
			<input type="hidden" id="clearIdB" value="{!!$Deudas->id!!}">
			<button  class="btn btn-red btn-sm" id="deudaB"><span class="glyphicon glyphicon-remove"></span></button>
		</div>
	</tr>
	@endif
@endforeach
</table>