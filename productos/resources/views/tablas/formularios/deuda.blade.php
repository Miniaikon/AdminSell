<div class="form-inline">
	<div class="form-group">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		<label for="nombre_deuda" class="sr-only">Nombre del deudor</label>
		{!!Form::text('nombre_deuda', null, ['class'=>'form-control form-black', 'placeholder'=>'Ingrese aquí el nombre del deudor', 'id'=>'nombre_deuda'])!!}
	</div>
	<div class="form-group">
		<label for="monto_deuda" class="sr-only">Monto de la deuda</label>
		{!!Form::number('monto_deuda', 0, ['class'=>'form-control form-black', 'placeholder'=>'Monto de la deuda','id'=>'monto_deuda'])!!}
	</div>
	<button id="deudaA" class="btn btn-yellow">Agregar</button>
</div>