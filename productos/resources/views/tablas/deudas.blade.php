<table class="table table-hover table-altern" class="table" border="1">
	<thead>
	<tr class="thead">
		<th>Nombre</th>
		<th>Deuda</th>
		<th>Abono</th>
		<th>Fecha</th>
		<th><span class="glyphicon glyphicon-cog"></span></th>
	</tr>
	</thead>
	
	<?php $deben = 0; $abono = 0; ?>
@foreach($Deuda as $Deudas)
<?php $deben = $deben + $Deudas->monto_deuda; $abono = $abono + $Deudas->abono_deuda;?>
	@if($Deudas->abono_deuda >= $Deudas->monto_deuda)
	@else
	<tbody id="deuda">
		<tr id="{{ $Deudas->id }}">
			<td style="text-transform: uppercase;">{!!$Deudas->nombre_deuda!!}</td>
			<td>Bsf {!!$Deudas->monto_deuda!!}</td>
			<td>Bsf {!!$Deudas->abono_deuda!!}</td>
			<td>{!!$Deudas->created_at!!}</td>
			<td>
				<button value="{!!$Deudas->id!!}" class="btn btn-orange btn-sm" data-toggle="modal" data-target="#myModal" OnClick="Mostrar(this);">
					<span class="glyphicon glyphicon-piggy-bank"></span>
				</button>
				<!-- <a href="{{ route('deuda.destroy', $Deudas->id) }}" class="btn btn-red btn-sm"><span class="glyphicon glyphicon-remove"></span></a> -->
				<input type="hidden" id="clearIdD{{ $Deudas->id }}" value="{{ $Deudas->id }}">
				<button id="deudaRem" class="btn btn-red btn-sm"><span class="glyphicon glyphicon-remove"></span></button>
			</td>
		</tr>

</tbody>
	@endif
@endforeach
</table>
</div>
<div class="panel-body">
	<button type="button" class="btn btn-blue btn-sm pull-right" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Nueva deuda</button>
	<div class="col-md-12">
	<div class="collapse" id="collapseExample">
	<div class="recuadro">
    @include('tablas.formularios.deuda')
    </div>
    </div>
</div>
</div>
<div class="panel-footer">
<b>Total deuda: </b> {!!$deben - $abono!!} Bsf